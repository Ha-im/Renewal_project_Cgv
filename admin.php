<?php
session_start();
// 관리자 체크
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    echo "<script>alert('관리자만 접근 가능합니다.'); history.back();</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>관리자페이지</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      display: flex;
      height: 100vh;
      overflow: hidden;
    }
    .admin-sidebar {
      width: 240px;
      background: #1e1e2f;
      color: white;
      padding: 20px;
      box-sizing: border-box;
    }
    .admin-menu {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .admin-menu li {
      margin-bottom: 16px;
    }
    .admin-menu a {
      display: block;
      color: white;
      text-decoration: none;
      font-weight: 500;
      padding: 10px 14px;
      border-radius: 8px;
      transition: background 0.3s;
    }
    .admin-menu a:hover {
      background: #383854;
    }
    .admin-content {
      flex-grow: 1;
      border-left: 1px solid #ccc;
    }
    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
    
  </style>
</head>
<body>
<aside class="admin-sidebar">
  <ul class="admin-menu">
    <li><a href="user.php">회원 관리</a></li>
    <li><a href="#" data-page="admin_rank.php">영화 관리</a></li>
    <li><a href="plan.php">상영 예정작 관리</a></li>
    <li><a href="recommend.php">추천 영화 관리</a></li>
    <li><a href="event.php">이벤트 관리</a></li>
    <li><a href="cinema.php">시네마관 관리</a></li>
    <li><a href="location.php">지점 정보 관리</a></li>
    <li><a href="app.php">앱 다운로드 관리</a></li>
    <li><a href="banner.php">슬라이드/배너 관리</a></li>
    <li><a href="json.php">JSON 파일 관리</a></li>
    <li><a href="account.php">관리자 계정 설정</a></li>
    <li><a href="stats.php">통계 및 로그 보기</a></li>
  </ul>
</aside>
  <!-- 콘텐츠 영역 -->
  <div class="admin-content">
    <iframe id="adminFrame" name="adminFrame" src="welecom.php"></iframe>
  </div>
    <script>
const links = document.querySelectorAll('.admin-menu a');
const frame = document.getElementById('adminFrame');

  function setSelected(index) {
    [...movieList.children].forEach((li, i) => {
      li.classList.toggle('selected', i === index);
    });

    const movie = movies[index];
    document.getElementById('movieId').value = movie.id || '';
    document.getElementById('number').value = movie.number || '';
    document.getElementById('title').value = movie.title || '';
    document.getElementById('subtitle').value = movie.subtitle || '';
    document.getElementById('description').value = movie.description || '';
    document.getElementById('rating').value = movie.rating || '';
    document.getElementById('poster').value = movie.poster || '';
    document.getElementById('bg').value = movie.bg || '';
  }

  // 초기 첫번째 영화 선택
  if(movies.length > 0) setSelected(0);

  movieList.addEventListener('click', e => {
    const li = e.target.closest('li');
    if (!li) return;
    const index = Number(li.dataset.index);
    setSelected(index);
  });
</script>

</body>
</html>