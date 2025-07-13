<?php
session_start();

// 관리자 체크
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    echo "<script>alert('관리자만 접근 가능합니다.'); history.back();</script>";
    exit;
}

// POST 데이터 받기
$id = $_POST['id'] ?? null;
$number = $_POST['number'] ?? '';
$title = $_POST['title'] ?? '';
$subtitle = $_POST['subtitle'] ?? '';
$description = $_POST['description'] ?? '';
$rating = (int)($_POST['rating'] ?? 0);
$poster = $_POST['poster'] ?? '';
$bg = $_POST['bg'] ?? '';

// JSON 파일 경로
$jsonFile = __DIR__ . '/json/rank.json';

if (!$id) {
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
    exit;
}

// 기존 JSON 읽기
if (file_exists($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    $jsonData = json_decode($jsonContent, true);
    $movies = $jsonData['movies'] ?? [];
} else {
    $movies = [];
}

// 수정할 영화 인덱스 찾기 (id 기반)
$found = false;
foreach ($movies as &$movie) {
    if ((string)$movie['id'] === (string)$id) {
        $movie['number'] = $number;
        $movie['title'] = $title;
        $movie['subtitle'] = $subtitle;
        $movie['description'] = $description;
        $movie['rating'] = $rating;
        $movie['poster'] = $poster;
        $movie['bg'] = $bg;
        $found = true;
        break;
    }
}
unset($movie);

if (!$found) {
    echo "<script>alert('해당 영화를 찾을 수 없습니다.'); history.back();</script>";
    exit;
}

// JSON 다시 저장
$jsonData['movies'] = $movies;
$newJsonContent = json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents($jsonFile, $newJsonContent);

// 완료 후 관리자 페이지로 리다이렉트
header("Location: admin.php");
exit;