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


 const sliderWrapper = document.querySelector('.slider_wrapper');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const timeSections = document.querySelectorAll('.time_section');

  const startDate = new Date(2025, 6, 13); // 2025년 7월 13일
  const endDate = new Date(2025, 6, 31);
  const totalDays = (endDate - startDate) / (1000 * 60 * 60 * 24) + 1;

  let currentSlide = 0;
  const daysPerSlide = 8;

  // 요일 배열
  const dayNames = ['일', '월', '화', '수', '목', '금', '토'];

  // 날짜 슬라이드 생성
  function generateSlides() {
    sliderWrapper.innerHTML = ''; // 초기화

    const slideCount = Math.ceil(totalDays / daysPerSlide);

    for (let i = 0; i < slideCount; i++) {
      const slideGroup = document.createElement('div');
      slideGroup.classList.add('slide_group');

      for (let j = 0; j < daysPerSlide; j++) {
        const dayIndex = i * daysPerSlide + j;
        const date = new Date(startDate);
        date.setDate(startDate.getDate() + dayIndex);

        if (date > endDate) break;

        const day = date.getDate();
        const weekday = dayNames[date.getDay()];

        const slide = document.createElement('div');
        slide.classList.add('slide');
        slide.innerHTML = `<a href="#" data-day="${day}"><span>${day}</span><span>${weekday}</span></a>`;
        slideGroup.appendChild(slide);
      }

      sliderWrapper.appendChild(slideGroup);
    }

    updateSlideView();
  }

  // 슬라이드 뷰 업데이트
  function updateSlideView() {
    const slideGroups = document.querySelectorAll('.slide_group');
    slideGroups.forEach((group, index) => {
      group.style.display = index === currentSlide ? 'flex' : 'none';
    });
  }

  // 버튼 이벤트
  prevBtn.addEventListener('click', () => {
    if (currentSlide > 0) {
      currentSlide--;
      updateSlideView();
    }
  });

  nextBtn.addEventListener('click', () => {
    const maxSlide = Math.ceil(totalDays / daysPerSlide) - 1;
    if (currentSlide < maxSlide) {
      currentSlide++;
      updateSlideView();
    }
  });

  // 날짜 클릭 이벤트 처리
  document.addEventListener('click', (e) => {
    if (e.target.closest('.slide a')) {
      e.preventDefault();
      const clicked = e.target.closest('.slide a');
      const selectedDay = clicked.dataset.day;

      // 모든 a에서 active 제거
      document.querySelectorAll('.slide a span:first-child').forEach(el => el.classList.remove('active'));

      // 현재 클릭된 날짜에 active
      clicked.querySelector('span:first-child').classList.add('active');

      // 모든 time_section 숨기고 active 제거
     timeSections.forEach(section => {
  section.style.display = 'block';
});
    }
  });

document.addEventListener('click',(e) => {
  const timeButton = e.target.closest('time_select');
  if(timeButton){
    const timeSection = timeButton.closest('.time_section');

    timeSection.querySelectorAll('.time_select').forEach(btn => btn.classList.remove('active'));

    timeButton.classList.add('active');
  }
});


document.addEventListener('click', (e) => {
  const timeButton = e.target.closest('.time_select'); // ← 수정된 부분
  if (timeButton) {
    const timeSection = timeButton.closest('.time_section');

    timeSection.querySelectorAll('.time_select').forEach(btn => btn.classList.remove('active'));

    timeButton.classList.add('active');
  }
});

  generateSlides();
















