<?php
session_start(); // 세션 시작
require_once('inc/db.php');

// POST 값 받기
$userid = $_POST['userid'];
$password = $_POST['password'];

// 유효성 검사
if (empty($userid) || empty($password)) {
    echo "<script>alert('아이디와 비밀번호를 모두 입력해주세요.'); history.back();</script>";
    exit;
}

// DB에서 사용자 조회
$userid = mysqli_real_escape_string($conn, $userid);
$sql = "SELECT * FROM signup_board WHERE userid = '$userid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    // 비밀번호 확인
    if (password_verify($password, $row['password'])) {
        // 로그인 성공 -> 세션 저장
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['username'] = $row['username'];

        // index.php로 이동
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
        exit;
    }
} else {
    echo "<script>alert('존재하지 않는 아이디입니다.'); history.back();</script>";
    exit;
}

mysqli_close($conn);
?>