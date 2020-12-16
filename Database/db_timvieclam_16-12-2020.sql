-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 03:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_timvieclam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `address`, `city`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dũng Admin', 'admin@gmail.com', '2020-12-04 18:24:42', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, '0328050520', '34D, Đường số 12, Gò vấp', 51, 1, '2020-12-03 16:47:43', '2020-12-03 16:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `job_seeker_id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `job_id`, `job_seeker_id`, `employer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2020-12-04 19:58:58', '2020-12-04 19:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`) VALUES
(1, 'Bán hàng'),
(2, 'Bảo vệ'),
(3, 'Phiên dịch - Ngoại ngữ'),
(4, 'Biên tập - Báo chí - Truyền hình'),
(5, 'Bảo hiểm'),
(6, 'Công chức - Viên chức'),
(7, 'Chức khoán'),
(8, 'Công nghệ cao'),
(9, 'Công nghiệp'),
(10, 'Cơ khí - Chế tạo'),
(11, 'Dệt may - Giầy da'),
(12, 'Dịch vụ'),
(13, 'Dụ lịch'),
(14, 'Đầu tư'),
(15, 'Điện tử viễn thông'),
(16, 'Điện - Điện tử - Điện lạnh'),
(17, 'Freelance'),
(18, 'Giao hàng'),
(19, 'Giáo dục - Đào tạo'),
(20, 'Games'),
(21, 'IT phần cứng/ Mạng'),
(22, 'IT phần Mềm'),
(23, 'In ấn - Xuất bản'),
(24, 'Kiến trúc - Thiết kế nội thất'),
(25, 'Khách sạn - Nhà hàng'),
(26, 'Luật - Pháp lý'),
(27, 'Làm đẹp - Thể lực - Spa'),
(28, 'Marketing - PR'),
(29, 'Thiết kế đồ họa'),
(30, 'Thiết kế Web'),
(31, 'Thời trang'),
(32, 'Thực phẩm - đồ uống'),
(33, 'Hàng hải'),
(34, 'Hàng không'),
(35, 'Hành chính - Văn phòng'),
(36, 'Xuất khẩu lao động'),
(37, 'Vận tải'),
(38, 'Xây dựng');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `type`) VALUES
(1, 'Thành phố Hà Nội', 'Thành phố Trung ương'),
(2, 'Tỉnh Hà Giang', 'Tỉnh'),
(3, 'Tỉnh Cao Bằng', 'Tỉnh'),
(4, 'Tỉnh Bắc Kạn', 'Tỉnh'),
(5, 'Tỉnh Tuyên Quang', 'Tỉnh'),
(6, 'Tỉnh Lào Cai', 'Tỉnh'),
(7, 'Tỉnh Điện Biên', 'Tỉnh'),
(8, 'Tỉnh Lai Châu', 'Tỉnh'),
(9, 'Tỉnh Sơn La', 'Tỉnh'),
(10, 'Tỉnh Yên Bái', 'Tỉnh'),
(12, 'Tỉnh Hoà Bình', 'Tỉnh'),
(13, 'Tỉnh Thái Nguyên', 'Tỉnh'),
(14, 'Tỉnh Lạng Sơn', 'Tỉnh'),
(15, 'Tỉnh Quảng Ninh', 'Tỉnh'),
(16, 'Tỉnh Bắc Giang', 'Tỉnh'),
(17, 'Tỉnh Phú Thọ', 'Tỉnh'),
(18, 'Tỉnh Vĩnh Phúc', 'Tỉnh'),
(19, 'Tỉnh Bắc Ninh', 'Tỉnh'),
(20, 'Tỉnh Hải Dương', 'Tỉnh'),
(21, 'Thành phố Hải Phòng', 'Thành phố Trung ương'),
(22, 'Tỉnh Hưng Yên', 'Tỉnh'),
(23, 'Tỉnh Thái Bình', 'Tỉnh'),
(24, 'Tỉnh Hà Nam', 'Tỉnh'),
(25, 'Tỉnh Nam Định', 'Tỉnh'),
(26, 'Tỉnh Ninh Bình', 'Tỉnh'),
(27, 'Tỉnh Thanh Hóa', 'Tỉnh'),
(28, 'Tỉnh Nghệ An', 'Tỉnh'),
(29, 'Tỉnh Hà Tĩnh', 'Tỉnh'),
(30, 'Tỉnh Quảng Bình', 'Tỉnh'),
(31, 'Tỉnh Quảng Trị', 'Tỉnh'),
(32, 'Tỉnh Thừa Thiên Huế', 'Tỉnh'),
(33, 'Thành phố Đà Nẵng', 'Thành phố Trung ương'),
(34, 'Tỉnh Quảng Nam', 'Tỉnh'),
(35, 'Tỉnh Quảng Ngãi', 'Tỉnh'),
(36, 'Tỉnh Bình Định', 'Tỉnh'),
(37, 'Tỉnh Phú Yên', 'Tỉnh'),
(38, 'Tỉnh Khánh Hòa', 'Tỉnh'),
(39, 'Tỉnh Ninh Thuận', 'Tỉnh'),
(40, 'Tỉnh Bình Thuận', 'Tỉnh'),
(41, 'Tỉnh Kon Tum', 'Tỉnh'),
(42, 'Tỉnh Gia Lai', 'Tỉnh'),
(43, 'Tỉnh Đắk Lắk', 'Tỉnh'),
(44, 'Tỉnh Đắk Nông', 'Tỉnh'),
(45, 'Tỉnh Lâm Đồng', 'Tỉnh'),
(46, 'Tỉnh Bình Phước', 'Tỉnh'),
(47, 'Tỉnh Tây Ninh', 'Tỉnh'),
(48, 'Tỉnh Bình Dương', 'Tỉnh'),
(49, 'Tỉnh Đồng Nai', 'Tỉnh'),
(50, 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh'),
(51, 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương'),
(52, 'Tỉnh Long An', 'Tỉnh'),
(53, 'Tỉnh Tiền Giang', 'Tỉnh'),
(54, 'Tỉnh Bến Tre', 'Tỉnh'),
(55, 'Tỉnh Trà Vinh', 'Tỉnh'),
(56, 'Tỉnh Vĩnh Long', 'Tỉnh'),
(57, 'Tỉnh Đồng Tháp', 'Tỉnh'),
(58, 'Tỉnh An Giang', 'Tỉnh'),
(59, 'Tỉnh Kiên Giang', 'Tỉnh'),
(60, 'Thành phố Cần Thơ', 'Thành phố Trung ương'),
(61, 'Tỉnh Hậu Giang', 'Tỉnh'),
(62, 'Tỉnh Sóc Trăng', 'Tỉnh'),
(63, 'Tỉnh Bạc Liêu', 'Tỉnh'),
(64, 'Tỉnh Cà Mau', 'Tỉnh');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `name_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personnel_size` tinyint(4) NOT NULL,
  `career_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` int(11) DEFAULT NULL COMMENT 'Chọn từ 1 đến 60',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_license` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servece` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `employer_id`, `name_company`, `personnel_size`, `career_id`, `phone`, `address`, `city`, `description`, `website`, `fax`, `logo`, `business_license`, `name_contact`, `phone_contact`, `email_contact`, `address_contact`, `servece`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Công ty TNHH TM-DV Công Nghệ Thành Nhân', 1, 32, '0901415416', '992 Âu Cơ, Phương 14, Tân Bình', 51, 'Đang cập nhật', 'www.ThanhNhanComputer.vn', '0312451578', 'Logo-ThanhNhan.png', NULL, 'Phạm Văn Chính', '0901415416', 'Chinhpham770@gmail.com', '992 Âu Cơ, Phương 14, Tân Bình', NULL, 1, '2020-11-29 12:40:52', '2020-11-29 12:40:52'),
(2, 2, 'Công ty Cổ phần Phát triển Công nghệ Sài Gòn Web', 100, 22, '0708337474  ', '108/ 15 Cộng Hòa, phường 4, quận Tân Bình.', 59, 'Đang cập nhật', 'trishhopkinson.com', NULL, NULL, NULL, 'Ái Hồng', '0798.58.1133 ', 'mai112233@yahoo.com.vn', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(3, 3, 'Công ty Thiết kế web Saigon Hitech', 10, 22, '0254772474  ', ' 399B Trường Chinh, phường 14, quận Tân Bình.', 51, 'Đang cập nhật', 'saigontech.com', NULL, NULL, NULL, 'Ái Khanh', '0799994133 ', 'khanh1123@yahoo.com.vn', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(4, 4, 'Công ty Cổ phần CHILI', 65, 10, '0792.56.7755 ', '54 đường C1, phường 13, quận Tân Bình.', 41, 'Đang cập nhật', ' CHILI.com.vn', NULL, NULL, NULL, 'Ái Linh', '0336698845', 'tuongvi25@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(5, 5, 'Công ty TNHH Thiết kế web Trust.vn', 54, 8, '0789.92.5588 ', '15/2 Đường B1 Cộng Hòa, phường 13, quận Tân Bình', 34, 'Đang cập nhật', 'Trust.vn', NULL, NULL, NULL, 'Ái Nhân', '0703112727 ', 'quyenbantochuc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(6, 6, 'Công ty TNHH Webico', 26, 9, '032872.5588 ', 'Tầng 8 Mekong Tower, số 235 - 241 Cộng Hòa, phường 13, quận Tân Bình', 51, 'Đang cập nhật', 'websicoe.com.vn', NULL, NULL, NULL, 'Ái Nhi', '0254799727 ', 'chonhadico@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(7, 7, 'Công ty TNHH Công Nghệ và Truyền Thông IB Việt Nam - ibweb', 50, 18, '03249.92.5588 ', '66 Nguyễn Bá Tuyển, phường 12, quận Tân Bình.', 51, 'Đang cập nhật', 'idibweb.vn', NULL, NULL, NULL, 'Ái Thi', '0364112727 ', 'lelien2288@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(8, 8, 'Công ty TNHH SUNSHINE VN', 10, 5, '03265877889 ', '1/2 Nguyễn Đình Khơi, phường 4, quận Tân Bình.', 51, 'Đang cập nhật', 'sunshine.vn', NULL, NULL, NULL, 'Ái Thy', '0987462844 ', 'phamtham31290@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(9, 9, 'Công ty TNHH Phần Mềm Zozo', 19, 25, '03698554198 ', 'Tầng 1 - Tòa nhà Arrow, số 40 Hoàng Việt, phường 4, quận Tân Bình.', 51, 'Đang cập nhật', 'zzzooe.vn', NULL, NULL, NULL, 'Ái Vân', '0164857844 ', 'nhoc070986@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(10, 10, 'Công ty TNHH Dịch Vụ Quảng Cáo Minh Thuận', 19, 21, '0783.334.111  ', '220/ 22/ 22 Âu Cơ, phường 9, quận Tân Bình', 51, 'Đang cập nhật', 'adse.vn', NULL, NULL, NULL, 'Ái Bình', '0164857844 ', 'toquyen0910@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(11, 11, 'Công ty TNHH dịch vụ Siêu Tốc Việt', 17, 11, ' 079.444.6565 ', '15 Huỳnh Văn Nghệ, phường 15, quận Tân Bình.', 51, 'Đang cập nhật', 'sieutocviet.vn', NULL, NULL, NULL, 'Ái Di', '	0707.75.6996   ', 'vuive0910@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(12, 12, 'Công ty TNHH Dịch Vụ Quảng Cáo Minh Thuận', 19, 21, '0783.334.111  ', '220/ 22/ 22 Âu Cơ, phường 9, quận Tân Bình', 51, 'Đang cập nhật', 'adse.vn', NULL, NULL, NULL, 'Ái Bình', '0164857844 ', 'toquyen0910@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(13, 13, ' Công ty TNHH Công Nghệ QCV Việt Nam ', 7, 1, ' 07.68.68.68.01  ', ' Lầu 4 - Thái Bình Building - 264A Nguyễn Thái Bình, phường 12, quận Tân Bình. ', 51, 'Đang cập nhật', ' cqcvt.vn ', NULL, NULL, NULL, 'Ái Di', '	0792.66.63.63   ', '   giangdao2310@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(14, 14, ' Công ty Cổ phần Truyền thông CIP MEDIA', 70, 20, ' 07.89.89.89.12   ', ' 9/11 Thăng Long, phường 4, quận Tân Bình. ', 51, 'Đang cập nhật', ' cipmdeia.vn ', NULL, NULL, NULL, 'Ái Châu', '	0783.45.2277    ', '  Chougiao0@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(15, 15, ' Công ty TNHH King Help ', 75, 29, ' 0708.68.1717    ', ' 2/21 Lê Quốc Tuấn, phường 13, quận Tân Bình. ', 51, 'Đang cập nhật', ' kinghepeia.vn ', NULL, NULL, NULL, 'Ái Châu Minh', '	0789999977    ', '  Chougiao0@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(16, 16, ' Công ty TNHH Thương Mại Quảng Cáo Nhật Nam ', 95, 19, ' 0789.91.4466      ', ' 97/15 Hồng Lạc, phường 10, quận Tân Bình. ', 51, 'Đang cập nhật', ' nhatnam.com.vn ', NULL, NULL, NULL, 'An Hạ', '	0703.32.7676      ', '  lhtuetam@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(17, 17, ' Công ty TNHH Thương Mại Dịch Vụ HALINK ', 44, 18, ' 0703.33.66.44        ', 'Tầng trệt, Tòa nhà Dtec Building, Số 6 Phan Chu Trinh, phường Tân Thành, quận Tân Phú. ', 51, 'Đang cập nhật', ' halink.com.vn ', NULL, NULL, NULL, 'An Hạ', '	07.68.68.68.50       ', '  huongnb.89@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(18, 18, ' Công Ty Giải Pháp Công Nghệ Tùng Phát  ', 74, 17, ' 0792.15.85.55          ', ' 11 Đặng Thế Phong,  phường Tân Sơn Nhì, quận Tân Phú. ', 51, 'Đang cập nhật', ' tungphat.vn ', NULL, NULL, NULL, 'An Hạ', '	079.777.222.8         ', '  thoakim.thuesenvang@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(19, 19, ' Công ty TNHH Ngôi Sao Số  ', 70, 37, ' 0765.69.1188            ', '95 Lê Lâm, phường Phú Thạnh, quận Tân Phú.', 51, 'Đang cập nhật', ' ngoisauso.com.vn ', NULL, NULL, NULL, 'An Hằng', '	079.874922.8         ', ' huynhtanphat49kt@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(20, 20, 'Công ty DIGISTAR', 40, 15, '0784.345679 ', 'Đang cập nhật', 40, 'Đang cập nhật', 'elnacain.com', NULL, NULL, NULL, 'An Nhàn', '0767.345679 ', 'thanhthao.cry@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(21, 21, ' Công ty TNHH Phát Triển Nắng Xanh', 25, 35, '0813.345679  ', 'Đang cập nhật', 35, 'Đang cập nhật', 'datnangxanh.com', NULL, NULL, NULL, 'An Nhiên', '0767.399679 ', 'huynhtanphat49kt@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(22, 22, ' Công ty TNHH Thương Mại Điện Tử Cao Tốc', 2, 31, '0971.26.79.79  ', 'Đang cập nhật', 15, 'Đang cập nhật', 'caotoc.com.vn', NULL, NULL, NULL, 'An Chi', '0765.77.78.79  ', 'canhchimbayxa89@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(23, 23, ' Công ty TNHH Tư Vấn Thiết Kế Phần Mềm Cánh Cam', 29, 31, '0971.26449.79  ', '156 Nguyễn Văn Thủ, quận 1.', 51, 'Đang cập nhật', 'canhcam.com.vn', NULL, NULL, NULL, 'An Ðào', '0765.97.78.79  ', 'thuyan83@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(24, 24, ' Công ty Thiết kế website 123Corp', 9, 14, ' 04781.79.79    ', 'Số 68 Nguyễn Huệ, phường Bến Nghé, quận 1.', 51, 'Đang cập nhật', '123crpo.vn', NULL, NULL, NULL, 'Anh Ðào', '0962.838.939    ', 'doanthim@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(25, 25, ' Công ty Cổ phần Công Nghệ GREENSOFT', 29, 4, ' 093116.39.39    ', '60 Nguyễn Đình Chiểu, phường Đa Kao, quận 1.', 51, 'Đang cập nhật', '1grennsofto.vn', NULL, NULL, NULL, 'Nguyên Anh Ðào', '0971.84.79.79    ', 'daochilem@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(26, 26, ' Công ty TNHH AUN Việt Nam', 100, 22, ' 0936.938.939     ', 'Tầng 11, Tòa Nhà Bảo Việt, 233 Đồng Khởi, phường Bến Nghé', 12, 'Đang cập nhật', 'auunaunn.com.vn', NULL, NULL, NULL, 'Nguyên Hải', '0946.22.79.79     ', 'haiquayxeem@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(27, 27, '   Công ty TNHH Công Nghệ và Tư Vấn Doanh Nghiệp INNOCOM  ', 90, 32, '   097115.79.79     ', '  Tầng 46 – Tòa nhà Bitexco Financial Tower, số 2  Hải Triều, phường Bến Nghé, quận 1.  ', 13, 'Đang cập nhật ', '      innncom.vn ', NULL, NULL, NULL, 'Nguyên Nguyên', '0708.79.39.79       ', 'nguyendaxam@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(28, 28, '   Công ty TNHH ITOOL  ', 30, 2, '   0977896.79     ', '  số 04 Nguyễn Đình Chiểu, phường Đa Kao, quận 1.  ', 13, 'Đang cập nhật ', '      inttonnl.vn ', NULL, NULL, NULL, 'Hồng Nguyên', '0308.79.39.79       ', 'nguynea@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(29, 29, '  Công ty TNHH TM - DV South Team ', 4, 6, '   0977.3996.79     ', '  187/7 Điện Biên Phủ, phường Đa Kao, quận 1.  ', 15, 'Đang cập nhật ', '      souththem.com.vn ', NULL, NULL, NULL, 'Hồng Hải', '0308.79.39.74       ', 'ngochaihonga@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(30, 30, '  Công ty Cổ phần Truyền Thông và Công Nghệ Vinalink ', 40, 36, '   0457.3996.79     ', '  57 - 59 Hồ Tùng Mậu, phường Bến Nghé, quận 1.  ', 19, 'Đang cập nhật ', '      vinamilk.com.vn ', NULL, NULL, NULL, 'Long Thộ', '0874.79.39.74       ', 'suatho@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(31, 31, '  Công ty Cổ phần Truyền Thông và Công Nghệ Vimala ', 40, 36, '   0457.3996.79     ', 'Hà Nội', 21, 'Đang cập nhật ', '      vinamla.com.vn ', NULL, NULL, NULL, 'Long Đực', '0874.79.39.74       ', 'suatho@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(32, 32, ' Công ty thiết kế web Trí Tuệ Việt  ', 87, 11, '   0357.3999.79     ', '  55/5 Trần Đình Xu, quận 1.  ', 19, 'Đang cập nhật ', 'iqviet.com.vn ', NULL, NULL, NULL, 'Long Châu', '087.79.74.412       ', 'chaulogo@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(33, 33, '  Công ty CP TMĐT Công Nghệ Việt ', 80, 33, '  0902.79.79.39   ', 'Tầng 4 Tòa nhà Khatoco - 259A Hai Bà Trưng, phường 6, quận 3.  ', 41, 'Đang cập nhật ', '      khatonghe.com.vn ', NULL, NULL, NULL, 'Linh Hà', '0908.679.979       ', 'Hachaunghe@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(34, 34, '  Công ty TNHH Gootech Việt Nam ', 40, 3, '  0977.63.3979    ', ' 62A Phạm Ngọc Thạch, phường 6, quận 3 ', 41, 'Đang cập nhật ', '      googtech.com.vn ', NULL, NULL, NULL, 'Linh Hương', '0908.679.977       ', 'huonglonh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(35, 35, 'Công ty TNHH Dịch Vụ Thương Mại Điện Tử ESCO', 20, 23, '  0941.63.3979    ', ' Số 9, đường số 2, Cư Xá Đô Thành, phường 4, quận 3 ', 17, 'Đang cập nhật ', '      esocoo.com.vn ', NULL, NULL, NULL, 'Linh Nguyên', '0308.679.977       ', 'huongnguyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(36, 36, 'Công Ty TNHH Blue Fox', 21, 13, '  0941.63.7477   ', '117-119 tòa nhà An Phú, đường Lý Chính Thắng ', 18, 'Đang cập nhật ', '     blueox.com.vn ', NULL, NULL, NULL, 'Thế Nguyên', '0378.679.977       ', 'thenguyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(37, 37, 'Công Ty TADC SOFTWARE', 69, 19, '  0741.63.7477   ', '728/22 Trần Hưng Đạo, phường 2, quận 5. ', 44, 'Đang cập nhật ', '     soradc.com.vn ', NULL, NULL, NULL, 'Thế Linh', '0378.677896      ', 'thelinh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(38, 38, 'Công ty TNHH Giải Pháp Số Expro', 64, 19, '  076.369.7477   ', '270 Cao Thắng', 44, 'Đang cập nhật ', '     expo.com.vn ', NULL, NULL, NULL, 'Châu Thế Linh', '0378.6772541      ', 'chuathelinh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(39, 39, 'Công ty Cổ phần Giải pháp Công Nghệ 4S', 6, 1, '  07417737477   ', ' A54 Khu Nam Long, đường Phú Thuận', 4, 'Đang cập nhật ', '    4sonline.com.vn ', NULL, NULL, NULL, 'Hàng Thái', '0378.644.2541      ', 'hangthai@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(40, 40, ' Công ty Giải Pháp Nhanh', 46, 38, '  0988.49.39.39    ', ' Tầng 4 - Tòa nhà Flemington', 50, 'Đang cập nhật ', '    htppa.vn ', NULL, NULL, NULL, 'Hàng Thái Tú', '0787.69.39.79      ', 'hangthaitu@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(41, 41, 'Công ty Thiết kế website Mona Media', 66, 29, '02554447777', '319 C16 Khu cư xá Thuận Việt', 0, NULL, 'momamedia.com.vn', NULL, NULL, NULL, 'Văn Minh', '0325471888', 'minhha@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(42, 42, ' Công ty TNHH EFC', 61, 22, '0365472229', '319 C16 Khu cư xá Thuận Việt', 0, NULL, 'efconline.com.vn', NULL, NULL, NULL, 'Văn Liên', '0325441888', 'lienchau@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(43, 43, 'Công Ty Dữ Liệu Toàn Cầu', 102, 37, '	0932.78.78.79 ', 'VP 07 Lầu 12Bis - Cao Ốc Thái An', 52, 'Đang cập nhật', 'dulieu.gov', NULL, NULL, NULL, 'Cẩm Hạnh', '0889.978.979 ', 'phuonghong_200632@yahoo.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(44, 44, ' Công ty TNHH Thiết Kế Web Gia Hân', 22, 17, '0919.89.98.79', 'Số 7, đường Tân Thới Hiệp 06, phường Tân Thới Hiệp', 53, 'Đang cập nhật', 'giahanwweb.com', NULL, NULL, NULL, 'Cẩm Hiền', '0936.38.38.39 ', 'thanhlan.ecc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(45, 45, 'Công Ty Dữ Liệu Toàn Cầu', 102, 37, '	0932.78.78.79 ', 'VP 07 Lầu 12Bis - Cao Ốc Thái An', 52, 'Đang cập nhật', 'dulieu.gov', NULL, NULL, NULL, 'Cẩm Hạnh', '0889.978.979 ', 'phuonghong_200632@yahoo.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(46, 46, ' Công ty TNHH Thiết Kế Web Gia Hân', 22, 17, '0919.89.98.79', 'Số 7, đường Tân Thới Hiệp 06, phường Tân Thới Hiệp', 53, 'Đang cập nhật', 'graham.com.vn', NULL, NULL, NULL, 'Cẩm Hiền', '0936.38.38.39 ', 'thanhlan.ecc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(47, 47, 'Công ty TNHH TM Thiết kế Website Hoàng Vĩnh Phát', 102, 30, '	09138.179.79  ', '125 Trường Chinh', 54, 'Đang cập nhật', 'tailieukinhdoanh.com', NULL, NULL, NULL, 'Cẩm Hường', '0889.978.929 ', 'myloankt87@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(48, 48, 'Công ty TNHH Thiết kế Website Trí Phạm', 12, 3, '	0919.05.79.79   ', '776 Lê Đức Thọ, phường 15, quận Gò Vấp.', 55, 'Đang cập nhật', 'tripham.com', NULL, NULL, NULL, 'Cẩm Liên', '0986.79.69.79  ', 'onlinelien7@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(49, 49, 'Công ty TNHH Giải pháp IMS', 18, 13, '	0917.22.39.79     ', '  434/14 Phạm Văn Chiêu.', 55, 'Đang cập nhật ', 'ims.com', NULL, NULL, NULL, 'Cẩm Linh', '0366.79.69.79  ', 'camlinh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(50, 50, ' Công ty cổ phần dịch vụ AZSEO  ', 19, 14, '	0908.679.979     ', '  Số 59, đường số 1, phường 7, quận Gò Vấp.', 56, 'Đang cập nhật ', 'azseo.com', NULL, NULL, NULL, 'Cẩm Ly', '0366.79.19.79  ', 'clinhyahhh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(51, 51, ' Công ty TNHH MEVIVU  ', 29, 24, '	0939.89.79.79     ', '  99/26/18 Huỳnh Văn Nghệ, phường 12, Quận Gò Vấp.', 57, 'Đang cập nhật ', 'mevivu.com', NULL, NULL, NULL, 'Cẩm Nhi', '0366.79.19.79  ', 'nhinhinhih@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(52, 52, ' Công ty TNHH Phát Triển Giải Pháp Tin Học Bền Vững ITGreen  ', 39, 34, '	0939.21.79.79     ', ' 81/15/18 Huỳnh Văn Nghệ, phường 12, quận Gò Vấp.', 57, 'Đang cập nhật ', ' itgrenn.com', NULL, NULL, NULL, 'Cẩm Nhung', '0314.79.19.79  ', 'nhungcamh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(53, 53, ' Công ty TNHH Công Nghệ Truyền Thông Web Đại Tín ', 49, 4, '	0839.59.39.39       ', ' 331/70/45 Phan Huy Ích, quận Gò Vấp.', 58, 'Đang cập nhật ', ' daitin.com.vn', NULL, NULL, NULL, 'Cẩm Thảo', '0768.686.447    ', 'thaocamonline@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(54, 54, ' Công ty Thương Hiệu Việt ', 59, 32, '	0703.22.88.66       ', ' 672A27 Phan Văn Trị, phường 10, quận Gò Vấp..', 59, 'Đang cập nhật ', ' thuonghieuviet.vn', NULL, NULL, NULL, 'Cẩm Thúy', '0722.286.447    ', 'ngoisaomayman2409dl@yahoo.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(55, 55, 'Công ty TNHH Máy Chủ Tốt', 26, 20, '0369874529', '74/6/51 đường số 9, phường 16, quận Gò Vấp.', 57, 'Đang cập nhật', 'maychu.net', NULL, NULL, NULL, 'Yến Trinh', '0376.99.8888 ', 'trinhyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(56, 56, 'Samsung Electronics Việt Nam', 96, 2, '0373.62.9999 ', '	Huyện Thuận Thành, tỉnh Bắc Ninh', 1, 'Đang cập nhật', 'electronics.com.vn', NULL, NULL, NULL, 'Yến Trâm', '0376.9377.388 ', 'tamyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(57, 57, 'Tập đoàn Dầu khí Việt Nam', 100, 12, '09119.36789 ', '74/6/51 đường số 9, phường 16, quận Gò Vấp.', 57, 'Đang cập nhật', 'daukhivietnam.vn', NULL, NULL, NULL, 'Hải Phùng', '09415.44444  ', 'tphungauto@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(58, 58, 'Tập đoàn Xăng dầu Việt Nam', 90, 1, '03981.55555   ', 'Quận Đống Đa, Hà Nội ', 33, 'Đang cập nhật', 'xangdau.com.vn', NULL, NULL, NULL, 'Hải Thảo', '	0775.789.789   ', 'thaoauto@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(59, 59, '	Tập đoàn Điện lực Việt Nam', 40, 3, '04981.55555   ', '	Quận Hoàn Kiếm, Hà Nội ', 33, 'Đang cập nhật', 'petro.com', NULL, NULL, NULL, 'Hải Thanh', '	0375.789.789   ', 'thayeuthanhauto@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(60, 60, '		Tập đoàn Công nghiệp – Viễn thông Quân đội', 49, 34, '08471.55555   ', '	Huyện Từ Liêm, Hà Nội', 32, 'Đang cập nhật', 'viettel.com', NULL, NULL, NULL, 'Hải Phượng', '	0375.789.789   ', 'haiphuonguto@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(61, 61, 'Tập đoàn Vingroup', 50, 9, '02584147414', 'Quận Long Biên, Hà Nội', 33, 'Đang cập nhật', 'vingroup.com', NULL, NULL, NULL, 'Yến Phương', '0917.28.5555  ', 'Phuong.mn@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(62, 62, '	Thế giới di động', 99, 5, '025.33.59414', 'Quận 9, Thành phố Hồ Chí Minh', 53, 'Đang cập nhật', 'thegioididong.com', NULL, NULL, NULL, 'Yến Oanh', '0917.366.5555  ', 'Oanhmn@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(63, 63, '		Tập đoàn Vàng bạc Đá quý DOJI', 91, 25, '0225.3344.594', '	Quận Ba Đình, Hà Nội', 53, 'Đang cập nhật', 'doji.com.vn', NULL, NULL, NULL, 'Yến Nhi', '0997.366.5555  ', 'nhidojjjinn@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(64, 64, '			Công ty cổ phần ô tô Trường Hải', 51, 14, '076551.8888 ', '	Quận 2, Thành phố Hồ Chí Minh', 51, 'Đang cập nhật', 'truonghai.com.vn', NULL, NULL, NULL, 'Yến My', '0997.889.5555  ', 'truonyennhi@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(65, 65, '				Công ty cổ phần Tập đoàn Hòa Phát', 50, 24, '0369.336.8888 ', '		Quận Hai Bà Trưng, Hà Nội', 51, 'Đang cập nhật', 'hoaphatone.com.vn', NULL, NULL, NULL, ' Yến Mai', '0997.889.2145  ', 'yenmai@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(66, 66, '	Jetstar Pacific', 50, 24, '0369.336.1114 ', '		Quận Hai Bà Trưng, Hà Nội', 51, 'Đang cập nhật', 'jetstarpaific.com.vn', NULL, NULL, NULL, ' Yến Ha', '0369.020.2145  ', 'yenhaaha@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(67, 67, ' Công ty Cổ phần Đại Cát Tường', 66, 33, '0235.33.8874', 'Thành phố Quảng Ngãi, tỉnh Quảng Ngãi', 22, 'Đang cập nhật', 'daicattruong.com', NULL, NULL, NULL, 'Yến Lan', '0841.366.5555 ', 'lanngocyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(68, 68, 'Công ty Truyền thông & Giải trí Điền Quân', 59, 15, '1800.8168', 'Thành phố Hồ Chí Minh', 23, 'Đang cập nhật', 'dienquan.com.vn', NULL, NULL, NULL, 'Yến Bình', '0917.366.5555 ', 'mbinhyenn@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(69, 69, 'Tập đoàn FPT', 79, 35, '1900.8168', 'Thành phố Hồ Chí Minh', 33, 'Đang cập nhật', 'fpt.com.vn', NULL, NULL, NULL, 'Yến Nhi', '0917.366.5555 ', 'nhi@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(70, 70, 'Công ty Cổ phần Xuất nhập khẩu Thủy sản Cửu Long An Giang', 41, 31, '1900.7168', 'Thành phố Hồ Chí Minh', 30, 'Đang cập nhật', 'cuulong.com.vn', NULL, NULL, NULL, 'Yến Anh', '0917.789.5555 ', 'Anhemtv@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(71, 71, 'Công ty Trách nhiệm hữu hạn Ô tô Thế giới', 11, 31, '02658.600.7168', 'Thành phố Hồ Chí Minh', 30, 'Đang cập nhật', 'otothegig.com.vn', NULL, NULL, NULL, 'Yến Ðan', '0917.789.5555 ', 'danyeu@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(72, 72, 'Vinaphone', 1, 1, '0374.600.7168', 'Thành phố Hồ Chí Minh', 30, 'Đang cập nhật', 'vinaphone.com.vn', NULL, NULL, NULL, 'Xuyến Chi', '0916.99.99.95  ', 'xyenchi@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(73, 73, 'Vinacafe', 10, 10, '0916323456 ', 'Thành phố Hồ Chí Minh', 10, 'Đang cập nhật', 'vinacaffe.com.vn', NULL, NULL, NULL, 'Xuyến An', '0916.99.99.95  ', 'xyenananana@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(74, 74, 'Tổng công ty Viglacera', 11, 15, '0987.90.00.00  ', 'Thành phố Hồ Chí Minh', 10, 'Đang cập nhật', 'Viglacera.com.vn', NULL, NULL, NULL, 'Xuân Yến', '0916.99.99.95  ', 'xuanyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(75, 75, 'Tổng công ty Việt  Cồ', 65, 13, '0995.24.21.23  ', '	Hà Nội', 32, 'Đang cập nhật', 'vietco.com.vn', NULL, NULL, NULL, 'Nguyễn Ngọc Kim Châu', '03664488297', 'kim444kim444@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(76, 76, 'Vietnam Artist Agency (VAA)', 61, 23, '0995.11.21.23  ', '	Hà Nội', 31, 'Đang cập nhật', 'agency.com.vn', NULL, NULL, NULL, ' Kim Châu', '03284488297', 'kim444kim444@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(77, 77, 'TVM Comics', 61, 23, '0995.11.36985  ', '	Hà Nội', 3, 'Đang cập nhật', 'tvm.cet', NULL, NULL, NULL, ' Kim Ngọc', '0564488297', 'kimngoc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52'),
(78, 78, 'Nhà xuất bản Trẻ', 9, 6, '05993.999.64   ', '	Hà Nội', 4, 'Đang cập nhật', 'hotter.vn', NULL, NULL, NULL, ' Thái Ngọc', '0598.1998.38 ', 'thaingoc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, '2020-11-29 12:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`id`, `name`) VALUES
(1, 'Không yêu cầu'),
(2, 'Lao động phổ thông'),
(3, 'Chứng chỉ'),
(4, 'Trung học'),
(5, 'Trung cấp'),
(6, 'Cao đẳng'),
(7, 'Đại học'),
(8, 'Cao học');

-- --------------------------------------------------------

--
-- Table structure for table `degree_details`
--

CREATE TABLE `degree_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_profile` int(11) UNSIGNED NOT NULL,
  `university` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `ranked` varchar(255) NOT NULL,
  `detail` text DEFAULT NULL,
  `month_start` varchar(100) NOT NULL,
  `year_start` varchar(100) NOT NULL,
  `graduation_month` varchar(100) NOT NULL,
  `graduation_year` varchar(100) NOT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dungdq5520@gmail.com', '2020-11-29 12:40:52', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-11-29 12:40:52', '2020-11-29 12:40:52'),
(2, 'ko.huongngoctinhkt1986@gmail.com', '2020-12-01 12:47:43', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-12-01 12:33:18', '2020-12-01 12:33:18'),
(3, 'ckctm12@gmail.com', '2020-12-01 12:33:18', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-12-01 12:33:18', '2020-12-01 12:33:18'),
(4, 'tiffany99@hartmann.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-12-01 12:33:18', '2020-12-01 12:33:18'),
(5, 'invalid@example.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-12-01 12:33:18', '2020-12-01 12:33:18'),
(6, 'ko.ngoctinhkt1986@gmail.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-12-01 12:33:18', '2020-12-01 12:33:18'),
(7, 'dungiiiung1206@gmail.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-12-01 12:33:18', '2020-12-01 12:33:18'),
(8, 'nguyenthimy2805@gmail.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-01 12:33:18'),
(9, 'mongtuyenvikor@gmail.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-22 18:27:12'),
(10, 'longnv@gmail.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-14 18:27:14'),
(11, 'huongtrangkt168@gmail.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-07 18:27:17'),
(12, 'hanhmt@ckca.vn', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-01 18:27:19'),
(13, 'yenmac90@gmail.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-07 18:27:21'),
(14, 'vnptca.hotrokekhai@gmail.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-07 18:27:23'),
(15, 'tuananhas2212@gmail.com', '2020-12-01 12:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-21 18:27:25'),
(16, 'songdai_love@yahoo.com', '2020-12-01 22:34:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-08 18:27:27'),
(17, 'quangha9988@gmail.com', '2020-12-01 22:34:37', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:27:29'),
(18, 'dinhhadn85@gmail.com', '2020-12-01 22:34:49', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:27:31'),
(19, 'thanhthaoxn380@gmail.com', '2020-12-01 22:34:57', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-01 18:27:33'),
(20, 'quanghico@gmail.com', '2020-12-01 22:35:05', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-27 18:27:37'),
(21, 'anhsong.minhanh@gmail.com', '2020-12-01 22:35:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-06 18:27:40'),
(22, 'nguyenthanhhuong89nt@gmail.com', '2020-12-01 22:35:25', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-06 18:27:42'),
(23, 'maithuy.182@gmail.com', '2020-12-01 22:35:31', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-06 18:27:44'),
(24, 'nguyenvan.11392@gmail.com', '2020-12-01 22:35:38', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-06 18:27:47'),
(25, 'letich.dn567@yahoo.com', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-05 18:27:49'),
(26, 'haivu74ftu@gmail.com', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-05 18:27:51'),
(27, 'haivu74ftu@gmail.com.em', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-05 18:27:54'),
(28, 'traitimbinhyen_cth_8x@yahoo.com', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-05 18:27:56'),
(29, 'anhktltv@gmail.com', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:00'),
(30, 'hongcuc02@gmail.com', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:03'),
(31, 'hongcuc2109@gmail.com', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:08'),
(32, 'toankt8@yahoo.com', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:11'),
(33, 'hoducbinh91@gmail.com', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:14'),
(34, 'ngochuyen16289@yahoo.com\r\n', '2020-12-01 22:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:16'),
(35, 'nam_xdbadinh@yahoo.com.vn', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:18'),
(36, 'huett.add@gmail.com', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:20'),
(37, 'lanyenphuc@gmail.com', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:23'),
(38, 'caukinhtb@yahoo.com', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:25'),
(39, 'ntmtrinh390@gmail.com', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:27'),
(40, 'coanhdao123456@yahoo.com.vn', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:30'),
(41, 'mylinh.botbien@gmail.com', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:32'),
(42, 'tieuthu2620@gmail.com\r\n', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:35'),
(43, 'nguyenhieuhd88@gmail.com.vn', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:57'),
(44, 'trangvt.tm@gmail.com', '2020-12-01 17:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:56'),
(45, 'utpkakav7320@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:54'),
(46, 'tongha12389@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:51'),
(47, 'thuhuongstyle91@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 17:00:00'),
(48, 'myloan.ml@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:46'),
(49, 'hongthuy_mm1987@yahoo.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:48'),
(50, 'beghjdendep@yahoo.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:42'),
(51, 'minguyenthi343@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:40'),
(52, 'zynchiiiiiip@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:39'),
(53, 'lenhung2012dt@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:36'),
(54, 'levanton777@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:35'),
(55, 'tranglinhnhi89@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:33'),
(56, 'philong.banking@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:31'),
(57, 'cubi0123301@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:28'),
(58, 'la.nguyenha31891@gmail.com', '2020-12-01 20:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:26'),
(59, 'chuthivui89@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:24'),
(60, 'phuongnhi835@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-12-01 18:29:22'),
(61, 'khacmlm@gmail.com', '2020-12-01 00:55:07', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:19'),
(62, 'chanhminhanh@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:17'),
(63, 'aaaagiangtchq@gmail.com', '2020-12-01 19:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:15'),
(64, 'minh1082qn@yahoo.com', '2020-12-02 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:13'),
(65, 'vuthanhgp89@yahoo.com', '2020-12-02 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:11'),
(66, 'ngocgiaukt09@gmail.com', '2020-12-02 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 17:00:00'),
(67, 'bichngocpt90@gmail.com', '2020-12-02 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:06'),
(68, 'thuhien.aof08@gmail.com', '2020-12-02 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:04'),
(69, 'ketoanlinh@gmail.com', '2020-12-02 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:29:01'),
(70, 'thanhque1988@gmail.com', '2020-12-01 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:59'),
(71, 'lehuonglan.90@gmail.com', '2020-12-01 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:57'),
(72, 'trangtgnn@gmail.com', '2020-12-02 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:54'),
(73, 'manhkhan.ct@gmail.com', '2020-12-01 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:51'),
(74, 'mydang2208@gmail.com', '2020-12-01 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:48'),
(75, 'luuquynhanht@gmail.com', '2020-12-01 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:45'),
(76, 'luuquynhanh.kt@gmail.com', '2020-12-01 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:43'),
(77, 'kimanh8608@gmail.com', '2020-12-01 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:41'),
(78, '\r\nrtanvanean1804@gmail.com', '2020-12-02 00:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, '2020-11-30 18:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `name`) VALUES
(1, 'Chưa có'),
(2, 'Mới ra trường'),
(3, 'Dưới 1 năm'),
(4, '1 năm'),
(5, '2 năm'),
(6, '3 năm'),
(7, '4 năm'),
(8, '5 năm'),
(9, 'Trên 10 năm'),
(10, 'Không yêu cầu kinh nghiệm');

-- --------------------------------------------------------

--
-- Table structure for table `experience_detail`
--

CREATE TABLE `experience_detail` (
  `id` int(11) NOT NULL,
  `id_profile` int(11) UNSIGNED NOT NULL,
  `position` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `month_start` varchar(100) NOT NULL,
  `year_start` varchar(100) NOT NULL,
  `month_end` varchar(100) NOT NULL,
  `year_end` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `name`) VALUES
(1, 'Mới tốt nghiệp / Thực tập sinh'),
(2, 'Nhân viên'),
(3, 'Trưởng nhóm'),
(4, 'Trưởng phòng'),
(5, 'Phó giám đốc'),
(6, 'Giám đốc'),
(7, 'Tổng giám đốc điều hành'),
(8, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Chuổi 5 kí tự (Số + chữ) không được trùng',
  `company_id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `name_job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_job_id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL COMMENT '1,2 or 3',
  `career_id` int(10) UNSIGNED NOT NULL,
  `grade_id` int(10) UNSIGNED NOT NULL,
  `salary_id` int(10) UNSIGNED NOT NULL,
  `degree_id` int(10) UNSIGNED NOT NULL,
  `experience_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_requirements` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex_requirements` tinyint(4) NOT NULL COMMENT '0,1 or 2',
  `profile_request` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL COMMENT 'Ít hơn 90Day',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0: disable, 1 active, 2 viêc làm hot, 3 việc làm gấp',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job_code`, `company_id`, `employer_id`, `name_job`, `type_job_id`, `amount`, `career_id`, `grade_id`, `salary_id`, `degree_id`, `experience_id`, `address`, `city`, `description`, `job_requirements`, `sex_requirements`, `profile_request`, `benefits`, `name_contact`, `phone_contact`, `address_contact`, `email_contact`, `deadline`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TNC124', 1, 1, 'Nhân viên kĩ thuật máy tính', 3, 3, 21, 4, 4, 7, 10, '992 Âu Cơ, Phường 14, Tân Bình', 51, 'Việc nhẹ lương cao, ứng tuyển là nhận ngay', '- Thực hiện các công việc khác được giao\r\n            - Có khả năng làm việc độc lập và khả năng làm việc theo nhóm.\r\n            - Năng động, sáng tạo.\r\n            - Chịu được áp lực cao trong công việc, sẵn sàng làm thêm giờ nếu cần.\r\n            - Có tư duy làm việc logic, làm việc theo nhóm.\r\n            - Kỷ luật, chăm chỉ, có trách nhiệm trong công việc.\r\n            - Có khả năng đọc và nghiên cứu tài liệu tiếng Anh tốt.', 2, '\r\n            - Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\n            - Sơ yếu lý lịch.\r\n            - Bản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\n            - Giấy khám sức khỏe.', '- Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\n            - Thời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\n            - Được nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\n            - Tham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\n            - Nghỉ phép 12 ngày/năm\r\n            - Được tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\n            - Nhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n            - Các chế độ phúc lợi khác', 'Phạm Văn Chính', '0901415416', 'Đang cập nhật', 'trinhquanghan@example.com', '2020-12-31', 'aut-perspiciatis-quidem-rem-alias-odit-culpa-rerum-laborum-distinctio-et-dolor-magnam', 1, '2020-11-29 12:40:52', '2020-11-29 12:40:52'),
(2, 'tbl02\r\n', 2, 2, 'Marketing online', 5, 3, 28, 2, 4, 7, 4, 'Phòng 609, Lầu 6, Sài gòn Tower, 29 Lê Duẩn, P. Bến Nghé, Q. 1,', 51, 'Viết content cho facebook, website.\r\nNhân viên SEO\r\nQuảng cáo google, facebook\r\nBán hàng qua các trang mạng xã hội\r\nBán hàng với các trang thương mại điện tử: shopee, lazada,\r\nTiếp thị liên kết', 'Có kỹ năng tin học tốt và khả năng sử dụng internet\r\nCó hiểu biết về SEO, Marketing Online\r\nTư duy am hiểu hành vi người dùng, am hiểu thương hiệu\r\nKhả năng viết lách\r\nPhải kiên trì, sáng tạo, khéo léo cư xử với khách hàng\r\nNghiên cứu được mặt hàng ưa chuộng. Từ đó mà tìm ra những nguồn hàng chất lượng, để có thể phát triển shop online của mình.\r\nNắm bắt được xu hướng thị trường', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Cúc', '(028) 39105534', 'Đang cập nhật', 'nhatlinhbg@gmail.com', '2020-12-31', 'Marketing-online', 3, '2020-11-30 22:54:55', '2020-12-03 22:54:55'),
(3, 'tbl03\r\n', 3, 3, 'Lập trình', 1, 2, 21, 5, 11, 7, 8, 'Số 2-4 Lưu Văn Lang, P. Bến Thành, Q. 1, Tp. Hồ Chí Minh', 22, 'Công nghệ thông tin là một trong những ngành mũi nhọn mang đến sự phát triển vượt bậc cho khoa học kỹ thuật. Công nghệ thông tin đã trở thành một ngành học “hot” và thu hút rất nhiều bạn trẻ. Những bạn yêu thích máy tính và đam mê lập trình thì có thể nhận các dự án việc làm tại nhà.', 'Có kiến thức nền tảng lập lập trình, trình độ tương đương chuyên ngành\r\nTừ 6 tháng – 5 năm kinh nghiệm bất kỳ ngôn ngữ lập trình PHP, Java, .NET, Mobile, C++ ..\r\nKhả năng học hỏi nhanh, có tinh thần trách nhiệm cao và cầu tiến', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Hoa', '(028) 38223390', 'Đang cập nhật', 'dinhhaktdn@gmail.com', '2020-12-31', 'lap-trinh', 2, '2020-12-01 23:46:41', '2020-12-02 23:46:41'),
(4, 'tbl04\r\n', 4, 4, 'Thiết kế đồ họa ', 2, 1, 17, 2, 5, 6, 4, 'Phòng C1, Lầu 9, Tòa Star Building 33TER-33BIS, Mạc Đĩnh Chi,', 44, 'Tư vấn thiết kế\r\nChỉnh sửa ảnh cưới , hình ảnh phong cảnh\r\nTách nền cho sản phẩm bất động sản…\r\nThiết kế website, thiết kế logo, nhận diện thương hiệu,…', 'Kỹ năng tốt trong việc minh họa và diễn đạt ý tưởng thông qua các bản phác thảo.\r\nSử dụng thành thạo bộ công cụ sáng tạo Adobe – phần mềm Photoshop, Illustrator, Indesign.\r\nCó kinh nghiệm trong việc xây dựng dự án từ ý tưởng thông qua thiết kế và thực hiện\r\nCởi mở để hợp tác và nhận phản hồi, và có thể bảo vệ các lựa chọn thiết kế được thực hiện.', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', ' Bạch Kim', '(028) 3823 4870', 'Phòng 501, Tòa Nhà Đào Duy Từ, Số 9 Đường Đào Duy Từ, Q. Đống Đa, Hà Nội', 'congtychutiendat@gmail.com', '2020-12-30', 'thiet-ke-do-hoa', 2, '2020-12-01 23:46:41', '2020-12-01 23:46:41'),
(5, 'tbl05\r\n', 5, 5, 'Dịch thuật online', 2, 2, 4, 4, 6, 7, 6, 'B-9, Tòa nhà Deepshikha, Rajendra Place, Thành phố New Delhi', 52, 'Dịch thuật tài liệu, văn bản do Công ty giao.\r\nĐược tự do lựa chọn thực hiện dự án hoặc không.', 'Kiến thức chuyên môn\r\nKĩ năng mềm\r\nKĩ năng sử dụng các phần mềm văn phòng\r\nCần cù, tỉ mỉ với những bản dịch được giao,…', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.\r\n', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', ' Bạch Liên', '(091) 8587891846', 'Đang cập nhật', 'anil@futurechemagro.com', '2020-12-29', 'dich-thuan-online', 2, '2020-11-30 23:57:56', '2020-11-30 23:57:56'),
(6, 'tbl06\r\n', 6, 6, 'Nhân viên sale và telesale', 1, 3, 17, 2, 3, 5, 4, 'B-9, Tòa nhà Deepshikha', 10, 'Nhân viên sale : gọi điện và gặp trực tiếp khách hàng về sản phẩm và dịch vụ, Cuối cùng là bán sản phẩn cho khách hàng.\r\nNhân viên telesale: gọi điện tư vấn và chốt đơn cho khách hàng từ xa', 'Khả năng giao tiếp và thuyết phục tốt\r\nSự nhạy bén và am hiểu về sản phẩm\r\nNắm bắt được tâm lí khách hàng', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Mai', '(091) 8587891846', 'Đang cập nhật', 'anil@futurechemagro.com', '2020-12-26', 'nhan-vien-sale-telesale', 1, '2020-12-02 23:57:56', '2020-12-03 23:57:56'),
(7, 'tbl07\r\n', 7, 7, 'Dịch vụ kế toán làm thêm ngoài giờ', 3, 1, 35, 1, 2, 3, 3, '608 Lầu 6, Saigon Tower, 29 Lê Duẩn, P. Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 36, 'Ghi chép hoạt động kinh tế , tài chính của doanh nghiệp\r\nTổng hợp làm báo cáo tài chính, báo cáo thuế hàng tháng cho doanh nghiệp\r\nBáo cáo thuế hàng quý\r\nQuyết toán thuế hàng năm', 'có kinh nghiệm làm việc ở vị trí tương đương\r\nNắm vững các nghiệp vụ kế toán\r\nkhả năng phân tích, tổng họp và viết báo cáo\r\nSử dụng thành thạo các phần mềm kế toán và vi tính văn phòng\r\nCẩn thận, trung thực và có trách nhiệm với công việc', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Quỳnh', '(028) 39105532', 'Đang cập nhật', ' www.kanematsu.co.jp', '2020-12-25', 'dich-vu-ke-toan', 2, '2020-12-01 00:11:12', '2020-12-02 00:11:12'),
(8, 'tbl08\r\n', 8, 8, 'Chỉnh sửa nội dung và biên soạn lỗi', 2, 2, 4, 1, 2, 3, 4, '608 Lầu 7, Saigon Tower, 29 Lê Duẩn, P. Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 52, 'Chỉnh sửa tập trung vào tài liệu nôi dung tài liệu tổng thể và kiểm tra câu từ cho trôi chảy, rõ ràng và cấu trúc câu phù hợp\r\nBiên soạn lỗi là bước cuối cùng của việc xem xét 1 tài liệu. Đọc đi đọc lại để không xảy ra lỗi về từ và ngữ pháp\r\n', 'Người làm phải có một đoi mắt tốt , khỏe mạnh để chi tiết và xem xét phát hiện ra lỗi\r\nNắm rõ cấu trúc ngữ pháp , chính tả\r\nCẩn thận và chi tiết', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Trà', '(028) 22105532', 'Đang cập nhật', 'thuy@hcm.kanematsu.co.jp', '2021-01-07', 'chinh-sua-noi-dung-bien-tap', 3, '2020-12-01 00:11:12', '2020-12-03 00:11:12'),
(9, 'tbl09\r\n', 9, 9, 'Huấn luyên viên thể hình', 4, 3, 27, 2, 5, 2, 4, '3A02, Số 60 Nguyễn Đình Chiểu, P. Đăk, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 1, 'Hướng dẫn khách hàng tập luyện\r\nthiết lập chế độ dinh dưỡng\r\nĐưa ra giáo án luyện tập cho khách', 'Cần có kiến thức sâu và rộng về lĩnh vực\r\nNgoại hình tốt để khách hàng tin tưởng', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Tuyết', '0839115885', 'Đang cập nhật', 'www.et2c.com', '2020-12-26', 'nhan-vien-the-hinh', 3, '2020-12-02 00:20:55', '2020-12-02 00:20:55'),
(10, 'tbl10\r\n', 10, 10, '[GÒ VẤP - TP HỒ CHÍ MINH] NHÂN VIÊN HỖ TRỢ KỸ THUẬT ĐTDĐ/LAPTOP', 1, 3, 1, 2, 4, 6, 4, 'Tầng 1, FPT Shop, Số 202 Nguyễn Thị Minh Khai, Phường 6 , Quận 3 , Hồ Chí Minh, Việt Nam', 53, '- Cài đặt ứng dụng và phần mềm cho các dòng ĐTDĐ/Laptop.\r\n- Tư vấn, hỗ trợ cho khách hàng về kỹ thuật và chức năng của sản phẩm.\r\n- Tiếp nhận và xử lý các trường hợp bảo hành liên quan đến phần mềm sản phẩm...\r\n- Hỗ trợ nhân viên bán hàng về kỹ thuật.\r\n- Thời gian làm việc: Ca xoay (Ca 1: 8h00 – 15h00/ Ca 2: 15h00 – 22h00).\r\n* Làm việc tại cửa hàng FPT Gò Vấp', '- Nam cao 1m65 trở lên, tuổi từ 18 - 27.\r\n- Tốt nghiệp THPT trở lên.\r\n- Rành về kiến thức sản phẩm, am hiểu các hệ điều hành điện thoại, laptop là 1 lợi thế.\r\n- Yêu thích công nghệ, ham học hỏi, chịu khó tìm tòi cập nhật kiến thức công nghệ mới.\r\n- Ngoại hình ưa nhìn, giọng nói rõ ràng, dễ nghe.\r\n- Kỹ năng giao tiếp tốt, năng động, vui vẻ và thân thiện', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Vân', '(028) 38429906', 'Đang cập nhật', 'vietnam@et2cint.com', '2021-01-09', 'nhan-vien-ho-tr0-ki-thuan', 2, '2020-12-01 00:20:55', '2020-12-02 00:20:55'),
(11, 'tbl11\r\n', 11, 11, 'Nhân Viên Kế Toán Bán Hàng', 2, 1, 1, 2, 4, 6, 5, '202 Nguyễn Thị Minh Khai, Phường 6 , Quận 3 , Hồ Chí Minh, Việt Nam', 11, 'Tiếp nhận thông tin khách hàng, sản phẩm, dịch vụ bán ra từ tư vấn bán hàng.\r\nCập nhật thông tin khách hàng, sản phẩm bán ra lên hệ thống.\r\nThu tiền chính xác, xuất hóa đơn nhanh chóng cho khách hàng.\r\nQuản lý và bàn giao ngân quỷ trong ca làm việc..\r\nLập các báo cáo thu chi tại cửa hàng.', 'Nữ, tuổi từ 20 – 25.\r\nNgoại hình ưa nhìn.\r\nTốt nghiệp THPT trở lên.\r\nTin học văn phòng cơ b', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Yến', '(028) 38433906', 'Đang cập nhật', 'dung.ho@shdvietnam.com', '2021-02-25', 'nhan-vien-ke-toan-ban-hang', 2, '2020-12-01 00:35:12', '2020-12-02 00:35:12'),
(12, 'tbl12\r\n', 12, 12, 'Cán Bộ Kinh Doanh Dự Án', 1, 1, 7, 3, 6, 8, 6, '23/26 Đường Cộng Hòa, F13, Q.Tân Bình, Tp. Hồ Chí Minh', 0, 'PR, marketing, tìm kiếm và chăm sóc khách hàng, tư vấn sản phẩm, bán hàng, làm hồ sơ dự thầu... Bán hàng đạt doanh thu và lợi nhuận đề ra theo kế hoạch đảm bảo khả năng kinh doanh bền vững và ngày càng phát triển.', 'Có kiến thức về bán hàng, đấu thầu, tư vấn sản phẩm; kỹ năng đàm phán; yêu thích kinh doanh, hình thức khá, nhiệt tình, chịu khó, có nhiều mối quan hệ, không bị hạn chế thời gian.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', ' Ban Mai', '03256491519', 'Đang cập nhật', 'contact@ketoanhongtrang.vn', '2021-02-18', 'can-bo-kinh-doanh-du-an\r\n', 3, '2020-12-01 00:35:12', '2020-12-01 00:35:12'),
(13, 'tbl13\r\n', 13, 13, 'CHUYÊN VIÊN PR', 3, 2, 17, 2, 8, 7, 6, '1A10 Nguyễn Thái Sơn, P. 3, Q. Gò Vấp, Tp. Hồ Chí Minh (TPHCM)', 12, 'Viết bài PR về các dự án bất động sản như các thông cáo báo chí, bài viết, bài phát biểu, diễn văn của lãnh đạo và cập nhật thông tin của doanh nghiệp, sản phẩm trên các phương tiện thông tin đại chúng.', 'Ngoại hình ưa nhìn\r\nTốt nghiệp chuyên ngành Marketing, Báo chí, Kinh tế...\r\nCó ít nhất 1 năm kinh nghiệm tại vị trí tương đương\r\nThích làm việc trong môi trường năng động, tiếp xúc với nhiều chuyên gia, hay tham dự các event lớn hơn 1.000 người...', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Băng Băng', '(028) 38956774', 'Đang cập nhật', 'chungtran076@gmail.com', '2021-02-16', 'chuyen-vien-pr', 3, '2020-12-01 01:15:18', '2020-12-01 01:15:18'),
(14, 'tbl14\r\n', 14, 14, 'TRƯỞNG PHÒNG KINH DOANH BẤT ĐỘNG SẢN', 1, 1, 37, 4, 7, 6, 5, '1A10 Nguyễn Thái Sơn, P. 3, Q. Gò Vấp, Tp. Hồ Chí Minh', 2, 'Xây dựng kế hoạch kinh doanh của phòng – theo kế hoạch mục tiêu của phòng, Công ty đề ra.\r\nĐề xuất với GĐKD/GĐCN các giải pháp kinh doanh nhằm đạt doanh số.\r\nNghiên cứu thị trường, phát triển khách hàng theo kế hoạch Công ty đề ra.\r\nTheo dõi thúc đẩy từng nhân viên/nhóm kinh doanh thực hiện theo kế hoạch Công ty đặt ra', 'Tốt nghiệp Cao Đẳng trở lên (ưu tiên các ngành QTKD/Marketing/Kinh tế hoặc CNTT)\r\nCó ít nhất 02 năm kinh nghiệm tại vị trí tương đương\r\nCó tố chất kinh doanh, có khả năng tổ chức, lãnh đạo và tạo động lực làm việc cho nhân viên tốt', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Băng Tâm', '(028) 38956711', 'Đang cập nhật', 'hp@hongphat-land.com.vn', '2020-12-26', 'truong-phong-kinh-doanh-bat-dong-san', 3, '2020-12-02 01:15:18', '2020-12-04 01:15:18'),
(15, 'tbl15\r\n', 15, 15, ' Trưởng Phòng Phát Triển Kinh Doanh (Chuyển Phát Nhanh)', 1, 2, 36, 6, 11, 8, 9, '421/1 Sư Vạn Hạnh, P. 12, Q. 10, Tp. Hồ Chí Minh (TPHCM)', 3, 'Quản lý hoạt động Kinh doanh Chuyển phát nhanh: B2B, B2C, Khách hàng sàn giao dịch Thương mại điện tử, các Nền tảng bán hàng và Thanh toán trực tuyến;\r\nBáo giá, đàm phán, ký kết hợp đồng khách hàng;\r\nChịu trách nhiệm về doanh số và nhân sự của nhóm kinh doanh\r\nCùng Ban Lãnh đạo công ty xây dựng các chiến lược - kế hoạch kinh doanh;\r\nPhối hợp với phòng Marketing thực hiện các chương trình truyền thông. Tổ chức các sự kiện online và offline. Quảng bá, giới thiệu dịch vụ nhằm đẩy mạnh doanh số;\r\nPhối hợp với phòng Công nghệ thực hiện việc kết nối hệ thống Nhất Tín với các đối tác;\r\nĐưa ra các giải pháp kinh doanh kịp thời trong từng thời điểm và từng giai đoạn kinh doanh;\r\nXây dựng, đào tạo và phát triển đội ngũ nhân viên Kinh doanh;\r\nBáo cáo tình hình hoạt động, kết quả kinh doanh, tình hình nhân sự, đối thủ cạnh tranh… trực tiếp cho Giám đốc định kỳ tháng, quý, năm,…', 'Tốt nghiệp Cao đẳng trở lên chuyên ngành Quản trị kinh doanh, Kinh tế, Ngoại thương, Giao thông vận tải, Công nghệ Thông tin;\r\nTối thiểu 2 - 3 năm kinh nghiệm làm việc trong ngành Chuyển phát nhanh, có kinh nghiệm làm việc với các nền tảng bán hàng, thanh toán và thương mại điện tử;\r\nCó hiểu biết về Vận hành chuyển phát nhanh;\r\nCó kinh nghiệm quản lý nhóm, phát triển đội ngũ;\r\nKỹ năng giao tiếp, quản lý thời gian, đàm phán, chăm sóc khách hàng\r\nTrung thực, trách nhiệm, chịu được áp lực công việc cao.', 2, 'Phải tìm hiểu kĩ có VC', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bảo Anh', '0362433699', 'Đang cập nhật', 'hoainam2q@gmail.com', '2020-12-25', 'truong-phong-phat-trien-kinh-doanh', 0, '2020-12-01 01:29:15', '2020-12-01 01:29:15'),
(16, 'tbl16\r\n', 16, 16, 'Nhân Viên Kinh Doanh', 5, 1, 20, 1, 3, 1, 2, '200 Sư Vạn Hạnh, P. 12, Q. 10, Tp. Hồ Chí Minh (TPHCM)', 36, 'Quản lý hoạt động Kinh doanh Chuyển phát nhanh: B2B, B2C, Khách hàng sàn giao dịch Thương mại điện tử, các Nền tảng bán hàng và Thanh toán trực tuyến;\r\nBáo giá, đàm phán, ký kết hợp đồng khách hàng;\r\nChịu trách nhiệm về doanh số và nhân sự của nhóm kinh doanh\r\nCùng Ban Lãnh đạo công ty xây dựng các chiến lược - kế hoạch kinh doanh;', 'Tốt nghiệp Cao đẳng trở lên chuyên ngành Quản trị kinh doanh, Kinh tế, Ngoại thương, Giao thông vận tải, Công nghệ Thông tin;\r\nTối thiểu 2 - 3 năm kinh nghiệm làm việc trong ngành Chuyển phát nhanh, có kinh nghiệm làm việc với các nền tảng bán hàng, thanh toán và thương mại điện tử;\r\nCó hiểu biết về Vận hành chuyển phát nhanh;', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bảo Bình', '(028) 73001234', 'Đang cập nhật', 'info@muaban.net', '2020-12-25', 'nhan-vien-kinh-doanh', 3, '2020-12-01 01:29:15', '2020-12-02 01:29:15'),
(17, 'tbl17\r\n', 17, 17, 'Nhân Viên Kinh Doanh Tại Hồ Chí Minh', 2, 1, 7, 2, 5, 3, 5, '115 Nguyễn Huệ, P. Bến Nghé, Q.1, TPHCM', 24, 'Tìm kiếm và bán hàng cho các công trình, dự án xây dựng.\r\nĐo đạc và tư vấn cho khách hàng về các phương án cửa phù hợp với kiến trúc và trang trí nội thất.\r\nLiên hệ mật thiết với các công ty xây dựng, thiết kế, ban quản lý dự án.', 'Tốt nghiệp Trung cấp trở lên\r\nĐam mê kinh doanh, đam mê kiếm tiền, ưa thích đi lại, thích công việc tiếp xúc với khách hàng.\r\nKhông yêu cầu kinh nghiệm, chỉ cần có kỹ năng bán hàng cơ bản của nhân viên kinh doanh.\r\nNhanh nhẹn, hoạt bát, giao tiếp tốt;', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Ngân', '0838278388', 'Đang cập nhật', 'www.humidor-vietnam.com', '2020-12-31', 'nhan-vien-kinnh-doanh', 2, '2020-12-02 02:49:09', '2020-12-02 02:49:09'),
(18, 'tbl18\r\n', 18, 18, 'Chuyên Viên Cao Cấp Quản Lý Hiệu Suất', 1, 1, 19, 5, 10, 6, 6, 'Ho Chi Minh City, Vietnam', 52, 'Xây dựng Quy định/Chính sách KPIs bao gồm xây dựng bộ KPIs, năng suất chuẩn, cách giao cách tính kết quả thực hiện KPIs cho các vị trí kinh doanh tại Khối SME\r\nXây dựng mô hình/cách thức vận hành giao KPIs, phối hợp phân chia KPIs kế hoạch cho Vùng/Trung Tâm/CBBH\r\nTriển khai bộ KPIs, vận hành, đánh giá tính hiệu quả của bộ KPI, từ đó đề xuất sửa đổi phù hợp với tình hình thực tế', '1. Trình độ Học vấn:\r\nTrình độ Đại học trở lên, các ngành liên quan đến Tài chính – Ngân hàng, Kinh tế\r\n\r\n2. Kiến thức/ Chuyên môn Có Liên Quan:\r\n- Trình độ Tin học: Cấp độ C, Thành thạo tiếng Anh là 1 lợi thế\r\n- Am hiểu về sản phẩm, dịch vụ trong lĩnh vực ngân hàng là 1 lợi thế', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Ngọc', '0394441164', 'Đang cập nhật', 'huuhoadhcl@yahoo.com', '2020-12-31', 'nhan-vien-cao-cap-quan-ly-hieu-suat', 0, '2020-12-01 02:49:09', '2020-12-02 02:49:09'),
(19, 'tbl19\r\n', 19, 19, 'Nhân Viên Tư Vấn Kinh Doanh Bất Động Sản', 4, 1, 5, 4, 4, 6, 4, 'Tòa nhà KumHo, 39 Lê Duẩn, P.Bến Nghé, Q.1, TPHCM', 12, 'Tư vấn, giới thiệu sản phẩm của công ty tới khách hàng\r\nCung cấp, tư vấn đầy đủ thông tin sản phẩm\r\nChăm sóc khách hàng sau kí hợp đồng\r\nCập nhật thông tin thị trường bất động sản, nhanh chóng nắm bắt nhu cầu của khách hàng.\r\nChi tiết công việc sẽ trao đổi cụ thể tại buổi phỏng vấn', 'Tuổi từ 22 -> 35 - Nhiệt tình, ham học hỏi, có tinh thần cầu tiến\r\n- Tốt nghiệp từ Trung cấp trở lên\r\n- Thành thạo internet và các ứng dụng khác.\r\n- Có kinh nghiệm ngành Bất Động Sản là một lợi thế', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Như', '0598.1999.57  ', '1 Nguyễn Huệ Quận 1', 'hoa5789@gmail.com', '2021-01-19', 'nhan-vien-tu-van-kinh-doanh-bat-dong-san', 3, '2020-12-02 03:10:52', '2020-12-03 03:10:52'),
(20, 'tbl20\r\n', 20, 20, 'Sales Manager', 1, 1, 8, 7, 11, 8, 9, '2 Lê Duẩn, P.Bến Nghé, Q.1, TPHCM', 44, 'Xác định khách hàng mục tiêu phù hợp với sản phẩm và dịch vụ do công ty cung cấp\r\nThiết lập mối quan hệ với khách hàng tiềm năng thông qua các hình thức tiếp cận khác nhau\r\nLàm việc chặt chẽ với các nhóm Marketing, tư vấn để xác định và đề nghị giải pháp, dịch vụ phù hợp tới khách hang', 'Tốt nghiệp đại học, chuyên nghành kinh tế, marketing hoặc CNTT sẽ là lợi thế\r\nCó ít nhất 5 năm kinh nghiệm bán hang\r\nCó kinh nghiệm trong lĩnh vực CNTT, phần mềm hoặc dịch vụ cloud sẽ là lợi thế\r\nKhả năng tiếng Anh tốt với ít nhất kỹ năng đọc, nghe và nói', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Phượng', '0993.898.006 ', 'Đang cập nhật', 'fambichha@gmail.com', '2021-01-27', '', 0, '2020-12-01 03:10:52', '2020-12-01 03:10:52'),
(21, 'tbl21\r\n', 21, 21, 'Trưởng Phòng Phát Triển Kinh Doanh', 1, 2, 14, 5, 10, 7, 7, '8 Trần Hưng Đạo, P. 2, Q. 5, Tp. Hồ Chí Minh (TPHCM)', 45, 'Quản lý hoạt động Kinh doanh Chuyển phát nhanh: B2B, B2C, Khách hàng sàn giao dịch Thương mại điện tử, các Nền tảng bán hàng và Thanh toán trực tuyến;\r\nBáo giá, đàm phán, ký kết hợp đồng khách hàng;\r\nChịu trách nhiệm về doanh số và nhân sự của nhóm kinh doanh\r\nCùng Ban Lãnh đạo công ty xây dựng các chiến lược - kế hoạch kinh doanh;\r\nPhối hợp với phòng Marketing thực hiện các chương trình tr', 'Tốt nghiệp Cao đẳng trở lên chuyên ngành Quản trị kinh doanh, Kinh tế, Ngoại thương, Giao thông vận tải, Công nghệ Thông tin;\r\nTối thiểu 2 - 3 năm kinh nghiệm làm việc trong ngành Chuyển phát nhanh, có kinh nghiệm làm việc với các nền tảng bán hàng, thanh toán và thương mại điện tử;\r\nCó hiểu biết về Vận hành chuyển phát nhanh;\r\nCó kinh nghiệm quản lý nhóm, phát triển đội ngũ;', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Quân', '0599.399.226  ', 'Số 1 ,Đường Số 1, KCN Biên Hòa 1, Biên Hòa Đồng Nai', 'thuyduong231995@gmail.com', '2020-12-27', 'truong-phong-phat-trien-kinh-doanh', 1, '2020-12-02 03:25:12', '2020-12-02 03:25:13'),
(22, 'tbl22\r\n', 22, 22, 'Sales Manager Quản Lý Kinh Doanh', 1, 3, 38, 6, 8, 7, 7, 'D5 street, ward 25, Binh Thanh district, HCMC', 5, 'Bạn đang tìm một môi trường thân thiện, chuyên nghiệp & đáng tin cậy để gắn bó, cống hiến và phát triển lâu dài + gặt hái thành công? Hãy gửi CV cho chúng tôi.', '(Vietnamese only). Tuổi từ 28 – 45 tuổi\r\nTốt nghiệp Đại học (ưu tiên cho các chuyên ngành Kinh tế, quản trị kinh doanh, Xã hội nhân văn, Tài chính; và/hoặc đã kinh qua các khoá đào tạo về quản trị kinh doanh, bán hàng dự án, cũng như các kỹ năng khác bổ trợ ngành Sales.\r\nCó ít nhất 5 năm kinh nghiệm giỏi về bán hàng dự án/ bán hàng công nghệ/ kỹ thuật. (Ưu tiên cho thí sinh đã có kinh nghiệm bán hàng dự án IT/networking, hoặc đã bán hàng cho chuỗi khách sạn 5 sao).\r\nChắc chắn về các kỹ năng: xây dựng quan hệ khách hàng mới, giao tế & trình bày tốt. Khả năng thương thảo & đàm phán khôn ngoan.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Theo thành tích và chỉ tiêu, vượt chỉ tiêu và sự cống hiến tốt hiệu quả.\r\nCác liên hoan trong các Dịp Lễ Tết, và company trip mỗi năm\r\nChăm sóc sức khoẻ, hỗ trợ Mobile phone, ...', 'Bích Quyên', '0993.886.755 ', 'Đang cập nhật', 'tranxuanmai88@gmail.com', '2021-03-17', 'quan-li-kinh-doanh', 2, '2020-12-02 03:25:13', '2020-12-02 03:25:13'),
(23, 'tbl23\r\n', 23, 23, 'Phó Phòng Kinh Doanh Toàn Quốc', 1, 2, 9, 5, 8, 7, 6, '7 Vũ Tùng, P. 2, Q. Bình Thạnh, Tp. Hồ Chí Minh (TPHCM)', 22, 'Chịu trách nhiệm toàn bộ về hoạt động bán hàng Kênh ETC, phân phối sản phẩm, giữ ổn định và phát triển thị trường. Lập kế hoạch, triển khai, giám sát, kiểm tra, đánh giá, báo cáo về tình hình hoạt động kinh doanh của Kênh ETC\r\nXây dựng danh mục sản phẩm tiêu chuẩn, sản phẩm chiến lược.\r\nXây dựng danh mục đấu thầu, tham gia thầu hàng năm cụ thể và chi tiết theo danh mục sản phẩm của Công ty', 'Tốt nghiệp Dược sĩ đại học, Bác sỹ.\r\nKinh nghiệm: 02 - 03 năm trong lĩnh vực quản lý bán hàng kênh ETC\r\nNắm vững các quy định pháp lý trong việc bán hàng kênh ETC, quy trình phát triển kênh ETC, đấu thầu.\r\nAnh văn đọc, viết và giao tiếp tốt', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Bích San', '05993.999.30 ', '276  Trần Hưng Đạo', 'tranthingocnhu2909@gmail.com', '0000-00-00', 'pho-phong-kinh-toan-quoc', 3, '2020-11-30 18:36:21', '2020-12-02 03:36:21'),
(24, 'tbl24\r\n', 24, 24, 'Chuyên Viên Tư Vấn Du Học', 2, 1, 19, 3, 8, 6, 6, '1 Trần Quang Diệu, P. 14, Q. 3, Tp. Hồ Chí Minh (TPHCM)', 24, ' Tư vấn trực tiếp cho khách hàng về các chương trình du học\r\nTìm hiểu, mở rộng thị trường, tư vấn cho học sinh trực tiếp tại các trường học, sự kiện, tìm kiếm nguồn khách hàng online và offline\r\nTìm hiểu, cập nhật thông tin, chính sách Visa, quy trình xét visa du học - du lịch các nước.\r\nHỗ trợ khách hàng chuẩn bị hồ sơ du học.', 'Mức lương hấp dẫn kèm các khoản thưởng dựa trên năng lực (thu nhập trung bình từ 15tr - 20tr)\r\nTrợ cấp ăn trưa\r\nLương tháng 13 + thưởng linh động cho những nhân viên xuất sắc\r\nLàm việc trong môi trường quốc tế, năng động, nhiều cơ hội phát triển và thể hiện bản thân\r\nChế độ BHXH, BHYT, BHTN… theo quy định nhà nước\r\nCơ hội thăng tiến, du lịch nước ngoài thường xuyên', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thu nhập trung bình từ 15-20 triệu\r\nCơ hội thăng tiến, du lịch nước ngoài thường xuyên\r\nLàm việc trong môi trường quốc tế, năng động, nhiều cơ hội phát triển và thể hiện bản thân', 'Bích Thảo', '05993.999.73 ', '15 Nguyễn Huệ, P. Bến Nghé, Q.1, TPHCM', 'thanhdanpt700@gmail.com', '2020-12-28', 'chuyen-vien-tu-van-du-hoc', 3, '2020-12-03 03:50:51', '2020-12-03 03:50:51'),
(25, 'tbl25', 25, 25, '\r\nLogistics Executive', 4, 1, 14, 2, 5, 3, 5, 'Tòa nhà KumHo, 39 Lê Duẩn, P.Bến Nghé, Q.1, TPHCM', 25, '\r\nTìm chi phí đường hàng không / đường biển / chuyển phát nhanh và xử lý đặt chỗ với người giao nhận / hãng vận chuyển Phối hợp với các bộ phận khác để hoàn thiện hồ sơ vận chuyển theo yêu cầu của khách hàng. Luôn thông báo cho khách hàng ETD, ETA và đảm bảo rằng khách hàng nhận hàng an toàn. Theo dõi và giải quyết các vấn đề xảy ra trong quá trình vận chuyển. Thực hiện các yêu cầu từ khách hàng về hậu cần.', 'Tốt nghiệp đại học / cao đẳng - Tiếng Anh: nghe, nói, đọc, viết thành thạo. Kỹ năng xử lý Word, excel, outlook và lập hồ sơ. Tổ chức và lập kế hoạch công việc.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Bích Thoa', '0997.057.051  ', '26/11 Trần Văn Mười, ấp. Xuân Thới Đông 1, X. Xuân Thới Đông,', 'www.humidor-vietnam.com', '2021-01-21', 'logistics-executive', 3, '2020-12-02 03:50:51', '2020-12-03 03:50:51'),
(26, 'tbl26\r\n', 26, 26, 'Angular Developer (JavaScript, React)', 5, 1, 22, 1, 2, 2, 2, '10th Floor, Cevimetal Building, 69 Quang Trung Street, Hai Chau District, Da Nang City, Viet', 25, 'Làm việc trực tiếp với khách hàng Úc, EU để làm rõ các yêu cầu. Phát triển các phần tử giao diện người dùng để tích hợp với logic phía máy chủ. Giải quyết các vấn đề kỹ thuật. Hỗ trợ đồng đội giải quyết vấn đề', 'Có kinh nghiệm về Nginx hoặc Nodemon', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Bích Thu', '05993.999.58  ', 'Đang cập nhật', 'chuyenthuylien@gmail.com', '2020-12-26', 'angular-developer', 1, '2020-12-01 12:33:18', '2020-12-02 23:46:41'),
(27, 'tbl27\r\n', 27, 27, 'Nhân Viên Marketing (Thu Nhập Hấp Dẫn)', 3, 3, 9, 2, 4, 3, 4, '26/11 Trần Văn Mười, ấp. Xuân Thới Đông 1, X. Xuân Thới Đông,', 27, 'Lập kế hoạch quảng cáo sản phẩm, chiến lược đẩy mạnh doanh số, xây dựng hình ảnh thương hiệu trên thị trường\r\nTìm kiếm thị trường cho sản phẩm được phân công.\r\nHỗ trợ bộ phận bán hàng các tài liệu, thông tin liên quan đến sản phẩm bao gồm brochure, nghiên cứu lâm sàng, trình bày sản phẩm trên powerpoint, video clip....để thúc đẩy bán hàng.\r\nHuấn luyện sản phẩm cho nhân viên bán hàng.', 'Tốt nghiệp Cao đẳng trở lên, ưu tiên chuyên ngành Marketing hoặc các ngành liên quan\r\nỨng viên từ 24 – 28 tuổi\r\nKinh nghiệm làm việc ít nhất 2 năm trong lĩnh vực marketing, ưu tiên cho các ứng viên có kinh nghiệm về marketing các sản phẩm liên quan đến thẩm mỹ, làm đẹp và thiết bị y tế.\r\nThành thạo Microsoft Office (Word, Excel, PowerPoint)\r\nKỹ năng thiết kế Photoshop, Illustrator là một lợi thế', 0, 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Mức lương hấp dẫn\r\nCơ hội tiếp cận với các công nghệ thẩm mỹ hàng đầu thế giới, được đào tạo và công tác nước ngoài\r\nMôi trường làm việc chuyên nghiệp', 'Bích Thủy', '	0995.23.98.23  ', 'Đang cập nhật', 'doanvanphudhcl@gmail.com', '2021-01-21', 'nhan-vien-marketing', 0, '2020-12-01 04:04:16', '2020-12-02 04:04:16'),
(28, 'tbl28\r\n', 28, 28, '\r\nGiám Đốc Pháp Lý Dự Án', 1, 1, 8, 3, 7, 7, 6, 'Khu Công Nghiệp Tân Bình, Lô IV-18,Tây Thạnh, P. Tây Thạnh, Q. Tân Phú, Tp. Hồ Chí Minh (TPHCM)', 28, 'Phụ trách các hồ sơ pháp lý, thủ tục có liên quan đến các dự án đầu tư của Công ty từ lúc lập dự án cho đến khi hoàn công.\r\nTriển khai, thực hiện các công tác pháp lý dự án khi có chủ trương được duyệt của Ban lãnh đạo về kế hoạch triển khai dự án.\r\nLập báo cáo tham mưu cho Ban lãnh đạo về định hướng, kế hoạch, tiến độ và chi phí khi triển khai dự án mới.', 'Giới tính: Nam/Nữ\r\nTốt nghiệp Đại học các chuyên ngành Luật, Kinh tế, Xây dựng, Kiến trúc, …\r\nCó tối thiểu 03 năm kinh nghiệm tại vị trí tương đương, ưu tiên trong ngành Bất động sản.\r\nTiếng Anh giao tiếp tốt.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Bích Ty', '0993.679.776 ', 'Đang cập nhật', 'vankhoi29k@yahoo.com', '2020-12-30', 'giam-doc-phap-li-du-an', 2, '2020-12-02 04:18:02', '2020-12-02 04:18:02'),
(29, 'tbl29\r\n', 28, 28, 'Quản Lý Trình Dược Viên', 2, 3, 32, 3, 5, 6, 6, '166 Trần Quang Diệu, P. 14, Q. 3, Tp. Hồ Chí Minh (TPHCM)', 28, 'Quản lý và đào tạo nhóm kinh doanh khoản 5-6 bạn tại địa bàn phụ trách.\r\nDuy trì và mở rộng các mối quan hệ với khách hàng\r\nBáo cáo với cấp trên tình hình của bộ phận kinh doanh\r\nĐảm bảo sự phát triển kinh doanh về doanh số theo định hướng của công ty\r\nĐiều hành và chịu trách nhiệm trước Ban Giám Đốc về hoạt động kinh doanh cùa công ty\r\nThực hiện các nhiệm vụ khác liên quan đến hoạt động kinh doanh của công ty', 'Tốt nghiệp Đại Học Y/ Dược\r\nƯu tiên người có kinh nghiệm quản lý ngành sữa dinh dưỡng tại các bệnh viện, nhà thuốc, đại lý sữa.\r\nKhả năng giao tiếp tốt và có kiến thức về dinh dưỡng\r\nNhiệt tình, nhanh nhẹn, hoạt bát và có trách nhiệm với công việc', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương: 1.000 – 2.000 USD + Thưởng theo chính sách công ty\r\nChế độ lao động, BHXH đầy đủ\r\nMôi trường làm việc năng động, thân thiệ', ' Bích Vân', '0993.901.931  ', 'Đang cập nhật', 'phamha979090@gmail.com', '2021-02-02', 'quan-li-trinh-duoc-vien', 2, '2020-12-02 23:57:56', '2020-12-03 04:18:02'),
(30, 'tbl30\r\n', 30, 30, 'Sales Admin', 1, 2, 17, 2, 4, 2, 7, '49 Trần Hưng Đạo, P. Cầu Kho, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 0, 'Phối hợp với đơn vị giao nhận xử lý các vấn đề phát sinh trong quá trình giao hàng, theo dõi tỷ lệ trả hàng/tỷ lệ hoàn thành, cập nhật danh sách đơn hàng trả.\r\nTạo tài khoản affiliate hằng ngày, làm hợp đồng và thanh toán cho Affiliate hàng tháng\r\nTheo dõi, kiểm kê kho vật tư phụ trách. Đề xuất mua hàng khi tồn kho còn ít .\r\nLàm việc và thanh toán cho các supplier/partner hàng tháng', '1 năm kinh nghiệm admin/ sales admin\r\nKỹ năng giao tiếp tốt.\r\nKỹ năng quản lý thời gian, sắp xếp công việc.\r\nChịu được áp lực công việc', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Chương trình đào tạo khác nhau Các hoạt động, sự kiện xây dựng đội nhóm Môi trường làm việc năng động và năng động', 'Bội Linh', '0995.60.59.79  ', '302 Trần Hưng Đạo, P. Cầu Kho', 'www.muahangtragop.com', '2020-12-30', 'sale-admin', 3, '2020-11-30 23:57:56', '2020-12-03 04:24:51'),
(31, 'tbl31\r\n', 31, 31, 'Game UI/UX Lead', 3, 1, 20, 2, 3, 6, 5, '1901 Sai Gon Trade Center, 37 Tôn Đức Thắng, P . Bến Nghé, Q.', 2, 'Cung cấp các giải pháp UI / UX theo hướng sáng tạo và yêu cầu của dự án \r\nCung cấp hướng dẫn về UI / UX cho các thành viên trong nhóm của bạn', 'Có ít nhất 3 năm kinh nghiệm trong lĩnh vực sản xuất trò chơi điện tử hoặc kinh nghiệm liên quan \r\nNền tảng học thuật về Thiết kế, Nghệ thuật hoặc tương đương \r\nKhả năng giao tiếp tiếng Anh', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Cẩm Hạnh', '(028) 38389999', '37 Tôn Đức Thắng, P . Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 'www.vn100.com', '2020-12-25', 'game-ux-ui-lead', 2, '2020-12-01 00:35:12', '2020-12-02 00:59:52'),
(32, 'tbl32\r\n', 32, 32, 'Nhân Viên Giáo Vụ', 4, 1, 31, 8, 2, 2, 1, ' 245 Tôn Đức Thắng, P . Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 55, 'Giới thiệu và tư vấn cho phụ huynh học sinh về lựa chọn môi trường học tập\r\nXây dựng và duy trì mối quan hệ tốt với phụ huynh hiện tại và khách hàng tiềm năng\r\nHỗ trợ giáo viên các công việc liên quan đến hoạt động dạy và học\r\nThu nhận, lưu trữ, cập nhật hồ sơ học sinh\r\nGiám sát, chăm sóc học sinh trong và ngoài giờ học tại trường', 'Giao tiếp tốt, thành thạo tiếng Anh hoặc tiếng Hàn\r\nCó tinh thần trách nhiệm\r\nTuân thủ kỉ luật\r\nNăng động, chủ động, linh hoạt Hòa nhã, tận tình, chu đáo, yêu trẻ', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Cẩm Hiền', '0993.679.677  ', 'Đâng cập nhật', 'ngocbich94z@gmail.com', '2020-12-26', 'nhan-vien-giao-du', 2, '2020-12-02 04:38:11', '2020-12-01 12:33:18'),
(33, 'tbl33\r\n', 33, 33, '\r\nBusiness Analyst', 2, 1, 21, 4, 6, 7, 7, '2 Trần Ngọc Diện, P. Thảo Điền, Q. 2, Tp. Hồ Chí Minh (TPHCM)', 33, 'Nếu tất cả câu trả lời cho những điều trên là “Có” thì bạn hoàn toàn phù hợp với vị trí Chuyên viên phân tích kinh doanh mà Chợ Tốt Team đang tìm kiếm.\r\n', '\r\nBằng Cử nhân về Tài chính, Khoa học Dữ liệu hoặc các lĩnh vực liên quan khác và kinh nghiệm làm việc ít nhất 2 năm.\r\nTư duy phản biện tốt\r\n', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Cẩm Hường', '0993.866.722  ', 'Đang cập nhật', 'ctyvietson@gmail.com', '2020-12-30', 'business-analyst', 3, '2020-12-01 04:38:11', '2020-12-02 04:38:11'),
(34, 'tbl34\r\n', 34, 34, '\r\nPhó Trưởng Khoa Ngoại Ngữ', 1, 2, 6, 2, 5, 6, 5, '88 Trần Ngọc Diện, P. Thảo Điền, Q. 2, Tp. Hồ Chí Minh (TPHCM)', 34, 'Mô tả công việc:\r\nĐiều hành và tham mưu cho Lãnh đạo Khoa về công tác tổ chức nhân sự và công việc chuyên môn của khoa.\r\nTrực tiếp theo dõi công tác đào tạo, kiểm định chất lượng, công tác tuyển sinh\r\nTrực tiếp xây dựng khung chương trình và hệ thống các bài giảng của khoa.', 'Tốt nghiệp Tiến sĩ chuyên ngành liên quan đến Ngữ học (Tiếng Anh)\r\nCó kinh nghiệm quản lý, giảng dạy.\r\n\r\n', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Quyền lợi:\r\nMức lương: theo thỏa thuận từ 20-30 triệu\r\nBảo hiểm: Hưởng đầy đủ chế độ đãi ngộ BHXH, BHTH, BHTN theo quy định của pháp luật', 'Cẩm Liên', '0995.537.533 ', '12 Tôn Đức Thắng, P . Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 'ngotuvien@gmail.com', '2021-02-24', 'ngotuvien@gmail.com', 0, NULL, NULL),
(35, 'tbl35\r\n', 35, 35, '\r\nNhân Viên Thiết Kế Kết Cấu Nhà Gỗ', 3, 3, 24, 2, 6, 6, 4, '8/1-8/3 Nguyễn Huy Tưởng, P. 6, Q. Bình Thạnh, Tp. Hồ Chí Minh (TPHCM)', 35, 'Nhập liệu, xử lý các thông tin và yêu cầu thiết kế trên soft chuyên ngành bằng tiếng Nhật\r\nGia công, xuất bản vẽ thiết bị, bảng vẽ thi công .. cho kiến trúc nhà gỗ kiểu Nhật \r\nCác công việc liên quan được phân công của cấp trên\r\nChi tiết sẽ trao đổi trong buổi phỏng vấn.', 'Chuyên môn:\r\nKhối kỹ thuật chuyên ngành: xây dựng, kỹ thuật\r\nHoặc chuyên ngành Nhật Ngữ (yêu thích các công việc liên quan đến tiếng Nhật), tối thiểu N4~', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương thưởng thỏa đáng\r\nCơ hội đào tạo tại Nhật\r\nCơ hội thăng tiến rộng mở', ' Cẩm Linh', '05993.999.80', '3 Nguyễn Huy Tưởng, P. 6, Q. Bình Thạnh, Tp. Hồ Chí Minh (TPHCM)', 'thoang3nam@yahoo.com', '2020-12-26', 'nhan-vien-thiet-ke-ket-cau-nha-go', 2, '2020-12-01 04:45:29', '2020-12-01 23:46:41'),
(36, 'tbl36\r\n', 36, 36, 'React JS Developer', 1, 1, 22, 2, 4, 6, 6, '48/7 ấp 3, X. Nhị Bình, H. Hóc Môn, Tp. Hồ Chí Minh (TPHCM)', 36, '', 'Có ít nhất 3 năm kinh nghiệm trong ReactJS, Redux \r\nCó kiến ​​thức hoặc kinh nghiệm tốt về các công nghệ front-end, chẳng hạn như HTML5 và CSS3 \r\nCó kinh nghiệm kiểm soát nguồn GIT, quy trình Agile \r\nKiến thức về kiến ​​trúc, thuật toán\r\n', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương thưởng thỏa đáng\r\nCơ hội đào tạo tại Nhật\r\nCơ hội thăng tiến rộng mở', 'Cẩm Ly', '0997.093.393 ', 'Lầu 15, Phòng 1504, 2A-4A Tôn Đức Thắng, P. Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 'khanhnguyen@hanwhacorp.com.vn', '2021-01-13', 'react-js-developer', 3, '2020-12-02 05:05:51', '2020-12-01 05:05:51'),
(37, 'tbl37\r\n', 37, 37, 'Giáo Viên Tiếng Anh Giảng Dạy Bậc Mầm Non', 1, 2, 19, 2, 5, 6, 5, '245 Tôn Đức Thắng, P. Bến Nghé, Q. 1\r\n\r\n', 37, 'Giảng dạy Tiếng Anh Mầm Non theo chương trình của Nhà Trường\r\nThực hiện các yêu cầu xây dựng chuyên đề của bộ môn theo sự phân công của Ban Giám Hiệu\r\nĐề xuất ý tưởng & tham gia tổ chức sự kiện, CLB do nhà trường tổ chức để bổ trợ phát triển bộ môn Tiếng Anh bậc Mầm Non', 'Tốt nghiệp Cao Đẳng/Đại học chuyên ngành Sư phạm Tiếng Anh, đối với Tiếng Anh không phải chuyên ngành giảng dạy cần có chứng chỉ sư phạm\r\nNgoại hình thuyết phục, phát âm chuẩn, giọng nói truyền cảm\r\nYêu thích trẻ con, am hiểu tâm lý lứa tuổi Chủ động, chịu được áp lực cao trong công việc', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương thưởng thỏa đáng\r\nCơ hội đào tạo tại Nhật\r\nCơ hội thăng tiến rộng mở', 'Cẩm Nhi', '0598.199.774 ', 'Đang cập nhật', 'cttrongtam@gmail.com', '2021-02-24', 'hcm-giao-vien-tieng-anh-giang-day-bac-mam-non', 3, '2020-12-01 00:11:12', '2020-12-04 01:57:56'),
(38, 'tbl38\r\n', 38, 38, 'Nhân Viên Marketing – Giao Tiếp Tiếng Hàn', 1, 2, 19, 2, 5, 5, 5, '2 Điện Biên Phủ, P. 15, Q. Bình Thạnh, Tp. Hồ Chí Minh', 38, 'Thu thập các báo giá và so sánh các nhà cung cấp khi có yêu cầu và cần thiết.\r\nLàm việc với đối tác để đặt hàng tài liệu catalogue, brochure, standee,…\r\nLàm việc với nhà thiết kế để tạo poster / banner cho các chương trình khuyến mãi\r\nViết nội dung và đăng Facebook khi được yêu cầu và cần thiết\r\nĐề xuất và thảo luận với đồng nghiệp và sếp về các chiến lược marketing.\r\nĐi gặp khách hàng với giám đốc để phiên dịch.', 'Biết tiếng Anh càng tốt. Có ít nhất 1-2 năm kinh nghiệm làm việc tại vị trí tương đương\r\nKỹ năng giao tiếp & làm việc nhóm tốt\r\nSử dụng tốt nhiều chương trình và ứng dụng máy tính\r\nKhả năng làm việc dưới áp lực cao', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', ' lương: từ 16- 18 triệu\r\nHỗ trợ phí công tác.\r\n Hỗ trợ các chế độ bảo hiểm Y tế & BHXH theo luật\r\nNghỉ phép có lương (theo Luật)', 'Cẩm Nhung', '0254.369.6644', 'Đang cập nhật', 'dieuqt81@gmail.com', '2021-02-18', 'nhan-vien-marketing-giao-tiep-tieng-han', 3, '2020-12-01 12:33:18', '2020-12-02 23:46:41');
INSERT INTO `job` (`id`, `job_code`, `company_id`, `employer_id`, `name_job`, `type_job_id`, `amount`, `career_id`, `grade_id`, `salary_id`, `degree_id`, `experience_id`, `address`, `city`, `description`, `job_requirements`, `sex_requirements`, `profile_request`, `benefits`, `name_contact`, `phone_contact`, `address_contact`, `email_contact`, `deadline`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(39, 'tbl39\r\n', 39, 39, '\r\nChuyên Viên Đảm Bảo Chất Lượng', 2, 3, 19, 2, 2, 2, 1, '223 Điện Biên Phủ, P. 15, Q. Bình Thạnh, Tp. Hồ Chí Minh', 39, 'Phối hợp với các đơn vị/bộ phận hỗ trợ để thực hiện hỗ trợ công tác Tự đánh giá và Kiểm định chất lương cấp Trường, cấp CTĐT;\r\nTham gia hoạt động đánh giá tư vấn/ đánh gia chính thức cấp trường hoặc tại các khoa trọng điểm theo lọ trình;\r\nTham gia tổ chức các buổi tập huấn/ hội thảo về các nội dung để đáp ứng theo yêu cầu công tác đảm bảo chất lượng;\r\nCập nhật và nghiên cứu văn bản pháp quy, tài liệu liên quan đến công tác đảm bảo chất lượng;\r\nThực hiện các công việc đột xuất khác theo yêu cầu của lãnh đạp phòng.', 'Trình độ Đại học trở lên;\r\nChuyên ngành: Tiếng Anh, Quản trị kinh doanh, Đo lường và đánh gia trong giáo dục, Quản lý giáo dục, QUản trị chất lượng, Khảo sát xã hội học,Ngữ học, ...\r\nNgoại ngữ: tiếng Anh (ưu tiên IELTS 6.5 trở lên), biết thêm tiếng Pháp là một ưu tiên;\r\nTrình độ vi tính văn phòng căn bản;', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng theo năng lực và được đào tạo, cơ hội thăng tiến cao\r\nCó chế độ công tác phí theo quy định của nhà trường\r\nHưởng đầy đủ các quyền lợi theo quy định theo Bộ luật lao động (BHXH, BHYT, BHTN)', ' Cam Thảo', '0258888996', 'Đang cập nhật', 'service@dmc.vn', '2021-02-01', 'chuyen-vien-dam-bao-chat-luong', 2, '2020-12-01 12:33:18', '2020-12-03 00:11:12'),
(105, 'TNC125', 1, 1, 'Nhân viên báng hàng', 3, 3, 21, 4, 4, 7, 10, '992 Âu Cơ, Phường 14, Tân Bình', 51, 'Việc nhẹ lương cao, ứng tuyển là nhận ngay', '- Thực hiện các công việc khác được giao\r\n            - Có khả năng làm việc độc lập và khả năng làm việc theo nhóm.\r\n            - Năng động, sáng tạo.\r\n            - Chịu được áp lực cao trong công việc, sẵn sàng làm thêm giờ nếu cần.\r\n            - Có tư duy làm việc logic, làm việc theo nhóm.\r\n            - Kỷ luật, chăm chỉ, có trách nhiệm trong công việc.\r\n            - Có khả năng đọc và nghiên cứu tài liệu tiếng Anh tốt.', 2, '\r\n            - Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\n            - Sơ yếu lý lịch.\r\n            - Bản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\n            - Giấy khám sức khỏe.', '- Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\n            - Thời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\n            - Được nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\n            - Tham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\n            - Nghỉ phép 12 ngày/năm\r\n            - Được tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\n            - Nhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n            - Các chế độ phúc lợi khác', 'Phạm Văn Chính', '0901415416', 'Đang cập nhật', 'trinhquanghan@example.com', '2020-12-31', 'aut-perspiciatis-quidem-rem-alias-odit-culpa-rerum-laborum-distinctio-et-dolor-magnam', 1, '2020-11-29 12:40:52', '2020-11-29 12:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đoàn Quốc Dũng', 'doanquocdung55@gmail.com', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0398022720', '1', 'tRCi1FJ4baW2tK0ulXeoL671fcDuq63tr7tFVznVXRvOeSOWWTEr1X2KpS27', '2020-12-03 16:47:43', '2020-12-11 19:35:10'),
(2, 'Ofelia Moen', 'merlin.batz@durgan.com', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+7933449289424', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(3, 'Prof. Robb Mills DDS', 'maida.gleichner@okuneva.com', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+3966053184118', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(4, 'Dr. Noah Wiegand', 'marvin.christiansen@graham.info', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+5231254394202', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(5, 'Mr. Ismael Collier PhD', 'lilly.muller@schamberger.com', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+6799440764397', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(6, 'Prof. Robin Hayes IV', 'mertz.karolann@bogan.com', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+6175707179198', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(7, 'Abagail Batz', 'harmony.bogisich@kiehn.com', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+8648811164813', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(8, 'Dr. Kraig Gislason', 'destiney.schneider@wunsch.com', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+4078209774368', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(9, 'Dr. Amelia Labadie II', 'hcorkery@ziemann.com', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+2993449257312', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(10, 'Jarvis Mueller', 'dbeahan@goodwin.com', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+5937179099293', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(11, 'Mr. Jalen Gutkowski V', 'davon.dibbert@kulas.biz', '2020-12-04 18:32:44', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+7837222861964', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(12, 'Tavares Cummings', 'hyman.torp@spinka.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+3850141292777', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(13, 'Mr. Alfred Schroeder Sr.', 'icummerata@kulas.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+1359296106936', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(14, 'Prof. Myrtice Deckow', 'sister.franecki@greenfelder.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+8817090858699', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(15, 'Mr. Erich Erdman III', 'dickinson.kailyn@littel.biz', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+9067923633406', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(16, 'Savanna Abbott', 'adeline.von@langosh.org', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+8002872082802', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(17, 'Judah Miller', 'tito40@langosh.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+7824200414870', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(18, 'Savannah Wintheiser', 'tgerhold@pacocha.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+9731129914176', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(19, 'Jany Daniel', 'anais99@welch.biz', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+5171679063174', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(20, 'Frieda Kuhic', 'wharvey@ortiz.biz', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+9307113159077', '1', NULL, '2020-12-03 16:47:43', '2020-12-03 16:47:43'),
(21, 'LÊ TUẤN ANH', 'tuananhle2000@gmail.com', NULL, '$2y$10$dSfCLLGt9a.l/AIqTKclL.70lRm8IipekE2oad2WPVz8yIjw9LdtC', '0356244875', '1', NULL, '2020-12-10 02:28:21', '2020-12-10 02:28:21'),
(26, 'DOAN QUOC DUNGXXX', 'doanquxxocdung55@gmail.com', NULL, '$2y$10$/0dzWkSshkIL7t0aiEu76uYCQ71tSSWCCe8ce8oBqjNdiH2oDP73u', '0328050520', '1', NULL, '2020-12-10 02:37:14', '2020-12-10 02:37:14'),
(27, 'DOAN QUOC DUNG', 'xdoxanquoxcdung55@gmail.com', NULL, '$2y$10$QMtQ.21L8Odgfd8HEo7NWOED2DZ0Rju/HH2M0T/fPDmAQzKx6hz3W', '0328050520', '1', NULL, '2020-12-10 02:39:39', '2020-12-10 02:39:39'),
(28, 'DOAN QUOC DUNG', 'doanddddquocdung55@gmail.com', NULL, '$2y$10$icajLD672W2gq6I3CUCMKOEv9WtmKHbduYeIbiOp9lAXT5AYcW.au', '0328050520', '1', NULL, '2020-12-10 02:40:56', '2020-12-10 02:40:56'),
(29, 'DOAN QUOC DUNG', 'doanquocdud1ng55@gmail.com', NULL, '$2y$10$F/PF5d38RN2QEyoqcb.Y/.Z2SOXrrsPr2CJe7DOh2vzl7ezu9YHyK', '0328050520', '1', NULL, '2020-12-10 02:43:15', '2020-12-10 02:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_seeker_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `marital_status` tinyint(4) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_job_id` int(10) UNSIGNED DEFAULT NULL,
  `career_id` int(10) UNSIGNED DEFAULT NULL,
  `grade_id` int(10) UNSIGNED DEFAULT NULL,
  `salary_id` int(10) UNSIGNED DEFAULT NULL,
  `degree_id` int(10) UNSIGNED DEFAULT NULL,
  `experience_id` int(10) UNSIGNED DEFAULT NULL,
  `work_location` int(11) DEFAULT NULL,
  `career_goals` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`) VALUES
(1, 'Tất cả mức lương'),
(2, 'Lương thỏa thuận'),
(3, '1-3 triệu'),
(4, '3-5 triệu'),
(5, '5-7 triệu'),
(6, '7-10 triệu'),
(7, '10-12 triệu'),
(8, '12-15 triệu'),
(9, '15-20 triệu'),
(10, '20-25 triệu'),
(11, '25-30 triệu'),
(12, 'Trên 30 triệu');

-- --------------------------------------------------------

--
-- Table structure for table `save_job`
--

CREATE TABLE `save_job` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_seeker_id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `save_profiles`
--

CREATE TABLE `save_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `profiles_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skill_detail`
--

CREATE TABLE `skill_detail` (
  `id` int(11) NOT NULL,
  `id_profile` int(11) UNSIGNED NOT NULL,
  `professional_skills` text NOT NULL,
  `other_skill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_job`
--

CREATE TABLE `type_job` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_job`
--

INSERT INTO `type_job` (`id`, `name`) VALUES
(1, 'Nhân viên chính thức'),
(2, 'Nhân viên thời vụ'),
(3, 'Bán thời gian'),
(4, 'Làm thêm ngoài giờ'),
(5, 'Thực tập và dự án');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_company_employer` (`employer_id`),
  ADD KEY `fk_company_career` (`career_id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree_details`
--
ALTER TABLE `degree_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_degree_profile` (`id_profile`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employer_email_unique` (`email`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_detail`
--
ALTER TABLE `experience_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_experience_profile` (`id_profile`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_job_code_unique` (`job_code`),
  ADD KEY `fk_job_company` (`company_id`),
  ADD KEY `fk_job_employer` (`employer_id`),
  ADD KEY `fk_job_type_job` (`type_job_id`),
  ADD KEY `fk_job_career` (`career_id`),
  ADD KEY `fk_job_grade` (`grade_id`),
  ADD KEY `fk_job_salary` (`salary_id`),
  ADD KEY `fk_job_degree` (`degree_id`),
  ADD KEY `fk_job_experience` (`experience_id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_seeker_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_profile_typeJob` (`type_job_id`),
  ADD KEY `fk_profile_job_seeker` (`job_seeker_id`),
  ADD KEY `fk_profile_career` (`career_id`),
  ADD KEY `fk_profile_grade` (`grade_id`),
  ADD KEY `fk_profile_salary` (`salary_id`),
  ADD KEY `fk_profile_degree` (`degree_id`),
  ADD KEY `fk_profile_experience` (`experience_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_job`
--
ALTER TABLE `save_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_profiles`
--
ALTER TABLE `save_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_detail`
--
ALTER TABLE `skill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_skill_profile` (`id_profile`);

--
-- Indexes for table `type_job`
--
ALTER TABLE `type_job`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `degree_details`
--
ALTER TABLE `degree_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `experience_detail`
--
ALTER TABLE `experience_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `save_job`
--
ALTER TABLE `save_job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `save_profiles`
--
ALTER TABLE `save_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skill_detail`
--
ALTER TABLE `skill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_job`
--
ALTER TABLE `type_job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `fk_company_career` FOREIGN KEY (`career_id`) REFERENCES `career` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_company_employer` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `degree_details`
--
ALTER TABLE `degree_details`
  ADD CONSTRAINT `fk_degree_profile` FOREIGN KEY (`id_profile`) REFERENCES `profiles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `experience_detail`
--
ALTER TABLE `experience_detail`
  ADD CONSTRAINT `fk_experience_profile` FOREIGN KEY (`id_profile`) REFERENCES `profiles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `fk_job_career` FOREIGN KEY (`career_id`) REFERENCES `career` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_degree` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_employer` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_experience` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_grade` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_salary` FOREIGN KEY (`salary_id`) REFERENCES `salary` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_type_job` FOREIGN KEY (`type_job_id`) REFERENCES `type_job` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `fk_profile_career` FOREIGN KEY (`career_id`) REFERENCES `career` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_degree` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_experience` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_grade` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_job_seeker` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_salary` FOREIGN KEY (`salary_id`) REFERENCES `salary` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_typeJob` FOREIGN KEY (`type_job_id`) REFERENCES `type_job` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `skill_detail`
--
ALTER TABLE `skill_detail`
  ADD CONSTRAINT `fk_skill_profile` FOREIGN KEY (`id_profile`) REFERENCES `profiles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
