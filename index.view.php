<?php
 require('inc/function.php')

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
          <img src="../images/appdownload.png" alt="appdownload">
        </div>
        <div class="appdown_contents">
          <h6>CGV APP</h6>
          <h2>앱 다운로드</h2>
          <p>CGV앱에서 더 편리하게 이용하세요.</p>
          <div class="appdown">
            <a href=""><img src="../images/playstore_icon.png" alt="playstore_icon">Google Play</a>
            <a href=""><img src="../images/ios_icon.png" alt="ios_icon">App Store</a>
          </div>
        </div>
      </div>
    </div>

