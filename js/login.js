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
        const form = document.querySelector('form')
        const userid = document.querySelector('#userid')
        const password = document.querySelector('#password')
        const input = document.querySelectorAll('input')
        form.addEventListener('submit',function(e){
            e.preventDefault();

            userid.classList.remove('error');
            password.classList.remove('error');

            if(userid.value.trim() === ''){
                userid.classList.add('error')
                userid.focus();
            }else if(password.value.trim() === ''){
                password.classList.add('error')
                password.focus();
            }
        })
        //포커스가 됬을때 태두리 색
        
        input.forEach(function(item){
            item.addEventListener('focus',function(){
                item.style.outline = "1px solid #ccc";
            })
                item.addEventListener('blur',function(){
                item.style.outline = '';
            })
        })
