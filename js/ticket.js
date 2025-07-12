/* 영화 리스트 */
$.getJSON('./json/ticket.json', function (data) {
  const regions = data.regions;

  regions.forEach(function(item, idx) {
    let cinemaListHTML = '';

    item.cinemas.forEach(function(cinema, index) {
      const isActiveCinema = index === 0 ? 'active' : '';
      cinemaListHTML += `<li class="${isActiveCinema}"><a href="">${cinema}</a></li>`;
    });

    const isActiveArea = idx === 0 ? 'active' : '';
    // 첫 번째만 보이도록 style 조절 (display:block, 나머진 display:none)
    const areaDisplayStyle = idx === 0 ? 'display:block;' : 'display:none;';

    const regionsHTML = `
      <ul>
        <li class="list_location">
          <a href="" class="area-select ${isActiveArea}" style="width:175px">
            <span>${item.name}</span>
            <span>&#40;${item.count}&#41;</span>
          </a>
          <div class="area_cinema_list" style="${areaDisplayStyle}">
            <ul class="content scroll_y">${cinemaListHTML}</ul>
          </div>
        </li>
      </ul>
    `;

    $('.cinema_list').append(regionsHTML);
  });
});

$(document).on('click', '.area-select', function(e) {
  e.preventDefault();
  const $clicked = $(this);
  const index = $('.area-select').index($clicked);  // 클릭한 a태그 인덱스
// 모든 .area-select에서 active 클래스 제거
  $('.area-select').removeClass('active');
// 클릭한 a태그에 active 클래스 추가
  $clicked.addClass('active');

// 모든 .area_cinema_list 숨기기
  $('.area_cinema_list').hide();
// 클릭한 인덱스에 해당하는 .area_cinema_list만 보이기
  $('.area_cinema_list').eq(index).show();
 

});

$(document).on('click', '.area_cinema_list li a', function(e) {
  e.preventDefault();
  
  // 현재 클릭한 a의 부모 <ul> 안에서만 .active 토글
  const $parentUl = $(this).closest('ul');
  
  $parentUl.find('a').removeClass('active'); // 모두 제거
  $(this).addClass('active'); // 클릭한 a만 추가
});


/* 영화 리스트 */
$.getJSON('./json/ticket.json', function (data) {
  const movies = data.movies;

  // 등급별 CSS 클래스 매핑
  const ratingClassMap = {
    "all": "rating_iconall",
    "12": "rating_icon12",
    "15": "rating_icon15",
    "19": "rating_icon19"
  };

  let listItemsHTML = '';

  movies.forEach(function (movie) {
    const iconClass = ratingClassMap[movie.rating] || '';
    const ratingText = movie.rating; // "12", "15" 등

    listItemsHTML += `
      <li>
        <span class="rating_icon ${iconClass}">${ratingText}</span>
        <a href="#">${movie.title}</a>
      </li>
    `;
  });

  const finalHTML = `
    <div class="movie_list">
      <ul class="content scroll_y">
        ${listItemsHTML}
      </ul>
    </div>
  `;

  $('.rating_movie_container').html(finalHTML); // DOM에 삽입
});

$(document).on('click', '.rating_movie_container li a', function(e) {
  e.preventDefault(); // 링크 이동 방지

  const $li = $(this).closest('li');

  // 같은 리스트의 모든 li에서 active 제거
  $li.siblings().removeClass('active');

  // 클릭한 li에 active 추가
  $li.addClass('active');
});


/* 날짜 슬라이드 */























