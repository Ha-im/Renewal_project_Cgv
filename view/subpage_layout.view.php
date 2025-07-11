<?php
require_once('inc/function.php');
require_once('inc/db.php');


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
      <ul class="gnb">
        <li class="on">
          <a href="#">영화</a>
          <ul class="lnb">
            <li><a href="#">영화순위</a></li>
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
    </nav>
    <div class="user_menu">
      <ul>
        <li>
          <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
              fill="#FFFFFF">
              <path
                d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z" />
            </svg>
          </a>
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
    <button class="gnb_toggle"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
        width="24px" fill="#FFFFFF">
        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
      </svg></button>
  </header>
<?php  require("{$name}.view.php") ?>
    <!-- 09 영태 - 푸터 -->
    <div class="section footer">
      <footer>
        <nav>
          <ul class="footer_menu">
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#e3e3e3">
                  <path
                    d="M440-120v-80h320v-284q0-117-81.5-198.5T480-764q-117 0-198.5 81.5T200-484v244h-40q-33 0-56.5-23.5T80-320v-80q0-21 10.5-39.5T120-469l3-53q8-68 39.5-126t79-101q47.5-43 109-67T480-840q68 0 129 24t109 66.5Q766-707 797-649t40 126l3 52q19 9 29.5 27t10.5 38v92q0 20-10.5 38T840-249v49q0 33-23.5 56.5T760-120H440Zm-80-280q-17 0-28.5-11.5T320-440q0-17 11.5-28.5T360-480q17 0 28.5 11.5T400-440q0 17-11.5 28.5T360-400Zm240 0q-17 0-28.5-11.5T560-440q0-17 11.5-28.5T600-480q17 0 28.5 11.5T640-440q0 17-11.5 28.5T600-400Zm-359-62q-7-106 64-182t177-76q89 0 156.5 56.5T720-519q-91-1-167.5-49T435-698q-16 80-67.5 142.5T241-462Z" />
                </svg>
                <span>고객센터</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#e3e3e3">
                  <path
                    d="m480-80-10-120h-10q-142 0-241-99t-99-241q0-142 99-241t241-99q71 0 132.5 26.5t108 73q46.5 46.5 73 108T800-540q0 75-24.5 144t-67 128q-42.5 59-101 107T480-80Zm80-146q71-60 115.5-140.5T720-540q0-109-75.5-184.5T460-800q-109 0-184.5 75.5T200-540q0 109 75.5 184.5T460-280h100v54Zm-101-95q17 0 29-12t12-29q0-17-12-29t-29-12q-17 0-29 12t-12 29q0 17 12 29t29 12Zm-29-127h60q0-30 6-42t38-44q18-18 30-39t12-45q0-51-34.5-76.5T460-720q-44 0-74 24.5T344-636l56 22q5-17 19-33.5t41-16.5q27 0 40.5 15t13.5 33q0 17-10 30.5T480-558q-35 30-42.5 47.5T430-448Zm30-65Z" />
                </svg>
                <span>자주 묻는 질문</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#e3e3e3">
                  <path
                    d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z" />
                </svg>
                <span>대관/단체 문의</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#e3e3e3">
                  <path
                    d="M420-720h120q0-26-17-43t-43-17q-26 0-43 17t-17 43Zm-140 80h-40v280h40v-280ZM80-120v-80h364q5 24 9 40t15 40H80Zm260-520v280h128q-11 24-15 40t-9 40H240q-33 0-56.5-23.5T160-360v-280q0-33 23.5-56.5T240-720h120q0-50 35-85t85-35q50 0 85 35t35 85h120q33 0 56.5 23.5T800-640v132q-23-6-39.5-9t-40.5-3v-120h-40v124q-18 3-30 5.5t-30 8.5v-138H340Zm380 200q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440Zm0 320q11 0 18.5-7.5T746-146q0-11-7.5-18.5T720-172q-11 0-18.5 7.5T694-146q0 11 7.5 18.5T720-120Zm0-240q-23 0-41.5 13.5T652-310l32 14q3-12 12.5-21t23.5-9q15 0 23.5 7.5T752-296q0 11-6 18.5T732-262q-6 6-12.5 12T708-236q-3 6-4.5 12t-1.5 14v14h36v-10q0-11 6-19.5t14-16.5q14-12 22-23t8-31q0-29-19-46.5T720-360ZM280-640h60-60Zm0 0h-40 40Zm60 0h280-280Zm280 0h60-60Zm60 0h40-40Z" />
                </svg>
                <span>분실물 문의/접수</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#e3e3e3">
                  <path
                    d="M320-400h320v-22q0-44-44-71t-116-27q-72 0-116 27t-44 71v22Zm160-160q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z" />
                </svg>
                <span>1 : 1 문의</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                  fill="#e3e3e3">
                  <path
                    d="M200-120q-17 0-28.5-11.5T160-160v-40q-50 0-85-35t-35-85v-200q0-50 35-85t85-35v-80q0-50 35-85t85-35h400q50 0 85 35t35 85v80q50 0 85 35t35 85v200q0 50-35 85t-85 35v40q0 17-11.5 28.5T760-120q-17 0-28.5-11.5T720-160v-40H240v40q0 17-11.5 28.5T200-120Zm-40-160h640q17 0 28.5-11.5T840-320v-200q0-17-11.5-28.5T800-560q-17 0-28.5 11.5T760-520v160H200v-160q0-17-11.5-28.5T160-560q-17 0-28.5 11.5T120-520v200q0 17 11.5 28.5T160-280Zm120-160h400v-80q0-27 11-49t29-39v-112q0-17-11.5-28.5T680-760H280q-17 0-28.5 11.5T240-720v112q18 17 29 39t11 49v80Zm200 0Zm0 160Zm0-80Z" />
                </svg>
                <span>스페셜 시네마</span>
              </a>
            </li>
          </ul>
        </nav>
        <div class="footer_body">
          <ul class="footer_link">
            <li>
              <a href="#">회사소개</a>
            </li>
            <li>
              <a href="#">지속가능경영</a>
            </li>
            <li>
              <a href="#">IR</a>
            </li>
            <li>
              <a href="#">채용정보</a>
            </li>
            <li>
              <a href="#">광고/제휴/출점문의</a>
            </li>
            <li>
              <a href="#">이용약관</a>
            </li>
            <li>
              <a href="#">편성기준</a>
            </li>
            <li>
              <a href="#" class="policy_li"><strong>개인정보처리방침</strong></a>
            </li>
            <li>
              <a href="#">법적고지</a>
            </li>
            <li>
              <a href="#">이메일주소무단수집거부</a>
            </li>
            <li>
              <a href="#">윤리경영</a>
            </li>
            <li>
              <a href="#">사이버감사실</a>
            </li>
          </ul>
          <p class="accordion_btn">
            CGV, DEEP DIVE SPACE
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
              <path d="M480-360 280-560h400L480-360Z" />
            </svg>
          </p>
          <div class="footer_text">
            <address>(04377)서울특별시 용산구 한강대로 23길 55, 아이파크몰(한강로동)</address>
            <span>대표이사 : 정종민</span>
            <span>사업자등록번호 : 104-81-45690</span>
            <span>통신판매업신고번호 : 2017-서울용산-0662 <a href="#"><strong>사업자정보확인</strong></a></span>
            <span>호스팅사업자 : CJ올리브네트웍스</span>
            <span>대표 이메일 : <a href="mailto:cjcgvmaster@cj.net" class="mail">cjcgvmaster@cj.net</a></span>
          </div>
          <p class="copyright">
            CJ CGV All Rights Reserved
          </p>
        </div>
      </footer>
    </div>
  </div>

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