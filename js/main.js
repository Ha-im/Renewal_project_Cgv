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
const page5 = $('.section.page5')
const a = $('.cinema a');
buttons.click(function(){
  let index = buttons.index(this)
  console.log(index);
  buttons.removeClass('active');
  divs.removeClass('active');

  $(this).eq(0).addClass('active');
  divs.eq(index).addClass('active');

  if(buttons.eq(0).hasClass('active')){
    page5.css({
      backgroundImage:"url('../images/livingroom.png')",
      backgroundRepeat:"no-repeat",
  })
  }
  if(buttons.eq(1).hasClass('active')){
    page5.css({
      backgroundImage:"url('../images/suite.png')",
      backgroundRepeat:"no-repeat",
  })
  }
    if(buttons.eq(2).hasClass('active')){
    page5.css({
      backgroundImage:"url('../images/4dx.png')",
      backgroundRepeat:"no-repeat",
  })
  }
    if(buttons.eq(3).hasClass('active')){
    page5.css({
      backgroundImage:"url('../images/chef.png')",
      backgroundRepeat:"no-repeat",
  })
  }
})
const page = $('.section.page6')

 $('.box2').eq(0).mouseenter(function(){
   page.css({backgroundRepeat:"no-repeat",backgroundImage:"url('../images/store.png')",transition:".5s"});
 }).mouseleave(function(){
   page.css({backgroundImage:"url('../images/store.png')"})
 })
$('.box2').eq(1).mouseenter(function(){
  page.css({backgroundRepeat:"no-repeat",backgroundImage:"url('../images/event.png')",transition:".5s"});
})
$('.box2').eq(2).mouseenter(function(){
  page.css({backgroundRepeat:"no-repeat",backgroundImage:"url('../images/special.png')",transition:".5s"});
})
});