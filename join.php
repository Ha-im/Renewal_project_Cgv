<?php
require_once('inc/db.php');
// POST로 데이터 받기
$username = $_POST['username'];
$userid = $_POST['userid'];
$password = $_POST['password'];
$passwordok = $_POST['passwordok'];
$email = $_POST['email'];

// POST로 데이터 받기
$username = $_POST['username'];
$userid = $_POST['userid'];
$password = $_POST['password'];
$passwordok = $_POST['passwordok'];
$email = $_POST['email'];

// 1. 비밀번호 일치 검사
if ($password !== $passwordok) {
  echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
  exit;
}

// 2. 비밀번호 암호화
$hashedPw = password_hash($password, PASSWORD_DEFAULT);

// 3. DB에 저장
$sql = "INSERT INTO signup_board (username, userid, password, email)
        VALUES ('$username', '$userid', '$hashedPw', '$email')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('회원가입 완료 >_<'); location.href='login.php';</script>";
} else {
  echo "오류: " . mysqli_error($conn);
}

mysqli_close($conn);

?>