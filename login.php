<?php
 require_once('inc/function.php');


 $commonCss = '<link rel="stylesheet" href="./css/common.css">';
 $loginCss = '<link rel="stylesheet" href="./css/login.css">';
 $commonJs = '<script src="./js/common.js"></script>';
 $loginJs= '<script src="./js/login.js"></script>';
 
 view('login','로그인', $commonCss, $loginCss,'', $commonJs, $loginJs, '');
?>