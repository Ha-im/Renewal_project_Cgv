<?php
require_once('inc/db.php');
session_start(); // 세션 시작
$isLoggedIn = isset($_SESSION['userid']);
$username = $isLoggedIn ? $_SESSION['username'] : null;

?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow"> <!-- 검색엔진 크롤링 허용 -->
  <meta name="description" content="Experience the Revamped CGV">
  <meta name="keywords" content="예매, 영화, 상영, 영상">
  <meta name="author" content="삼돌이팀">
  <!-- Open Graph protocol -->
  <meta property="og:url" content="" /> <!-- 배포 후 URL 입력 예정 -->
  <meta property="og:type" content="website" /> <!-- 타입 : 웹사이트 -->
  <meta property="og:title" content="CGV Revamp" /> <!-- 웹페이지의 제목(title)을 sns에 표시할 때 사용 -->
  <meta property="og:description" content="Experience the Revamped CGV" /> <!-- 웹페이지의 설명(요약) 새롭게 바뀐 CGV를 경험해보세요  -->
  <meta property="og:image" content="images/header_logo.png" /> <!-- 대표 이미지 -->
  <title><?= $model; ?></title>
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="./images/login/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./images/login/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./images/login/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./images/login/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./images/login/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./images/login/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./images/login/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./images/login/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./images/login/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./images/login/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/login/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./images/login/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/login/favicon/favicon-16x16.png">
  <link rel="manifest" href="./images/login/favicon/manifest.json">
  <!-- swiper.js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- fonts.google.com icon -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward_ios" />
  <!-- fullpage -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.36/fullpage.min.css"
    integrity="sha512-zEsr0FaQkbCw1KMhC6NZDSJs7N1li8k7bYI/FmZyiny2e+MzqJlxsisACg5BWkH/7E76+O8waOsQbF5/CDFRVw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- fontassom -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <?= $css1 ?>
  <?= $css2 ?>
  <?= $css3 ?>



</head>

<body>
  <!-- 영태 -header- -->
    <header>

    <h1 class="logo">
      <a href="index.html">
        <span>CGV</span>
        <img src="images/header_logo.png" alt="CGV메인로고">
      </a>
    </h1>

    <nav class="menu">
      <button class="res_menu_close_btn">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
          <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
        </svg>
      </button>
      <ul class="gnb">
        <li class="on">
          <a href="movies.php">영화</a>
          <ul class="lnb">
            <li><a href="movies.php">영화순위</a></li>
            <li><a href="#">아트하우스</a></li>
          </ul>
        </li>
        <li>
          <a href="#">극장</a>
          <ul class="lnb">
            <li><a href="#">CGV극장</a></li>
            <li><a href="#">특별관</a></li>
          </ul>
        </li>
        <li>
          <a href="#">예매</a>
          <ul class="lnb">
            <li><a href="#">빠른예매</a></li>
          </ul>
        </li>
        <li>
          <a href="#">스토어</a>
          <ul class="lnb">
            <li><a href="#">패키지</a></li>
            <li><a href="#">영화 기프트</a></li>
            <li><a href="#">먹거리</a></li>
            <li><a href="#">씨네샵</a></li>
          </ul>
        </li>
        <li>
          <a href="#">이벤트 혜택</a>
          <ul class="lnb">
            <li><a href="#">이벤트</a></li>
            <li><a href="#">특별 기획전</a></li>
            <li><a href="#">영화/예매 할인</a></li>
            <li><a href="#">멤버쉽 혜택</a></li>
            <li><a href="#">제휴/할인</a></li>
          </ul>
        </li>
      </ul>
      <button class="res_login_btn">로그인</button>
    </nav>

    <div class="user_menu">
      <ul>
        <li>
        <?php if ($isLoggedIn): ?>
            <!-- 로그인 상태일 때 (교체된 아이콘 + 로그아웃 링크 등) -->
            <a href="logout.php" title="로그아웃">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/>
              </svg>
            </a>
          <?php else: ?>
            <!-- 로그아웃 상태일 때 (기존 유저 아이콘 + 로그인 링크) -->
            <a href="login.php" title="로그인">
              <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF">
                <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z" />
              </svg>
            </a>
          <?php endif; ?>
        </li>
        <li>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF">
              <path
                d="M479.79-312q15.21 0 25.71-10.29t10.5-25.5q0-15.21-10.29-25.71t-25.5-10.5q-15.21 0-25.71 10.29t-10.5 25.5q0 15.21 10.29 25.71t25.5 10.5Zm0-132q15.21 0 25.71-10.29t10.5-25.5q0-15.21-10.29-25.71t-25.5-10.5q-15.21 0-25.71 10.29t-10.5 25.5q0 15.21 10.29 25.71t25.5 10.5Zm0-132q15.21 0 25.71-10.29t10.5-25.5q0-15.21-10.29-25.71t-25.5-10.5q-15.21 0-25.71 10.29t-10.5 25.5q0 15.21 10.29 25.71t25.5 10.5ZM792-192H168q-29.7 0-50.85-21.15Q96-234.3 96-264v-144q29.7 0 50.85-21.21 21.15-21.21 21.15-51t-21.15-50.94Q125.7-552.3 96-552.3v-144q0-29.7 21.15-50.7 21.15-21 50.85-21h624q29.7 0 50.85 21.15Q864-725.7 864-696v144q-29.7 0-50.85 21.21-21.15 21.21-21.15 51t21.15 50.94Q834.3-407.7 864-407.7v144q0 29.7-21.15 50.7-21.15 21-50.85 21Z" />
            </svg>
          </a>
        </li>
        <li class="lang_menu">
          <!-- 피드백에 대한 내용 이해 부족.. -->
          <button aria-haspopup="true" aria-expanded="false" aria-controls="lang_list">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF">
              <path
                d="M480-96q-79 0-149-30t-122.5-82.5Q156-261 126-331T96-480q0-80 30-149.5t82.5-122Q261-804 331-834t149-30q80 0 149.5 30t122 82.5Q804-699 834-629.5T864-480q0 79-30 149t-82.5 122.5Q699-156 629.5-126T480-96Zm0-75q17-17 34-63.5T540-336H420q9 55 26 101.5t34 63.5Zm-91-10q-14-30-24.5-69T347-336H204q29 57 77 97.5T389-181Zm182 0q60-17 108-57.5t77-97.5H613q-7 47-17.5 86T571-181ZM177-408h161q-2-19-2.5-37.5T335-482q0-18 .5-35.5T338-552H177q-5 19-7 36.5t-2 35.5q0 18 2 35.5t7 36.5Zm234 0h138q2-20 2.5-37.5t.5-34.5q0-17-.5-35t-2.5-37H411q-2 19-2.5 37t-.5 35q0 17 .5 35t2.5 37Zm211 0h161q5-19 7-36.5t2-35.5q0-18-2-36t-7-36H622q2 19 2.5 37.5t.5 36.5q0 18-.5 35.5T622-408Zm-9-216h143q-29-57-77-97.5T571-779q14 30 24.5 69t17.5 86Zm-193 0h120q-9-55-26-101.5T480-789q-17 17-34 63.5T420-624Zm-216 0h143q7-47 17.5-86t24.5-69q-60 17-108 57.5T204-624Z" />
            </svg>
          </button>
          <ul id="lang_list" class="lang_box">
            <li><a href="?lang=ko">KOR</a></li>
            <li><a href="?lang=en">ENG</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- responsive menu_btn -->
    <button class="res_menu_btn">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
      </svg>
    </button>
    <button class="gnb_toggle">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
      </svg>
    </button>
  </header>
  <?php  require("{$name}.view.php") ?>
    <!-- 09 영태 - 푸터 -->

  <!-- 마우스 커서 효과 -->
  <div class="mouse_cursor"></div>
  <div class="util_box">
    <div class="to_top"></div>
    <div class="quick_ticket"></div>
  </div>
  <div id="policy_modal">
    <div>
      <button type="button" id="policy_closeModal">닫기</button>
      <iframe id="policy_modalIframe" src="policy.php" width="100%" height="100%"></iframe>
    </div>
  </div>

  <!-- 추천영화 modal -->
  <div class="recommend_modal">
    <div class="play_box">
      <iframe width="560" height="315" src="" title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <!-- 닫기버튼 모양 -->
    <button class="modal_close">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
        <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
      </svg>
    </button>
  </div>
        <!-- 앱다운 modal -->
  <div id="appdown_modal">
    <div>
      <button type="button" id="appdown_closeModal">닫기</button>
      <img src="./images/appdown_qr.png" alt="">
    </div>
  </div>



  <div id="popup">
    <h2><img src="images/header_logo.png" alt="네슬레로고"></h2>
    <h3>CGV 웹사이트 리뉴얼 프로젝트</h3>
    <p>본 사이트는 <strong>구직용 포트폴리오 웹사이트</strong>이며, 실제로 운영되는 사이트가 아닙니다.<br>
    </p>
    <hr>
    <p>
      <strong>삼돌이:</strong> 박*선(팀장),김*태,박*미<br>
      <strong>제작기간:</strong> 2025.5.9 ~ 2025.7.14<br>
      <strong>기획서:</strong><a href="#"> figma <img src="./images/popup/fi.jpg" alt="피그마파일"></a><br>
      <strong>버전관리:</strong><a href="#"> Github <img src="./images/popup/git.jpg" alt="깃허브파일"></a><br>
      <strong>개발환경:</strong> HTML5,CSS,jquery<br>
    </p>
    <hr>
    <h4>구현완료파트</h4>
    <p>
      <strong>박*선</strong> : <a href="">plan</a>,<a href="">eventzone</a>,<a href="">cinemazone</a>,<a href="login.php">sub_login</a><br>
      <strong>김*태</strong> : <a href="">header</a>,<a href="">footer</a>,<a href="">main</a>,<a
        href="moives.php">recommend</a>,<a href="">sub_movies</a><br>
      <strong>박*미</strong> : <a href="">movie_rank</a>,<a href="">search</a>,<a href="">appdownload</a>,<a href="ticket.php">sub_ticket</a><br>
    </p>
    <hr>
    <div>
      <input type="checkbox" id="check">
      <label for="check">오늘 하루 안보기</label>
      <button><i class="fa-solid fa-xmark"></i></button>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.36/fullpage.min.js"
    integrity="sha512-UYOFSBBEKCk3CMYe2EAX1zI8EruS4WgJbs85Bh9dPcgmcOykTi7NMONWmwt/cp3dkNTnDBNCQI39LGupsz3AvA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <?= $script1 ?>
    <?= $script2 ?>
</body>

</html>