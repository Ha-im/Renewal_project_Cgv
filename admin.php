<?php
session_start();
// 관리자 체크
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    echo "<script>alert('관리자만 접근 가능합니다.'); history.back();</script>";
    exit;
}
if (isset($_SERVER['HTTP_SEC_FETCH_DEST']) && $_SERVER['HTTP_SEC_FETCH_DEST'] === 'iframe') {
  header("Location: /admin.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      <!-- 모든 메뉴에 data-page 속성 사용 -->
      <li><a href="#" data-page="user.php">회원 관리</a></li>
      <li><a href="#" data-page="admin_rank.php">영화 관리</a></li>
      <li><a href="#" data-page="plan.php">상영 예정작 관리</a></li>
      <li><a href="#" data-page="recommend.php">추천 영화 관리</a></li>
      <li><a href="#" data-page="event.php">이벤트 관리</a></li>
      <li><a href="#" data-page="cinema.php">시네마관 관리</a></li>
      <li><a href="#" data-page="location.php">지점 정보 관리</a></li>
      <li><a href="#" data-page="app.php">앱 다운로드 관리</a></li>
      <li><a href="#" data-page="banner.php">슬라이드/배너 관리</a></li>
      <li><a href="#" data-page="json.php">JSON 파일 관리</a></li>
      <li><a href="#" data-page="account.php">관리자 계정 설정</a></li>
      <li><a href="#" data-page="stats.php">통계 및 로그 보기</a></li>
    </ul>
  </aside>

  <div class="admin-content">
    <iframe id="adminFrame" name="adminFrame" src="welecom.php"></iframe>
  </div>

  <script>
  const links = document.querySelectorAll('.admin-menu a');
  const frame = document.getElementById('adminFrame');

  links.forEach(link => {
    link.addEventListener('click', function(e) {
      const page = this.dataset.page || this.getAttribute('href');

      // 사이드바 포함된 전체 레이아웃 페이지는 iframe으로 열지 않도록 필터
      const layoutPages = ['admin.php', 'index.php', 'welecom.php'];

      if (layoutPages.some(p => page && page.includes(p))) {
        e.preventDefault();
        // 해당 페이지를 전체 창에서 열기
        window.location.href = page;
        return;
      }

      // iframe에 콘텐츠 페이지 로드
      if (page) {
        e.preventDefault();
        frame.src = page;
      }
    });
  });
</script>

<!-- ✅ JS로 iframe 중복 방지: admin.php가 iframe 안에서 열리면 빠져나옴 -->
<script>
  if (window !== window.parent) {
    // 이 페이지가 iframe 안에 있다면, 상위 페이지로 이동
    window.top.location.href = window.location.href;
  }
</script>
</body>
</html>