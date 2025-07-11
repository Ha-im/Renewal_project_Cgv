// fullpage.js
new fullpage('#fullpage', {
  // fullpage 옵션 추가 영역
  autoScrolling: true,
  navigation: true,
  scrollOverflow: true,
  // responsiveWidth: 20000
  // 
});
/*변수 선언부*/
const page = $('#fullpage .section'); //fullpage의 전체 페이지를 담는 변수
let currentPage = 0; //현재 사용자가 보고있는 page (index 체크용)
let checkEvent = false; //스크롤 이벤트 on/off
const menu = $('header'); //header
const hamBtn = $('.gnb_toggle');
const getBodyWidth = $('body').width();
let conBoxLeft = '';
// 첫 로딩

// 현재 body의 너비를 비교해서 적절한 이벤트 부여.
if (getBodyWidth >= 769) {
  //너비가 769이상이면 hover이벤트 부여
  conBoxLeft = 0
} else {
  //너비가 768 이하이면 click 이벤트 부여
  conBoxLeft = `-50px`
}

$(window).on('resize', function () {
  // 현재 body의 너비를 비교해서 적절한 이벤트 부여.
  if (getBodyWidth >= 769) {
    //너비가 769이상이면 hover이벤트 부여
    conBoxLeft = 0
  } else {
    //너비가 768 이하이면 click 이벤트 부여
    conBoxLeft = `-50px`
  }
});




// if()
const bannerConBox = $('#banner_content_box');
bannerConBox.animate({
  left: `${conBoxLeft}`,
  opacity: 1
}, 1000)


//화면 페이지
$(document).on('wheel', function (evt) {
  //check변수가 true면 이벤트 진행중
  const isMobile = window.innerWidth <= 768;
  const menuPosition = parseInt($('.menu').css('margin-left'), 10);


  if (checkEvent === true) {
    return;
  }
  if (isMobile && menuPosition < 0) {
    return;
  }
  if (evt.originalEvent.deltaY > 0) {
    //휠을 아래로 당겨 다음 페이지를 본다.
    checkEvent = true;
    currentPage++;
    if (currentPage === 1) {
      // 1번 페이지를 볼 때 할 일
      $('#move_box').delay(200).animate({
        left: `${conBoxLeft}`,
        opacity: 1
      }, 1000)
      $('#slide').delay(200).animate({
        left: `55%`,
        opacity: 1
      }, 1000)
    }
    if (currentPage === 2) {
      // 2번 페이지를 볼 때 할 일
      const imgItems = $('.swiper-slide.img_item');

      imgItems.each(function (i) {
        const that = $(this);
        setTimeout(function () {
          that.addClass('push');
        }, i * 150);
      });
    }
    if (currentPage === 3) {
      // 3번 페이지를 볼 때 할 일
      $('#recommend_content_box').delay(200).animate({
        top: `50%`,
        opacity: 1
      }, 600);
    }
    if (currentPage === 6) {
      const locationSearch = $('#location_search');
      locationSearch.delay(200).animate({
        top: 0,
        opacity: 1
      }, 1000);
    }

    if (currentPage === 7) {
      const appdownImg = $('#appdown_img');
      console.log('7호출');
      appdownImg.delay(200).animate({
        top: 0,
        opacity: 1
      }, 1000)

    }


    langList.slideUp(400);
    menu.animate({
      top: `-72px`
    }, 600, function () {
      $('.gnb_toggle').fadeIn(200);
      checkEvent = false;
    })
    if (currentPage === 4) {
      // 4번 페이지를 볼 때 할 일
      $('.container.cinema').addClass('push').slideDown(1000);
    }
  } else {
    //휠을 위로 당겨 이전 페이지를 본다.
    currentPage--;
    checkEvent = true;
    $('.gnb_toggle').fadeOut(200);
    menu.animate({
      top: `0`
    }, 600, function () {
      checkEvent = false;
    })
  }
});

//   bottom: 0,
//   opacity: 1
// }, 1000)



// header의 ham버튼
hamBtn.on('click', function () {
  menu.animate({
    top: `0`
  }, 600);
  $(this).fadeOut(200);
})
// 메인 배너 js



// 영화 순위 js
const viewSlide = $('.view_slide');
const slideContainer = $('.slide_container');
const slideItem = $('.slide_item');
const nextBtn = $('.slide_btn_box .next_btn');
const prevBtn = $('.slide_btn_box .prev_btn');


const bgImg = $('.bg_img img');
let slideCheck = false // false 실행x  true//실행o
let getRank = 0;

let moviesData = []; // 영화 데이터를 전역 변수로 저장

$.getJSON('./json/rank.json', function (data) {
  moviesData = data.movies;
  const movies = data.movies;
  displayMovieInfo(getRank); //초기 로드 시 첫 번째 영화 정보 표시
});

// 특정 인덱스의 영화 정보만 표시하는 함수
function displayMovieInfo(index) {
  const container = $('.movie-rankings');
  container.empty();  // 기존 내용 삭제

  if (moviesData.length > 0 && index < moviesData.length) {
    const item = moviesData[index];

    let starsHTML = '';
    const rating = parseInt(item.rating);
    for (let i = 0; i < 5; i++) {
      if (i < rating.rating) {
        starsHTML += '<span class="material-symbols-outlined star">star</span>';
      } else {
        starsHTML += '<span class="material-symbols-outlined star">star_border</span>';
      }
    }

    const moviesHTML = `
  <div class="text_box">
        <div class="title_section">
          <div class="ranking_number">${item.number}</div>
          <div class="rank-title">
            <h2 class="title rating ratingall" >${item.title}</h2>
            <div class="star-rating" data-rate="${item.rating}">
            ${starsHTML}
            </div>
          </div>
        </div>
        <p class="subtitle">${item.subtitle}</p>
        <p class="content_body">${item.description}</p>
      </div>
    `;
    container.append(moviesHTML);

  }
}

bgImg.eq(getRank).show();
nextBtn.on('click', function () {
  if (slideCheck === true) {
    return;
  }
  slideCheck = true;
  slideContainer.stop().animate({
    //할 일
    left: `-600px`
  }, 600, function () {
    //움직임이 끝나고 후속 조치
    slideCheck = false;
    slideContainer.find('.slide_item').first().appendTo(slideContainer);
    getRank = slideContainer.find('.slide_item').first().attr('data-rank');
    bgImg.fadeOut(200);
    bgImg.eq(getRank).fadeIn(600);
    displayMovieInfo(getRank); // 해당 인덱스의 영화 정보 표시
    slideContainer.css({
      left: `-300px`
    });
  });
});

prevBtn.on('click', function () {
  if (slideCheck === true) {
    return;
  }
  slideCheck = true;
  slideContainer.stop().animate({
    //할 일
    left: `0px`
  }, 600, function () {
    //움직임이 끝나고 후속 조치
    slideCheck = false;
    slideContainer.find('.slide_item').last().prependTo(slideContainer);
    getRank = slideContainer.find('.slide_item').first().attr('data-rank');
    bgImg.fadeOut(200);
    bgImg.eq(getRank).fadeIn(600);
    displayMovieInfo(getRank);
    slideContainer.css({
      left: `-300px`
    });
  });
});






/* 상영 예정작 */
// JSON 데이터로부터 슬라이드 생성 및 Swiper 초기화
$.getJSON('./json/slides.json', function (data) {
  const slides = data.slides;

  slides.forEach(function (item, idx) {
    const displayIndex = (idx + 1).toString().padStart(2, '0'); // 01, 02 ... 번호 붙이기
    const slideHTML = `
      <div class="swiper-slide img_item">
        <img src="./${item.image}" alt="">
        <div class="planHover">
          <div class="moviText">
            <p>${item.description}</p>
          </div>
          <div class="btn_box">
            <a href="${item.buttons[0].link}" class="${item.buttons[0].class}">${item.buttons[0].label}</a>
            <a href="${item.buttons[1].link}" class="${item.buttons[1].class}">${item.buttons[1].label}</a>
          </div>
        </div>
        <div class="ranking">${displayIndex}</div>  <!-- 슬라이드 번호 -->
        <div class="rating ${item.ageClass}"></div> <!-- 연령 등급 표시 -->
      </div>
    `;
    $('.swiper-wrapper.planA').append(slideHTML);  // 슬라이드 HTML 추가
  });
  //swiper 기능
  const swiper = new Swiper('.plan_post', {
    //swiper 옵션 추가 영역
    slidesPerView: 'auto', // 보여지는 갯수
    spaceBetween: 18, // gap
    loop: true, // 무한 슬라이드
    initialSlide: 0, // 몇번째부터 이용할건지
    freeMode: false, // 
    freeModeMomentum: true, // 관성
    allowTouchMove: true,
    speed: 800, // 속도
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    watchSlidesProgress: true,
  })

  $('.plan_post').mouseenter(function () {
    swiper.autoplay.stop();
  });
  $('.plan_post').mouseleave(function () {
    swiper.autoplay.start();
  });

  $('.plan_title a').mouseenter(function () {
    $(this).addClass('active');
  }).mouseleave(function () {
    $(this).removeClass('active');
  });
  $('.planHover').mouseenter(function () {
    $(this).addClass('active');
  }).mouseleave(function () {
    $(this).removeClass('active');
  });
});
/* //상영 예정작 */



// 추천영화(날씨데이터) js
const modalCloseBtn = $('.modal_close');
const modalPlayBtn = $('.play_cover');
const modalIframe = $('.play_box iframe');
const recommendModal = $('.recommend_modal');
fetch("https://api.openweathermap.org/data/2.5/weather?q=seoul&appid=7299a66f7547deee9ba6c8f17a2d97a8&units=metric")
  .then(response => {
    if (!response.ok) {
      throw new Error("네트워크 응답에 문제가 있습니다: " + response.status);
    }
    return response.json();
  })
  .then(data => {
    // 두 번째 json데이터 가져오기
    fetch('./json/recommend.json')
      .then(res => {
        if (!res.ok) {
          throw new Error("영화 JSON 불러오기 실패");
        }
        return res.json();
      })
      .then(movieData => {
        //해당 영역에 사용 가능한 json데이터 목록
        // - 날씨정보 (data)
        // - recommend.json값

        //받아온 json의 값으로 할 일
        /*
          openweather 날씨 값(main) 목록 : 
          Thunderstorm - 천둥번개
          Drizzle - 이슬비
          Rain - 비 /
          Snow - 눈  /
          Clear - 맑음 /
          Clouds - 흐림 /
          Mist - 안개낌
        */
        let checkWeather = data.weather[0].main //날씨 상태 변수에 담기
        let checkMovie = movieData[`${checkWeather}`];
        // 랜덤 값 만들기
        let randomIdx = Math.floor(Math.random() * checkMovie.length);
        // 변수 선언
        const title = $('#recommend_title');
        const subtitle = $('#recommend_subtitle');
        const des = $('#recommend_des');
        const thumbUrl = $('#recommend_thumb');
        const bgUrl = $('#recommend_bg');
        modalIframe.attr('src', `${checkMovie[randomIdx].youtube}`);
        title.html(`${checkMovie[randomIdx].title}`);
        subtitle.html(`${checkMovie[randomIdx].subtitle}`);
        des.text(`${checkMovie[randomIdx].description}`)
        thumbUrl.attr('src', `${checkMovie[randomIdx].thumburl}`);
        bgUrl.attr('src', `${checkMovie[randomIdx].bgurl}`);

      })
      .catch(err => console.error("영화 데이터 처리 중 에러:", err));
  })
  .catch(error => {
    console.error("에러 발생:", error);
  });
modalPlayBtn.on('click', function () {
  recommendModal.addClass('on');
  // 스크롤 멈추기
  fullpage_api.setAllowScrolling(false);
  fullpage_api.setKeyboardScrolling(false);
})
recommendModal.on('click', function () {
  $(this).removeClass('on');
  // 다시 스크롤 가능
  fullpage_api.setAllowScrolling(true);
  fullpage_api.setKeyboardScrolling(true);
})
modalCloseBtn.on('click', function () {
  recommendModal.removeClass('on');
  let getSrc = modalIframe.attr('src');
  modalIframe.attr('src', '');
  modalIframe.attr('src', getSrc);
  fullpage_api.setAllowScrolling(true);
  fullpage_api.setKeyboardScrolling(true);
})
// 추천영화(날씨데이터) js

/* 씨네마 (특별관) */
const cinemaspecial = $('.cinemaspecial > div');
const bg1 = $('.cinemazone .bg1');
const arrows = $('.cinemaspecial .item a span');
const item = $('.cinemaspecial .item a');
item.each(function () {
  const img = new Image();
  img.src = $(this).attr('data-bg');
})
item.on('mouseenter', function () {
  const cinemaUrl = $(this).attr('data-bg');
  bg1.stop(true, true).fadeOut(100, function () {
    $(this).css({ backgroundImage: `var(--sectionBg-Grad-lin),url(${cinemaUrl})` }).fadeIn()
  })
  $(this).next('span').addClass('active');
  $(this).addClass('active');
});
item.on('mouseleave', function () {
  //  bg.stop().fadeOut(400);
  $(this).next('span').removeClass('active');
  $(this).removeClass('active');
})
/* //씨네마 (특별관) */



/* 이벤트 */
// Swiper 초기화
const swiper2 = new Swiper('.event_swiper', {
  // swiper 옵션 추가 영역
  slidesPerView: 3,
  breakpoints: {
    1024: {
      slidesPerView: 3,
    },
    0: {
      slidesPerView: 1,
    },
  },
});
// 배경 변경 + 해시태그 토글
const bg = $('.eventzone .bg');
const swiperContainer = $('.promotion.swiper.event_swiper');
swiperContainer.on('mouseenter', '.swiper-slide', function () {
  const bgUrl = $(this).data('bg');
  if (!bgUrl) return;
  bg.stop(true, true).fadeOut(150, function () {
    $(this).css('background-image', `url(${bgUrl})`).fadeIn(150);
  });
  $(this).find('.hashtag').addClass('active');
});
swiperContainer.on('mouseleave', '.swiper-slide', function () {
  $(this).find('.hashtag').removeClass('active');
});
/* //이벤트 */


// 위치 찾기 js


// 앱 다운로드 js





/* 마우스 커서 이동 */
const cursor = $('div.mouse_cursor');
const emptyBtn = $('.empty_btn');
const ctaBtn = $('.cta_btn');
let targetX = 0;
let targetY = 0;
let currentX = 0;
let currentY = 0;

$(window).on('mousemove', function (e) {
  targetX = e.clientX;
  targetY = e.clientY;
})
$(document).on('mouseenter', '.empty_btn, .cta_btn, .nav-btn, a, input,.poster-items .item, .user_menu li,label,button', function () {
  cursor.addClass('active');
}).on('mouseleave', '.empty_btn, .cta_btn, .nav-btn, a, input,.poster-items .item, .user_menu li,label,button', function () {
  cursor.removeClass('active');
});

// 마우스 클릭 애니메이션
$(window).on('click', function () {
  cursor.addClass('pulse');
  setTimeout(function () {
    cursor.removeClass('pulse');
  }, 800);
});

// 마우스 커서 속도
function animateCursor() {
  // 부드럽게 이동하도록 보간 (0.1은 이동 속도 계수)
  currentX += (targetX - currentX) * 0.6;
  currentY += (targetY - currentY) * 0.6;
  cursor.css({ left: `${currentX}px` })
  cursor.css({ top: `${currentY}px` })
  requestAnimationFrame(animateCursor);
}
animateCursor(); // 애니메이션 루프 시작
/* //마우스 커서 이동 */
/* 팝업 */
const mypopup = $('#popup');
const popupCloseBtn = mypopup.find('button');
const onDayCheck = mypopup.find('input');

function setCookie(name, value, day) {
  const date = new Date();
  date.setDate(date.getDate() + day);

  let myCookie = '';
  myCookie += `${name}=${value};`;
  myCookie += `expires=${date.toUTCString()};`;

  document.cookie = myCookie;
}

function checkCookie(name) {
  const currentCookies = document.cookie;
  const isPopupShow = currentCookies.search(name) > -1 ? false : true;

  if (isPopupShow) {
    mypopup.addClass('active');
  } else {
    mypopup.removeClass('active');
  }
}

function deleteCookie(name) {
  const date = new Date();
  date.setDate(date.getDate() - 1);

  let myCookie = '';
  myCookie += `${name}=yes;`;
  myCookie += `expires=${date.toUTCString()};`;

  document.cookie = myCookie;
}

checkCookie('popup');

popupCloseBtn.on('click', function () {
  if (onDayCheck.is(':checked')) {
    setCookie('popup', 'no', 1);
  } else {
    deleteCookie('popup');
  }
  mypopup.removeClass('active');
}); 