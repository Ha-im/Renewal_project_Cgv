<?php
session_start();

// 로그인 안했거나 관리자가 아니면 접근 금지
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    echo "<script>alert('관리자만 접근 가능합니다.'); history.back();</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 페이지</title>
</head>
<body>

<h1>관리자 전용 페이지</h1>
<p><?php echo $_SESSION['username']; ?>님 환영합니다.</p>
</body>
</html>
