document.addEventListener('DOMContentLoaded', function () {
  new fullpage('#fullpage', {
    autoScrolling: true,
    navigation: true,
    scrollOverflow: true
  });
  $('.promotion .store').mouseenter(function(){
    $(this).find('.hashtag').addClass('active')
    $('.eventzone').css({background:"url('../images/event_zone/event_zone_store.jpg') center center/ cover no-repeat"});
  }).mouseleave(function(){
    $(this).find('.hashtag').removeClass('active');
    $('.eventzone').css({background:"url('../images/event_zone/event_zone_store.jpg') center center/ cover no-repeat"});
  })
  $('.promotion .event').mouseenter(function(){
    $(this).find('.hashtag').addClass('active')
    $('.eventzone').css({background:"url('../images/event_zone/event_zone_event.jpg') center center/ cover no-repeat"});
  }).mouseleave(function(){
    $(this).find('.hashtag').removeClass('active');
    $('.eventzone').css({background:"url('../images/event_zone/event_zone_store.jpg') center center/ cover no-repeat"});
  })
  $('.special').mouseenter(function(){
    $(this).find('.hashtag').addClass('active')
    $('.eventzone').css({background:"url('../images/event_zone/event_zone_special.jpg') center center/ cover no-repeat"});
  }).mouseleave(function(){
    $(this).find('.hashtag').removeClass('active');
    $('.eventzone').css({background:"url('../images/event_zone/event_zone_store.jpg') center center / cover no-repeat"});
  })
});



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
