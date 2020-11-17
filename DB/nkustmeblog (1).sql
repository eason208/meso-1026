-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `nkustmeblog`
--

-- --------------------------------------------------------

--
-- 資料表結構 `cadre`
--

CREATE TABLE `cadre` (
  `id` int(11) NOT NULL,
  `sku` varchar(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `ig` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `cadre`
--

INSERT INTO `cadre` (`id`, `sku`, `name`, `description`, `photo`, `price`, `ig`) VALUES
(1, 'M001', '莊釋閔 會長', '班級：進四機三甲', 'imags/莊釋閔.jpg', 20000, 'di_renjie_89713'),
(2, 'M002', '謝呈易 副會長', '班級：進四機三甲', 'imags/謝呈易.jpg', 18000, 'eason_0610'),
(3, 'M003', '蔡慶彥 文書長', '班級：進四機三甲', 'imags/蔡慶彥.jpg', 25000, 'ching.yen_'),
(4, 'M004', '黃柏涵 財務長', '班級：進四機三甲', 'imags/黃柏涵.jpg', 30000, 'eason89327'),
(5, 'M005', '晏嘉良 公關長', '班級：進四機三甲', 'imags/晏嘉良.jpg', 200, 'tmac881011'),
(6, 'M006', '趙敏惠 活動長', '班級：進四機三甲', 'imags/趙敏惠.jpg', 20000, 'min_hui1113');

-- --------------------------------------------------------

--
-- 資料表結構 `cooperativestore`
--

CREATE TABLE `cooperativestore` (
  `storename` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `cooperativestore`
--

INSERT INTO `cooperativestore` (`storename`, `link`, `id`) VALUES
('大饌章魚燒—建工店', '\"<iframe src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.0407217952697!2d120.32628001491233!3d22.652270285141867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e04d88d17a525%3A0xfcc034f4de66d7aa!2z5aSn6aWM56ug6a2a54eS4oCU5bu65bel5bqX!5e0!3m2!1szh-TW!2stw!4v1605247936545!5m2!1szh-TW!2stw\' width=\'600\' height=\'450\' frameborder=\'0\' style=\'border:0;\' allowfullscreen=\'\' aria-hidden=\'false\' tabindex=\'0\'></iframe>\"', 1),
('頂好豆花 大昌店', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14728.66280484641!2d120.30953392735515!3d22.647609762305933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e05abd46281cd%3A0xb972776ac139ce99!2z6aCC5aW96LGG6IqxIOWkp-aYjOW6lw!5e0!3m2!1szh-TW!2stw!4v1605248656358!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2),
('品味小吃', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.4641821151504!2d120.32534078025067!3d22.64984848199972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd647207cd58c673!2z5ZOB5ZGz5bCP5ZCD!5e0!3m2!1szh-TW!2stw!4v1605248796352!5m2!1szh-TW!2stw\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `mem`
--

CREATE TABLE `mem` (
  `id` int(11) NOT NULL,
  `sku` varchar(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(200) NOT NULL,
  `price` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `mem`
--

INSERT INTO `mem` (`id`, `sku`, `name`, `description`, `photo`, `price`) VALUES
(1, 'M001', '方得華 講座教授兼系主任 設計與製造', '授課領域：奈米材料、微系統量測\r\n研究專長：奈米製造、太陽能電池與光電感測元件、分子動力學、奈米結構分析與掃描探針顯微術', 'imags/方得華.jpg', 'http://me.nkust.edu.tw/front/members/members1/member.php?ID=a3Vhc19tZSZtZW1iZXJzMQ==&PID=25'),
(2, 'M002', '江家慶 教授兼副系主任 設計與製造', '授課領域：光電檢測、雷射加工專題、產業實務實習、光電工程、專題研討\r\n研究專長：準分子雷射(KrF)微細加工、金屬合金熔煉銲接', 'imags/江家慶.jpg', 'http://me.nkust.edu.tw/front/members/members1/member.php?ID=a3Vhc19tZSZtZW1iZXJzMQ==&PID=34'),
(3, 'M003', '張國明 教授 機光電與控制', '授課領域：自動控制、實務專題、專題研討\r\n研究專長：自動化技術、變結構系統控制、非線性系統分析與控制', 'imags/張國明.jpg', 'http://me.nkust.edu.tw/front/members/members1/member.php?ID=a3Vhc19tZSZtZW1iZXJzMQ==&PID=13'),
(4, 'M004', '林明宏 教授 材料與能源', '授課領域：電機實驗、電腦輔助機械製圖、電腦3D工程繪圖\r\n研究專長：自動化技術、機械固力', 'imags/林明宏.jpg', 'http://me.nkust.edu.tw/front/members/members1/member.php?ID=a3Vhc19tZSZtZW1iZXJzMQ==&PID=21'),
(5, 'M005', '鄭良安 教授 機光電與控制', '授課領域：材料科學、材料實驗、熱處理\r\n研究專長：機械材料、陶瓷材料、熱處理、表面改質', 'imags/鄭良安.jpg', 'http://me.nkust.edu.tw/front/members/members1/member.php?ID=a3Vhc19tZSZtZW1iZXJzMQ==&PID=23'),
(6, 'M006', '陳昭先 教授 機光電與控制', '授課領域：幾何光學、現代光學工程基礎、實務專題、工程數學\r\n研究專長：光學設計量測、光學軟體、光學系統、液晶及DLP投影顯示技術', 'imags/陳昭先.jpg', 'http://me.nkust.edu.tw/front/members/members1/member.php?ID=a3Vhc19tZSZtZW1iZXJzMQ==&PID=35');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `postdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `message`, `postdate`) VALUES
(4, '聽說會長吃素', '2020-11-10 11:37:51'),
(5, '阿吉', '2020-11-10 11:38:17'),
(6, '假新聞拉', '2020-11-12 16:34:32'),
(7, '何老師好帥', '2020-11-12 17:28:58'),
(8, '.........', '2020-11-13 11:15:48'),
(9, '高科發大財', '2020-11-13 11:25:30');

-- --------------------------------------------------------

--
-- 資料表結構 `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `postdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `post`
--

INSERT INTO `post` (`id`, `message`, `link`, `postdate`) VALUES
(1, '!!!請所有學制新生，盡速完成新生線上安全衛生教育訓練!!!', 'http://me.nkust.edu.tw/front/news/news.php?ID=a3Vhc19tZSZuZXdz&Sn=1038', '2020-10-06'),
(2, '(防疫)開學6件事，請大家配合遵守!!!', 'http://me.nkust.edu.tw/front/news/news.php?ID=a3Vhc19tZSZuZXdz&Sn=1030', '2020-10-26'),
(3, '高科大三週年校慶活動公告', 'https://ceed.nkust.edu.tw/p/406-1014-38118,r11.php', '2020-10-11'),
(4, '本校建工校區進修推廣處處長室即日起招募1名工讀生', 'https://ceed.nkust.edu.tw/p/405-1014-37807,c843.php', '2020-11-06'),
(5, '自109年10月19日(星期一)起開放列印進修推廣處加選繳費單，繳費截止日109年10月25日(星期日)', 'https://ceed.nkust.edu.tw/p/406-1014-37599,r11.php', '2020-10-17'),
(6, '高科大DK SHOP品牌商店開幕慶，臉書分享就抽 !!', 'http://dkshop.nkust.edu.tw/nkust_cee/cee/index/detail/21', '2020-11-06');

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `sid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  `class` varchar(20) NOT NULL,
  `job` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `sid`, `mid`, `sname`, `password`, `class`, `job`) VALUES
(1, 'C107242135', '1', '莊釋閔', '1234', '進四機三甲', '會長'),
(2, 'C107242127', '1', '謝呈易', '6810', '進四機三甲', '副會長'),
(3, 'C107242134', '1', '蔡慶彥', '1234', '進四機三甲', '文書長'),
(4, 'C107242105', '1', '黃柏涵', '8586', '進四機三甲', '財務長'),
(5, 'C107242101', '1', '晏嘉良', '1234', '進四機三甲', '公關長'),
(6, 'C107242133', '1', '趙敏惠', '1234', '進四機三甲', '活動長'),
(7, 'C107242104', '2', '王俊霖', '0775', '進四機三甲', '會員'),
(8, 'C107242107', '2', '顏甫宸', '1234', '進四機三甲', '會員'),
(9, 'C107283119', '2', '翁慶瑋', '0910', '進四機二甲', '會員'),
(21, 'C107242121', '2', '熊瑀晟', '0000', '進四機三甲', '會員'),
(23, 'C107242136', '2', '陳敬宗', '0000', '進四機三甲', '會員'),
(24, 'C107242139', '2', '徐國碩', '0000', '進四機三甲', '會員'),
(25, 'C107242147', '2', '李冠鴻', '0000', '進四機三甲', '會員'),
(26, 'C108242101', '2', '黃子嘉', '0000', '進四機二甲', '會員');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `cadre`
--
ALTER TABLE `cadre`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `cooperativestore`
--
ALTER TABLE `cooperativestore`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cadre`
--
ALTER TABLE `cadre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cooperativestore`
--
ALTER TABLE `cooperativestore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
