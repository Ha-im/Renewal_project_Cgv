$(function(){
    const items = $(".tab_content .item");
    const loadBtn =$(".add_list");
    let visibleCount = 8; // 처음에 보여줄 개수
    // 처음 8개 보여주기
    for (let i = 0; i < visibleCount && i < items.length; i++) {
        items[i].classList.add("show");
    }

    // 더보기 버튼 클릭 시
    loadBtn.on("click", function(){
        let nextCount = 4;
        for (let i = visibleCount; i < visibleCount + nextCount && i < items.length; i++) {
            items[i].classList.add("show");
        }
        visibleCount += nextCount;
        // 다 보여줬으면 버튼 숨김
        if (visibleCount >= items.length) {
            loadBtn.style.display = "none";
        }
    });
});