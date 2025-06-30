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
