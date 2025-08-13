<?php
  require_once('inc/function.php');

  $commonCss = '<link rel="stylesheet" href="css/common.css">';
  $mainCss = '<link rel="stylesheet" href="css/main.css">';
  $footerCss = '<link rel="stylesheet" href="css/footer.css">';
  $commonJs = '<script src="./js/common.js"></script>';
  $mainJs= '<script src="./js/main.js"></script>';
  
  view('index','깊이 빠져 보다, CGV', $commonCss, $mainCss, $footerCss, $commonJs, $mainJs, '');
  
?>