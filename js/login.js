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

   /* 로그인페이지 텝 구현 */
    const tabs = $('.tabs li a');
    const contents = $('div[id^="tab"]');

    // 탭 클릭 이벤트 등록
    tabs.each(function() {
        $(this).on('click', function(e) {
            // 페이지 이동 막기
            e.preventDefault();

            // 모든 콘텐츠 숨기기
            contents.css('display', 'none');

            // 해당 콘텐츠만 보이기
            const targetId = $(this).attr('href').substring(1);
            const target = $('#' + targetId);
            if (target.length) target.css('display', 'block');

            // 모든 탭에서 active 제거 후 현재 탭에만 추가
            tabs.removeClass('active');
            $(this).addClass('active');
        });
    });

    // 첫 탭 활성화
    contents.each(function(index) {
        $(this).css('display', index === 0 ? 'block' : 'none');
    });
    tabs.eq(0).addClass('active');

        // 로그인 입력 에러
        const submitBtn = $('#submitBtn');
        const form = $('#loginPage')

        form.submit(function(e){
            e.preventDefault();
            const id = $('#userid');
            const pw = $('#password');
            const userid = $('#userid').val().trim()
            const password = $('#password').val().trim()
            if(!userid){
                alert('아이디를 입력해주세요.');
                id.addClass('input-error');
            }else if(!password){
                id.removeClass('input-error');
                alert('비밀번호를 입력해주세요.');
                pw.addClass('input-error');
            }else{
                id.removeClass('input-error');
                pw.removeClass('input-error');
                alert('로그인 성공');
            }
        })
        //모달 띄우기
        $('#policy_a').on('click',function(e){
            e.preventDefault();
            $('#policy_modal').css('display','block');
        })
        $('#policy_closeModal').on('click',function(){
            $('#policy_modal').css('display','none');
        })


