-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 11, 2020 lúc 04:40 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test-laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_diemden`
--

CREATE TABLE `tbl_diemden` (
  `id` int(3) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioi_thieu` text NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_diemden`
--

INSERT INTO `tbl_diemden` (`id`, `ten`, `gioi_thieu`, `img`, `rating`) VALUES
(1, 'Hà Nội', 'Thủ đô xinh đẹp của đất nước Việt Nam', '12312312441.img', 5),
(2, 'Hồ Chí Minh', 'Thủ phủ của sự ăn chơi ở Việt Nam', '12312313.img', 5),
(3, 'Đà Nẵng', 'Cơm gà bà Buồi ở phố Hội An ngon vl', '1231423123.img', 5),
(4, 'Đà Lạt', 'Thủ đô của sự lãng mạn', '000123123.img', 5),
(5, 'Thanh Hóa', 'Nước láng giềng', '1231455123.img', 0),
(6, 'Vĩnh Phúc', 'Corona ', '1123123123.img', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tom_tat` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` datetime NOT NULL,
  `avatar` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `tom_tat`, `noi_dung`, `ngay_dang`, `avatar`) VALUES
(1, 'Đạt Phạm ngon trai', 'Ava ngon', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/a.jpg\" style=\"float:left; height:267px; width:200px\" />&nbsp;C&ocirc;ng nhận ngon</p>', '2020-02-10 16:06:41', '540904449.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_trong_nuoc`
--

CREATE TABLE `tour_trong_nuoc` (
  `id` int(100) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `length` int(100) NOT NULL,
  `vehicle` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `departure` date NOT NULL,
  `price` int(15) NOT NULL,
  `lich_trinh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_cho` int(100) NOT NULL,
  `luu_y` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_khoi_hanh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diem_den` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sochodadat` int(100) NOT NULL,
  `khuyen_mai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour_trong_nuoc`
--

INSERT INTO `tour_trong_nuoc` (`id`, `name`, `code`, `length`, `vehicle`, `departure`, `price`, `lich_trinh`, `so_cho`, `luu_y`, `noi_khoi_hanh`, `diem_den`, `avatar`, `sochodadat`, `khuyen_mai`) VALUES
(3, 'Hà Nội Đà Nẵng', 'HN1001', 7, 'Tàu hỏa', '2020-03-11', 15123456, 'Hà Nội Đà Nẵng', 20, 'Tặng 1 cặp bánh giò trên tàu hỏa', 'Hà Nội', '2', '2111844366.jpg', 0, 0),
(4, 'Đinh Tuấn Long', '12', 12, 'Máy bay', '2111-02-12', 121212121, '122', 12, '1221', 'Hà Nội', '2 3', '1884789922.jpg', 0, 0),
(5, 'Hà Nội Đà Nẵng Hồ Chí Minh', 'HN1002', 12, 'Tàu hỏa', '1202-02-12', 12000111, 'Hà Nội Đà Nẵng Hồ Chí Minh', 20, 'Khuyến mãi 1 gói khăn giấy trên máy bay', 'Hà Nội', '2 3', '1587798724.jpg', 0, 0),
(6, 'dzprovip', 'LT1000', 12, 'xe', '2222-02-22', 1, 'dz', 1, '1', 'a', '1', '1355858959.jpg', 0, 10);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_diemden`
--
ALTER TABLE `tbl_diemden`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tour_trong_nuoc`
--
ALTER TABLE `tour_trong_nuoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_diemden`
--
ALTER TABLE `tbl_diemden`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tour_trong_nuoc`
--
ALTER TABLE `tour_trong_nuoc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
