<?php
session_start();
// 관리자 체크
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    echo "<script>alert('관리자만 접근 가능합니다.'); history.back();</script>";
    exit;
}

// JSON 파일 경로
$jsonFile = __DIR__ . '/json/rank.json';

// JSON 파일 읽기 + 디코드
if (file_exists($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    $jsonData = json_decode($jsonContent, true);
    $movies = $jsonData['movies'] ?? [];
} else {
    $movies = [];
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>관리자 페이지</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0; 
            padding: 0;
            display: flex;
            height: 100vh;
            background: #000;
            color: #fff;
        }
        .sidebar {
            width: 320px;
            background: #fff;
            color: #000;
            border-right: 1px solid #ddd;
            overflow-y: auto;
        }
        .sidebar h2 {
            margin: 0; padding: 16px;
            border-bottom: 1px solid #ddd;
            font-size: 1.2rem;
            background: #007bff;
            color: white;
        }
        ul.movie-list {
            list-style: none;
            margin: 0; padding: 0;
        }
        ul.movie-list li {
            padding: 12px 16px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: background 0.3s;
            color: #000;
        }
        ul.movie-list li:hover {
            background: #f7f9fc;
        }
        ul.movie-list li.selected {
            background: #cce5ff;
            font-weight: bold;
        }
        ul.movie-list li img {
            width: 50px;
            height: 70px;
            object-fit: cover;
            border-radius: 4px;
        }
        .main-content {
            flex-grow: 1;
            padding: 24px;
            background: #fff;
            color: #000;
            overflow-y: auto;
        }
        .main-content h2 {
            margin-top: 0;
        }
        form label {
            display: block;
            margin: 12px 0 4px;
            font-weight: 600;
        }
        form input[type="text"],
        form input[type="number"],
        form textarea {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 1rem;
            resize: vertical;
            box-sizing: border-box;
        }
        form textarea {
            height: 120px;
        }
        form button {
            margin-top: 16px;
            padding: 10px 18px;
            font-weight: 600;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="sidebar">
  <h2>영화 목록</h2>
  <ul class="movie-list" id="movieList">
    <?php foreach($movies as $idx => $movie): ?>
      <li data-index="<?= $idx ?>">
        <img src="<?= htmlspecialchars($movie['poster']) ?>" alt="<?= htmlspecialchars($movie['title']) ?>" />
        <div>
          <strong><?= htmlspecialchars($movie['number'] . '. ' . $movie['title']) ?></strong><br />
          <small><?= htmlspecialchars($movie['subtitle']) ?></small>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
        <button type="submit">추가하기</button>
</div>

<div class="main-content">
  <h2>영화 정보 수정</h2>
  <form id="movieForm" method="POST" action="admin_movie_update.php">
    <input type="hidden" name="id" id="movieId" value="" />

    <label for="number">번호</label>
    <input type="text" name="number" id="number" readonly />

    <label for="title">제목</label>
    <input type="text" name="title" id="title" required />

    <label for="subtitle">부제</label>
    <input type="text" name="subtitle" id="subtitle" />

    <label for="description">줄거리</label>
    <textarea name="description" id="description" required></textarea>

    <label for="rating">별점 (1~5)</label>
    <input type="number" name="rating" id="rating" min="1" max="5" required />

    <label for="poster">포스터 이미지 URL</label>
    <input type="text" name="poster" id="poster" required />

    <label for="bg">백그라운드 이미지 URL</label>
    <input type="text" name="bg" id="bg" required />

    <button type="submit">수정</button>
  </form>
</div>

<script>
  const movies = <?= json_encode($movies, JSON_UNESCAPED_UNICODE) ?>;
  const movieList = document.getElementById('movieList');

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