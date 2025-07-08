// header js


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

