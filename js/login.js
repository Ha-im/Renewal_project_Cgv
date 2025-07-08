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

