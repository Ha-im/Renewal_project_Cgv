<?php
    //여기서 movies.html에서 마크업 된 html 내용물을 가져옵니다.
    //-> header, footer처럼 공통으로 쓰이지 않고 movies.html에서만 사용하는 코드만 가져옵니다.



    // json불러오고
    $moveList = file_get_contents('json/movies.json');
    $mvData = json_decode($moveList); // 객체형태로 불러오기
    $upMovies = file_get_contents('json/upcoming_movies.json');
    $upmvdata = json_decode($upMovies); // 객체형태로 불러오기
    $total = count($mvData);
?>

<main>
    <!-- content01.baaner -->
    <section class="banner">
        <div class="container">
            <div class="moive_box">
                <h2 class="title rating ratingall">드래곤 길들이기</h2>
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
                        <span class="mv_rating">4.8</span>
                   </p>
                    <p class="movie_reservation">
                        예매율 : 
                        <span class="mv_reservation">16.5%</span> 
                        / 시간 : 
                        <span class="mv_run_time">125</span> 분
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
                    수백년간 지속되어온 바이킹과 드래곤의 전쟁.<br>
                    드래곤을 없애는 것이 삶의 모든 목적인 바이킹들과 다른 신념을 가진<br>
                    ‘히컵’은 무리 속에 속하지 못하고 족장인 아버지에게도 인정받지 못한다.
                </p>
                <div class="btn_box">
                    <a href="#" class="cta_btn">예매 하기</a>
                </div>
            </div>
        </div>
        <!-- bg -->
        <div class="video_banner">
            <video autoplay muted loop>
                <source src="media/dragon.mp4">
                <p>브라우저가 동영상 파일을 지원하지 않습니다.</p>
            </video>
        </div>
    </section>
    <!-- content02.list -->
    <section class="movie_list">
        <div class="container">
            <!-- tab_menu -->
            <ul class="tab_menu">
                <li class="on">
                    <a href="#">현재 상영작</a>
                </li>
                <li>
                    <a href="#">상영 예정작</a>
                </li>
                <li>
                    <a href="#">스페셜 상영작</a>
                </li>
            </ul>

            <!-- tab_con -->
            <div class="content_wrapper">
                <!-- 현재 상영작 -->
                <p class="mv_cnt">총 <?= $total ?>개의 영화가 검색 되었습니다.</p>
                <ul class="tab_content">
                    <?php
                        foreach($mvData as $idx => $item){
                    ?>
                        <li class="item">
                            <div class="mv_img_box">
                                <img src="<?= $item->thumburl?>" alt="<?= $item->alt?>">
                                <div class="img_cover">
                                    <p class="mv_text">
                                        <?= $item->description?>
                                    </p>
                                    <a href="movies_intro.php?id=<?=$item->id?>" class="empty_btn">상세 보기</a>
                                </div>
                            </div>
                            <div class="mv_info_box">
                                <h3 class="mv_title"><?= $item->title?></h3>
                                <p>예매율 : <span><?= $item->reservation?></span> / 시간 : <span><?= $item->runtime?></span></p>
                                <p class="mv_rating_box">평점 :
                                    <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <span class="mv_rating"><?= $item->rating?></span>
                                </p>
                                <div class="btn_box">
                                    <a href="#" class="cta_btn">예매 하기</a>
                                        <button class="like_btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                            <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/>
                                        </svg>
                                        <span><?= $item->like?></span>
                                    </button>
                                </div>
                            </div>
                        </li>
                    <?php
                        // foreach문 끝나는 지점
                        }
                    ?>
                </ul>
                <!-- 상영 예정작 -->
                <ul class="tab_content">
                    <?php
                        foreach($upmvdata as $idx => $item){
                    ?>
                        <li class="item">
                            <div class="mv_img_box">
                                <img src="<?= $item->thumburl?>" alt="<?= $item->alt?>">
                                <div class="img_cover">
                                    <p class="mv_text">
                                        <?= $item->description?>
                                    </p>
                                    <a href="movies_intro.php?id=<?=$item->id?>" class="empty_btn">상세 보기</a>
                                </div>
                            </div>
                            <div class="mv_info_box">
                                <h3 class="mv_title"><?= $item->title?></h3>
                                <p>예매율 : <span><?= $item->reservation?></span> / 시간 : <span><?= $item->runtime?></span></p>
                                <p class="mv_rating_box">평점 :
                                    <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <svg class="star_fill" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m233-120 65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"/></svg>
                                    <span class="mv_rating"><?= $item->rating?></span>
                                </p>
                                <div class="btn_box">
                                    <a href="#" class="cta_btn">예매 하기</a>
                                        <button class="like_btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                            <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/>
                                        </svg>
                                        <span><?= $item->like?></span>
                                    </button>
                                </div>
                            </div>
                        </li>
                    <?php
                        // foreach문 끝나는 지점
                        }
                    ?>
                </ul>

                <!-- 스페셜 상영작 -->
                <!-- <ul class="tab_content">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul> -->

                <div class="add_list_box">
                    <button class="add_list">더 보기</button>
                </div>
            </div>
        </div>
    </section>
    <!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            const items = document.querySelectorAll(".tab_content .item");
            const loadBtn = document.querySelector(".add_list");
            let visibleCount = 8; // 처음에 보여줄 개수

            // 처음 8개 보여주기
            for (let i = 0; i < visibleCount && i < items.length; i++) {
                items[i].classList.add("show");
            }

            // 더보기 버튼 클릭 시
            loadBtn.addEventListener("click", () => {
                let nextCount = 4;
                for (let i = visibleCount; i < visibleCount + nextCount && i < items.length; i++) {
                    items[i].classList.add("show");
                }
                visibleCount += nextCount;

                // 다 보여줬으면 버튼 숨김
                if (visibleCount >= items.length) {
                    loadBtn.style.display = "none";
                }
            });
        });
    </script> -->
</main>
