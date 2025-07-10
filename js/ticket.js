$.getJSON('./json/ticket.json', function (data) {
    const regions = data.regions;
  
    regions.forEach(function(item, idx) {
      let cinemaListHTML = '';
  
      item.cinemas.forEach(function(cinema, index) {
         const isActive = index === 0 ? 'active' : '';
         cinemaListHTML += `<li class="${isActiveCinema}"><a href="" class="active"> ${cinema}</a></li>`;
      });
  
      const regionsHTML = `
        <ul>
          <li class="list_location">
            <a href="" class="area-select" style="width:175px">
              <span>${item.name}</span>
              <span>&#40;${item.count}&#41;</span>
            </a>
            <div class="area_cinema_list">
              <ul class="content scroll_y">
                ${cinemaListHTML}
              </ul>
            </div>
          </li>
        </ul>
      `;
  
      $('.cinema_list').append(regionsHTML);
    });
  });
  $(document).on('click', '.area-select', function(e) {
    e.preventDefault();
  
    // 모든 area-select에서 active 제거
    $('.content').removeClass('active');
  
    // 현재 클릭한 것만 active
    $(this).addClass('active');
  
    // 원하는 동작 추가 (예: area_cinema_list 토글)
    $('.area_cinema_list .content').hide(); // 모두 닫고
    $(this).siblings('.area_cinema_list .content').show(); // 해당 것만 열기
  });



/*
$.getJSON('./json/ticket.json', function (data) {
    const regions = data.regions;
    console.log(regions);
    regions.forEach(function(item,idx){
        console.log(item.name);
        const regionsHTML = `
              <ul>
        <li>
          <a href="" class="active">
            <span>${item.name}</span>
            <span>&#40;${item.count}&#41;</span>
          </a>
          <div class="area_cinema_list">
            <ul class="content scroll_y">
              <li><a href="">${item.cinemas[0]}</a></li>
              <li><a href="" class="active">${item.cinemas[1]}</a></li>
              <li><a href="">${item.cinemas[2]}</a></li>
              <li><a href="">${item.cinemas[3]}</a></li>
              <li><a href="">${item.cinemas[4]}</a></li>
              <li><a href="">${item.cinemas[5]}</a></li>
              <li><a href="">${item.cinemas[6]}</a></li>
              <li><a href="">${item.cinemas[7]}</a></li>
              <li><a href="">${item.cinemas[8]}</a></li>
              <li><a href="">${item.cinemas[9]}</a></li>
              <li><a href="">${item.cinemas[10]}</a></li>
              <li><a href="">${item.cinemas[11]}</a></li>
              <li><a href="">${item.cinemas[12]}</a></li>
              <li><a href="">${item.cinemas[13]}</a></li>
              <li><a href="">${item.cinemas[14]}</a></li>
              <li><a href="">${item.cinemas[15]}</a></li>
              <li><a href="">${item.cinemas[16]}</a></li>
              <li><a href="">${item.cinemas[17]}</a></li>
              <li><a href="">${item.cinemas[18]}</a></li>
              <li><a href="">${item.cinemas[19]}</a></li>
              <li><a href="">${item.cinemas[20]}</a></li>
              <li><a href="">${item.cinemas[21]}</a></li>
              <li><a href="">${item.cinemas[22]}</a></li>
              <li><a href="">${item.cinemas[23]}</a></li>
              <li><a href="">${item.cinemas[24]}</a></li>
              <li><a href="">${item.cinemas[25]}</a></li>
              <li><a href="">${item.cinemas[26]}</a></li>
              <li><a href="">${item.cinemas[27]}</a></li>
              <li><a href="">${item.cinemas[28]}</a></li>
              <li><a href="">${item.cinemas[29]}</a></li>
              <li><a href="">${item.cinemas[30]}</a></li>
            </ul>
          </div>
        </li>
      </ul>
        `
    $('.cinema_list').append(regionsHTML);
    })
})


slides.forEach(function (item, idx) {
    const displayIndex = (idx + 1).toString().padStart(2, '0'); // 01, 02 ... 번호 붙이기
    const slideHTML = `
    <div class="swiper-slide img_item">
        <img src="${item.image}" alt="">
        <div class="planHover">
        <div class="moviText">
            <p>${item.description}</p>
        </div>
        <div class="btn_box">
            <a href="${item.buttons[0].link}" class="${item.buttons[0].class}">${item.buttons[0].label}</a>
            <a href="${item.buttons[1].link}" class="${item.buttons[1].class}">${item.buttons[1].label}</a>
        </div>
        </div>
        <div class="ranking">${displayIndex}</div>  <!-- 슬라이드 번호 -->
        <div class="rating ${item.ageClass}"></div> <!-- 연령 등급 표시 -->
    </div>
    `;
    $('.swiper-wrapper.planA').append(slideHTML);  // 슬라이드 HTML 추가
});
*/