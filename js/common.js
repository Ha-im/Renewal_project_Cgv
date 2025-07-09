// header js



const langbtn = $('.lang_menu button');
const langList = $('#lang_list');
const gnb = $('.gnb>li');

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
langbtn.on('click', function () {
  langList.stop().slideToggle(400);
})














//footer js
//모달 띄우기
$('.footer_link li .policy_li').on('click', function (e) {
  e.preventDefault();
  $('#policy_modal').fadeIn(500);
})
$('#policy_closeModal').on('click',function(){
  $('#policy_modal').hide();
})
$('#policy_modal').on('click',function(){
$('#policy_modal').hide();
})

