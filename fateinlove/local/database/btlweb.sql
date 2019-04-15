-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 12:43 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btlweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crush`
--

CREATE TABLE `crush` (
  `uid` varchar(20) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `uid` varchar(20) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(10) UNSIGNED NOT NULL,
  `author` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `mstatus` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `author`, `content`, `mstatus`, `created_at`, `updated_at`) VALUES
(1, 'Huong', 'Chao Thanh!', NULL, '2019-04-04 03:13:31', '2019-04-04 03:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `sid` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`sid`, `name`, `address`, `created_at`, `updated_at`, `logo`) VALUES
('ANH', 'Học Viện An Ninh Nhân Dân', '125 Trần Phú, P. Văn Quán, Hà Đông, Hà Nội', '2019-04-09 17:00:00', '2019-04-16 17:00:00', ''),
('AOF', 'Học Viện Tài Chính', 'Số 58 Lê Văn Hiến, Phường Đức Thắng Quận, Bắc Từ Liêm, Hà Nội', NULL, NULL, ''),
('BKA', 'Trường Đại học Bách Khoa Hà Nội', 'Số 1, Đại Cồ Việt, Hai Bà Trưng, Hà Nội', NULL, NULL, ''),
('BVH', 'Học viện Công Nghệ Bưu Chính Viễn Thông', 'Km10 đường Trần Phú, Phường Mộ Lao, Quận Hà Đông, Thành phố Hà Nội', '2019-04-02 17:00:00', '2019-04-09 17:00:00', ''),
('EDU', 'Đại học Thủy Lợi', 'Số 175 Tây Sơn, Trung Liệt, Đống Đa, Hà Nội ', NULL, NULL, ''),
('EPU', 'Đại học Điện Lực Hà Nội', 'Số 235 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội ', NULL, NULL, ''),
('FTU', 'Đại Học Ngoại Thương', '91 Chùa Láng, Láng Thượng, Đống Đa, Hà Nội', NULL, NULL, ''),
('HaUI', 'Đại học Công Nghiệp Hà Nội', '298 đường Cầu Diễn - phường Minh Khai - Bắc Từ Liêm - Hà Nội. Cơ sở 2: phường Tây Tựu - Bắc Từ Liêm - Hà Nội.', NULL, NULL, ''),
('HLU', 'Đại học Luật Hà Nội', '87 Nguyễn Chí Thanh, Thành Công, Đống Đa, Hà Nội', NULL, NULL, ''),
('HMU', 'Đại học Y Hà Nội', 'Số 1 Tôn Thất Tùng, Kim Liên, Đống Đa, Hà Nội 116001', NULL, NULL, ''),
('HOU', 'Viện đại học Mở Hà Nội', 'B101, đường Nguyễn Hiền, Quận Hai Bà Trưng, Hà Nội', NULL, NULL, ''),
('NEU', 'Đại học Kinh Tế Quóc Dân', '75 Giải Phóng', NULL, NULL, ''),
('NUCE', 'Đại Học Xây Dựng', 'số 55 Giải Phóng, Đồng Tâm, Hai Bà Trưng, Hà Nội', NULL, NULL, ''),
('TMA', 'Đại học Thương Mại', '79 Đường Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Mai Dịch Cầu Giấy Mai Dịch Cầu Giấy Hà Nội ', NULL, NULL, ''),
('VNU', 'Đại học quốc gia Hà Nội', '144 Xuân Thủy, Mai Dịch, Hà Nội', NULL, NULL, ''),
('VNUA', 'Học Viện Nông Nghiệp Việt Nam', 'Thị trấn Trâu Quỳ, Huyện Gia Lâm, Thành phố Hà Nội', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `introduce` varchar(1000) DEFAULT NULL,
  `home` varchar(255) DEFAULT NULL,
  `sid` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `star` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `name`, `birthday`, `gender`, `image`, `introduce`, `home`, `sid`, `created_at`, `updated_at`, `star`) VALUES
('123456', 'daothithu@gmail.com', '$2y$10$S7UbUXR/tZQhq8Rs7XW21erkvV7Q4KRbR1GAvftcKvq40sTT8P6Uu', 'Đào Thị Thu', '14/5/1998', 'Nữ', 'daothithu.jpg', 'Thật thà, dễ gần, nói nhiều, cần bạn nào nói nhiều như mình cho không khí nói nhọn nhịp, đôi khi cũng thích không khí bình yên để nghĩ lại những chuyện đã xảy ra.', 'Hải Phòng', 'BKA', '2019-04-10 02:25:23', '2019-04-10 02:25:23', 1),
('142561', 'trongthang@gmail.com', '$2y$10$nAYcxccQ0w8ltyk9a77wLuuCslPUu9/D9qEFmmrjW1DhgrneS9g6C', 'Nguyễn Trọng Thắng', '12-10-1996', 'Nam', 'trongthang.jpg', NULL, NULL, NULL, '2019-04-12 04:07:01', '2019-04-12 04:07:01', 1),
('145236', 'hovanhung@gmail.com', 'hovanhung', 'Hồ Văn Hưng', '1998-6-3', 'Nam', 'hovanhung.jpg', 'Thích đi du lịch, thích mạo hiểm, thích khám phá, thích biển, thích đá bong, thích lập trình,.. Mong muốn tìm hiểu các bạn nữ hiểu mình, thông cảm cho công việc và sở thích cá nhân', 'Nghệ An', 'BKA', NULL, NULL, 1),
('189456', 'lanta12a5@gmail.com', '$2y$10$ckdXW17A5kj8Rnb/D2Fs1eSg2zhB7l2c96yiGvF94Q.ZcnGEbqsRq', 'Tạ Lan', '26/7/1998', 'Nữ', 'lanta.jpg', 'Hòa đồng, vui vẻ, lạc quan. Vui hết mình , chơi hết sức. ', 'Lục Nam - Bắc Giang', 'BKA', '2019-04-03 05:25:33', '2019-04-03 05:25:33', 1),
('245103', 'kimphung@gmail.com', 'kimphung', 'Nguyễn Kim Phụng', '1999-20-6', 'Nữ', 'kimphung.jpg', 'Hòa đồng vui vẻ, biết nấu ăn, yêu thích thể thao, mong muốn được tìm hiểu với các bạn nam ga lăng, tốt bụng', 'Nghệ Tĩnh', 'BKA', '2018-11-23 06:26:15', '2018-11-24 05:28:10', 1),
('451786', 'dohuong@gmail.com', 'dothihuong', 'Đỗ Thị Hương', '1998-7-8', 'Nữ', 'dohuong.jpg', 'Tính cách hơi nhút nhát một chusrt, biết nấu ăn, thích rất nhiều thứ đặc biệt là đi du lịch và mua sắm. Mong tìm được bạn nào nói nhiều để bớt nhút nhát lại', 'Thanh Hóa', 'BKA', NULL, NULL, 1),
('521465', 'phuonghoa@gmail.com', '$2y$10$yiu4w20xbd9K/T/tFIZgquaPw/a23IXghUXmW4JXPiKdDOw2up18G', 'Phương Hoa', '25-10-1999', 'Nữ', 'phuonghoa.jpg\r\n', NULL, NULL, NULL, '2019-04-12 04:05:40', '2019-04-12 04:05:40', 1),
('845612', 'mainguyen@gmail.com', 'nguyenthimai', 'Mai Nguyễn', '1998-1-23', 'Nữ', 'mainguyen.jpg', 'Mạnh mẽ, cá tính thích mấy trò mạo hiểm, cảm giác mạnh, thích khám phá. Cần tìm người có chung sở thích biết đâu lại có môt điều kì diệu nào đó', 'Lục Nam - Bắc Giang', 'NEU', NULL, NULL, 1),
('845678', 'duongvantrung@gmail.com', 'duongvantrung', 'Đường Văn Chung', '1998-3-5', 'Nam', 'duongtrung.jpg', 'Đẹp trai cao giáo mong muốn tìm hiểu các bạn nữ dễ gần, biết nấu ăn, giàu tình cảm.', 'Nghệ An', 'BKA', NULL, NULL, 1),
('895462', 'thuha@gmail.com', 'phamthithuha', 'Phạm Thị Thu Hà', '1998-10-20', 'Nữ', 'thuha.jpg', 'Tính các hòa đồng, thích tham gia các hoạt động tập thể, hoạt động phong trào, các phòng trào tập thể, tự tin trước đám đông đã từng làm MC nhiều chương trình', 'Hà Tĩnh', 'BKA', NULL, NULL, 1),
('ma1236', 'vuongminhanh@gmail.com', '$2y$10$PWHegxGzsG3FcuQULUbqRONAFfediNl1ALrcjLj/AOaWBBcj/TloK', 'Vương Minh Anh', '27/5/1998', 'Nữ', 'minhanh.jpg', 'Hòa đồng, vui vẻ, dễ gần, năng động', 'Thành phố Bắc Giang', 'BKA', '2019-04-10 02:29:18', '2019-04-10 02:29:18', 1),
('yen1234', 'nguyenthiyen@gmail.com', '$2y$10$zTd9UIl8a/op1KLYHEzztO0cDGzn7msC8o4OsFE5eVwYKIWiF6X.6', 'Nguyễn Thị Yên', '27/10/1998', 'Nữ', 'yennguyen.jpg', 'Thân thiện, hòa đồng, dễ gần', 'Nghệ An', 'BKA', '2019-04-10 02:35:54', '2019-04-10 02:35:54', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crush`
--
ALTER TABLE `crush`
  ADD KEY `uid` (`uid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD KEY `uid` (`uid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `sid` (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crush`
--
ALTER TABLE `crush`
  ADD CONSTRAINT `crush_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `crush_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `school` (`sid`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `school` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
