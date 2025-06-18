        const tabs = document.querySelectorAll('ul li a');
        const contents = document.querySelectorAll('div[id^="tab"]');

        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
            e.preventDefault();  // 새로고침/페이지 이동 막기

            contents.forEach(content => content.style.display = 'none');

            const targetId = this.getAttribute('href').substring(1); // # 제거
            const target = document.getElementById(targetId);
            if (target) target.style.display = 'block';
            });
        });

        // 초기 탭 설정 (첫 번째 탭만 보이게)
        contents.forEach((content, i) => content.style.display = i === 0 ? 'block' : 'none');