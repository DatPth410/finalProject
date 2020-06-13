-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 06:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_12_141108_create_roles_table', 1),
(5, '2020_02_12_141234_create_role_user_table', 1),
(6, '2020_02_29_163015_create_ratings_table', 2),
(7, '2020_02_29_163037_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_status`
--

CREATE TABLE `tbl_booking_status` (
  `id` tinyint(2) NOT NULL,
  `meaning` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking_status`
--

INSERT INTO `tbl_booking_status` (`id`, `meaning`) VALUES
(1, 'Chưa trả tiền'),
(2, 'Đã trả tiền'),
(3, 'Trả góp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_booking`
--

CREATE TABLE `tbl_detail_booking` (
  `id` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pay` tinyint(2) NOT NULL,
  `adult_number` tinyint(3) NOT NULL,
  `child_number` tinyint(3) NOT NULL,
  `total_price` varchar(50) NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `time` datetime NOT NULL,
  `note` text DEFAULT NULL,
  `id_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_booking`
--

INSERT INTO `tbl_detail_booking` (`id`, `id_tour`, `name`, `phone`, `email`, `pay`, `adult_number`, `child_number`, `total_price`, `id_user`, `time`, `note`, `id_status`) VALUES
(1, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 0, 0, '', 1, '2020-02-04 00:00:00', '1', 1),
(8, 3, 'Lê Tuấn', '123123123123', 'tuanb11a2@gmail.com', 2, 0, 0, '', 1, '2020-03-11 00:00:00', NULL, 1),
(9, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 0, 0, '', 1, '2020-03-11 00:00:00', '1', 1),
(10, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 2, 0, 0, '', 1, '2020-03-11 00:00:00', NULL, 1),
(11, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 2, 0, 0, '', 1, '2020-03-11 00:00:00', NULL, 1),
(12, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 2, 0, 0, '', 1, '2020-03-11 00:00:00', NULL, 1),
(13, 3, 'dzprovip', '0912399899', 'datpth0410@gmail.com', 1, 0, 0, '', 1, '2020-03-11 00:00:00', NULL, 1),
(14, 3, 'dzprovip', '0912399899', 'datpth0410@gmail.com', 1, 0, 0, '', 1, '2020-03-11 00:00:00', NULL, 1),
(15, 24, 'dzprovip', '0912399899', 'a@gmail.com', 1, 0, 0, '', 1, '2020-03-27 00:00:00', NULL, 1),
(16, 12, 'Dat Pham', '0912399899', 'datpth0410@gmail.com', 1, 0, 0, '', 1, '2020-03-23 00:00:00', NULL, 1),
(17, 24, 'Dat Pham', '0912399899', 'datpth0410@gmail.com', 1, 0, 0, '', 1, '2020-03-27 00:00:00', NULL, 1),
(18, 24, 'Dat Pham', '0912399899', 'datpth0410@gmail.com', 1, 0, 0, '', 1, '2020-03-27 00:00:00', NULL, 1),
(19, 24, 'Dat Pham', '0912399899', 'datpth0410@gmail.com', 1, 0, 0, '', 1, '2020-03-27 00:00:00', NULL, 1),
(20, 24, 'Dat Pham', '0912399899', 'datpth0410@gmail.com', 1, 0, 0, '', 1, '2020-03-27 00:00:00', NULL, 1),
(21, 7, 'Dat Pham', '0969550120', 'a@gmail.com', 1, 0, 0, '', 1, '2020-03-31 00:00:00', NULL, 1),
(22, 24, 'Phạm Thành Đạt', '0969550120', 'a@gmail.com', 1, 0, 0, '', 1, '2020-03-27 00:00:00', NULL, 1),
(23, 15, 'Dat Pham', '0969550120', 'a@gmail.com', 1, 0, 0, '', 1, '2020-02-29 00:00:00', NULL, 1),
(24, 13, 'Dat Pham', '0969550120', 'a@gmail.com', 1, 0, 0, '', 1, '2020-03-22 00:00:00', NULL, 1),
(25, 22, 'Dat Pham', '0969550120', 'a@gmail.com', 1, 0, 0, '', 1, '2020-03-05 00:00:00', NULL, 1),
(28, 19, 'Dat Pham', '0969550120', 'a@gmail.com', 1, 0, 0, '', 1, '2020-03-18 00:00:00', NULL, 1),
(29, 3, 'dzprovip', '0912399899', 'datpth0410@gmail.com', 1, 0, 0, '', 1, '2020-03-11 00:00:00', NULL, 1),
(30, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 5, 4, '136111104', 3, '2020-03-11 00:00:00', 'test', 1),
(31, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 3, 5, '120987648', 3, '2020-03-11 00:00:00', 'test', 1),
(32, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 5, 3, '120987648', 3, '2020-03-11 00:00:00', 'test', 1),
(33, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 3, 4, '105864192', 3, '2020-03-11 00:00:00', 'test', 1),
(34, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 3, 4, '105864192', 3, '2020-03-11 00:00:00', 'test', 1),
(35, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 5, 3, '120987648', 3, '2020-03-11 00:00:00', 'test', 1),
(36, 3, 'Lê Tuấn', '0375910493', 'user@gmail.com', 1, 4, 3, '105864192', 3, '2020-03-11 00:00:00', 'test', 1),
(37, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 5, 1, '90740736', 3, '2020-03-11 00:00:00', '1', 1),
(38, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 5, 1, '90740736', 3, '2020-03-11 00:00:00', '1', 1),
(39, 3, 'Trung Thành', '123123123123', 'tuanb11a2@gmail.com', 1, 3, 3, '90740736', 3, '2020-03-11 00:00:00', NULL, 1),
(42, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 5, 3, '120987648', 3, '2020-02-29 09:18:59', 'test', 1),
(43, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 5, 3, '120987648', 3, '2020-02-29 09:19:43', 'test', 1),
(44, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 3, 2, '75617280', 3, '2020-02-29 09:24:19', '2', 1),
(45, 3, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 4, 3, '105864192', 3, '2020-02-29 09:27:12', '3', 1),
(53, 7, 'Trung Thành', '123123123123', 'thanhdat0410@yahoo.com', 1, 3, 1, '177822220', 3, '2020-03-05 02:27:28', 'test', 1),
(57, 7, 'test', '123123123123', 'test12345@gmail.com', 1, 3, 5, '355644440', 11, '2020-03-10 04:13:16', 'test', 1),
(58, 10, 'Lê Tuấn', '0375910493', 'user123@gmail.com', 1, 2, 5, '82962210.24', 12, '2020-03-10 04:15:16', 'test', 1),
(59, 18, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 2, 2, '23241200', 13, '2020-03-10 04:37:56', 'test', 1),
(60, 7, 'Lê Tuấn', '0375910493', 'tuanb11a2@gmail.com', 1, 3, 1, '177822220', 13, '2020-03-10 04:39:20', 'test1', 1),
(61, 5, 'dzprovip', '0123456789', 'user@gmail.com', 1, 2, 2, '48000444', 1, '2020-06-12 14:56:45', 'test', 1),
(62, 12, 'Dat Pham', '0969550120', 'datpth0410@gmail.com', 1, 2, 2, '52244265.92', 14, '2020-06-13 03:36:45', NULL, 2),
(63, 21, 'Dat Pham', '0969550120', 'datpth0410@gmail.com', 1, 2, 2, '19160000', 14, '2020-06-13 03:52:22', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diemden`
--

CREATE TABLE `tbl_diemden` (
  `id` int(3) NOT NULL,
  `code` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioi_thieu` text NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_diemden`
--

INSERT INTO `tbl_diemden` (`id`, `code`, `ten`, `gioi_thieu`, `img`, `rating`) VALUES
(1, 'ha_noi', 'Hà Nội', 'Thủ đô nghìn năm Văn hiến', '3.jpg', 5),
(2, 'ho_chi_minh', 'Hồ Chí Minh', 'Thủ phủ của sự ăn chơi ở Việt Nam', '4.jpg', 5),
(3, 'da_nang', 'Đà Nẵng', 'Cơm gà bà Buồi ở phố Hội An ngon vl', '21.jpg', 5),
(4, 'da_lat', 'Đà Lạt', 'Vùng đất của sự lãng mạn', '5.jpg', 5),
(5, 'thanh_hoa', 'Thanh Hóa', 'Nước láng giềng', '3.jpg', 0),
(6, 'vinh_phuc', 'Vĩnh Phúc', 'Vũ Hán 2', '4.jpg', 2),
(7, 'nha_trang', 'Nha Trang', 'Ching chong nhiều vcl', '21.jpg', 5),
(8, 'ninh_binh', 'Ninh Bình', 'Đặc sản cơm cháy', '5.jpg', 5),
(9, 'phu_quoc', 'Phú Quốc', 'Vinpearl nhiều rắn vl', '3.jpg\r\n', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `question` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `name`, `phone`, `question`) VALUES
(1, 'admin', 9280416, 'hay'),
(2, 'dzprovip', 969550120, 'Không có câu hỏi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
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
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `tom_tat`, `noi_dung`, `ngay_dang`, `avatar`) VALUES
(2, 'Quán \'Ký sinh trùng\'', 'HÀN QUỐCTừ ngày \"Ký sinh trùng\" khởi chiếu, cửa hàng tiện lợi của ông Kim Kyung Soon đón rất nhiều khách nước ngoài từ Nhật, Anh, Tây Ban Nha...', '<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>Một ng&agrave;y sau khi bom tấn &quot;K&yacute; sinh tr&ugrave;ng&quot; thắng giải Phim hay nhất tại Oscar 2020, tiệm tạp ho&aacute; Pig Supermaket tại Ahyeon-dong (Mapo-gu, Seoul) vẫn kh&ocirc;ng ngớt tiếng cười. Chủ cửa h&agrave;ng n&agrave;y l&agrave; &ocirc;ng&nbsp;Lee Jung Shik (77 tuổi) v&agrave; b&agrave; Kim Kyung Soon (73 tuổi). Vợ chồng họ c&ugrave;ng b&aacute;n h&agrave;ng suốt 45 năm qua.</p>\r\n\r\n<p>Từ ng&agrave;y cưới, &ocirc;ng Lee v&agrave; b&agrave; Kim chưa từng xem một bộ phim n&agrave;o v&igrave; bận bịu với cửa h&agrave;ng. &quot;Phim đầu ti&ecirc;n t&ocirc;i xem l&agrave; &quot;Giai điệu hạnh ph&uacute;c&quot; (Sound of Music) tr&ecirc;n phố Chungmuro, Seoul khi c&ograve;n l&agrave; một thiếu nữ&quot;, b&agrave; nhớ lại.&nbsp;</p>\r\n\r\n<p>Nhưng khi &quot;K&yacute; sinh tr&ugrave;ng&quot; khởi chiếu, b&agrave; Kim đ&atilde; thuyết phục chồng đ&oacute;ng cửa h&agrave;ng để tới rạp. Với &ocirc;ng b&agrave;, bộ phim như thể hiện cuộc sống của ch&iacute;nh m&igrave;nh. &quot;T&ocirc;i n&oacute;i với &ocirc;ng x&atilde;, &#39;nh&igrave;n k&igrave;a, cửa h&agrave;ng của ch&uacute;ng ta đấy&#39;. Khi mới gặp chồng, ch&uacute;ng t&ocirc;i cũng sống trong cảnh khốn kh&oacute;, v&agrave; phim như tua lại những kỷ niệm một thời&quot;, b&agrave; chủ Pig Supermaket b&agrave;y tỏ. C&ograve;n &ocirc;ng Lee cho rằng ho&agrave;n cảnh của người cha&nbsp;Kim Ki-taek (do Song Kang-ho đ&oacute;ng) thật giống m&igrave;nh ng&agrave;y n&agrave;o.</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/Sky-Pizza-Noryangjin-dong-Seou-9459-6089-1581500431.jpg\" style=\"height:300px; margin-left:9px; margin-right:9px; width:500px\" /></p>\r\n\r\n<p>B&agrave; Um đang dần cảm nhận được hiệu ứng &quot;K&yacute; sinh tr&ugrave;ng&quot; từng ch&uacute;t một. B&agrave; Um kh&ocirc;ng thể tr&ograve; chuyện nhiều với kh&aacute;ch du lịch, nhưng họ vẫn đến v&agrave; ăn pizza ngay tại đ&acirc;y. Những thực kh&aacute;ch nước ngo&agrave;i n&oacute;i họ t&igrave;m tới đ&acirc;y v&igrave; đ&atilde; thấy tr&ecirc;n phim, v&agrave; muốn chụp ảnh, c&ograve;n để lại lời nhắn tr&ecirc;n tường của nh&agrave; h&agrave;ng.</p>\r\n\r\n<p>&quot;H&ocirc;m qua, một ch&agrave;ng trai trẻ t&ecirc;n Yeouido đến đ&acirc;y v&agrave;o khoảng 6h tối v&agrave; n&oacute;i: &#39;T&ocirc;i th&iacute;ch đạo diễn Bong Joon-ho v&agrave; muốn mua pizza&quot;&#39;, b&agrave; chủ n&oacute;i v&agrave;o 11/2.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/Sky-Pizza-Noryangjin-dong-Seou-2170-4744-1581500431%20(1).jpg\" style=\"height:300px; width:550px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-02-13 08:48:34', '2119863438.jpg'),
(3, 'Quán cà phê lênh đênh', 'TP HCM Chiếc thuyền dập dìu theo sóng nước ở quận 7 là quán cà phê cho khách yêu thích sự khác lạ.', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/VnExpress-cafethuyen1-1581223269_r_680x0.jpg\" style=\"height:350px; width:800px\" />&nbsp;&nbsp;</p>\r\n\r\n<p>Nằm tr&ecirc;n K&ecirc;nh Tẻ dọc đường Trần Xu&acirc;n Soạn, chiếc thuyền gỗ neo s&aacute;t bờ được tận dụng l&agrave;m qu&aacute;n c&agrave; ph&ecirc;. Cửa thuyền nhỏ hẹp l&agrave; lối dẫn v&agrave;o khu vực ngồi uống nước chứa khoảng 100 kh&aacute;ch.</p>\r\n\r\n<p>Thuyền gồm hai tầng, với kh&ocirc;ng gian ngo&agrave;i trời ở giữa v&agrave; cuối thuyền tr&ecirc;n tầng 2. Để l&ecirc;n thuyền, kh&aacute;ch phải đi qua một đoạn cầu ch&ocirc;ng ch&ecirc;nh bắc từ đường v&agrave;o.</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/%E1%BA%A3nh%20tin%20t%E1%BB%A9c/VnExpress-cafethuyen2-1581223270_r_680x0.jpg\" style=\"height:534px; width:800px\" /></p>\r\n\r\n<p>B&ecirc;n trong qu&aacute;n sử dụng nội thất gỗ. Kh&aacute;ch đến gọi nước tại quầy v&agrave; sẽ được phục vụ tận chỗ ngồi. Nh&acirc;n vi&ecirc;n qu&aacute;n cho biết m&ocirc; h&igrave;nh c&agrave; ph&ecirc; n&agrave;y mở gần 10 năm.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/%E1%BA%A3nh%20tin%20t%E1%BB%A9c/VnExpress-cafethuyen3-1581223271_r_680x0.jpg\" style=\"height:350px; width:800px\" /></p>', '2020-02-13 09:01:58', '579414132.jpg'),
(4, 'High Tea-Trải nghiệm trà chiều siêu \'sang chảnh\' của nước Anh', 'Nhắc đến nước Anh, chúng ta không thể không nhắc đến trà chiều – một bữa tiệc nho nhỏ dành cho những quý bà, quý ông yêu sự thư thái trong những buổi chiều muộn.', '<p>Văn h&oacute;a tr&agrave; chiều ra đời v&agrave;o thế kỷ 19 v&agrave; hầu như chỉ lan rộng trong giới thượng lưu tại Anh quốc. Được xem như bữa ăn nhẹ v&agrave; th&uacute; vui thư gi&atilde;n của giai cấp qu&yacute; tộc, tiệc tr&agrave; chiều đ&ograve;i hỏi sự cầu kỳ về h&igrave;nh thức v&agrave; c&aacute;ch thưởng tr&agrave;. (Ảnh:&nbsp;standard.co.uk)<br />\r\n<br />\r\nTr&agrave; chiều kiểu Anh chia l&agrave;m hai loại: Afternoon tea v&agrave; High tea. Nhiều người kh&ocirc;ng quen thuộc với văn ho&aacute; tr&agrave; Anh cho rằng, hai loại n&agrave;y l&agrave; một, một số lại cho rằng Afternoon tea b&igrave;nh d&acirc;n hơn so với High tea. Tuy nhi&ecirc;n điều n&agrave;y kh&ocirc;ng ch&iacute;nh x&aacute;c.<br />\r\n<strong>LOW TEA HAY AFTERNOON TEA</strong><br />\r\n<img alt=\"\" src=\"/ckfinder/userfiles/images/%E1%BA%A3nh%20tin%20t%E1%BB%A9c/afternoon-tea.jpg\" style=\"height:420px; width:700px\" /><br />\r\nAfternoon tea c&oacute; nghĩa l&agrave; tr&agrave; chiều như ch&iacute;nh c&aacute;i t&ecirc;n của n&oacute;. Tr&agrave; chiều thường được uống v&agrave;o tầm từ 2 giờ tới 4 giờ chiều v&agrave; ăn k&egrave;m những m&oacute;n b&aacute;nh ăn nhẹ. Tiệc tr&agrave; chiều được phục vụ trong ph&ograve;ng, trong vườn với những chiếc b&agrave;n thấp &ndash; đ&acirc;y cũng l&agrave; nguồn gốc của c&aacute;ch gọi Low tea, tr&aacute;i ngược với High tea thường được phục vụ tr&ecirc;n những chiếc b&agrave;n cao. (Ảnh:&nbsp;prideofbritainhotels)<br />\r\n<br />\r\n<strong>HIGH TEA</strong><br />\r\n<img alt=\"\" src=\"/ckfinder/userfiles/images/%E1%BA%A3nh%20tin%20t%E1%BB%A9c/high-tea_3.jpg\" style=\"height:465px; width:700px\" /></p>\r\n\r\n<p>High tea thường chỉ những bữa tiệc tr&agrave; sau giờ đi l&agrave;m, nghĩa l&agrave; tầm từ khoảng 5 giờ đến 7 giờ tối. Về bản chất, đ&acirc;y được xem như bữa ăn phục vụ cho tầng lớp lao động, chứ kh&ocirc;ng phải l&agrave; một cuộc tụ họp vui chơi thưởng tr&agrave; b&aacute;nh của tầng lớp thượng lưu. Thế n&ecirc;n, thực đơn của High tea cũng phong ph&uacute; v&agrave; &ldquo;chắc bụng&rdquo; hơn với c&aacute;c m&oacute;n như b&iacute;t-tết, thịt hầm ph&ocirc;-mai, b&aacute;nh nh&acirc;n đậu, c&aacute; hồi x&ocirc;ng kh&oacute;i, khoai t&acirc;y, b&aacute;nh crumpets hoặc b&aacute;nh barm brack&hellip; đi k&egrave;m l&agrave; một ấm tr&agrave; n&oacute;ng đặc, gi&uacute;p kh&aacute;ch dự tiệc nhanh ch&oacute;ng phục hồi năng lượng sau một ng&agrave;y l&agrave;m việc vất vả. Bữa tiệc tr&agrave; n&agrave;y thường được phục vụ tr&ecirc;n b&agrave;n cao, với những chiếc ghế c&oacute; chỗ dựa, từ đ&oacute; h&igrave;nh th&agrave;nh c&aacute;ch gọi High tea để ph&acirc;n biệt với Low tea. (Ảnh: Sebastian Coman Photography)<br />\r\n<br />\r\n<br />\r\n&nbsp;</p>', '2020-02-13 09:12:47', '1591602892.jpg'),
(5, 'Một vòng ở xứ sở tuyết và hoa anh đào tại Tohoku', 'Tohoku thuộc khu vực phía bắc đảo Honshu, nơi đây có sông, núi, hồ và biển nên thiên nhiên vô cùng đa dạng và phong phú. Vào thời điểm giao mùa giữa mùa đông và mùa xuân, du khách sẽ bắt gặp những địa điểm có tuyết, có hoa anh đào và ngay…', '<p><strong>1. H&agrave;nh lang tuyết Hakkoda (Tỉnh Aomori)</strong><br />\r\n<img alt=\"\" src=\"/ckfinder/userfiles/images/%E1%BA%A3nh%20tin%20t%E1%BB%A9c/1-Hakkoda_1.jpg\" style=\"height:467px; width:700px\" /></p>\r\n\r\n<p>H&agrave;nh lang tuyết nằm gần giữa kh&aacute;ch sạn Hakkoda v&agrave; suối nước n&oacute;ng Yachi trong m&ugrave;a đ&ocirc;ng. N&oacute; d&agrave;i khoảng 8km, được mở v&agrave;o ng&agrave;y 1 th&aacute;ng 4. H&agrave;nh lang tuyết cao tới 10m v&agrave; k&eacute;o d&agrave;i đến sau Tuần lễ v&agrave;ng.<br />\r\nDi chuyển: 1 giờ đi xe bu&yacute;t từ ga t&agrave;u Aomori, xuống tại bến Hakkoda Ropeway.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>2. Đường Hachimantai Aspite (Tỉnh Iwate v&agrave; Akita)</strong><br />\r\n<img alt=\"\" src=\"/ckfinder/userfiles/images/%E1%BA%A3nh%20tin%20t%E1%BB%A9c/%E1%BA%A3nh%20tin%20t%E1%BB%A9c%202/2-Aspite.jpg\" style=\"height:466px; width:700px\" /></p>\r\n\r\n<p>Aspite gợi nhớ đến t&ecirc;n h&igrave;nh d&aacute;ng của n&uacute;i lửa. Con đường n&agrave;y d&agrave;i 26.7km từ Hachimantai Gozaisho thuộc tỉnh Iwate cho tới suối nước n&oacute;ng Toroko của tỉnh Akita.<br />\r\nDi chuyển: 34 ph&uacute;t từ ga Morioka bằng t&agrave;u. L&ecirc;n xe bu&yacute;t tại ga Obuke, đi 70 ph&uacute;t sau đ&oacute; xuống tại Hachimantai Summit kh&aacute;ch sạn Hachimantai Kanko. Đi bộ tiếp 1 ph&uacute;t.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>3. Hoa anh đ&agrave;o ở l&acirc;u đ&agrave;i Hirosaki (Tỉnh Aomori)</strong><br />\r\n<img alt=\"\" src=\"/ckfinder/userfiles/images/%E1%BA%A3nh%20tin%20t%E1%BB%A9c/%E1%BA%A3nh%20tin%20t%E1%BB%A9c%202/3-Hirosaki.jpg\" style=\"height:467px; width:700px\" /><br />\r\nĐ&acirc;y l&agrave; một trong ba địa điểm ngắm hoa anh đ&agrave;o Michinoku v&ocirc; c&ugrave;ng đẹp tại đất nước mặt trời mọc. Nơi đ&acirc;y được cho l&agrave; nơi c&oacute; hoa anh đ&agrave;o đẹp nhất Nhật Bản. Anh đ&agrave;o ở đ&acirc;y được biết đến l&agrave; loại b&ocirc;ng nở to, c&aacute;nh hoa đầy đặn. C&oacute; khoảng 2,600 c&acirc;y anh đ&agrave;o Yoshino xung quanh L&acirc;u đ&agrave;i Hirosaki.<br />\r\nDi chuyển: 10 ph&uacute;t bằng &ocirc; t&ocirc; từ ga Hirosaki hoặc 30 ph&uacute;t đi bộ. Hoặc 15 ph&uacute;t đi xe bu&yacute;t từ ga Hirosaki, xuống tại ga Shiyakusho-mae, sau đ&oacute; đi bộ 4 ph&uacute;t.<br />\r\n<br />\r\n&nbsp;</p>', '2020-02-13 09:18:00', '1133446867.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay_status`
--

CREATE TABLE `tbl_pay_status` (
  `id` tinyint(2) NOT NULL,
  `meaning` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pay_status`
--

INSERT INTO `tbl_pay_status` (`id`, `meaning`) VALUES
(1, 'Thanh toán trực tuyế'),
(2, 'Thanh toán tại chi n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_tour` int(100) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `id_user`, `id_tour`, `rating`, `time`) VALUES
(1, 1, 3, 2, '2020-03-01 12:50:45'),
(2, 1, 3, 3, '2020-03-01 13:04:27'),
(3, 1, 3, 5, '2020-03-27 03:04:17'),
(4, 1, 3, 5, '2020-03-27 03:04:18'),
(5, 1, 3, 5, '2020-03-27 03:04:24'),
(6, 1, 12, 3, '2020-06-12 14:55:37'),
(7, 1, 24, 3, '2020-06-12 14:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `tour_trong_nuoc`
--

CREATE TABLE `tour_trong_nuoc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `length` int(3) NOT NULL,
  `vehicle` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `departure` date NOT NULL,
  `price` int(15) NOT NULL,
  `lich_trinh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_cho` int(5) NOT NULL,
  `luu_y` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_khoi_hanh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diem_den` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sochodadat` int(5) NOT NULL,
  `khuyen_mai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_trong_nuoc`
--

INSERT INTO `tour_trong_nuoc` (`id`, `name`, `code`, `length`, `vehicle`, `departure`, `price`, `lich_trinh`, `so_cho`, `luu_y`, `noi_khoi_hanh`, `diem_den`, `avatar`, `sochodadat`, `khuyen_mai`) VALUES
(3, 'Hà Nội Đà Nẵng', 'HN1001', 7, 'Tàu hỏa', '2030-02-03', 15123456, 'Hà Nội Đà Nẵng', 20, 'Tặng 1 cặp bánh giò trên tàu hỏa', 'Hà Nội', '3', '2111844366.jpg', 0, 0),
(5, 'Hà Nội Đà Nẵng Hồ Chí Minh', 'HN1002', 12, 'Tàu hỏa', '2030-02-12', 12000111, 'Hà Nội Đà Nẵng Hồ Chí Minh', 20, 'Khuyến mãi 1 gói khăn giấy trên máy bay', 'Hà Nội', '2 3', '1587798724.jpg', 4, 0),
(7, 'Tràng An-Ninh Bình', '1221', 4, 'Ô tô', '2020-07-08', 44455555, 'Tràng An-Bái Đính-Tam Cốc-Bích Động', 15, 'đi nhé', 'Hà Nội', '8', '646036246.jpg', 16, 0),
(9, 'Hà Giang', '1122', 4, 'Ô tô', '2020-07-12', 11122222, 'Hà Nội-Hà Giang-Lũng Cú-Đồng Văn', 15, 'Đi vui lắm à nghen', 'Hà Nội', '8', '323945086.jpg', 0, 2),
(10, 'Huế', '1199', 4, 'Ô tô', '2020-07-12', 12345567, 'Huế-Cố đô Huế', 20, 'Đi an toàn nha', 'Ninh Bình', '3', '293211367.jpg', 7, 4),
(12, 'Quảng Bình', '3444', 5, 'Máy bay', '2020-06-23', 23323333, 'Phong Nha – Kẻ Bàng', 20, 'Phong Nha – Kẻ Bàng ở Quảng Bình là kiệt tác của tạo hoá', 'Hà Nội', '3', '796822299.jpg', 4, 44),
(13, 'Cần Thơ', '9911', 6, 'Máy bay', '2020-06-22', 4444444, 'ĐBSCL-Cần Thơ', 25, 'Cần Thơ là thành phố đẹp nhất vùng đồng bằng sông Cửu Long', 'Đà Nẵng', '2', '773038955.jpg', 0, 41),
(14, 'Mũi Né – Phan Thiết', '22244', 4, 'Máy bay', '2020-08-13', 33333333, 'Mũi Né – Phan Thiết', 28, 'Cuộc sống nhộn nhịp của người dân làng chài ở Mũi Né – Phan Thiết', 'Ninh Bình', '3', '438436746.jpg', 0, 12),
(15, 'Đà Nẵng', '290220', 3, 'Máy bay', '2020-07-29', 5590000, 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - KDL Thần Tài - Hội An - Đà Nẵng', 20, 'Khách sạn 4*. Bay Vietnam Air. Tặng Show Ký Ức Hội An. Tour Tiêu Chuẩn', 'Hồ Chí Minh', '3', '193302034.jpg', 0, 20),
(16, 'Huế-Đà Nẵng', '381052', 5, 'Máy bay', '2020-06-30', 8590000, 'Huế - La Vang - Động Phong Nha & Thiên Đường - Bà Nà - Cầu Vàng - Hội An - Đà Nẵng', 25, 'Khách sạn 4* trọn tour. Bay Vietnam Air. Tặng Show Charming. Tour Tiêu Chuẩn', 'Hồ Chí Minh', '3', '1879288778.jpg', 0, 4),
(17, 'Đà Nẵng - Quảng Bình', '336016', 4, 'Máy bay', '2020-09-08', 6790000, 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - Hội An - Huế - La Vang - Động Thiên Đường - Ozo Treetop Park - Quảng Bình', 20, 'Bay về thẳng. Khách sạn 4* 2 đêm. Tour Tiêu Chuẩn', 'Hồ Chí MInh', '3', '771072283.jpg', 0, 0),
(18, 'Đà Nẵng -Huế', '358025', 4, 'Máy bay', '2020-07-12', 5990000, 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - Hội An - KDL Thần Tài - Đầm Lập An - Huế', 20, 'Tặng Show Ký ức Hội An. Bay Vietnam Air. Tour Tiêu Chuẩn', 'Hồ Chí Minh', '3', '1062408550.jpg', 4, 3),
(19, 'Liên Tuyến Trung Bắc', '165007', 14, 'Máy bay', '2020-11-18', 23990000, 'Nha Trang -Đà Nẵng - Huế - Động Thiên Đường & Phong Nha - Bà Nà - Hội An - Hà Nội - Sapa - Hạ Long - Ninh Bình', 20, 'Tour Tiết Kiệm', 'Hồ Chí Minh', '1', '3948505.jpg', 0, 0),
(20, 'Phú Quốc', '802012', 3, 'Máy bay', '2020-08-12', 4790000, 'Phú Quốc - Thiên Đường Giải Trí Vinpearl Land', 20, 'Đã bao gồm vé Khu Vui Chơi Vinpearl Land Khách sạn 3*. Tour Tiết Kiệm', 'Hồ Chí Minh', '9', '1612860033.jpg', 0, 0),
(21, 'Phú Quốc', '858023', 3, 'Máy bay', '2020-09-13', 4790000, 'Phú Quốc - Hòn Thơm Nature Park', 20, 'Tặng Vé Cáp Treo 3 Dây Vượt Biển Dài Nhất Thế Giới .Khách sạn 3*. Bay Vietnam Airlines.', 'Hồ Chí Minh', '9', '1072706986.jpg', 4, 0),
(22, 'Phú Quốc', '879023', 4, 'Máy bay', '2020-07-05', 5090000, 'Phú Quốc - Du Ngoạn Tứ Đảo - Ngắm Hoàng Hôn Sunset Sanato - Lặn Ngắm San Hô', 20, 'Tặng Vé Đi Bộ Dưới Biển Khách Sạn 4*.', 'Hồ Chí Minh', '9', '335469761.jpg', 0, 3),
(23, 'Nha Trang', '505007', 4, 'Máy bay', '2020-07-26', 4590000, 'Nha Trang - Hòn Lao - Vinpearl Land', 20, 'Máy Bay. Khách Sạn 4*. Tour Tiêu Chuẩn', 'Hồ Chí Minh', '7', '350812244.jpg', 0, 0),
(24, 'Nha Trang', '125001', 4, 'Máy bay', '2020-06-27', 2990000, 'Nha Trang Máy Bay - Nhũ Tiên - SkyLight - Vinpearl Land', 20, 'Combo Vé Máy Bay + Phòng Vinpearl Resort & Spa - Tặng vé Vui chơi Vinpearl Land', 'Hồ Chí Minh', '7', '553570482.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dzprovip', 'user@gmail.com', NULL, '$2y$10$1HEN5uhv5hYwTmMDpr43..Ewad3aFUL719zoxJEQyri255mnbVzrG', 'LytRQKwmHvkS6tQvDFALu7E4LlPFibPrUZUqFR9yxBg0Wmk2gA1CITrSC7fE', '2020-02-13 01:24:51', '2020-02-13 01:24:51'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$Oc0oU/VxyRWtmEIqHX535..hCS5YL33p.9FsTxW/HkcqR61p7PNd2', 'Tf7vRqd8DdMVFQYhlVTkwJYxhRfMJFsLYdQQmgolWdhkXnDPdwfj9STD4sKV', '2020-02-13 02:30:57', '2020-02-13 02:30:57'),
(3, 'Guest', 'guest@gmail.com', NULL, '1', NULL, NULL, NULL),
(5, 'Nam Khánh', 'khanh0609@gmail.com', NULL, '-NMPEdoFJr', NULL, NULL, NULL),
(6, 't', 'khanh123@gmail.com', NULL, 'EwAoLebc#R', NULL, '2020-03-09 20:33:27', '2020-03-09 20:33:27'),
(10, 'test', 'test123@gmail.com', NULL, '$2y$10$UWLg/7JSwgF39v93969a1u.VCqbscwsBqTRL/qbLa/xNCNo8AQFf.', NULL, '2020-03-09 21:11:33', '2020-03-09 21:11:33'),
(11, 'test', 'test12345@gmail.com', NULL, '$2y$10$VznL0AXdST6ITl.QWHLAQOj2xNZ3GZGdhEsNEwS6QG1usLf4Nvb3K', NULL, '2020-03-09 21:13:16', '2020-03-09 21:13:16'),
(12, 'Lê Tuấn', 'user123@gmail.com', NULL, '$2y$10$kEei/wyzvwICPrdDUG3Kyeg7YV4JGgIQxVz5yVsDTGIqIZHgkzrFO', NULL, '2020-03-09 21:15:16', '2020-03-09 21:15:16'),
(13, 'Lê Tuấn', 'tuanb11a2@gmail.com', NULL, '$2y$10$JPelXmsMbtcMEZA5XkZ79ugmc6WpJKpqRLyOcrUoxbuyW85jFeVi2', NULL, '2020-03-09 21:37:56', '2020-03-09 21:37:56'),
(14, 'Dat Pham', 'datpth0410@gmail.com', NULL, '$2y$10$p8aQicwrHEp9dPpLeH5UGeXoCYbL8ueH0nKKLjvw9.weY7pqq8eV.', NULL, '2020-06-12 20:36:15', '2020-06-12 20:36:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `tbl_booking_status`
--
ALTER TABLE `tbl_booking_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_booking`
--
ALTER TABLE `tbl_detail_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user_detail_booking` (`id_user`),
  ADD KEY `fk_id_tour_detail_booking` (`id_tour`),
  ADD KEY `fk_id_status_detail_booking` (`id_status`),
  ADD KEY `fk_pay_detail_booking` (`pay`);

--
-- Indexes for table `tbl_diemden`
--
ALTER TABLE `tbl_diemden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pay_status`
--
ALTER TABLE `tbl_pay_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_tour_tbl_rating` (`id_tour`),
  ADD KEY `fk_id_user_tbl_rating` (`id_user`);

--
-- Indexes for table `tour_trong_nuoc`
--
ALTER TABLE `tour_trong_nuoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_booking_status`
--
ALTER TABLE `tbl_booking_status`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_detail_booking`
--
ALTER TABLE `tbl_detail_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_diemden`
--
ALTER TABLE `tbl_diemden`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pay_status`
--
ALTER TABLE `tbl_pay_status`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tour_trong_nuoc`
--
ALTER TABLE `tour_trong_nuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tbl_detail_booking`
--
ALTER TABLE `tbl_detail_booking`
  ADD CONSTRAINT `fk_id_status_detail_booking` FOREIGN KEY (`id_status`) REFERENCES `tbl_booking_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_tour_detail_booking` FOREIGN KEY (`id_tour`) REFERENCES `tour_trong_nuoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_user_detail_booking` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pay_detail_booking` FOREIGN KEY (`pay`) REFERENCES `tbl_pay_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD CONSTRAINT `fk_id_tour_tbl_rating` FOREIGN KEY (`id_tour`) REFERENCES `tour_trong_nuoc` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_user_tbl_rating` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
