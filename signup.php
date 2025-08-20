<?php
 require_once('inc/function.php');


 $commonCss = '<link rel="stylesheet" href="./css/common.css">';
 $signupCss = '<link rel="stylesheet" href="./css/signup.css">';
 $commonJs = '<script src=./>js/common.js"></script>';
 $signupJs= '<script src="./js/signup.js"></script>';
 
 subpageView('signup','회원가입', $commonCss, $signupCss,'', $commonJs, $signupJs, '');
?>