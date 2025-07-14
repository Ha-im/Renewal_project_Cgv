$(function () {
    const tabContents = $('.tab_content');
    const tabMenu = $('.tab_menu li');
    const loadBtn = $('.add_list');
    const mvCountText = $('.mv_cnt');

    // 각 탭별로 보여줄 아이템 수를 개별로 관리
    let visibleCounts = [8, 8, 8]; // 탭 순서대로 초기 개수

    function updateMovieCount(tabIndex) {
        const totalCount = tabContents.eq(tabIndex).find('.item').length;
        mvCountText.text(`총 ${totalCount}개의 영화가 검색되었습니다.`);
    }

    function showItems(tabIndex) {
        const items = tabContents.eq(tabIndex).find('.item');
        items.removeClass('show'); // 먼저 모두 숨김

        for (let i = 0; i < visibleCounts[tabIndex] && i < items.length; i++) {
            items.eq(i).addClass('show');
        }

        // 버튼 숨김 처리
        if (visibleCounts[tabIndex] >= items.length) {
            loadBtn.hide();
        } else {
            loadBtn.show();
        }

        // 영화 개수 업데이트
        updateMovieCount(tabIndex);
    }

    // 탭 클릭 이벤트
    tabMenu.click(function (e) {
        e.preventDefault();

        const index = $(this).index();

        // 탭 활성화 처리
        tabMenu.removeClass('on');
        $(this).addClass('on');

        // 탭 콘텐츠 전환
        tabContents.hide();
        tabContents.eq(index).show();

        // 해당 탭 콘텐츠 출력 및 영화 수 반영
        showItems(index);
    });

    // 더보기 버튼 클릭 이벤트
    loadBtn.on('click', function () {
        const currentTab = $('.tab_menu li.on').index();
        const items = tabContents.eq(currentTab).find('.item');

        visibleCounts[currentTab] += 4;
        showItems(currentTab);
    });

    // 초기 설정
    tabContents.hide().eq(0).show();
    showItems(0);
});