<?php
    //여기서 movies.html에서 마크업 된 html 내용물을 가져옵니다.
    //-> header, footer처럼 공통으로 쓰이지 않고 movies.html에서만 사용하는 코드만 가져옵니다.
    // echo "여기서 만듭시다!";

    $moveList = file_get_contents('json/movies.json');
    $data = json_decode($moveList); // 객체형태로 불러오기

    // 삼항 연산자
    //intval()값을 정수형 데이터로 변경합니다. 보안상 중요한 역할을 합니다.
    // $id = isset($_GET['id']) ? intval($_GET['id']) : -1;
    $slug = isset($_GET['id']) ? $_GET['id'] : '';

    //php문에서의 유효성 검사
    // if (!isset($data[$id])) {
    //     die("유효하지 않은 영화 ID입니다.");
    // }
    $movie = null;
    foreach ($data as $item) {
        if ($item->id === $slug) {
            $movie = $item;
            break;
        }
    }


    // 여기서 $data는 json의 전체 데이터 입니다.
    // 전체 데이터중 $id번째 해당하는 데이터를 가져옵니다.
    // $movie = $data[$id];
    // echo "<pre>";
    // print_r($movie);
    // echo "</pre>";
?>

 <main>
        <!-- content01.baaner -->
        <section class="banner">
            <!-- 클릭되어 들어온 영화의 내용으로 변경 필요함 -->
            <div class="container">
                <div class="moive_box">
                    <h2 class="title rating <?=$movie->age?>"><?= $movie->title?></h2>
                    <div class="special_cinema">
                        <!-- 추후 js로 제어 -->
                        <span class="cinema_icon"><img src="images/special_cinema_i_max.png" alt="adf"></span>
                        <span class="cinema_icon"><img src="images/special_cinema_private_box.png" alt="adf"></span>
                        <span class="cinema_icon"><img src="images/special_cinema_ultra_4dk.png" alt="adf"></span>
                    </div>
                    <div class="info_box">
                        <!-- 태그에 변화가 필요한가..? -->
                        <p class="mv_rating_box">평점 :
                            <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                            <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                            <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                            <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                            <svg class="star" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                            <span class="mv_rating"><?= $movie->rating?></span>
                        </p>
                        <p class="movie_reservation">
                            예매율 : 
                            <span class="mv_reservation"><?= $movie->reservation?></span> 
                            / 시간 : 
                            <span class="mv_run_time"><?= $movie->runtime?></span> 분
                        </p>
                        <p class="movie_credits">
                            감독 : 
                            <span class="mv_director">딘 데블로이스</span> 
                            / 배우 : 
                            <span class="mv_star">메이슨 테임즈</span>, 
                            <span class="mv_star">제라드 버틀러</span>,
                            <span class="mv_star">니코 파커</span>
                            <span class="mv_star">닉 프로스트</span>
                            <span class="mv_star">줄리안 데니슨</span>
                            <span class="mv_star">가브리엘 하월</span>
                            <!-- php에서 ...처리하기 -->
                            ...</p>
                        <p class="movie_genres">
                            장르 : 
                            <span class="mv_genre">액션</span>,
                            <span class="mv_genre">어드벤처</span>,
                            <span class="mv_genre">판타지</span>,
                            <span class="mv_genre">범죄</span>
                        </p>
                    </div>
                    <p class="content_body">
                        <?= $movie->description?>
                    </p>
                    <div class="btn_box">
                        <a href="ticket.php" class="cta_btn">예매 하기</a>
                    </div>
                </div>
            </div>
            <!-- bg -->
            <div class="video_banner">
                <video autoplay muted loop>
                    <source src="<?= $movie->movieurl?>">
                    <p>브라우저가 동영상 파일을 지원하지 않습니다.</p>
                </video>
            </div>
        </section>
        <!-- content02.intro -->
        <section class="movie_intro">
            <div class="container">
                <!-- tab_menu -->
                <ul class="tab_menu">
                    <li class="on">
                        <a href="#">주요 정보</a>
                    </li>
                    <li>
                        <a href="#">감독 / 출연</a>
                    </li>
                    <li>
                        <a href="#">트레일러</a>
                    </li>
                    <li>
                        <a href="#">스틸컷</a>
                    </li>
                    <li>
                        <a href="#">리뷰</a>
                    </li>
                </ul>
                <!-- tab_con -->
                <div class="content_wrapper">
                    <!-- 주요 정보 -->
                    <div class="tab_content">
                        <!-- 써머리 -->
                        <article class="mv_summary">
                            <h2 class="con_title">줄거리</h2>
                            <h3 class="sum_title">
                                시끄러워 죽겠어요, 못 살겠네 죽이고 싶다
                            </h3>
                            <p class="sum_text">
                                내 집 마련에 성공한 주영(이선빈)과 주희(한수아) 자매
                                어느 날부터 아파트 어딘가에서 들려오는 정체불명의 층간소음에 시달린다.

                                그러던 중 동생 주희와 연락이 끊기자 불안에 휩싸인 주영은
                                급히 지방 공장에서 집으로 돌아오고,
                                주희의 남자친구 기훈(김민석)과 함께 실종된 동생을 추적하기 시작한다.

                                한편, 자매와 마찬가지로 층간소음에 시달리던 아랫집 남자(류경수)는
                                그 소음의 근원이 윗집 자매에게 있다고 생각해 살인 협박을 하게 되는데…
                            </p>
                            <p class="sum_bold"><b>다르다는 건, 특별하다는 것. 세상을 바꿀 우리들의 모험이 시작된다!</b></p>
                        </article>
                        <!-- 차트 -->
                        <article class="mv_chart">
                            <!-- 차트 어떻게하더라..?-->
                            <div class="chart_item">
                                <h3 class="chart_title">성별 예매 분포</h3>
                                <div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                            <div class="chart_item">
                                <h3 class="chart_title">성별 예매 분포</h3>
                                <div>
                                    <canvas id="line_myChart"></canvas>
                                </div>
                            </div>

                        </article>
                        <!-- 트레일러 -->
                        <article class="mv_trailer">
                            <h2 class="con_title">트레일러</h2>
                            <ul class="trailer_wrapper">
                                <li class="trailer_item">
                                    <p class="trailer_title">티저 예고편</p>
                                    <div class="video_box">
                                        <a class="play_cover" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                                <path
                                                    d="m380-300 280-180-280-180v360ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                            </svg>
                                        </a>
                                        <!-- 나중에 실제 비디오 파일 말고..
                                        영상의 썸네일을 사용하고 클릭하면 영상 모달..? -->
                                        <video>
                                            <source src="media/noise_mv01.mp4">
                                            <p>브라우저가 동영상 파일을 지원하지 않습니다.</p>
                                        </video>
                                    </div>
                                </li>
                                <li class="trailer_item">
                                    <p class="trailer_title">1차 예고편</p>
                                    <div class="video_box">
                                        <a class="play_cover" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                                <path
                                                    d="m380-300 280-180-280-180v360ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                            </svg>
                                        </a>
                                        <video>
                                            <source src="media/noise_mv02.mp4">
                                            <p>브라우저가 동영상 파일을 지원하지 않습니다.</p>
                                        </video>
                                    </div>
                                </li>
                                <li class="trailer_item">
                                    <p class="trailer_title">2차 예고편</p>
                                    <div class="video_box">
                                        <a class="play_cover" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                                <path
                                                    d="m380-300 280-180-280-180v360ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                            </svg>
                                        </a>
                                        <video>
                                            <source src="media/noise_mv03.mp4">
                                            <p>브라우저가 동영상 파일을 지원하지 않습니다.</p>
                                        </video>
                                    </div>
                                </li>
                            </ul>
                        </article>
                        <!-- 스틸컷 -->
                        <article class="mv_still_cut">
                            <h2 class="con_title">스틸컷</h2>
                            <div class="view">
                                <ul class="slide_container">
                                    <!-- 스틸컷은 5개만 보여진다. -->
                                    <li class="slide_item">
                                        <div class="img_box">
                                            <img src="images/movies_intro/noise_slide01.jpg" alt="노이즈">
                                        </div>
                                    </li>
                                    <li class="slide_item">
                                        <div class="img_box">
                                            <img src="images/movies_intro/noise_slide02.jpg" alt="노이즈">
                                        </div>
                                    </li>
                                    <li class="slide_item">
                                        <div class="img_box">
                                            <img src="images/movies_intro/noise_slide03.jpg" alt="노이즈">
                                        </div>
                                    </li>
                                    <li class="slide_item">
                                        <div class="img_box">
                                            <img src="images/movies_intro/noise_slide04.jpg" alt="노이즈">
                                        </div>
                                    </li>
                                    <li class="slide_item">
                                        <div class="img_box">
                                            <img src="images/movies_intro/noise_slide05.jpg" alt="노이즈">
                                        </div>
                                    </li>
                                </ul>
                                <div class="slide_btn_box">
                                    <button class="slide_btn prev_btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" fill="#FFF">
                                            <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
                                        </svg>
                                        </svg>
                                    </button>
                                    <button class="slide_btn next_btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" fill="#FFFFFF">
                                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- 감독 / 출연 -->
                    <!-- <ul class="tab_content">
                    </ul> -->
                    <!-- 트레일러 -->
                    <!-- <ul class="tab_content">
                    </ul> -->
                    <!-- 스틸컷 -->
                    <!-- <ul class="tab_content">
                    </ul> -->
                    <!-- 리뷰 -->
                    <!-- <ul class="tab_content">
                    </ul> -->
                </div>
            </div>
        </section>
    </main>
    
