// fullpage.js
new fullpage('#fullpage', {
  // fullpage 옵션 추가 영역
  autoScrolling: true,
  navigation: true,
  scrollOverflow: true
  // 
});

// 변수 선언부
const page = $('#fullpage .section'); //fullpage의 전체 페이지를 담는 변수
const menu = $('header'); //header
let currentPage = 0; //현재 사용자가 보고있는 page (index 체크용)
let checkEvent = false; //스크롤 이벤트 on/off
const hamBtn = $('.gnb_toggle');
const gnb = $('.gnb>li');
const langbtn = $('.lang_menu button');
const langList = $('#lang_list');

$(document).on('wheel', function (evt) {
  //check변수가 true면 이벤트 진행중
  if (checkEvent === true) {
    return;
  }
  if (evt.originalEvent.deltaY > 0) {
    //휠을 아래로 당겨 다음 페이지를 본다.
    checkEvent = true;
    currentPage++;
    langList.slideUp(400);
    menu.animate({
      top: `-72px`
    }, 600, function () {
      $('.gnb_toggle').fadeIn(200);
      checkEvent = false;
    })
  } else {
    //휠을 위로 당겨 이전 페이지를 본다.
    currentPage--;
    checkEvent = true;
    menu.animate({
      top: `0`
    }, 600, function () {
      $('.gnb_toggle').fadeOut(200);
      checkEvent = false;
    })
  }
});

// header js
gnb.hover(
  function () {
    //마우스가 들어오면 할 일
    $(this).find('.lnb').stop().slideDown(400);
    langList.slideUp(400);
  }, function () {
    //마우스가 나가면 할 일
    $('.lnb').stop().slideUp(400);
  }
);

// header의 ham버튼
hamBtn.on('click', function () {
  menu.animate({
    top: `0`
  }, 600);
  $(this).fadeOut(200);
})

langbtn.on('click', function () {
  $('#lang_list').stop().slideToggle(400);
})




// 메인 배너 js


// 영화 순위 js



/* 상영 예정작 */
// JSON 데이터로부터 슬라이드 생성 및 Swiper 초기화
$.getJSON('./json/slides.json', function (data) {
  const slides = data.slides;

  slides.forEach(function (item, idx) {
    const displayIndex = (idx + 1).toString().padStart(2, '0'); // 01, 02 ... 번호 붙이기
    const slideHTML = `
      <div class="swiper-slide img_item">
        <img src="${item.image}" alt="">
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
  const swiper = new Swiper('.planPost', {
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

  $('.planPost').mouseenter(function () {
    swiper.autoplay.stop();
  });
  $('.planPost').mouseleave(function () {
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
const swiper2 = new Swiper('.eventSwiper', {
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
const swiperContainer = $('.promotion.swiper.eventSwiper');
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


// 푸터 js



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
$(document).on('mouseenter', '.empty_btn, .cta_btn, .nav-btn, a, input,.poster-items .item, .user_menu li', function () {
  cursor.addClass('active');
}).on('mouseleave', '.empty_btn, .cta_btn, .nav-btn, a, input,.poster-items .item, .user_menu li', function () {
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