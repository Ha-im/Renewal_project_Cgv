document.addEventListener('DOMContentLoaded', function () {
  new fullpage('#fullpage', {
    autoScrolling: true,
    navigation: true,
    scrollOverflow: true
  });
  /* plan */ 
  const $wrapper = $('.planPost .swiper-wrapper');
  const $originalSlides = $wrapper.children('.swiper-slide');
  $wrapper.append($originalSlides.clone()); // 슬라이드 복제
  
  const swiper = new Swiper('.planPost', {
    slidesPerView: 'auto',
    spaceBetween: 18,
    loop: true,               
    freeMode: true,
    freeModeMomentum: true,        
    allowTouchMove: true,
    speed: 4000,
    autoplay: {
      delay: 0,                   
      disableOnInteraction: false,
      pauseOnMouseEnter: true,   
    },
  });
  //ranking 번호 매기기 (원본 번호만 반복되게)
  $wrapper.children('.swiper-slide').each(function (idx) {
    const displayIndex = ((idx % $originalSlides.length) + 1).toString().padStart(2, '0');
    $(this).find('.ranking').text(displayIndex);
  });
  
  $('.plan_title a').mouseenter(function(){
    $(this).addClass('active')
  }).mouseleave(function(){
    $(this).removeClass('active')
  })

  $('.planHover').mouseenter(function(){
    $(this).addClass('active');
  }).mouseleave(function(){
    $(this).removeClass('active');
  })
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
      bg1.fadeOut(100,function(){
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
  const eventzone = $('.promotion > div')
  const bg = $('.eventzone .bg')
  const hashtag = $('.promotion div div.hashtag')

  eventzone.each(function(){

    const img = new Image();
    img.src = $(this).attr('data-bg');
  })
    eventzone.on('mouseenter',function(){
      const url = $(this).attr('data-bg');
      bg.fadeOut(100,function(){
        $(this).css({backgroundImage:`url(${url})`}).fadeIn()
      })

          $(this).find('.hashtag').addClass('active');
    });
    eventzone.on('mouseleave',function(){
      // bg.stop().fadeOut(100);
      $(this).find('.hashtag').removeClass('active');
    })


/*eventZone end*/



/* 02 rank pym */
const movies = [
  {
    title: "드래곤 길들이기",
    subtitle:"&lt; 수백년간 지속되어온 바이킹과 드래곤의 전쟁 &gt;",
    description: "드래곤을 없애는 것이 삶의 모든 목적인 바이킹들과 다른 신념을 가진 ‘히컵’은<br>무리 속에 속하지 못하고 족장인 아버지에게도 인정받지 못한다. 그러던 어느 날,<br>히컵은 베일에 싸인 전설의 드래곤 나이트 퓨어리인 ‘투슬리스’와 만나게 되는데...",
    rating: 5
  },
  {
    title: "F1 더 무비",
    subtitle:"&lt; 최고가 되지 못한 전설 VS 최고가 되고 싶은 루키 &gt;",
    description: "한때 주목받는 유망주였지만 끔찍한 사고로 F1에서 우승하지 못하고<br>한순간에 추락한 드라이버 '소니 헤이스'. 그의 오랜 동료인 '루벤 세르반테스'에게<br>레이싱 복귀를 제안받으며 최하위 팀인 APXGP에 합류한게 되는데...",
    rating: 3
  },
  {
    title: "28년후",
    subtitle:"&lt; 28일 후 시작, 28주 후 전염, 28년 후 진화... &gt;",
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
function slideLayout(sw,sm){
  allSlide.each(function(idx){
    let newLeft = idx * (sw + sm);
    $(this).css({left: newLeft, width:sw})
  });


//슬라이드 중앙 배치
moveAmt = sw+sm;
	let adjustment = -moveAmt * slideCount + 'px';
	slides.css({transform:`translateX(${adjustment})`});
}
slideLayout(slideWidth,slideMargin);

//이동함수
function moveSlide(num){
  let newLeft= -num * moveAmt + 'px';
  slides.stop().animate({left:newLeft}, 500, function(){
    if(currentIdx === slideCount || currentIdx === -slideCount){
      slides.css({left:0});
      currentIdx = 0;
    }
  });
  currentIdx = num;
}
moveSlide(0)

nextBtn.click(debounce(()=>{
  moveSlide(++currentIdx);
},500));
prevBtn.click(debounce(()=>{
  moveSlide(--currentIdx);
}, 500));