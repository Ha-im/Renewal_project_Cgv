<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // 홈으로 리디렉션
?>