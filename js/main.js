document.addEventListener('DOMContentLoaded', function () {
  new fullpage('#fullpage', {
    autoScrolling: true,
    navigation: true,
    scrollOverflow: true
  });
  /* plan */ 
// JSON 데이터로부터 슬라이드 생성 및 Swiper 초기화
$.getJSON('./json/slides.json', function(data) {
  const slides = data.slides;

  slides.forEach(function(item, idx) {
    const displayIndex = (idx + 1).toString().padStart(2, '0'); // 01, 02 ... 번호 붙이기
    const slideHTML = `
      <div class="swiper-slide imgItem">
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
        <div class="age ${item.ageClass}">${item.age}</div> <!-- 연령 등급 표시 -->
      </div>
    `;
    $('.swiper-wrapper.planA').append(slideHTML);  // 슬라이드 HTML 추가
  });
//swiper 기능
  const swiper = new Swiper('.planPost', {
    slidesPerView: 'auto', // 보여지는 갯수
    spaceBetween: 18, // gap
    loop: true, // 무한 슬라이드
    initialSlide: 0, // 몇번째부터 이용할건지
    freeMode: false, // 
    freeModeMomentum: true, // 관성
    allowTouchMove: true, 
    speed: 1000, // 속도
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    watchSlidesProgress: true,
   })

  $('.planPost').mouseenter(function(){
    swiper.autoplay.stop(); 
  });

  $('.planPost').mouseleave(function(){
    swiper.autoplay.start(); 
  });
 
  $('.plan_title a').mouseenter(function(){
    $(this).addClass('active');
  }).mouseleave(function(){
    $(this).removeClass('active');
  });

  $('.planHover').mouseenter(function(){
    $(this).addClass('active');
  }).mouseleave(function(){
    $(this).removeClass('active');
  });
});
  /* plan end */ 
  /* cinema */
  const cinemaspecial = $('.cinemaspecial > div')
  const bg1 = $('.cinemazone .bg1')
  const arrows = $('.cinemaspecial .item a span')
  const item = $('.cinemaspecial .item a')

  item.each(function(){

    const img = new Image();
    img.src = $(this).attr('data-bg');
  })
  item.on('mouseenter',function(){
      const cinemaUrl = $(this).attr('data-bg');
      bg1.stop(true, true).fadeOut(100,function(){
        $(this).css({backgroundImage:`var(--sectionBg-Grad-lin),url(${cinemaUrl})`}).fadeIn()
      })
          $(this).next('span').addClass('active');
          $(this).addClass('active');
    });
    item.on('mouseleave',function(){
      //  bg.stop().fadeOut(400);
      $(this).next('span').removeClass('active');
      $(this).removeClass('active');
    })
});
  /* cinema end */
  /* eventZone */ 
  // Swiper 초기화
  const swiper2 = new Swiper('.eventSwiper', {
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
  const $bg = $('.eventzone .bg');
  const $swiperContainer = $('.promotion.swiper.eventSwiper');

  $swiperContainer.on('mouseenter', '.swiper-slide', function() {
    const bgUrl = $(this).data('bg');
    if (!bgUrl) return;

    $bg.stop(true, true).fadeOut(150, function() {
      $(this).css('background-image', `url(${bgUrl})`).fadeIn(150);
    });

    $(this).find('.hashtag').addClass('active');
  });

  $swiperContainer.on('mouseleave', '.swiper-slide', function() {
    $(this).find('.hashtag').removeClass('active');
  });

/*eventZone end*/



/* 02 rank pym */
