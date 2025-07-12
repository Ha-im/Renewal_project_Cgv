<?php




// html코드를 삽입하고...

require_once('inc/function.php');

 $commonCss = '<link rel="stylesheet" href="./css/common.css">';
 $signupCss = '<link rel="stylesheet" href="./css/signup.css">';
 $commonJs = '<script src=./>js/common.js"></script>';
 $signupJs= '<script src="./js/signup.js"></script>';
 
 subpageView('ticket','영화예매', $commonCss, $signupCss,'', $commonJs, $signupJs, '');

?>