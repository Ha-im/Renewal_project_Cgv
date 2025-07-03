document.addEventListener('DOMContentLoaded', function () {
  new fullpage('#fullpage', {
    autoScrolling: true,
    navigation: true,
    scrollOverflow: true
  });
<<<<<<< HEAD
  /* plan */ 
=======
  /* plan */
  /*1. 스와이프 기능 추가*/
  const swiper = new Swiper('.planPost', {
    slidesPerView: 'auto',
    spaceBetween: 18,
    loop: true,
    speed: 0,
    autoplay: false,
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
  });

  // 변수 선언부

  const page = $('#fullpage .section'); //fullpage의 전체 페이지를 담는 변수
  const menu = $('header'); //header
  let currentPage = 0; //현재 사용자가 보고있는 page (index 체크용)
  let checkEvent = false; //스크롤 이벤트 on/off
  

  // 해석...
  // .section의 첫 번째 페이지 에서는 header가 보여지고 있다. // 초기값은 block으로 충분
  // 사용자가 마우스 스크롤을 위 또는 아래로 당기면 header의 y값을 제어해 화면 밖으로 부드럽게 밀어낸다.
  // -> 사용자가 스크롤을 아래로 당겼는지 이벤트 체크가 필요
  // -> 현재 위치가 0이면 header는 원래의 자리로 부드럽게 나타난다.


  $(document).on('wheel', function (evt) {
    //check변수가 true면 이벤트 진행중
    if (checkEvent === true) {
      return;
    }
    if (evt.originalEvent.deltaY > 0) {
      //휠을 아래로 당겨 다음 페이지를 본다.
      console.log('호출!');
      checkEvent = true;
      currentPage++;
      menu.animate({
        top: `-72px`
      }, 600, function () {
        checkEvent = false;
      })
    } else {
      //휠을 위로 당겨 이전 페이지를 본다.
      console.log('호출!');
      currentPage--;
      checkEvent = true;
      menu.animate({
        top: `0`
      }, 600, function () {
        checkEvent = false;
      })
    }
  })




























>>>>>>> 9061c1a25c80c8e264fdd4413a2b32aeede35888
  // 2. 슬라이드 복제 1세트 (눈에 보이게 자연스러운 흐름 만들기)
  const $wrapper = $('.planPost .swiper-wrapper');
  const $originalSlides = $wrapper.children('.swiper-slide');
  $wrapper.append($originalSlides.clone()); // 클론 1세트만 추가
<<<<<<< HEAD
  /*1. 스와이프 기능 추가*/
  const swiper = new Swiper('.planPost', {
    slidesPerView: 'auto',
    spaceBetween: 18,
    loop: false,
    speed: 0,
    autoplay: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    freeMode:true,
    freeModeMomentum:false,
    centeredSlides:false
  });
  //슬라이드 돌아가는 기능 막기
  swiper.on('touchStart', () => {
    cancelAnimationFrame(animId);
  });
  
  swiper.on('touchEnd', () => {
    animId = requestAnimationFrame(animate);
  });
  
  
=======

>>>>>>> 9061c1a25c80c8e264fdd4413a2b32aeede35888
  // 3. ranking 번호 매기기 (원본 번호만 반복되게)
  $wrapper.children('.swiper-slide').each(function (idx) {
    const displayIndex = ((idx % $originalSlides.length) + 1).toString().padStart(2, '0');
    $(this).find('.ranking').text(displayIndex);
  });

  // 4. 자연스러운 무한 슬라이드 애니메이션
  let posX = 0;
  let animId;
  const speed = 0.5; // 이동 속도(px/frame)

  // 원본 슬라이드 세트의 총 너비
  let originalWidth = 0;
  $originalSlides.each(function () {
    originalWidth += $(this).outerWidth(true);
  });

  // resetPoint는 원본 너비보다 조금 짧게 잡기 → 끊김 없는 느낌
  const resetPoint = originalWidth - 50;

  function animate() {
    posX -= speed;

    if (Math.abs(posX) >= resetPoint) {
      posX = 0; // 자연스럽게 처음으로 위치 리셋
    }

    $wrapper.css('transform', `translateX(${posX}px)`);
    animId = requestAnimationFrame(animate);
  }

  // 5. 마우스 올리면 멈춤, 벗어나면 재생
  $('.planPost').hover(
    () => cancelAnimationFrame(animId),
    () => animId = requestAnimationFrame(animate)
  );

  // 6. 시작
  animId = requestAnimationFrame(animate);

  $('.plan_title a').mouseenter(function () {
    $(this).addClass('active')
  }).mouseleave(function () {
    $(this).removeClass('active')
  })

  $('.planHover').mouseenter(function () {
    $(this).addClass('active');
  }).mouseleave(function () {
    $(this).removeClass('active');
  })
  /* plan end */
  /* cinema */
<<<<<<< HEAD
  for(let i = 1; i<=$('.cinemaspecial .item').length; i++){
    $(`.cinemaspecial .item a:nth-child(${i})`).mouseenter(function(){
=======
  for (let i = 1; i <= $('.cinemaspecial .item').length; i++) {
    $(`.cinemaspecial .item:nth-child(${i})`).mouseenter(function () {
>>>>>>> 9061c1a25c80c8e264fdd4413a2b32aeede35888
      $(this).addClass('active');
      $(this).next('span').addClass('active');
      const bgImg = $(this).data('bg');
      $('.cinemazone').css({
        background: `linear-gradient(rgba(14, 14, 14, 0), rgba(0, 0, 0, 0.6) 62%, rgba(0, 0, 0, 0.97)), url(${bgImg}) no-repeat center center / cover`
      });
    }).mouseleave(function () {
      $(this).removeClass('active');
      $(this).next('span').removeClass('active');
      $('.cinemazone').css({
        background: ''
      });
    })
  }

  /* cinema end */
  /* eventZone */
  $('.promotion .store').mouseenter(function () {
    $(this).find('.hashtag').addClass('active')
    $('.eventzone').css({ background: "url('../images/event_zone/store.jpg') center center/ cover no-repeat" });
  }).mouseleave(function () {
    $(this).find('.hashtag').removeClass('active');
    $('.eventzone').css({ background: "url('../images/event_zone/store.jpg') center center/ cover no-repeat" });
  })
  $('.promotion .event').mouseenter(function () {
    $(this).find('.hashtag').addClass('active')
    $('.eventzone').css({ background: "url('../images/event_zone/event_zone_event.jpg') center center/ cover no-repeat" });
  }).mouseleave(function () {
    $(this).find('.hashtag').removeClass('active');
    $('.eventzone').css({ background: "url('../images/event_zone/store.jpg') center center/ cover no-repeat" });
  })
  $('.special').mouseenter(function () {
    $(this).find('.hashtag').addClass('active')
    $('.eventzone').css({ background: "url('../images/event_zone/special.png') center center/ cover no-repeat" });
  }).mouseleave(function () {
    $(this).find('.hashtag').removeClass('active');
    $('.eventzone').css({ background: "url('../images/event_zone/store.jpg') center center / cover no-repeat" });
  })
});
/*eventZone end*/



/* 02 rank pym */
const movies = [
  {
    title: "드래곤 길들이기",
    subtitle: "&lt; 수백년간 지속되어온 바이킹과 드래곤의 전쟁 &gt;",
    description: "드래곤을 없애는 것이 삶의 모든 목적인 바이킹들과 다른 신념을 가진 ‘히컵’은<br>무리 속에 속하지 못하고 족장인 아버지에게도 인정받지 못한다. 그러던 어느 날,<br>히컵은 베일에 싸인 전설의 드래곤 나이트 퓨어리인 ‘투슬리스’와 만나게 되는데...",
    rating: 5
  },
  {
    title: "F1 더 무비",
    subtitle: "&lt; 최고가 되지 못한 전설 VS 최고가 되고 싶은 루키 &gt;",
    description: "한때 주목받는 유망주였지만 끔찍한 사고로 F1에서 우승하지 못하고<br>한순간에 추락한 드라이버 '소니 헤이스'. 그의 오랜 동료인 '루벤 세르반테스'에게<br>레이싱 복귀를 제안받으며 최하위 팀인 APXGP에 합류한게 되는데...",
    rating: 3
  },
  {
    title: "28년후",
    subtitle: "&lt; 28일 후 시작, 28주 후 전염, 28년 후 진화... &gt;",
    description: "태어나 처음 마주한 바이러스에 감염된 세상, 충격을 넘어선 극강의 공포가 밀려온다!<br>이곳에서 태어나 한 번도 섬 밖을 나가 본 적 없는 소년 ‘스파이크’는 어느 날<br>섬을 떠나 본토에 발을 들이게 되고 난생처음 바이러스에 잠식된 세상을 마주하게 되는데....",
    rating: 4
  },
  {
    title: "바람계곡의 나우시카",
    subtitel: "&lt; ‘나우시카’의 운명을 건 사투가 시작된다! &gt;",
    description: "1천 년 전, 문명은 대전쟁 ‘불의 7일’로 인해 붕괴하고<br>지구는 곰팡이의 숲 ‘부해(腐海)’로 뒤덮인 죽음의 행성이 된다.<br>그리고 부해를 지키는 거대한 곤충 ‘오무’까지, 인류는 절멸에 가까운 위기를 맞이하는데...",
    rating: 5
  },
  {
    title: "신성한 나무의 씨앗",
    subtitel: "&lt; 지금 반드시 목격해야 할,올해 가장 용감한 걸작. &gt;",
    description: "꿈에 그리던 수사판사 승진을 하게 된 ‘이만’, 때마침 테헤란에서는 대규모 히잡 반대 시위가<br일어나고 ‘이만’은 가족의 안전을 위해 총을 지급받는다. 그러나 딸들과 논쟁을 벌인 어느 날,<br>총이 집에서 감쪽같이 사라지고 가족의 믿음에는 균열이 생긴다.",
    rating: 2
  }
];

let slideWrapper = $('.poster-container'),
  slides = slideWrapper.find('.poster-items'),
  item = slides.find('.item'),
  currentIdx = 0,
  slideCount = item.length,
  slideWidth = 280,
  slideMargin = 20,
  moveAmt,
  maxSlide = 3,
  //responsiveMargin = 10,
  prevBtn = $('#prevBtn'),
  nextBtn = $('#nextBtn');

moveAmt = slideWidth + slideMargin;
//복사본 생성
let originalItems = slides.find('.item'); // 원본만 잡아두고
slides.prepend(originalItems.clone());
originalItems.clone().appendTo(slides);

//슬라이드 배치
function slideLayout(sw, sm) {
  allSlide.each(function (idx) {
    let newLeft = idx * (sw + sm);
    $(this).css({ left: newLeft, width: sw })
  });


  //슬라이드 중앙 배치
  moveAmt = sw + sm;
  let adjustment = -moveAmt * slideCount + 'px';
  slides.css({ transform: `translateX(${adjustment})` });
}
slideLayout(slideWidth, slideMargin);

//이동함수
function moveSlide(num) {
  let newLeft = -num * moveAmt + 'px';
  slides.stop().animate({ left: newLeft }, 500, function () {
    if (currentIdx === slideCount || currentIdx === -slideCount) {
      slides.css({ left: 0 });
      currentIdx = 0;
    }
  });
  currentIdx = num;
}
moveSlide(0)

nextBtn.click(debounce(() => {
  moveSlide(++currentIdx);
}, 500));
prevBtn.click(debounce(() => {
  moveSlide(--currentIdx);
}, 500));