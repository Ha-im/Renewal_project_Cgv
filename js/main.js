document.addEventListener('DOMContentLoaded', function () {
  new fullpage('#fullpage', {
    autoScrolling: true,
    navigation: true,
    scrollOverflow: true
  });
  $('.promotion .store').mouseenter(function(){
    $(this).find('.hashtag').addClass('active')
    $('.page6').css({backgroundImage:"url('../images/store.png')"});
  }).mouseleave(function(){
    $(this).find('.hashtag').removeClass('active');
    $('.page6').css({backgroundImage:"url('')"});
  })
  $('.promotion .event').mouseenter(function(){
    $(this).find('.hashtag').addClass('active')
    $('.page6').css({backgroundImage:"url('../images/event.png')"});
  }).mouseleave(function(){
    $(this).find('.hashtag').removeClass('active');
    $('.page6').css({backgroundImage:"url('../images/store.png')"});
  })
  $('.promotion .special').mouseenter(function(){
    $(this).find('.hashtag').addClass('active')
    $('.page6').css({backgroundImage:"url('../images/special.png')"});
  }).mouseleave(function(){
    $(this).find('.hashtag').removeClass('active');
    $('.page6').css({backgroundImage:"url('../images/store.png')"});
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
