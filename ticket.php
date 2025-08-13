<?php




// html코드를 삽입하고...

require_once('inc/function.php');

 $commonCss = '<link rel="stylesheet" href="./css/common.css">';
 $ticketCss = '<link rel="stylesheet" href="./css/ticket.css">';
 $commonJs = '<script src=./js/common.js></script>';
 $ticketJs= '<script src="./js/ticket.js"></script>';
 
 subpageView('ticket','영화예매', $commonCss, $ticketCss,'', $commonJs, $ticketJs, '');

?>