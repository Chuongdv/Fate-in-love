-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 10:36 AM
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
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` varchar(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `address`, `logo`, `created_at`, `updated_at`) VALUES
('11111', 'Học Viện An Ninh Nhân Dân', '', 'anh.jpg', NULL, NULL),
('22222', 'Đại học Bách Khoa Hà Nội', '', 'bka.jpg', NULL, NULL),
('33333', 'Đại học Kinh Tế Quốc Dân', '', 'neu.jpg', NULL, NULL),
('44444', 'Đại học Quốc Gia Hà Nội', '', 'vnu.jpg', NULL, NULL),
('55555', 'Học Viện Nông Nghiệp Việt Nam', '', 'vnua.jpg', NULL, NULL),
('66666', 'Học Viện Tài Chính', '', 'aof.jpg', NULL, NULL),
('77777', 'Đại học Ngoại Thương', '', 'ftu.jpg', NULL, NULL),
('88888', 'Đại học Luật Hà Nội', '', 'hlu.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(8) NOT NULL,
  `sid` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `birthday` varchar(12) DEFAULT NULL,
  `home` varchar(100) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `star` varchar(1) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `sid`, `email`, `password`, `name`, `gender`, `birthday`, `home`, `introduce`, `star`, `image`, `created_at`, `updated_at`) VALUES
('123045', '22222', 'duythanh@gmail.com', '$2y$10$JrVn1YLFXwGJGTzRtw3nGuMKhct275nyarrHfOsmLYx8Vhy6w0v22', 'Duy Thành', 'Nam', '1996-10-12', NULL, NULL, NULL, NULL, '2019-04-20 13:35:09', '2019-04-20 13:35:09'),
('123451', '22222', 'daothithu@gmail.com', '$2y$10$toveruAgvyfj1aqkKyUU7eT6iRZ63XWDY4QQUi51vFi12J1jHuAvS', 'Đào Thị Thu', 'Nữ', '1998-2-15', 'Hải Phòng', 'Vui hết mình, chơi hết sức', '1', 'daothithu.jpg', '2019-04-20 02:39:27', '2019-04-20 02:39:27'),
('123452', '22222', 'yenguyen@gmail.com', '$2y$10$KUOUE693NngOhjL6wPnbNOeP6Mnv.MTHFVgFIVxYoGoTu3G.Uu0uW', 'Yên Nguyễn', 'Nữ', '1998-10-10', 'Nghệ An', 'Vui hết mình, chơi hết sức', '1', 'yennguyen.jpg', '2019-04-20 02:40:31', '2019-04-20 02:40:31'),
('123453', '22222', 'thodat@gmail.com', '$2y$10$j7lQuK/7F.hd1qy4PN6XduVe98gulg3hdpuhVEC70Hj5jFoDXI1k6', 'Thọ Đạt', 'Nữ', '1998-5-4', 'Lục Nam - Bắc Giang', 'Vui hết mình, chơi hết sức', '1', 'thodat.jpg', '2019-04-20 02:41:17', '2019-04-20 02:41:17'),
('123454', '22222', 'dohuong@gmail.com', '$2y$10$M9GdvLh5DypiJfpZkdMfHeg0mJ3G2NawybTktJKkdxovov2zq9DSy', 'Đỗ Hương', 'Nữ', '1998-2-15', 'Thanh Hóa', 'Vui hết mình, chơi hết sức', '1', 'dohuong.jpg', '2019-04-20 02:42:08', '2019-04-20 02:42:08'),
('123455', '22222', 'minhanh@gmail.com', '$2y$10$Coh5UhtQQ1w0OK1wMwdvCekf257G3nohlX26WYiMMQNrTGfJ04lTm', 'Minh Anh', 'Nữ', '1998-10-2', 'Hà Nội', 'Vui hết mình, chơi hết sức', '1', 'minhanh.jpg', '2019-04-20 02:44:04', '2019-04-20 02:44:04'),
('123456', '11111', 'lanta12a5@gmail.com', '$2y$10$Yv8wbScXT39eX.6o25rdNuNVhURDzyUykizyjwAbj.KESV5Gn8jRW', 'Lan Tím', 'Nữ', '1998-7-26', 'Lục Nam - Bắc Giang', 'Vui hết mình chơi hết sức', '1', 'lanta.jpg', '2019-04-20 02:34:57', '2019-04-20 13:54:30'),
('123457', '22222', 'hovanhung@gmail.com', '$2y$10$sLZBhTBQkX5BvAIFAdBh7eupl2J5OaIP.VfqGvnDsGmAB7cwEgLzO', 'Hồ Văn Hưng', 'Nam', '1998-7-26', 'Nghệ An', 'Vui hết mình, chơi hết sức', '1', 'hovanhung.jpg', '2019-04-20 02:46:46', '2019-04-20 02:46:46'),
('123458', '22222', 'duongtrung@gmail.com', '$2y$10$dzJ7hmtjdMG4aa0D80yfdOE1d64GCgFDPKamaNIPnJdz3LjLjzjsu', 'Đường Trung', 'Nam', '1998-10-10', 'Nghệ An', 'Vui hết mình, chơi hết sức', '1', 'duongtrung.jpg', '2019-04-20 02:47:21', '2019-04-20 02:47:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
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
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `schools` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
