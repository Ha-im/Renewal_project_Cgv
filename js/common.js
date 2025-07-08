// header js
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
//footer js
//모달 띄우기
$('.footer_link li .policy_li').on('click',function(e){
    e.preventDefault();
    $('#policy_modal').css('display','block');
})
  $('#policy_closeModal').on('click',function(){
    $('#policy_modal').css('display','none');
})
$('#policy_modal').on('click',function(){
  $('#policy_modal').css('display','none');
})

