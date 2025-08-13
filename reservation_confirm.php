<?php




// html코드를 삽입하고...

require_once('inc/function.php');

 $commonCss = '<link rel="stylesheet" href="./css/common.css">';
 $reservation_confirmCss = '<link rel="stylesheet" href="./css/reservation_confirm.css">';
 $commonJs = '<script src=./js/common.js></script>';
 $reservation_confirmJs= '<script src="./js/reservation_confirm.js"></script>';
 
 subpageView('reservation_confirm','영화예매', $commonCss, $reservation_confirmCss,'', $commonJs, $reservation_confirmJs, '');

?>