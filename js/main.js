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
/*
 const itemImg = $('.item') 
 const item = $('.img_box') 

 itemImg.each(function(idx){
  console.log(idx);
  $(this).find('.lang').text(`${idx+1}`)
 }) 
*/
