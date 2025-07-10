// name input 유효성 검사
$('#username').on('input', function() {
    const val = $(this).val().trim();
    const nameRegex = /^[A-Za가-힣]{2,20}$/;

    if (!nameRegex.test(val)) {
        $(this).addClass('input-error');
        $('#name-error').text('이름은 2글자 이상 10글자 이하여야하고, 공백 및 특수문자 사용 불가').slideDown(500);
    } else {
        $(this).removeClass('input-error');
        $('#name-error').text('');
    }
});
    
//id input 유효성 검사
$('#userid').on('input', function() {
    const val = $(this).val().trim();

    if (val.length < 5) {
        // 5글자 미만이면 에러
        $(this).addClass('input-error');
        $('#id-error').text('아이디는 5글자 이상이어야 합니다.').slideDown(500);
        //유효한 아이디
        $('#ok-error').text('');
        $(this).removeClass('input-ok');
    }else if(val.length < 4){
        $(this).removeClass('input-ok');
    }else {
        $(this).removeClass('input-error');
        $(this).removeClass('input-ok');
        $('#id-error').text('');
    }
});
//password input 유효성 검사1 / 특수문자 포함
$('#password').on('input', function() {
    const val = $(this).val();
  
    const hasNumber = /\d/.test(val);                   // 숫자 포함 여부
    const hasSpecial = /[~!@#$%^&*()_+=-]/.test(val);   // 특수문자 포함 여부
    const hasLetter = /[A-Za-z]/.test(val);              // 영문자 포함 여부 (필요하면)
  
    const minLength = 8;
  
    if (val.length < minLength) {
      $('#pw-error').text('비밀번호는 최소 ' + minLength + '자 이상이어야 합니다.').slideDown(500);
      $(this).addClass('input-error');
      return;
    }
  
    if (!hasNumber) {
      $('#pw-error').text('비밀번호에 숫자가 포함되어야 합니다.').slideDown(500);
      $(this).addClass('input-error');
      return;
    }
  
    if (!hasSpecial) {
      $('#pw-error').text('비밀번호에 특수문자가 포함되어야 합니다.').slideDown(500);
      $(this).addClass('input-error');
      return;
    }
    // 모든 조건 통과
    $('#pw-error').text('').slideDown(500);
    $(this).removeClass('input-error');
  });
//password input 유효성 검사2
$('#passwordok').on('input',function(){
    const pwVal =  $('#password').val().trim();
    const pwokVal =$(this).val().trim()

    if(pwVal !== pwokVal){
        $(this).addClass('input-error');
        $('#pwok-error').text('비밀번호가 서로 일치하지 않습니다.').slideDown(500);
    }else{
        $(this).removeClass('input-error');
        $('#pwok-error').text('');
    }
})
//email input 유효성 검사
$('#email').on('input', function() {
    const val = $(this).val().trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(val)) {
    $(this).addClass('input-error');
    $('#email-error').text('유효한 이메일을 입력해주세요.').slideDown(500);
    } else {
    $(this).removeClass('input-error');
    $('#email-error').text('');
    }
});
/*
// 중복확인 
$('.idok').on('click',function(){
    const val = $('#userid').val().trim();
    const input = false;
    if(val.length >= 5){
        $('#userid').addClass('input-ok');
        $('#ok-error').text('유효한 아이디 입니다.').slideDown(500);
    }
})
// 아무 입력 없이 가입하기 눌럿을때 error메세지 띄우기
*/
//중복확인
$(document).on('click','.idok', function () {
    const userid = $('#userid').val().trim();



    // 2. AJAX 요청 보내기
    $.ajax({
        url: 'join.php',
        type: 'POST',
        data: { userid: userid },
        success: function (response) {
            console.log(response);
            if (response.trim() === 'taken') {
                $('#id-error').text('이미 사용중인 아이디 입니다.').slideDown(500);
                $('#userid').removeClass('input-ok').addClass('input-error');
                $('#ok-error').slideUp();
            } else if (response.trim() === 'available') {
                $('#userid').removeClass('input-error').addClass('input-ok');
                $('#ok-error').text('유효한 아이디 입니다.').slideDown(500);
                $('#id-error').slideUp();
            } else {
                $('#id-error').text('알 수 없는 오류가 발생했습니다.').slideDown(500);
                $('#userid').removeClass('input-ok').addClass('input-error');
                $('#ok-error').slideUp();
            }
        },
        error: function () {
            alert('오류가 발생했습니다.');
        }
    });
});
const submitBtn = $('#submitBtn');
let inputMessage = $('input').val().trim();
const minLength = 8;
submitBtn.on('click',function(){
    if(!inputMessage){
        $('input').each(function(){
            $(this).addClass('input-error')
            $('#name-error').text('이름은 2글자 이상 10글자 이하여야하고, 공백 및 특수문자 사용 불가').slideDown(500);
            $('#id-error').text('아이디는 5글자 이상이어야 합니다.').slideDown(500);
            $('#pw-error').text('비밀번호는 최소 ' + minLength + '자 이상이어야 합니다.').slideDown(500);
            $('#pwok-error').text('비밀번호가 서로 일치하지 않습니다.').slideDown(500);
            $('#email-error').text('유효한 이메일을 입력해주세요.').slideDown(500);
        })
    }else{
        $('input').each(function(){
            $(this).removeClass('input-error')
            $('#name-error').text('');
            $('#id-error').text('');
            $('#pw-error').text('');
            $('#pwok-error').text('');
            $('#email-error').text('');
        })
    }
})
