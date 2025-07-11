<?php

?>
  <div id="fullpage">
    <!-- 01 영태 - 메인 -->
    <div class="section main_banner">
      <div class="container h_100 position_rel">
        <div class="content_box">
          <div class="text_box">
            <h2 class="title rating ratingall">28년 후</h2>
            <p class="subtitle">&lt;28일 후 시작, 28주 후 전염, 28년 후 진화&gt;</p>
            <p class="content_body">
              28일 후 시작, 28주 후 전염, 28년 후 진화...<br>
              태어나 처음 마주한 바이러스에 감염된 세상,<br>
              충격을 넘어선 극강의 공포가 밀려온다!
            </p>
          </div>
          <div class="btn_box">
            <a href="#" class="empty_btn">상세 정보</a>
            <a href="#" class="cta_btn">예매 하기</a>
          </div>
        </div>
      </div>
      <!--  video bg -->
      <div class="video_banner">
        <video autoplay muted loop>
          <source src="media/banner.mp4">
          <p>브라우저가 동영상 파일을 지원하지 않습니다.</p>
        </video>
      </div>
    </div>

    <!-- 02 연미 - 영화순위 -->
    <div class="section movie_rank">
      <div class="container h_100 position_rel">
        <div class="content_box" id="move_box">
          <div class="text_box">
            <div class="title_section">
              <div class="ranking_number" id="ranking-num">01</div>
              <div class="rank-title">
                <h2 class="title rating ratingall" id="movie-title">드래곤 길들이기</h2>
                <div class="star-rating" id="star-rating" data-rate="5">
                  <span class="material-symbols-outlined star">star</span>
                  <span class="material-symbols-outlined star">star</span>
                  <span class="material-symbols-outlined star">star</span>
                  <span class="material-symbols-outlined star">star</span>
                  <span class="material-symbols-outlined star">star</span>
                </div>
              </div>
            </div>
            <p class="subtitle" id="movie-subtitle">&lt; 수백년간 지속되어온 바이킹과 드래곤의 전쟁 &gt;</p>
            <p class="content_body" id="'movie-desc">
              드래곤을 없애는 것이 삶의 모든 목적인 바이킹들과 다른 신념을 가진 ‘히컵’은<br>
              무리 속에 속하지 못하고 족장인 아버지에게도 인정받지 못한다. 그러던 어느 날,<br>
              히컵은 베일에 싸인 전설의 드래곤 나이트 퓨어리인 ‘투슬리스’와 만나게 되는데...
            </p>
          </div>

          <div class="btn_box">
            <a href="#" class="empty_btn">상세 정보</a>
            <a href="#" class="cta_btn">예매 하기</a>
          </div>
        </div>
      </div>
      <!-- slide -->
      <div class="slide_content">
        <div class="view_slide">
          <ul class="slide_container">
            <li class="slide_item" data-rank="0">
              <div class="img_box">
                <img src="images/movierank_poster_28yearslater.jpg" alt="">
              </div>
            </li>
            <li class="slide_item" data-rank="1">
              <div class="img_box">
                <img src="images/movierank_poster_f1.jpg" alt="">
              </div>
            </li>
            <li class="slide_item" data-rank="2">
              <div class="img_box">
                <img src="images/movierank_poster_howtotraindragon.jpg" alt="">
              </div>
            </li>
            <li class="slide_item" data-rank="3">
              <div class="img_box">
                <img src="images/movierank_poster_nausicaaofthevalleyofthewinds.jpg" alt="">
              </div>
            </li>
            <li class="slide_item" data-rank="4">
              <div class="img_box">
                <img src="images/movierank_poster_theseedofthescaredfig.jpg" alt="">
              </div>
            </li>
          </ul>

        </div>
        <div class="slide_btn_box">
          <button class="prev_btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
              <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
            </svg>
          </button>
          <button class="next_btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
              <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
            </svg>
          </button>
        </div>
      </div>
      <!-- bg -->
      <div class="bg_img">
        <img src="images/movierank_bg_28yearslater.jpg" alt="">
        <img src="images/movierank_bg_f1.jpg" alt="">
        <img src="images/movierank_bg_howtotraindragon.jpg" alt="">
        <img src="images/movierank_bg_nausicaaofthevalleyofthewinds.jpg" alt="">
        <img src="images/movierank_bg_theseedofthescaredfig_bg.jpg" alt="">
        <div class="cover"></div>
      </div>
      <!-- next,prev -->
    </div>


    <!-- 03 경선 - 상영예정작 -->
    <div class="section plan gradient-bg">
      <div class="container plan_all">
        <div class="plan_title">
          <h3>곧 만날 수 있는 기대작</h3>
          <a href="">
            전체보기
            <span class="material-symbols-outlined">
              arrow_forward_ios
            </span>
          </a>
        </div>
      </div>
      <div class="swiper plan_post">
        <div class="swiper-wrapper planA">
          <!-- slides.json 파일 load 후 태그 생성 -->
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- 04 영태 - 추천영화(날씨데이터) -->
    <div class="section recommend">
      <div class="container">
        <div class="recommend_content">
          <div class="content_box">
            <div class="text_box">
              <h2 class="title" id="recommend_title">
                <!-- <img src="images/recommend_rain_icon.svg" alt="" class="weather_icon">4we3 -->

              </h2>
              <p class="subtitle" id="recommend_subtitle"></p>
              <p class="content_body" id="recommend_des">

              </p>
            </div>
            <div class="btn_box">
              <a href="#" class="empty_btn">상세 정보</a>
              <a href="#" class="cta_btn">예매 하기</a>
            </div>
          </div>
          <div class="thumb_box">
            <a class="play_cover" href="#">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                fill="#e3e3e3">
                <path
                  d="m380-300 280-180-280-180v360ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
              </svg> -->
            </a>
            <img src="" alt="노이즈" id="recommend_thumb">
          </div>
        </div>
      </div>
      <!-- recommend bg -->
      <div class="img_banner">
        <img src="" alt="노이즈" id="recommend_bg">
      </div>
    </div>

    <!-- 05 경선 - 씨네마 -->
    <div class="section cinemazone">
      <div class="bg1"></div>
      <div>
        <div class="container cinema">
          <h5>영화, 그이상의 경험 스페셜 시네마</h5>
          <div class="cinemaspecial">
            <div class="item">
              <a href="" data-bg="images/cinema/livingroom.png">CINE &amp; LIVINGROOM</a>
              <span class="material-symbols-outlined">
                arrow_forward_ios
              </span>
            </div>
            <div class="item">
              <a href="" data-bg="images/cinema/suite.png">SUITE CINEMA</a>
              <span class="material-symbols-outlined">
                arrow_forward_ios
              </span>
            </div>
            <div class="item">
              <a href="" data-bg="images/cinema/4dx.png">4DX</a>
              <span class="material-symbols-outlined">
                arrow_forward_ios
              </span>
            </div>
            <div class="item">
              <a href="" data-bg="images/cinema/chef.png">CINE de CHEF</a>
              <span class="material-symbols-outlined">
                arrow_forward_ios
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 06 경선 - 이벤트 -->
    <div class="section eventzone">
      <div class="bg"></div>
      <div class="promotion swiper event_swiper">
        <div class="swiper-wrapper">
          <div class="store swiper-slide" data-bg="images/event_zone/store.jpg">
            <a href="#">
              <h6>Store</h6>
              <p>영화의 여운을 소장하는 공간<br> 스토어에서 만나보세요!</p>
            </a>
            <div class="hashtag">
              <ul class="hashtag_store">
                <li><a href="#">#스토어</a></li>
                <li><a href="#">#온라인쇼핑몰</a></li>
                <li><a href="#">#쇼핑스타그램</a></li>
                <li><a href="#">#스토어딜 </a></li>
                <li><a href="#">#오늘의쇼핑 </a></li>
              </ul>
            </div>
          </div>
          <div class="event swiper-slide" data-bg="images/event_zone/event_zone_event.jpg">
            <a href="#">
              <h6>Event</h6>
              <p>진행중인 다양한 이벤트를 즐겨보세요!</p>
            </a>
            <div class="hashtag">
              <ul class="hashtag_event">
                <li><a href="#">#이벤트</a></li>
                <li><a href="#">#온라인 이벤트</a></li>
                <li><a href="#">#오프라인 행사</a></li>
                <li><a href="#">#현장이벤트</a></li>
                <li><a href="#">#부스이벤트</a></li>
              </ul>
            </div>
          </div>
          <div class="special swiper-slide" data-bg="images/event_zone/special.png">
            <a href="#">
              <h6>Special</h6>
              <p>특별한 영화 지금 만나보세요!</p>
            </a>
            <div class="hashtag">
              <ul class="hashtag_special">
                <li><a href="#">#스페셜</a></li>
                <li><a href="#">#시네마이벤트</a></li>
                <li><a href="#">#프리미어상영</a></li>
                <li><a href="#">#특별상영</a></li>
                <li><a href="#">#시사회</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 07 연미 - 위치찾기 -->
    <div class="section location_search">
      <div class="container location">
        <div>
          <h2>CGV 찾기</h2>
          <p>가장 가까운 CGV를 찾아보세요</p>
          <form class="search_container">
            <input type="search" name="search" id="search" placeholder="찾으시는 상영관의 지역을 입력하세요.">
            <button class="search_btn">
              <span class="material-symbols-outlined">search</span>
            </button>
            <div class="tag_box">
              <a href="" class="hint"># 강남</a>
              <a href="" class="hint"># 건대</a>
              <a href="" class="hint"># 대학로</a>
              <a href="" class="hint"># 명동</a>
              <a href="" class="hint"># 성수</a>
              <a href="" class="hint"># 신논현</a>
              <a href="" class="hint"># 신림</a>
              <a href="" class="hint"># 왕십리</a>
              <a href="" class="hint"># 종로</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- 08 연미 - 앱다운 -->
    <div class="section appdownload gradient-bg">
      <div class="container app">
        <div class="appdown_img">
          <img src="./images/appdownload.png" alt="appdownload">
        </div>
        <div class="appdown_contents">
          <h6>CGV APP</h6>
          <h2>앱 다운로드</h2>
          <p>CGV앱에서 더 편리하게 이용하세요.</p>
          <div class="appdown">
            <a href=""><img src="./images/playstore_icon.png" alt="playstore_icon">Google Play</a>
            <a href=""><img src="./images/ios_icon.png" alt="ios_icon">App Store</a>
          </div>
        </div>
      </div>
    </div>
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
