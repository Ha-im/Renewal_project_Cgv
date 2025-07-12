<?php
 require_once('inc/function.php');


 $commonCss = '<link rel="stylesheet" href="./css/common.css">';
 $moviesCss = '<link rel="stylesheet" href="css/movies.css">';
 $footerCss = '<link rel="stylesheet" href="css/footer.css">';
 $commonJs = '<script src=./>js/common.js"></script>';
 $signupJs= '<script src="./js/signup.js"></script>';
 
    // <link rel="stylesheet" href="css/common.css">
    // <link rel="stylesheet" href="css/movies.css">
    // <link rel="stylesheet" href="css/footer.css">



 subpageView('movies','깊이 빠져 보다,CGV | 영화 목록', $commonCss, $moviesCss, $footerCss, $commonJs, $signupJs, '');
?>