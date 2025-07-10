// header js



const langbtn = $('.lang_menu button');
const langList = $('#lang_list');
const gnb = $('.gnb>li');
const lnb = $('.lnb')
const menuWrap = $('.menu');
const resMenuBtn = $('.res_menu_btn');
const resMenuCloseBtn = $('.res_menu_close_btn');

langbtn.on('click', function () {
  langList.stop().slideToggle(400);
})

resMenuBtn.on('click', function () {
  menuWrap.animate({
    marginLeft: `-500px`
  }, 600)
})

resMenuCloseBtn.on('click', function () {
  menuWrap.animate({
    marginLeft: `100%`
  }, 600)
})

function setEventTognb() {
  //이벤트 전부 제거해서 초기 상태
  gnb.off('mouseenter mouseleave click');
  const getBodyWidth = $('body').width();
  // 현재 body의 너비를 비교해서 적절한 이벤트 부여.
  if (getBodyWidth >= 769) {
    //너비가 769이상이면 hover이벤트 부여
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
  } else {
    //너비가 768 이하이면 click 이벤트 부여
    gnb.on('click', function (evt) {
      evt.preventDefault();
      let checkisOpen = $(this).find('.lnb');
      lnb.not(checkisOpen).stop().slideUp();
      checkisOpen.stop().slideToggle();
    })
  }
}

// 초기 이벤트 설정
setEventTognb();

// 브라우저 리사이징 설정
$(window).on('resize', function () {
  setEventTognb();
});



//footer js
//모달 띄우기
$('.footer_link li .policy_li').on('click', function (e) {
  e.preventDefault();
  $('#policy_modal').fadeIn(500);
})
$('#policy_closeModal').on('click', function () {
  $('#policy_modal').hide();
})
$('#policy_modal').on('click', function () {
  $('#policy_modal').hide();
})

