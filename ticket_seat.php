<?php




// html코드를 삽입하고...

require_once('inc/function.php');

 $commonCss = '<link rel="stylesheet" href="./css/common.css">';
 $ticketCss = '<link rel="stylesheet" href="./css/ticket_seat.css">';
 $commonJs = '<script src=./js/common.js></script>';
 $ticketJs= '<script src="./js/ticket_seat.js"></script>';
 
 subpageView('ticket_seat','영화예매', $commonCss, $ticketCss,'', $commonJs, $ticketJs, '');

?>