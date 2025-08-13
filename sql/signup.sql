-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 25-07-13 12:41
-- 서버 버전: 10.4.32-MariaDB
-- PHP 버전: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `signup`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `signup_board`
--

CREATE TABLE `signup_board` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `regdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `signup_board`
--

INSERT INTO `signup_board` (`id`, `username`, `userid`, `password`, `is_admin`, `email`, `regdate`) VALUES
(50, '박경선', 'gungsun1', '$2y$10$81UWh6ww7X6M2Sp.xr5rke5g7003k3WFY6KP9qMzNFdcaH5AcSgmC', NULL, 'gungsun1@naver.com', '2025-07-11'),
(51, '박경선', 'gungsun2', '$2y$10$vQQeZ7E0gtVl1JZXeOYFEOa19Qev6qNHoshAU9a8oRzBequbIZPOy', NULL, 'gungsun1@naver.com', '2025-07-11'),
(52, '박경선', 'gungsun12', '$2y$10$ZzNPjW5WnncpYAFapBrctOD/gz9XnxexxQbS0CJiNYchKvWWV3Fpu', NULL, 'gungsun1@naver.com', '2025-07-13'),
(53, '박경선', 'gungsun13', '$2y$10$2Y5aUtR0/s1qsORBlSMe4eEbWzxMCidPv8gD4Aw.vjqyfTr/4Hsta', NULL, 'gungsu1@naver.com', '2025-07-13'),
(54, '박경선', 'gungsun123', '$2y$10$73ekDuhyWXt4AP9HDOgSXeRZAYTwv63xFrutnHf1RrQOqrx9YTgvy', NULL, 'gungsun1@naver.com', '2025-07-13'),
(55, '관리자', 'admin', '$2y$10$WvUwp9WiNbutREhOvBmWCuuhMEFcDd4Z3nHjiF1mDBb7hDXAIFiD6', 1, 'gungsun1@naver.com', '2025-07-13');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `signup_board`
--
ALTER TABLE `signup_board`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_userid` (`userid`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `signup_board`
--
ALTER TABLE `signup_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
