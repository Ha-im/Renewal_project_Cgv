        const tabs = document.querySelectorAll('.tabs li a');
        const contents = document.querySelectorAll('div[id^="tab"]');

        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
            e.preventDefault();  

            contents.forEach(content => content.style.display = 'none');
            const targetId = this.getAttribute('href').substring(1); 
            const target = document.getElementById(targetId);
            if (target) target.style.display = 'block';
            });
            tabs.forEach(function(item, idx){
            item.addEventListener('click', function(e){
                tabs.forEach(i => i.classList.remove('active'));
                tabs[idx].classList.add('active');
                });
            })
        });

        // 초기 탭 설정 (첫 번째 탭만 보이게)
        contents.forEach((content, i) => content.style.display = i === 0 ? 'block' : 'none');

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


