<?php
  function view($name,$model, $css1 = null, $css2= null, $css3= null, $script1= null, $script2= null, $script3= null){

    require_once("view/layout.view.php");
  }

  function subpageView($name,$model, $css1 = null, $css2= null, $css3= null, $script1= null, $script2= null, $script3= null){

    require_once("view/subpage_layout.view.php");
  }

?>

