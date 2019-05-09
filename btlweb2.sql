-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2019 lúc 12:54 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btlweb2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
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
-- Cấu trúc bảng cho bảng `crush`
--

CREATE TABLE `crush` (
  `uid` varchar(8) NOT NULL,
  `cid` varchar(8) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `crush`
--

INSERT INTO `crush` (`uid`, `cid`, `created_at`, `updated_at`) VALUES
('123045', '123452', NULL, NULL),
('123451', '123045', NULL, NULL),
('123456', '123045', NULL, NULL),
('123456', '123451', NULL, NULL),
('123456', '123454', NULL, NULL),
('123456', '1234564', NULL, NULL),
('123456', '1234565', NULL, NULL),
('123456', '1234566', NULL, NULL),
('123456', '1234569', NULL, NULL),
('123456', '123457', NULL, NULL),
('123456', '1234570', NULL, NULL),
('123456', '123458', NULL, NULL),
('123456', '123460', NULL, NULL),
('123457', '123045', NULL, NULL),
('123458', '123045', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fschool`
--

CREATE TABLE `fschool` (
  `uid` varchar(8) NOT NULL,
  `sid` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `fschool`
--

INSERT INTO `fschool` (`uid`, `sid`, `created_at`, `updated_at`) VALUES
('123456', '11111', NULL, NULL),
('123456', '22222', NULL, NULL),
('123456', '33333', NULL, NULL),
('123456', '55555', NULL, NULL),
('123456', '77777', NULL, NULL),
('123456', '88888', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_28_094043_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schools`
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
-- Đang đổ dữ liệu cho bảng `schools`
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
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `sid`, `email`, `password`, `name`, `gender`, `birthday`, `home`, `introduce`, `star`, `image`, `created_at`, `updated_at`) VALUES
('123045', '22222', 'duythanh@gmail.com', '$2y$10$JrVn1YLFXwGJGTzRtw3nGuMKhct275nyarrHfOsmLYx8Vhy6w0v22', 'Duy Thành', 'Nam', '1996-10-12', 'Lục Nam - Bắc Giang', 'Quanh năm chỉ ăn với chụp ảnh', '1', 'duythanh.jpg', '2019-04-20 13:35:09', '2019-04-20 13:35:09'),
('123451', '22222', 'daothithu@gmail.com', '$2y$10$toveruAgvyfj1aqkKyUU7eT6iRZ63XWDY4QQUi51vFi12J1jHuAvS', 'Đào Thị Thu', 'Nữ', '1998-2-15', 'Hải Phòng', 'Vui hết mình, chơi hết sức', '1', 'daothithu.jpg', '2019-04-20 02:39:27', '2019-04-20 02:39:27'),
('123452', '22222', 'yenguyen@gmail.com', '$2y$10$KUOUE693NngOhjL6wPnbNOeP6Mnv.MTHFVgFIVxYoGoTu3G.Uu0uW', 'Yên Nguyễn', 'Nữ', '1998-10-10', 'Nghệ An', 'Vui hết mình, chơi hết sức', '1', 'yennguyen.jpg', '2019-04-20 02:40:31', '2019-04-20 02:40:31'),
('123453', '22222', 'thodat@gmail.com', '$2y$10$j7lQuK/7F.hd1qy4PN6XduVe98gulg3hdpuhVEC70Hj5jFoDXI1k6', 'Thọ Đạt', 'Nữ', '1998-5-4', 'Lục Nam - Bắc Giang', 'Vui hết mình, chơi hết sức', '1', 'thodat.jpg', '2019-04-20 02:41:17', '2019-04-20 02:41:17'),
('123454', '22222', 'dohuong@gmail.com', '$2y$10$M9GdvLh5DypiJfpZkdMfHeg0mJ3G2NawybTktJKkdxovov2zq9DSy', 'Đỗ Hương', 'Nữ', '1998-2-15', 'Thanh Hóa', 'Vui hết mình, chơi hết sức', '1', 'dohuong.jpg', '2019-04-20 02:42:08', '2019-04-20 02:42:08'),
('123455', '22222', 'minhanh@gmail.com', '$2y$10$Coh5UhtQQ1w0OK1wMwdvCekf257G3nohlX26WYiMMQNrTGfJ04lTm', 'Minh Anh', 'Nữ', '1998-10-2', 'Hà Nội', 'Vui hết mình, chơi hết sức', '1', 'minhanh.jpg', '2019-04-20 02:44:04', '2019-04-20 02:44:04'),
('123456', '11111', 'lanta12a5@gmail.com', '$2y$10$Yv8wbScXT39eX.6o25rdNuNVhURDzyUykizyjwAbj.KESV5Gn8jRW', 'Lan Tím', 'Nữ', '1998-7-26', 'Lục Nam - Bắc Giang', 'Vui hết mình chơi hết sức', '1', 'lanta.jpg', '2019-04-20 02:34:57', '2019-04-20 13:54:30'),
('1234561', '22222', 'hoangnam@gmail.com', '$2y$10$c4eW9GJb/Y7oevhAjOxG5.PZ9C6LpUCjvtckIJhGv9OEz8as4C2.q', 'Hoàng Nam', 'Nam', '1998-5-5', 'Hà Nội', 'Học chăm quá nên hay chửi thề', NULL, 'hoangnam.jpg', '2019-04-25 03:15:43', '2019-04-25 03:15:43'),
('1234562', '33333', 'phuonghoa@gmail.com', '$2y$10$EzDVjlF1SpSvYJOgzNFeyeqyXBXF73ORotkB0o3cyykBoSQ9xqEhy', 'Phương Hoa', 'nu', '1998-6-6', 'Lục Nam - Bắc Giang', 'Năng động, sáng tạo. Tuổi trẻ tài cao', NULL, 'phuonghoa.jpg', '2019-04-25 03:17:01', '2019-04-25 03:17:01'),
('1234563', '77777', 'trantieucuc@gmail.com', '$2y$10$xyEUy0Vpujlh2aveArWCpe1wtuG8iFuC85/IB8dpcezGIzm3RNpTy', 'Trần Tiểu Cúc', 'nu', '1998-12-1', 'Lục Nam - Bắc Giang', 'Vui vẻ, nhiệt huyết, đam mê ca hát và tính nguyện', NULL, 'trantieucuc.jpg', '2019-04-25 03:19:20', '2019-04-25 03:19:20'),
('1234564', '66666', 'vuvo@gmail.com', '$2y$10$nMIRZLqNWQUbeiZKXv.bEelbrGjD7ilQ.I.CcFSj8Cr8iR0IeH2FO', 'Vu Vơ', 'Nữ', '1998-8-8', 'Lục Nam - Bắc Giang', 'Vui vẻ, hòa đồng, hoạt bát, năng động', NULL, 'haunguyen.jpg', '2019-04-25 03:20:04', '2019-04-25 03:20:04'),
('1234565', '88888', 'minhanhhihi@gmail.com', '$2y$10$t6KHt6raEYQ50Lj0nggeae9Jv8/ei2R1SrqQeL5LCzaSoWYk7CYX6', 'Minh Anh', 'Nữ', '1998-2-5', 'Lục Nam - Bắc Giang', 'Vui vẻ, nhiệt tình, tăng động ', NULL, 'leminhanh.jpg', '2019-04-25 03:20:56', '2019-04-25 03:20:56'),
('1234566', '44444', 'thu@gmail.com', '$2y$10$zqP5/kRb36BhrvwmybsxZuypjce28D7okwIM0BGPBSKlIBFQPhXnK', 'Thu', 'nu', '1996-5-2', NULL, NULL, NULL, 'thu.jpg', '2019-04-25 03:31:02', '2019-04-25 03:31:02'),
('1234567', '44444', 'bichhanh@gmail.com', '$2y$10$v/MElLBC2bmyXZy2MWrfXOasWUioFjNmjTdIOr.K5enj3lQ528t8G', 'Bích Hạnh', 'Nữ', '1998-7-27', NULL, NULL, NULL, 'bichhanh.jpg', '2019-04-25 03:32:08', '2019-04-25 03:32:08'),
('1234568', '77777', 'thuha@gmail.com', '$2y$10$fk3rNKIlYbB.hs1eCn9DdOQfhVKnBe7OAlVL2xYQiBqE/M5UxWvzq', 'P.T.Thu.Hà', 'Nữ', '1996-2-3', NULL, NULL, NULL, 'thuha.jpg', '2019-04-25 03:33:14', '2019-04-25 03:33:14'),
('1234569', '55555', 'tranyen@gmail.com', '$2y$10$7QPYFRdJwFFbECOT.PaqvuE4lVBE5FT3GOIldcJI4ARw5VMp75fZu', 'Trần Yến', 'Nữ', '1997-2-5', NULL, NULL, NULL, 'tranyen.jpg', '2019-04-25 03:35:06', '2019-04-25 03:35:06'),
('123457', '22222', 'hovanhung@gmail.com', '$2y$10$sLZBhTBQkX5BvAIFAdBh7eupl2J5OaIP.VfqGvnDsGmAB7cwEgLzO', 'Hồ Văn Hưng', 'Nam', '1998-7-26', 'Nghệ An', 'Vui hết mình, chơi hết sức', '1', 'hovanhung.jpg', '2019-04-20 02:46:46', '2019-04-20 02:46:46'),
('1234570', '33333', 'thuyvu@gmail.com', '$2y$10$Jtizx.h7NBHRYec0dYEQhuhOer2.kMFvEY0ImUPHNOIuPz0C4QcSu', 'Thùy Vũ', 'Nữ', '1998-10-2', NULL, NULL, NULL, 'thuyvu.jpg', '2019-04-25 03:36:37', '2019-04-25 03:36:37'),
('123458', '22222', 'duongtrung@gmail.com', '$2y$10$dzJ7hmtjdMG4aa0D80yfdOE1d64GCgFDPKamaNIPnJdz3LjLjzjsu', 'Đường Trung', 'Nam', '1998-10-10', 'Nghệ An', 'Vui hết mình, chơi hết sức', '1', 'duongtrung.jpg', '2019-04-20 02:47:21', '2019-04-20 02:47:21'),
('123460', '22222', 'huyentrang@gmail.com', '$2y$10$EQP0FonyFwBcNT1BTor1F.J9QfRFCGPaADgXV.KNxO4REDVxBP2.a', 'Huyền Trang', 'Nữ', '1998-10-10', 'Yên Thành - Nghệ An', 'Vui hết mình, chơi hết sức', NULL, 'huyentrang.jpg', '2019-04-25 03:14:49', '2019-04-25 03:14:49'),
('7654321', '22222', 'luclego98@gmail.com', '$2y$10$xBPr5tuaYU3jEC2REwEqYu98W02M/W3kKGMlioYubbjuxLlwQ2ZeK', 'Hoàng Đình Lực', 'Nam', '8/8/1998', NULL, NULL, NULL, NULL, '2019-04-27 00:30:00', '2019-04-27 00:30:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `crush`
--
ALTER TABLE `crush`
  ADD PRIMARY KEY (`uid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Chỉ mục cho bảng `fschool`
--
ALTER TABLE `fschool`
  ADD PRIMARY KEY (`uid`,`sid`),
  ADD KEY `sid` (`sid`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `crush`
--
ALTER TABLE `crush`
  ADD CONSTRAINT `crush_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `crush_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `fschool`
--
ALTER TABLE `fschool`
  ADD CONSTRAINT `fschool_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fschool_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `schools` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `schools` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
