// name input 유효성 검사
$('#username').on('input', function() {
    const val = $(this).val().trim();
    const nameRegex = /^[A-Za가-힣]{2,10}$/;

    if (!nameRegex.test(val)) {
        $(this).addClass('input-error');
        $('#name-error').text('이름은 2글자 이상 10글자 이하여야하고, 공백 및 특수문자 사용 불가');
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
        $('#id-error').text('아이디는 5글자 이상이어야 합니다.');
    } else {
        $(this).removeClass('input-error');
        $('#id-error').text('');
    }
});
//password input 유효성 검사
$('#passwordok').on('input',function(){
    const pwVal =  $('#password').val().trim();
    const pwokVal =$(this).val().trim()

    if(pwVal !== pwokVal){
        $(this).addClass('input-error');
        $('#pwok-error').text('비밀번호가 서로 맞지 않습니다.');
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
    $('#email-error').text('유효한 이메일을 입력해주세요.');
    } else {
    $(this).removeClass('input-error');
    $('#email-error').text('');
    }
});
