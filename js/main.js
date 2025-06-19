document.addEventListener('DOMContentLoaded', function () {
  new fullpage('#fullpage', {
    autoScrolling: true,
    navigation: true,
    scrollOverflow: true
  });
  /*
  // cinema slideToggle
  const buttons = $('.container.cinema button')
  buttons.click(function () {
  $(this).next('div').slideToggle();
  });
 */

const buttons = $('.container.cinema button')
const divs = $('.container.cinema button + div')

buttons.click(function(){
  let index = buttons.index(this)
  console.log(index);
  buttons.removeClass('active');
  divs.removeClass('active');

  $(this).addClass('active');
  divs.eq(index).addClass('active');
})

const page = $('.section.page6')

$('.box2').eq(0).mouseenter(function(){
  page.css({backgroundRepeat:"no-repeat",backgroundImage:"url('../images/store.png')"});
}).mouseleave(function(){
  page.css({backgroundImage:"url('')"});
})
$('.box2').eq(1).mouseenter(function(){
  page.css({backgroundRepeat:"no-repeat",backgroundImage:"url('../images/event.png')"});
}).mouseleave(function(){
  page.css({backgroundImage:"url('')"});
})
$('.box2').eq(2).mouseenter(function(){
  page.css({backgroundRepeat:"no-repeat",backgroundImage:"url('../images/special.png')"});
}).mouseleave(function(){
  page.css({backgroundImage:"url('')"});
})
});