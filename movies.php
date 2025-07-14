<?php
 require_once('inc/function.php');
    

//함수의 원본

//   function subpageView($name,$model, $css1 = null, $css2= null, $css3= null, $script1= null, $script2= null, $script3= null){
//     require_once("view/subpage_layout.view.php");
//   }

// movies.html에서 사용중인 css 목록
//   <link rel="stylesheet" href="css/common.css">
//   <link rel="stylesheet" href="css/movies.css">
//   <link rel="stylesheet" href="css/footer.css">

// movies.html에서 사용중인 js목록
//  <script src="/js/common.js"></script>


 $commonCss = '<link rel="stylesheet" href="css/common.css">';
 $moviesCss = '<link rel="stylesheet" href="css/movies.css">';
 $footerCss = '<link rel="stylesheet" href="css/footer.css">';
 $commonJs = '<script src="js/common.js"></script>';
 $movies = '<script src="js/movies.js"></script>';


 subpageView('movies','깊이 빠져 보다,CGV | 영화 목록', $commonCss, $moviesCss, $footerCss, $commonJs, $movies);

// echo "제대로 들어왔어요";
?>