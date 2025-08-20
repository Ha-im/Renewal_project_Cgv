
<main class="main_container">

<!-- 극장 > 전체 리스트 -->
<div class="cinema_section">  
  <div class="header header_1">
    <span>극장</span>
  </div>
  <div class="tab_btn cinema_tab"><span>모든 상영관</span></div>
  
  <div class="cinema_list">
    <!-- 여기에 상영관 목록 추가 -->
  </div> 
</div>

<!-- 영화 > 전체 리스트 -->
<div class="movie_section">  
  <div class="header header_2">
    <span>영화</span>
  </div>
    <div class="tab_button">
      <button class="tab_btn tab_movie active">
        <span>전체</span>
      </button>
      <button class="tab_btn tab_movie">
        <span>특별관</span>
      </button>
    </div>
    <div class="rating_movie_container"></div>
</div>
    <!-- 여기에 영화 목록 추가 -->
<!-- 영화 > 특별관 리스트 -->

</div>
<!-- 날짜 section -->
<div class="date_section">
  <div class="header header_3">
    <span>날짜</span>
  </div>
  <div class="date">

    <div class="calendar_container">
      <div class="month_title"><span>7월</span></div>
     
      <div class="slide_container">
        <button class="nav_btn" id="prevBtn">
          <span class="material-symbols-outlined">chevron_left</span>
        </button>
          <div class="slider_content">
            <div class="slider_wrapper">
              <div class="slide">
                <a href=""><span>14</span><span>월</span></a>
              </div>
              <div class="slide">
                <a href=""><span class="active">15</span><span>화</span></a>
              </div>
              <div class="slide">
                <a href=""><span>16</span><span>수</span></a>
              </div>
              <div class="slide">
                <a href=""><span>17</span><span>목</span></a>
              </div>
              <div class="slide">
                <a href=""><span>18</span><span>금</span></a>
              </div>
              <div class="slide">
                <a href=""><span>19</span><span>토</span></a>
              </div>
              <div class="slide">
                <a href=""><span>20</span><span>일</span></a>
              </div>
              <div class="slide">
                <a href=""><span>21</span><span>월</span></a>
              </div>
            </div>
          </div>                        
          
        <button class="nav_btn" id="nextBtn">
          <span class="material-symbols-outlined">chevron_right</span>
        </button>
      </div>

    </div>
    <div class="line"></div>
  </div>

<!-- time -->
<div class="time_section">
  <div class="movie_title">
    <span class="rating_icon rating_iconall">all</span>
    <h2>바람계곡의 나우시카</h2>
  </div>
<div class="time_wrap">
  <div class="time_wrapper">
    <h3>2D</h3>
    <div class="time_container">
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
    </div>
  </div>

  <div class="time_wrapper">
    <h3>xscreen</h3>
    <div class="time_container">
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
      <button class="time_select">
        <div><span class="time">11:20</span></div>
        <div class="theater_data">
          <div class="seat">89/156</div>
          <div><span class="theater">2관</span></div>
        </div>
      </button>
    </div>
  </div>
  </div>
  </div>
  
</div>
</div>

<!-- left tab -->

  <div class="booking_step">
      <div class="booking_tab active" data-step="1">
        <div>01</div>
        <div>상영시간</div>
      </div>
      <div class="booking_tab" data-step="2">
        <div>02</div>
        <div>인원/좌석</div>
      </div>
      <div class="booking_tab" data-step="3">
        <div>03</div>
        <div>결제</div>
      </div>
      <div class="booking_tab" data-step="4">
        <div>04</div>
        <div>결제완료</div>
      </div>
  </div>

<button type="button" class="next_page" onclick="location.href='http://gungsun1.dothome.co.kr/Renewal_project_Cgv/ticket_seat.php'">
  다음
</button>
</main>
