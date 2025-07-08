
//footer js
//모달 띄우기
$('.footer_link li .policy_li').on('click',function(e){
  e.preventDefault();
  $('#policy_modal').show();
})
$('#policy_closeModal').on('click',function(){
  $('#policy_modal').hide();
})
$('#policy_modal').on('click',function(){
$('#policy_modal').hide();
})

