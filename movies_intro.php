<?php
 require_once('inc/function.php');
    

//함수의 원본

//   function subpageView($name,$model, $css1 = null, $css2= null, $css3= null, $script1= null, $script2= null, $script3= null){
//     require_once("view/subpage_layout.view.php");
//   }

// movies_intro.html에서 사용중인 css 목록
    // <link rel="stylesheet" href="css/common.css">
    // <link rel="stylesheet" href="css/movies_intro.css">
    // <link rel="stylesheet" href="css/footer.css">

// movies_intro.html에서 사용중인 js목록
    // <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    // <script src="./js/common.js"></script>


 $commonCss = '<link rel="stylesheet" href="css/common.css">';
 $moviesIntroCss = '<link rel="stylesheet" href="css/movies_intro.css">';
 $footerCss = '<link rel="stylesheet" href="css/footer.css">';
 $commonJs = '<script src="js/common.js"></script>';
 $movie_introJs = '<script src="js/movies_intro.js"></script>';


 subpageView('movies_intro','깊이 빠져 보다,CGV | 영화 소개', $commonCss, $moviesIntroCss, $footerCss, $commonJs, $movie_introJs);

echo "제대로 들어왔어요";
?>