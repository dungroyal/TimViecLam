-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2020 lúc 08:23 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `timvieclam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
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
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `address`, `city`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dũng Admin', 'admin@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, '0328050520', '34D, Đường số 12, Gò vấp', 51, 1, '2020-11-29 19:40:52', '2020-11-29 19:40:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `apply`
--

CREATE TABLE `apply` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `profiles_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `career`
--

CREATE TABLE `career` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `career`
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
-- Cấu trúc bảng cho bảng `city`
--

CREATE TABLE `city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `city`
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
-- Cấu trúc bảng cho bảng `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `name_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personnel_size` tinyint(4) NOT NULL,
  `career_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Chọn từ 1 đến 60',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_license` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servece` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `companies`
--

INSERT INTO `companies` (`id`, `employer_id`, `name_company`, `personnel_size`, `career_id`, `phone`, `address`, `city`, `description`, `website`, `fax`, `logo`, `business_license`, `name_contact`, `phone_contact`, `email_contact`, `address_contact`, `servece`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Công ty TNHH B.Braun Việt Nam', 1, 32, '0935245266', 'Đang cập nhật', '51', 'Đang cập nhật', 'rowe.com', NULL, NULL, NULL, 'Hứa Hà Biên', '0376116510', 'dongquangkieu@gmail.com', 'Đang cập nhật', NULL, 1, '2020-11-29 19:40:52', '2020-11-29 19:40:52'),
(2, 2, 'Công ty Cổ phần Phát triển Công nghệ Sài Gòn Web', 100, 22, '0708337474  ', '108/ 15 Cộng Hòa, phường 4, quận Tân Bình.', '59', 'Đang cập nhật', 'trishhopkinson.com', NULL, NULL, NULL, 'Ái Hồng', '0798.58.1133 ', 'mai112233@yahoo.com.vn', 'Đang cập nhật', NULL, 1, NULL, NULL),
(3, 3, 'Công ty Thiết kế web Saigon Hitech', 10, 22, '0254772474  ', ' 399B Trường Chinh, phường 14, quận Tân Bình.', '51', 'Đang cập nhật', 'saigontech.com', NULL, NULL, NULL, 'Ái Khanh', '0799994133 ', 'khanh1123@yahoo.com.vn', 'Đang cập nhật', NULL, 1, NULL, NULL),
(4, 4, 'Công ty Cổ phần CHILI', 65, 10, '0792.56.7755 ', '54 đường C1, phường 13, quận Tân Bình.', '41', 'Đang cập nhật', ' CHILI.com.vn', NULL, NULL, NULL, 'Ái Linh', '0336698845', 'tuongvi25@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(5, 5, 'Công ty TNHH Thiết kế web Trust.vn', 54, 8, '0789.92.5588 ', '15/2 Đường B1 Cộng Hòa, phường 13, quận Tân Bình', '34', 'Đang cập nhật', 'Trust.vn', NULL, NULL, NULL, 'Ái Nhân', '0703112727 ', 'quyenbantochuc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(6, 6, 'Công ty TNHH Webico', 26, 9, '032872.5588 ', 'Tầng 8 Mekong Tower, số 235 - 241 Cộng Hòa, phường 13, quận Tân Bình', '51', 'Đang cập nhật', 'websicoe.com.vn', NULL, NULL, NULL, 'Ái Nhi', '0254799727 ', 'chonhadico@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(7, 7, 'Công ty TNHH Công Nghệ và Truyền Thông IB Việt Nam - ibweb', 50, 18, '03249.92.5588 ', '66 Nguyễn Bá Tuyển, phường 12, quận Tân Bình.', '51', 'Đang cập nhật', 'idibweb.vn', NULL, NULL, NULL, 'Ái Thi', '0364112727 ', 'lelien2288@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(8, 8, 'Công ty TNHH SUNSHINE VN', 10, 5, '03265877889 ', '1/2 Nguyễn Đình Khơi, phường 4, quận Tân Bình.', '51', 'Đang cập nhật', 'sunshine.vn', NULL, NULL, NULL, 'Ái Thy', '0987462844 ', 'phamtham31290@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(9, 9, 'Công ty TNHH Phần Mềm Zozo', 19, 25, '03698554198 ', 'Tầng 1 - Tòa nhà Arrow, số 40 Hoàng Việt, phường 4, quận Tân Bình.', '51', 'Đang cập nhật', 'zzzooe.vn', NULL, NULL, NULL, 'Ái Vân', '0164857844 ', 'nhoc070986@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(10, 10, 'Công ty TNHH Dịch Vụ Quảng Cáo Minh Thuận', 19, 21, '0783.334.111  ', '220/ 22/ 22 Âu Cơ, phường 9, quận Tân Bình', '51', 'Đang cập nhật', 'adse.vn', NULL, NULL, NULL, 'Ái Bình', '0164857844 ', 'toquyen0910@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(11, 11, 'Công ty TNHH dịch vụ Siêu Tốc Việt', 17, 11, ' 079.444.6565 ', '15 Huỳnh Văn Nghệ, phường 15, quận Tân Bình.', '51', 'Đang cập nhật', 'sieutocviet.vn', NULL, NULL, NULL, 'Ái Di', '	0707.75.6996   ', 'vuive0910@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(12, 12, 'Công ty TNHH Dịch Vụ Quảng Cáo Minh Thuận', 19, 21, '0783.334.111  ', '220/ 22/ 22 Âu Cơ, phường 9, quận Tân Bình', '51', 'Đang cập nhật', 'adse.vn', NULL, NULL, NULL, 'Ái Bình', '0164857844 ', 'toquyen0910@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(13, 13, ' Công ty TNHH Công Nghệ QCV Việt Nam ', 7, 1, ' 07.68.68.68.01  ', ' Lầu 4 - Thái Bình Building - 264A Nguyễn Thái Bình, phường 12, quận Tân Bình. ', '51', 'Đang cập nhật', ' cqcvt.vn ', NULL, NULL, NULL, 'Ái Di', '	0792.66.63.63   ', '   giangdao2310@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, NULL),
(14, 14, ' Công ty Cổ phần Truyền thông CIP MEDIA', 70, 20, ' 07.89.89.89.12   ', ' 9/11 Thăng Long, phường 4, quận Tân Bình. ', '51', 'Đang cập nhật', ' cipmdeia.vn ', NULL, NULL, NULL, 'Ái Châu', '	0783.45.2277    ', '  Chougiao0@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, NULL),
(15, 15, ' Công ty TNHH King Help ', 75, 29, ' 0708.68.1717    ', ' 2/21 Lê Quốc Tuấn, phường 13, quận Tân Bình. ', '51', 'Đang cập nhật', ' kinghepeia.vn ', NULL, NULL, NULL, 'Ái Châu Minh', '	0789999977    ', '  Chougiao0@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, NULL),
(16, 16, ' Công ty TNHH Thương Mại Quảng Cáo Nhật Nam ', 95, 19, ' 0789.91.4466      ', ' 97/15 Hồng Lạc, phường 10, quận Tân Bình. ', '51', 'Đang cập nhật', ' nhatnam.com.vn ', NULL, NULL, NULL, 'An Hạ', '	0703.32.7676      ', '  lhtuetam@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, NULL),
(17, 17, ' Công ty TNHH Thương Mại Dịch Vụ HALINK ', 44, 18, ' 0703.33.66.44        ', 'Tầng trệt, Tòa nhà Dtec Building, Số 6 Phan Chu Trinh, phường Tân Thành, quận Tân Phú. ', '51', 'Đang cập nhật', ' halink.com.vn ', NULL, NULL, NULL, 'An Hạ', '	07.68.68.68.50       ', '  huongnb.89@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, NULL),
(18, 18, ' Công Ty Giải Pháp Công Nghệ Tùng Phát  ', 74, 17, ' 0792.15.85.55          ', ' 11 Đặng Thế Phong,  phường Tân Sơn Nhì, quận Tân Phú. ', '51', 'Đang cập nhật', ' tungphat.vn ', NULL, NULL, NULL, 'An Hạ', '	079.777.222.8         ', '  thoakim.thuesenvang@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, NULL),
(19, 19, ' Công ty TNHH Ngôi Sao Số  ', 70, 37, ' 0765.69.1188            ', '95 Lê Lâm, phường Phú Thạnh, quận Tân Phú.', '51', 'Đang cập nhật', ' ngoisauso.com.vn ', NULL, NULL, NULL, 'An Hằng', '	079.874922.8         ', ' huynhtanphat49kt@gmail.com  ', 'Đang cập nhật', NULL, 1, NULL, NULL),
(20, 20, 'Công ty DIGISTAR', 40, 15, '0784.345679 ', 'Đang cập nhật', '40', 'Đang cập nhật', 'elnacain.com', NULL, NULL, NULL, 'An Nhàn', '0767.345679 ', 'thanhthao.cry@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(21, 21, ' Công ty TNHH Phát Triển Nắng Xanh', 25, 35, '0813.345679  ', 'Đang cập nhật', '35', 'Đang cập nhật', 'datnangxanh.com', NULL, NULL, NULL, 'An Nhiên', '0767.399679 ', 'huynhtanphat49kt@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(22, 22, ' Công ty TNHH Thương Mại Điện Tử Cao Tốc', 2, 31, '0971.26.79.79  ', 'Đang cập nhật', '15', 'Đang cập nhật', 'caotoc.com.vn', NULL, NULL, NULL, 'An Chi', '0765.77.78.79  ', 'canhchimbayxa89@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(23, 23, ' Công ty TNHH Tư Vấn Thiết Kế Phần Mềm Cánh Cam', 29, 31, '0971.26449.79  ', '156 Nguyễn Văn Thủ, quận 1.', '51', 'Đang cập nhật', 'canhcam.com.vn', NULL, NULL, NULL, 'An Ðào', '0765.97.78.79  ', 'thuyan83@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(24, 24, ' Công ty Thiết kế website 123Corp', 9, 14, ' 04781.79.79    ', 'Số 68 Nguyễn Huệ, phường Bến Nghé, quận 1.', '51', 'Đang cập nhật', '123crpo.vn', NULL, NULL, NULL, 'Anh Ðào', '0962.838.939    ', 'doanthim@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(25, 25, ' Công ty Cổ phần Công Nghệ GREENSOFT', 29, 4, ' 093116.39.39    ', '60 Nguyễn Đình Chiểu, phường Đa Kao, quận 1.', '51', 'Đang cập nhật', '1grennsofto.vn', NULL, NULL, NULL, 'Nguyên Anh Ðào', '0971.84.79.79    ', 'daochilem@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(26, 26, ' Công ty TNHH AUN Việt Nam', 100, 22, ' 0936.938.939     ', 'Tầng 11, Tòa Nhà Bảo Việt, 233 Đồng Khởi, phường Bến Nghé', '12', 'Đang cập nhật', 'auunaunn.com.vn', NULL, NULL, NULL, 'Nguyên Hải', '0946.22.79.79     ', 'haiquayxeem@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(27, 27, '   Công ty TNHH Công Nghệ và Tư Vấn Doanh Nghiệp INNOCOM  ', 90, 32, '   097115.79.79     ', '  Tầng 46 – Tòa nhà Bitexco Financial Tower, số 2  Hải Triều, phường Bến Nghé, quận 1.  ', '  13 ', 'Đang cập nhật ', '      innncom.vn ', NULL, NULL, NULL, 'Nguyên Nguyên', '0708.79.39.79       ', 'nguyendaxam@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(28, 28, '   Công ty TNHH ITOOL  ', 30, 2, '   0977896.79     ', '  số 04 Nguyễn Đình Chiểu, phường Đa Kao, quận 1.  ', '  13 ', 'Đang cập nhật ', '      inttonnl.vn ', NULL, NULL, NULL, 'Hồng Nguyên', '0308.79.39.79       ', 'nguynea@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(29, 29, '  Công ty TNHH TM - DV South Team ', 4, 6, '   0977.3996.79     ', '  187/7 Điện Biên Phủ, phường Đa Kao, quận 1.  ', '  15 ', 'Đang cập nhật ', '      souththem.com.vn ', NULL, NULL, NULL, 'Hồng Hải', '0308.79.39.74       ', 'ngochaihonga@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(30, 30, '  Công ty Cổ phần Truyền Thông và Công Nghệ Vinalink ', 40, 36, '   0457.3996.79     ', '  57 - 59 Hồ Tùng Mậu, phường Bến Nghé, quận 1.  ', '  19 ', 'Đang cập nhật ', '      vinamilk.com.vn ', NULL, NULL, NULL, 'Long Thộ', '0874.79.39.74       ', 'suatho@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(31, 31, '  Công ty Cổ phần Truyền Thông và Công Nghệ Vimala ', 40, 36, '   0457.3996.79     ', 'Hà Nội', '  21 ', 'Đang cập nhật ', '      vinamla.com.vn ', NULL, NULL, NULL, 'Long Đực', '0874.79.39.74       ', 'suatho@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(32, 32, ' Công ty thiết kế web Trí Tuệ Việt  ', 87, 11, '   0357.3999.79     ', '  55/5 Trần Đình Xu, quận 1.  ', '  19 ', 'Đang cập nhật ', 'iqviet.com.vn ', NULL, NULL, NULL, 'Long Châu', '087.79.74.412       ', 'chaulogo@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(33, 33, '  Công ty CP TMĐT Công Nghệ Việt ', 80, 33, '  0902.79.79.39   ', 'Tầng 4 Tòa nhà Khatoco - 259A Hai Bà Trưng, phường 6, quận 3.  ', '  41 ', 'Đang cập nhật ', '      khatonghe.com.vn ', NULL, NULL, NULL, 'Linh Hà', '0908.679.979       ', 'Hachaunghe@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(34, 34, '  Công ty TNHH Gootech Việt Nam ', 40, 3, '  0977.63.3979    ', ' 62A Phạm Ngọc Thạch, phường 6, quận 3 ', '  41 ', 'Đang cập nhật ', '      googtech.com.vn ', NULL, NULL, NULL, 'Linh Hương', '0908.679.977       ', 'huonglonh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(35, 35, 'Công ty TNHH Dịch Vụ Thương Mại Điện Tử ESCO', 20, 23, '  0941.63.3979    ', ' Số 9, đường số 2, Cư Xá Đô Thành, phường 4, quận 3 ', '  17 ', 'Đang cập nhật ', '      esocoo.com.vn ', NULL, NULL, NULL, 'Linh Nguyên', '0308.679.977       ', 'huongnguyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(36, 36, 'Công Ty TNHH Blue Fox', 21, 13, '  0941.63.7477   ', '117-119 tòa nhà An Phú, đường Lý Chính Thắng ', '  18 ', 'Đang cập nhật ', '     blueox.com.vn ', NULL, NULL, NULL, 'Thế Nguyên', '0378.679.977       ', 'thenguyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(37, 37, 'Công Ty TADC SOFTWARE', 69, 19, '  0741.63.7477   ', '728/22 Trần Hưng Đạo, phường 2, quận 5. ', '  44 ', 'Đang cập nhật ', '     soradc.com.vn ', NULL, NULL, NULL, 'Thế Linh', '0378.677896      ', 'thelinh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(38, 38, 'Công ty TNHH Giải Pháp Số Expro', 64, 19, '  076.369.7477   ', '270 Cao Thắng', '  44 ', 'Đang cập nhật ', '     expo.com.vn ', NULL, NULL, NULL, 'Châu Thế Linh', '0378.6772541      ', 'chuathelinh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(39, 39, 'Công ty Cổ phần Giải pháp Công Nghệ 4S', 6, 1, '  07417737477   ', ' A54 Khu Nam Long, đường Phú Thuận', '  4 ', 'Đang cập nhật ', '    4sonline.com.vn ', NULL, NULL, NULL, 'Hàng Thái', '0378.644.2541      ', 'hangthai@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(40, 40, ' Công ty Giải Pháp Nhanh', 46, 38, '  0988.49.39.39    ', ' Tầng 4 - Tòa nhà Flemington', '  50 ', 'Đang cập nhật ', '    htppa.vn ', NULL, NULL, NULL, 'Hàng Thái Tú', '0787.69.39.79      ', 'hangthaitu@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(41, 41, 'Công ty Thiết kế website Mona Media', 66, 29, '02554447777', '319 C16 Khu cư xá Thuận Việt', '', NULL, 'momamedia.com.vn', NULL, NULL, NULL, 'Văn Minh', '0325471888', 'minhha@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(42, 42, ' Công ty TNHH EFC', 61, 22, '0365472229', '319 C16 Khu cư xá Thuận Việt', '', NULL, 'efconline.com.vn', NULL, NULL, NULL, 'Văn Liên', '0325441888', 'lienchau@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(43, 43, 'Công Ty Dữ Liệu Toàn Cầu', 102, 37, '	0932.78.78.79 ', 'VP 07 Lầu 12Bis - Cao Ốc Thái An', '52', 'Đang cập nhật', 'dulieu.gov', NULL, NULL, NULL, 'Cẩm Hạnh', '0889.978.979 ', 'phuonghong_200632@yahoo.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(44, 44, ' Công ty TNHH Thiết Kế Web Gia Hân', 22, 17, '0919.89.98.79', 'Số 7, đường Tân Thới Hiệp 06, phường Tân Thới Hiệp', '53', 'Đang cập nhật', 'giahanwweb.com', NULL, NULL, NULL, 'Cẩm Hiền', '0936.38.38.39 ', 'thanhlan.ecc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(45, 45, 'Công Ty Dữ Liệu Toàn Cầu', 102, 37, '	0932.78.78.79 ', 'VP 07 Lầu 12Bis - Cao Ốc Thái An', '52', 'Đang cập nhật', 'dulieu.gov', NULL, NULL, NULL, 'Cẩm Hạnh', '0889.978.979 ', 'phuonghong_200632@yahoo.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(46, 46, ' Công ty TNHH Thiết Kế Web Gia Hân', 22, 17, '0919.89.98.79', 'Số 7, đường Tân Thới Hiệp 06, phường Tân Thới Hiệp', '53', 'Đang cập nhật', 'graham.com.vn', NULL, NULL, NULL, 'Cẩm Hiền', '0936.38.38.39 ', 'thanhlan.ecc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(47, 47, 'Công ty TNHH TM Thiết kế Website Hoàng Vĩnh Phát', 102, 30, '	09138.179.79  ', '125 Trường Chinh', '54', 'Đang cập nhật', 'tailieukinhdoanh.com', NULL, NULL, NULL, 'Cẩm Hường', '0889.978.929 ', 'myloankt87@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(48, 48, 'Công ty TNHH Thiết kế Website Trí Phạm', 12, 3, '	0919.05.79.79   ', '776 Lê Đức Thọ, phường 15, quận Gò Vấp.', '55', 'Đang cập nhật', 'tripham.com', NULL, NULL, NULL, 'Cẩm Liên', '0986.79.69.79  ', 'onlinelien7@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(49, 49, 'Công ty TNHH Giải pháp IMS', 18, 13, '	0917.22.39.79     ', '  434/14 Phạm Văn Chiêu.', '55', 'Đang cập nhật ', 'ims.com', NULL, NULL, NULL, 'Cẩm Linh', '0366.79.69.79  ', 'camlinh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(50, 50, ' Công ty cổ phần dịch vụ AZSEO  ', 19, 14, '	0908.679.979     ', '  Số 59, đường số 1, phường 7, quận Gò Vấp.', '56', 'Đang cập nhật ', 'azseo.com', NULL, NULL, NULL, 'Cẩm Ly', '0366.79.19.79  ', 'clinhyahhh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(51, 51, ' Công ty TNHH MEVIVU  ', 29, 24, '	0939.89.79.79     ', '  99/26/18 Huỳnh Văn Nghệ, phường 12, Quận Gò Vấp.', '57', 'Đang cập nhật ', 'mevivu.com', NULL, NULL, NULL, 'Cẩm Nhi', '0366.79.19.79  ', 'nhinhinhih@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(52, 52, ' Công ty TNHH Phát Triển Giải Pháp Tin Học Bền Vững ITGreen  ', 39, 34, '	0939.21.79.79     ', ' 81/15/18 Huỳnh Văn Nghệ, phường 12, quận Gò Vấp.', '57', 'Đang cập nhật ', ' itgrenn.com', NULL, NULL, NULL, 'Cẩm Nhung', '0314.79.19.79  ', 'nhungcamh@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(53, 53, ' Công ty TNHH Công Nghệ Truyền Thông Web Đại Tín ', 49, 4, '	0839.59.39.39       ', ' 331/70/45 Phan Huy Ích, quận Gò Vấp.', '58', 'Đang cập nhật ', ' daitin.com.vn', NULL, NULL, NULL, 'Cẩm Thảo', '0768.686.447    ', 'thaocamonline@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(54, 54, ' Công ty Thương Hiệu Việt ', 59, 32, '	0703.22.88.66       ', ' 672A27 Phan Văn Trị, phường 10, quận Gò Vấp..', '59', 'Đang cập nhật ', ' thuonghieuviet.vn', NULL, NULL, NULL, 'Cẩm Thúy', '0722.286.447    ', 'ngoisaomayman2409dl@yahoo.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(55, 55, 'Công ty TNHH Máy Chủ Tốt', 26, 20, '0369874529', '74/6/51 đường số 9, phường 16, quận Gò Vấp.', '57', 'Đang cập nhật', 'maychu.net', NULL, NULL, NULL, 'Yến Trinh', '0376.99.8888 ', 'trinhyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(56, 56, 'Samsung Electronics Việt Nam', 96, 2, '0373.62.9999 ', '	Huyện Thuận Thành, tỉnh Bắc Ninh', '1', 'Đang cập nhật', 'electronics.com.vn', NULL, NULL, NULL, 'Yến Trâm', '0376.9377.388 ', 'tamyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(57, 57, 'Tập đoàn Dầu khí Việt Nam', 100, 12, '09119.36789 ', '74/6/51 đường số 9, phường 16, quận Gò Vấp.', '57', 'Đang cập nhật', 'daukhivietnam.vn', NULL, NULL, NULL, 'Hải Phùng', '09415.44444  ', 'tphungauto@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(58, 58, 'Tập đoàn Xăng dầu Việt Nam', 90, 1, '03981.55555   ', 'Quận Đống Đa, Hà Nội ', '33', 'Đang cập nhật', 'xangdau.com.vn', NULL, NULL, NULL, 'Hải Thảo', '	0775.789.789   ', 'thaoauto@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(59, 59, '	Tập đoàn Điện lực Việt Nam', 40, 3, '04981.55555   ', '	Quận Hoàn Kiếm, Hà Nội ', '33', 'Đang cập nhật', 'petro.com', NULL, NULL, NULL, 'Hải Thanh', '	0375.789.789   ', 'thayeuthanhauto@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(60, 60, '		Tập đoàn Công nghiệp – Viễn thông Quân đội', 49, 34, '08471.55555   ', '	Huyện Từ Liêm, Hà Nội', '32', 'Đang cập nhật', 'viettel.com', NULL, NULL, NULL, 'Hải Phượng', '	0375.789.789   ', 'haiphuonguto@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(61, 61, 'Tập đoàn Vingroup', 50, 9, '02584147414', 'Quận Long Biên, Hà Nội', '33', 'Đang cập nhật', 'vingroup.com', NULL, NULL, NULL, 'Yến Phương', '0917.28.5555  ', 'Phuong.mn@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(62, 62, '	Thế giới di động', 99, 5, '025.33.59414', 'Quận 9, Thành phố Hồ Chí Minh', '53', 'Đang cập nhật', 'thegioididong.com', NULL, NULL, NULL, 'Yến Oanh', '0917.366.5555  ', 'Oanhmn@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(63, 63, '		Tập đoàn Vàng bạc Đá quý DOJI', 91, 25, '0225.3344.594', '	Quận Ba Đình, Hà Nội', '53', 'Đang cập nhật', 'doji.com.vn', NULL, NULL, NULL, 'Yến Nhi', '0997.366.5555  ', 'nhidojjjinn@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(64, 64, '			Công ty cổ phần ô tô Trường Hải', 51, 14, '076551.8888 ', '	Quận 2, Thành phố Hồ Chí Minh', '51', 'Đang cập nhật', 'truonghai.com.vn', NULL, NULL, NULL, 'Yến My', '0997.889.5555  ', 'truonyennhi@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(65, 65, '				Công ty cổ phần Tập đoàn Hòa Phát', 50, 24, '0369.336.8888 ', '		Quận Hai Bà Trưng, Hà Nội', '51', 'Đang cập nhật', 'hoaphatone.com.vn', NULL, NULL, NULL, ' Yến Mai', '0997.889.2145  ', 'yenmai@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(66, 66, '	Jetstar Pacific', 50, 24, '0369.336.1114 ', '		Quận Hai Bà Trưng, Hà Nội', '51', 'Đang cập nhật', 'jetstarpaific.com.vn', NULL, NULL, NULL, ' Yến Ha', '0369.020.2145  ', 'yenhaaha@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(67, 67, ' Công ty Cổ phần Đại Cát Tường', 66, 33, '0235.33.8874', 'Thành phố Quảng Ngãi, tỉnh Quảng Ngãi', '22', 'Đang cập nhật', 'daicattruong.com', NULL, NULL, NULL, 'Yến Lan', '0841.366.5555 ', 'lanngocyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(68, 68, 'Công ty Truyền thông & Giải trí Điền Quân', 59, 15, '1800.8168', 'Thành phố Hồ Chí Minh', '23', 'Đang cập nhật', 'dienquan.com.vn', NULL, NULL, NULL, 'Yến Bình', '0917.366.5555 ', 'mbinhyenn@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(69, 69, 'Tập đoàn FPT', 79, 35, '1900.8168', 'Thành phố Hồ Chí Minh', '33', 'Đang cập nhật', 'fpt.com.vn', NULL, NULL, NULL, 'Yến Nhi', '0917.366.5555 ', 'nhi@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(70, 70, 'Công ty Cổ phần Xuất nhập khẩu Thủy sản Cửu Long An Giang', 41, 31, '1900.7168', 'Thành phố Hồ Chí Minh', '30', 'Đang cập nhật', 'cuulong.com.vn', NULL, NULL, NULL, 'Yến Anh', '0917.789.5555 ', 'Anhemtv@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(71, 71, 'Công ty Trách nhiệm hữu hạn Ô tô Thế giới', 11, 31, '02658.600.7168', 'Thành phố Hồ Chí Minh', '30', 'Đang cập nhật', 'otothegig.com.vn', NULL, NULL, NULL, 'Yến Ðan', '0917.789.5555 ', 'danyeu@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(72, 72, 'Vinaphone', 1, 1, '0374.600.7168', 'Thành phố Hồ Chí Minh', '30', 'Đang cập nhật', 'vinaphone.com.vn', NULL, NULL, NULL, 'Xuyến Chi', '0916.99.99.95  ', 'xyenchi@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(73, 73, 'Vinacafe', 10, 10, '0916323456 ', 'Thành phố Hồ Chí Minh', '10', 'Đang cập nhật', 'vinacaffe.com.vn', NULL, NULL, NULL, 'Xuyến An', '0916.99.99.95  ', 'xyenananana@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(74, 74, 'Tổng công ty Viglacera', 11, 15, '0987.90.00.00  ', 'Thành phố Hồ Chí Minh', '10', 'Đang cập nhật', 'Viglacera.com.vn', NULL, NULL, NULL, 'Xuân Yến', '0916.99.99.95  ', 'xuanyen@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(75, 75, 'Tổng công ty Việt  Cồ', 65, 13, '0995.24.21.23  ', '	Hà Nội', '32', 'Đang cập nhật', 'vietco.com.vn', NULL, NULL, NULL, 'Nguyễn Ngọc Kim Châu', '03664488297', 'kim444kim444@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(76, 76, 'Vietnam Artist Agency (VAA)', 61, 23, '0995.11.21.23  ', '	Hà Nội', '31', 'Đang cập nhật', 'agency.com.vn', NULL, NULL, NULL, ' Kim Châu', '03284488297', 'kim444kim444@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(77, 77, 'TVM Comics', 61, 23, '0995.11.36985  ', '	Hà Nội', '3', 'Đang cập nhật', 'tvm.cet', NULL, NULL, NULL, ' Kim Ngọc', '0564488297', 'kimngoc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL),
(78, 78, 'Nhà xuất bản Trẻ', 9, 6, '05993.999.64   ', '	Hà Nội', '4', 'Đang cập nhật', 'hotter.vn', NULL, NULL, NULL, ' Thái Ngọc', '0598.1998.38 ', 'thaingoc@gmail.com', 'Đang cập nhật', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `degree`
--

CREATE TABLE `degree` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `degree`
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
-- Cấu trúc bảng cho bảng `employer`
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
-- Đang đổ dữ liệu cho bảng `employer`
--

INSERT INTO `employer` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'winston39@schmidt.com', '2020-11-29 19:40:52', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-11-29 19:40:52', '2020-11-29 19:40:52'),
(2, 'ko.huongngoctinhkt1986@gmail.com', '2020-12-01 19:47:43', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-12-01 19:33:18', '2020-12-01 19:33:18'),
(3, 'ckctm12@gmail.com', '2020-12-01 19:33:18', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, '2020-12-01 19:33:18', '2020-12-01 19:33:18'),
(4, 'tiffany99@hartmann.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(5, 'invalid@example.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(6, 'ko.ngoctinhkt1986@gmail.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(7, 'dungiiiung1206@gmail.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(8, 'nguyenthimy2805@gmail.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(9, 'mongtuyenvikor@gmail.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(10, 'longnv@gmail.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(11, 'huongtrangkt168@gmail.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(12, 'hanhmt@ckca.vn', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(13, 'yenmac90@gmail.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(14, 'vnptca.hotrokekhai@gmail.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(15, 'tuananhas2212@gmail.com', '2020-12-01 19:50:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(16, 'songdai_love@yahoo.com', '2020-12-02 05:34:29', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(17, 'quangha9988@gmail.com', '2020-12-02 05:34:37', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(18, 'dinhhadn85@gmail.com', '2020-12-02 05:34:49', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(19, 'thanhthaoxn380@gmail.com', '2020-12-02 05:34:57', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(20, 'quanghico@gmail.com', '2020-12-02 05:35:05', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(21, 'anhsong.minhanh@gmail.com', '2020-12-02 05:35:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(22, 'nguyenthanhhuong89nt@gmail.com', '2020-12-02 05:35:25', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(23, 'maithuy.182@gmail.com', '2020-12-02 05:35:31', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(24, 'nguyenvan.11392@gmail.com', '2020-12-02 05:35:38', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(25, 'letich.dn567@yahoo.com', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(26, 'haivu74ftu@gmail.com', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(27, 'haivu74ftu@gmail.com.em', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(28, 'traitimbinhyen_cth_8x@yahoo.com', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(29, 'anhktltv@gmail.com', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(30, 'hongcuc02@gmail.com', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(31, 'hongcuc2109@gmail.com', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(32, 'toankt8@yahoo.com', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(33, 'hoducbinh91@gmail.com', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(34, 'ngochuyen16289@yahoo.com\r\n', '2020-12-02 05:38:35', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(35, 'nam_xdbadinh@yahoo.com.vn', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(36, 'huett.add@gmail.com', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(37, 'lanyenphuc@gmail.com', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(38, 'caukinhtb@yahoo.com', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(39, 'ntmtrinh390@gmail.com', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(40, 'coanhdao123456@yahoo.com.vn', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(41, 'mylinh.botbien@gmail.com', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(42, 'tieuthu2620@gmail.com\r\n', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(43, 'nguyenhieuhd88@gmail.com.vn', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(44, 'trangvt.tm@gmail.com', '2020-12-02 00:44:12', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(45, 'utpkakav7320@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(46, 'tongha12389@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(47, 'thuhuongstyle91@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(48, 'myloan.ml@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(49, 'hongthuy_mm1987@yahoo.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(50, 'beghjdendep@yahoo.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(51, 'minguyenthi343@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(52, 'zynchiiiiiip@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(53, 'lenhung2012dt@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(54, 'levanton777@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(55, 'tranglinhnhi89@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(56, 'philong.banking@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(57, 'cubi0123301@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(58, 'la.nguyenha31891@gmail.com', '2020-12-02 03:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(59, 'chuthivui89@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(60, 'phuongnhi835@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(61, 'khacmlm@gmail.com', '2020-12-01 07:55:07', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(62, 'chanhminhanh@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(63, 'aaaagiangtchq@gmail.com', '2020-12-02 02:08:22', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(64, 'minh1082qn@yahoo.com', '2020-12-02 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(65, 'vuthanhgp89@yahoo.com', '2020-12-02 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(66, 'ngocgiaukt09@gmail.com', '2020-12-02 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(67, 'bichngocpt90@gmail.com', '2020-12-02 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(68, 'thuhien.aof08@gmail.com', '2020-12-02 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(69, 'ketoanlinh@gmail.com', '2020-12-02 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(70, 'thanhque1988@gmail.com', '2020-12-01 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(71, 'lehuonglan.90@gmail.com', '2020-12-01 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(72, 'trangtgnn@gmail.com', '2020-12-02 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(73, 'manhkhan.ct@gmail.com', '2020-12-01 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(74, 'mydang2208@gmail.com', '2020-12-01 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(75, 'luuquynhanht@gmail.com', '2020-12-01 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(76, 'luuquynhanh.kt@gmail.com', '2020-12-01 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(77, 'kimanh8608@gmail.com', '2020-12-01 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL),
(78, '\r\nrtanvanean1804@gmail.com', '2020-12-02 07:25:36', '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `experience`
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
-- Cấu trúc bảng cho bảng `grade`
--

CREATE TABLE `grade` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `grade`
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
-- Cấu trúc bảng cho bảng `job`
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
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`id`, `job_code`, `company_id`, `employer_id`, `name_job`, `type_job_id`, `amount`, `career_id`, `grade_id`, `salary_id`, `degree_id`, `experience_id`, `address`, `city`, `description`, `job_requirements`, `sex_requirements`, `profile_request`, `benefits`, `name_contact`, `phone_contact`, `address_contact`, `email_contact`, `deadline`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tbl01', 1, 1, 'Nhân viên Tiếp Thị', 3, 3, 37, 4, 4, 7, 10, '34D, Đường số 12, Phường 11, Quận Gò Vấp', 3, 'Việc nhẹ lương cao, ứng tuyển là nhận ngay', '- Thực hiện các công việc khác được giao\r\n            - Có khả năng làm việc độc lập và khả năng làm việc theo nhóm.\r\n            - Năng động, sáng tạo.\r\n            - Chịu được áp lực cao trong công việc, sẵn sàng làm thêm giờ nếu cần.\r\n            - Có tư duy làm việc logic, làm việc theo nhóm.\r\n            - Kỷ luật, chăm chỉ, có trách nhiệm trong công việc.\r\n            - Có khả năng đọc và nghiên cứu tài liệu tiếng Anh tốt.', 2, '\r\n            - Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\n            - Sơ yếu lý lịch.\r\n            - Bản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\n            - Giấy khám sức khỏe.', '- Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\n            - Thời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\n            - Được nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\n            - Tham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\n            - Nghỉ phép 12 ngày/năm\r\n            - Được tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\n            - Nhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n            - Các chế độ phúc lợi khác', 'Phan Thị Tiêu', '0902403012', 'Đang cập nhật', 'trinhquanghan@example.com', '2020-12-31', 'nhan-vien-tiep-thi', 1, '2020-11-29 19:40:52', '2020-11-29 19:40:52'),
(2, 'tbl02\r\n', 2, 2, 'Marketing online', 5, 3, 28, 2, 4, 7, 4, 'Phòng 609, Lầu 6, Sài gòn Tower, 29 Lê Duẩn, P. Bến Nghé, Q. 1,', 51, 'Viết content cho facebook, website.\r\nNhân viên SEO\r\nQuảng cáo google, facebook\r\nBán hàng qua các trang mạng xã hội\r\nBán hàng với các trang thương mại điện tử: shopee, lazada,\r\nTiếp thị liên kết', 'Có kỹ năng tin học tốt và khả năng sử dụng internet\r\nCó hiểu biết về SEO, Marketing Online\r\nTư duy am hiểu hành vi người dùng, am hiểu thương hiệu\r\nKhả năng viết lách\r\nPhải kiên trì, sáng tạo, khéo léo cư xử với khách hàng\r\nNghiên cứu được mặt hàng ưa chuộng. Từ đó mà tìm ra những nguồn hàng chất lượng, để có thể phát triển shop online của mình.\r\nNắm bắt được xu hướng thị trường', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Cúc', '(028) 39105534', 'Đang cập nhật', 'nhatlinhbg@gmail.com', '2020-12-31', 'Marketing-online', 3, '2020-12-01 05:54:55', '2020-12-04 05:54:55'),
(3, 'tbl03\r\n', 3, 3, 'Lập trình', 1, 2, 21, 5, 11, 7, 8, 'Số 2-4 Lưu Văn Lang, P. Bến Thành, Q. 1, Tp. Hồ Chí Minh', 22, 'Công nghệ thông tin là một trong những ngành mũi nhọn mang đến sự phát triển vượt bậc cho khoa học kỹ thuật. Công nghệ thông tin đã trở thành một ngành học “hot” và thu hút rất nhiều bạn trẻ. Những bạn yêu thích máy tính và đam mê lập trình thì có thể nhận các dự án việc làm tại nhà.', 'Có kiến thức nền tảng lập lập trình, trình độ tương đương chuyên ngành\r\nTừ 6 tháng – 5 năm kinh nghiệm bất kỳ ngôn ngữ lập trình PHP, Java, .NET, Mobile, C++ ..\r\nKhả năng học hỏi nhanh, có tinh thần trách nhiệm cao và cầu tiến', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Hoa', '(028) 38223390', 'Đang cập nhật', 'dinhhaktdn@gmail.com', '2020-12-31', 'lap-trinh', 2, '2020-12-02 06:46:41', '2020-12-03 06:46:41'),
(4, 'tbl04\r\n', 4, 4, 'Thiết kế đồ họa ', 2, 1, 17, 2, 5, 6, 4, 'Phòng C1, Lầu 9, Tòa Star Building 33TER-33BIS, Mạc Đĩnh Chi,', 44, 'Tư vấn thiết kế\r\nChỉnh sửa ảnh cưới , hình ảnh phong cảnh\r\nTách nền cho sản phẩm bất động sản…\r\nThiết kế website, thiết kế logo, nhận diện thương hiệu,…', 'Kỹ năng tốt trong việc minh họa và diễn đạt ý tưởng thông qua các bản phác thảo.\r\nSử dụng thành thạo bộ công cụ sáng tạo Adobe – phần mềm Photoshop, Illustrator, Indesign.\r\nCó kinh nghiệm trong việc xây dựng dự án từ ý tưởng thông qua thiết kế và thực hiện\r\nCởi mở để hợp tác và nhận phản hồi, và có thể bảo vệ các lựa chọn thiết kế được thực hiện.', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', ' Bạch Kim', '(028) 3823 4870', 'Phòng 501, Tòa Nhà Đào Duy Từ, Số 9 Đường Đào Duy Từ, Q. Đống Đa, Hà Nội', 'congtychutiendat@gmail.com', '2020-12-30', 'thiet-ke-do-hoa', 2, '2020-12-02 06:46:41', '2020-12-02 06:46:41'),
(5, 'tbl05\r\n', 5, 5, 'Dịch thuật online', 2, 2, 4, 4, 6, 7, 6, 'B-9, Tòa nhà Deepshikha, Rajendra Place, Thành phố New Delhi', 52, 'Dịch thuật tài liệu, văn bản do Công ty giao.\r\nĐược tự do lựa chọn thực hiện dự án hoặc không.', 'Kiến thức chuyên môn\r\nKĩ năng mềm\r\nKĩ năng sử dụng các phần mềm văn phòng\r\nCần cù, tỉ mỉ với những bản dịch được giao,…', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.\r\n', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', ' Bạch Liên', '(091) 8587891846', 'Đang cập nhật', 'anil@futurechemagro.com', '2020-12-29', 'dich-thuan-online', 2, '2020-12-01 06:57:56', '2020-12-01 06:57:56'),
(6, 'tbl06\r\n', 6, 6, 'Nhân viên sale và telesale', 1, 3, 17, 2, 3, 5, 4, 'B-9, Tòa nhà Deepshikha', 10, 'Nhân viên sale : gọi điện và gặp trực tiếp khách hàng về sản phẩm và dịch vụ, Cuối cùng là bán sản phẩn cho khách hàng.\r\nNhân viên telesale: gọi điện tư vấn và chốt đơn cho khách hàng từ xa', 'Khả năng giao tiếp và thuyết phục tốt\r\nSự nhạy bén và am hiểu về sản phẩm\r\nNắm bắt được tâm lí khách hàng', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Mai', '(091) 8587891846', 'Đang cập nhật', 'anil@futurechemagro.com', '2020-12-26', 'nhan-vien-sale-telesale', 1, '2020-12-03 06:57:56', '2020-12-04 06:57:56'),
(7, 'tbl07\r\n', 7, 7, 'Dịch vụ kế toán làm thêm ngoài giờ', 3, 1, 35, 1, 2, 3, 3, '608 Lầu 6, Saigon Tower, 29 Lê Duẩn, P. Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 36, 'Ghi chép hoạt động kinh tế , tài chính của doanh nghiệp\r\nTổng hợp làm báo cáo tài chính, báo cáo thuế hàng tháng cho doanh nghiệp\r\nBáo cáo thuế hàng quý\r\nQuyết toán thuế hàng năm', 'có kinh nghiệm làm việc ở vị trí tương đương\r\nNắm vững các nghiệp vụ kế toán\r\nkhả năng phân tích, tổng họp và viết báo cáo\r\nSử dụng thành thạo các phần mềm kế toán và vi tính văn phòng\r\nCẩn thận, trung thực và có trách nhiệm với công việc', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Quỳnh', '(028) 39105532', 'Đang cập nhật', ' www.kanematsu.co.jp', '2020-12-25', 'dich-vu-ke-toan', 2, '2020-12-01 07:11:12', '2020-12-02 07:11:12'),
(8, 'tbl08\r\n', 8, 8, 'Chỉnh sửa nội dung và biên soạn lỗi', 2, 2, 4, 1, 2, 3, 4, '608 Lầu 7, Saigon Tower, 29 Lê Duẩn, P. Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 52, 'Chỉnh sửa tập trung vào tài liệu nôi dung tài liệu tổng thể và kiểm tra câu từ cho trôi chảy, rõ ràng và cấu trúc câu phù hợp\r\nBiên soạn lỗi là bước cuối cùng của việc xem xét 1 tài liệu. Đọc đi đọc lại để không xảy ra lỗi về từ và ngữ pháp\r\n', 'Người làm phải có một đoi mắt tốt , khỏe mạnh để chi tiết và xem xét phát hiện ra lỗi\r\nNắm rõ cấu trúc ngữ pháp , chính tả\r\nCẩn thận và chi tiết', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Trà', '(028) 22105532', 'Đang cập nhật', 'thuy@hcm.kanematsu.co.jp', '2021-01-07', 'chinh-sua-noi-dung-bien-tap', 3, '2020-12-01 07:11:12', '2020-12-03 07:11:12'),
(9, 'tbl09\r\n', 9, 9, 'Huấn luyên viên thể hình', 4, 3, 27, 2, 5, 2, 4, '3A02, Số 60 Nguyễn Đình Chiểu, P. Đăk, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 1, 'Hướng dẫn khách hàng tập luyện\r\nthiết lập chế độ dinh dưỡng\r\nĐưa ra giáo án luyện tập cho khách', 'Cần có kiến thức sâu và rộng về lĩnh vực\r\nNgoại hình tốt để khách hàng tin tưởng', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Tuyết', '0839115885', 'Đang cập nhật', 'www.et2c.com', '2020-12-26', 'nhan-vien-the-hinh', 3, '2020-12-02 07:20:55', '2020-12-02 07:20:55'),
(10, 'tbl10\r\n', 10, 10, '[GÒ VẤP - TP HỒ CHÍ MINH] NHÂN VIÊN HỖ TRỢ KỸ THUẬT ĐTDĐ/LAPTOP', 1, 3, 1, 2, 4, 6, 4, 'Tầng 1, FPT Shop, Số 202 Nguyễn Thị Minh Khai, Phường 6 , Quận 3 , Hồ Chí Minh, Việt Nam', 53, '- Cài đặt ứng dụng và phần mềm cho các dòng ĐTDĐ/Laptop.\r\n- Tư vấn, hỗ trợ cho khách hàng về kỹ thuật và chức năng của sản phẩm.\r\n- Tiếp nhận và xử lý các trường hợp bảo hành liên quan đến phần mềm sản phẩm...\r\n- Hỗ trợ nhân viên bán hàng về kỹ thuật.\r\n- Thời gian làm việc: Ca xoay (Ca 1: 8h00 – 15h00/ Ca 2: 15h00 – 22h00).\r\n* Làm việc tại cửa hàng FPT Gò Vấp', '- Nam cao 1m65 trở lên, tuổi từ 18 - 27.\r\n- Tốt nghiệp THPT trở lên.\r\n- Rành về kiến thức sản phẩm, am hiểu các hệ điều hành điện thoại, laptop là 1 lợi thế.\r\n- Yêu thích công nghệ, ham học hỏi, chịu khó tìm tòi cập nhật kiến thức công nghệ mới.\r\n- Ngoại hình ưa nhìn, giọng nói rõ ràng, dễ nghe.\r\n- Kỹ năng giao tiếp tốt, năng động, vui vẻ và thân thiện', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Vân', '(028) 38429906', 'Đang cập nhật', 'vietnam@et2cint.com', '2021-01-09', 'nhan-vien-ho-tr0-ki-thuan', 2, '2020-12-01 07:20:55', '2020-12-02 07:20:55'),
(11, 'tbl11\r\n', 11, 11, 'Nhân Viên Kế Toán Bán Hàng', 2, 1, 1, 2, 4, 6, 5, '202 Nguyễn Thị Minh Khai, Phường 6 , Quận 3 , Hồ Chí Minh, Việt Nam', 11, 'Tiếp nhận thông tin khách hàng, sản phẩm, dịch vụ bán ra từ tư vấn bán hàng.\r\nCập nhật thông tin khách hàng, sản phẩm bán ra lên hệ thống.\r\nThu tiền chính xác, xuất hóa đơn nhanh chóng cho khách hàng.\r\nQuản lý và bàn giao ngân quỷ trong ca làm việc..\r\nLập các báo cáo thu chi tại cửa hàng.', 'Nữ, tuổi từ 20 – 25.\r\nNgoại hình ưa nhìn.\r\nTốt nghiệp THPT trở lên.\r\nTin học văn phòng cơ b', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Bạch Yến', '(028) 38433906', 'Đang cập nhật', 'dung.ho@shdvietnam.com', '2021-02-25', 'nhan-vien-ke-toan-ban-hang', 2, '2020-12-01 07:35:12', '2020-12-02 07:35:12'),
(12, 'tbl12\r\n', 12, 12, 'Cán Bộ Kinh Doanh Dự Án', 1, 1, 7, 3, 6, 8, 6, '23/26 Đường Cộng Hòa, F13, Q.Tân Bình, Tp. Hồ Chí Minh', 0, 'PR, marketing, tìm kiếm và chăm sóc khách hàng, tư vấn sản phẩm, bán hàng, làm hồ sơ dự thầu... Bán hàng đạt doanh thu và lợi nhuận đề ra theo kế hoạch đảm bảo khả năng kinh doanh bền vững và ngày càng phát triển.', 'Có kiến thức về bán hàng, đấu thầu, tư vấn sản phẩm; kỹ năng đàm phán; yêu thích kinh doanh, hình thức khá, nhiệt tình, chịu khó, có nhiều mối quan hệ, không bị hạn chế thời gian.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', ' Ban Mai', '03256491519', 'Đang cập nhật', 'contact@ketoanhongtrang.vn', '2021-02-18', 'can-bo-kinh-doanh-du-an\r\n', 3, '2020-12-01 07:35:12', '2020-12-01 07:35:12'),
(13, 'tbl13\r\n', 13, 13, 'CHUYÊN VIÊN PR', 3, 2, 17, 2, 8, 7, 6, '1A10 Nguyễn Thái Sơn, P. 3, Q. Gò Vấp, Tp. Hồ Chí Minh (TPHCM)', 12, 'Viết bài PR về các dự án bất động sản như các thông cáo báo chí, bài viết, bài phát biểu, diễn văn của lãnh đạo và cập nhật thông tin của doanh nghiệp, sản phẩm trên các phương tiện thông tin đại chúng.', 'Ngoại hình ưa nhìn\r\nTốt nghiệp chuyên ngành Marketing, Báo chí, Kinh tế...\r\nCó ít nhất 1 năm kinh nghiệm tại vị trí tương đương\r\nThích làm việc trong môi trường năng động, tiếp xúc với nhiều chuyên gia, hay tham dự các event lớn hơn 1.000 người...', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Băng Băng', '(028) 38956774', 'Đang cập nhật', 'chungtran076@gmail.com', '2021-02-16', 'chuyen-vien-pr', 3, '2020-12-01 08:15:18', '2020-12-01 08:15:18'),
(14, 'tbl14\r\n', 14, 14, 'TRƯỞNG PHÒNG KINH DOANH BẤT ĐỘNG SẢN', 1, 1, 37, 4, 7, 6, 5, '1A10 Nguyễn Thái Sơn, P. 3, Q. Gò Vấp, Tp. Hồ Chí Minh', 2, 'Xây dựng kế hoạch kinh doanh của phòng – theo kế hoạch mục tiêu của phòng, Công ty đề ra.\r\nĐề xuất với GĐKD/GĐCN các giải pháp kinh doanh nhằm đạt doanh số.\r\nNghiên cứu thị trường, phát triển khách hàng theo kế hoạch Công ty đề ra.\r\nTheo dõi thúc đẩy từng nhân viên/nhóm kinh doanh thực hiện theo kế hoạch Công ty đặt ra', 'Tốt nghiệp Cao Đẳng trở lên (ưu tiên các ngành QTKD/Marketing/Kinh tế hoặc CNTT)\r\nCó ít nhất 02 năm kinh nghiệm tại vị trí tương đương\r\nCó tố chất kinh doanh, có khả năng tổ chức, lãnh đạo và tạo động lực làm việc cho nhân viên tốt', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: thoả thuận theo năng lực và kinh nghiệm\r\nThời gian: 8h30 -18h từ thứ 2 - sáng thứ 7\r\nĐược nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.\r\nTham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước\r\nNghỉ phép 12 ngày/năm\r\nĐược tổ chức tham quan, du lịch, teambuilding 1 năm/lần.\r\nNhiều cơ hội thăng tiến lên các vị trí cấp cao\r\n Các chế độ phúc lợi khác', 'Băng Tâm', '(028) 38956711', 'Đang cập nhật', 'hp@hongphat-land.com.vn', '2020-12-26', 'truong-phong-kinh-doanh-bat-dong-san', 3, '2020-12-02 08:15:18', '2020-12-04 08:15:18'),
(15, 'tbl15\r\n', 15, 15, ' Trưởng Phòng Phát Triển Kinh Doanh (Chuyển Phát Nhanh)', 1, 2, 36, 6, 11, 8, 9, '421/1 Sư Vạn Hạnh, P. 12, Q. 10, Tp. Hồ Chí Minh (TPHCM)', 3, 'Quản lý hoạt động Kinh doanh Chuyển phát nhanh: B2B, B2C, Khách hàng sàn giao dịch Thương mại điện tử, các Nền tảng bán hàng và Thanh toán trực tuyến;\r\nBáo giá, đàm phán, ký kết hợp đồng khách hàng;\r\nChịu trách nhiệm về doanh số và nhân sự của nhóm kinh doanh\r\nCùng Ban Lãnh đạo công ty xây dựng các chiến lược - kế hoạch kinh doanh;\r\nPhối hợp với phòng Marketing thực hiện các chương trình truyền thông. Tổ chức các sự kiện online và offline. Quảng bá, giới thiệu dịch vụ nhằm đẩy mạnh doanh số;\r\nPhối hợp với phòng Công nghệ thực hiện việc kết nối hệ thống Nhất Tín với các đối tác;\r\nĐưa ra các giải pháp kinh doanh kịp thời trong từng thời điểm và từng giai đoạn kinh doanh;\r\nXây dựng, đào tạo và phát triển đội ngũ nhân viên Kinh doanh;\r\nBáo cáo tình hình hoạt động, kết quả kinh doanh, tình hình nhân sự, đối thủ cạnh tranh… trực tiếp cho Giám đốc định kỳ tháng, quý, năm,…', 'Tốt nghiệp Cao đẳng trở lên chuyên ngành Quản trị kinh doanh, Kinh tế, Ngoại thương, Giao thông vận tải, Công nghệ Thông tin;\r\nTối thiểu 2 - 3 năm kinh nghiệm làm việc trong ngành Chuyển phát nhanh, có kinh nghiệm làm việc với các nền tảng bán hàng, thanh toán và thương mại điện tử;\r\nCó hiểu biết về Vận hành chuyển phát nhanh;\r\nCó kinh nghiệm quản lý nhóm, phát triển đội ngũ;\r\nKỹ năng giao tiếp, quản lý thời gian, đàm phán, chăm sóc khách hàng\r\nTrung thực, trách nhiệm, chịu được áp lực công việc cao.', 2, 'Phải tìm hiểu kĩ có VC', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bảo Anh', '0362433699', 'Đang cập nhật', 'hoainam2q@gmail.com', '2020-12-25', 'truong-phong-phat-trien-kinh-doanh', 0, '2020-12-01 08:29:15', '2020-12-01 08:29:15'),
(16, 'tbl16\r\n', 16, 16, 'Nhân Viên Kinh Doanh', 5, 1, 20, 1, 3, 1, 2, '200 Sư Vạn Hạnh, P. 12, Q. 10, Tp. Hồ Chí Minh (TPHCM)', 36, 'Quản lý hoạt động Kinh doanh Chuyển phát nhanh: B2B, B2C, Khách hàng sàn giao dịch Thương mại điện tử, các Nền tảng bán hàng và Thanh toán trực tuyến;\r\nBáo giá, đàm phán, ký kết hợp đồng khách hàng;\r\nChịu trách nhiệm về doanh số và nhân sự của nhóm kinh doanh\r\nCùng Ban Lãnh đạo công ty xây dựng các chiến lược - kế hoạch kinh doanh;', 'Tốt nghiệp Cao đẳng trở lên chuyên ngành Quản trị kinh doanh, Kinh tế, Ngoại thương, Giao thông vận tải, Công nghệ Thông tin;\r\nTối thiểu 2 - 3 năm kinh nghiệm làm việc trong ngành Chuyển phát nhanh, có kinh nghiệm làm việc với các nền tảng bán hàng, thanh toán và thương mại điện tử;\r\nCó hiểu biết về Vận hành chuyển phát nhanh;', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bảo Bình', '(028) 73001234', 'Đang cập nhật', 'info@muaban.net', '2020-12-25', 'nhan-vien-kinh-doanh', 3, '2020-12-01 08:29:15', '2020-12-02 08:29:15'),
(17, 'tbl17\r\n', 17, 17, 'Nhân Viên Kinh Doanh Tại Hồ Chí Minh', 2, 1, 7, 2, 5, 3, 5, '115 Nguyễn Huệ, P. Bến Nghé, Q.1, TPHCM', 24, 'Tìm kiếm và bán hàng cho các công trình, dự án xây dựng.\r\nĐo đạc và tư vấn cho khách hàng về các phương án cửa phù hợp với kiến trúc và trang trí nội thất.\r\nLiên hệ mật thiết với các công ty xây dựng, thiết kế, ban quản lý dự án.', 'Tốt nghiệp Trung cấp trở lên\r\nĐam mê kinh doanh, đam mê kiếm tiền, ưa thích đi lại, thích công việc tiếp xúc với khách hàng.\r\nKhông yêu cầu kinh nghiệm, chỉ cần có kỹ năng bán hàng cơ bản của nhân viên kinh doanh.\r\nNhanh nhẹn, hoạt bát, giao tiếp tốt;', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Ngân', '0838278388', 'Đang cập nhật', 'www.humidor-vietnam.com', '2020-12-31', 'nhan-vien-kinnh-doanh', 2, '2020-12-02 09:49:09', '2020-12-02 09:49:09'),
(18, 'tbl18\r\n', 18, 18, 'Chuyên Viên Cao Cấp Quản Lý Hiệu Suất', 1, 1, 19, 5, 10, 6, 6, 'Ho Chi Minh City, Vietnam', 52, 'Xây dựng Quy định/Chính sách KPIs bao gồm xây dựng bộ KPIs, năng suất chuẩn, cách giao cách tính kết quả thực hiện KPIs cho các vị trí kinh doanh tại Khối SME\r\nXây dựng mô hình/cách thức vận hành giao KPIs, phối hợp phân chia KPIs kế hoạch cho Vùng/Trung Tâm/CBBH\r\nTriển khai bộ KPIs, vận hành, đánh giá tính hiệu quả của bộ KPI, từ đó đề xuất sửa đổi phù hợp với tình hình thực tế', '1. Trình độ Học vấn:\r\nTrình độ Đại học trở lên, các ngành liên quan đến Tài chính – Ngân hàng, Kinh tế\r\n\r\n2. Kiến thức/ Chuyên môn Có Liên Quan:\r\n- Trình độ Tin học: Cấp độ C, Thành thạo tiếng Anh là 1 lợi thế\r\n- Am hiểu về sản phẩm, dịch vụ trong lĩnh vực ngân hàng là 1 lợi thế', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Ngọc', '0394441164', 'Đang cập nhật', 'huuhoadhcl@yahoo.com', '2020-12-31', 'nhan-vien-cao-cap-quan-ly-hieu-suat', 0, '2020-12-01 09:49:09', '2020-12-02 09:49:09'),
(19, 'tbl19\r\n', 19, 19, 'Nhân Viên Tư Vấn Kinh Doanh Bất Động Sản', 4, 1, 5, 4, 4, 6, 4, 'Tòa nhà KumHo, 39 Lê Duẩn, P.Bến Nghé, Q.1, TPHCM', 12, 'Tư vấn, giới thiệu sản phẩm của công ty tới khách hàng\r\nCung cấp, tư vấn đầy đủ thông tin sản phẩm\r\nChăm sóc khách hàng sau kí hợp đồng\r\nCập nhật thông tin thị trường bất động sản, nhanh chóng nắm bắt nhu cầu của khách hàng.\r\nChi tiết công việc sẽ trao đổi cụ thể tại buổi phỏng vấn', 'Tuổi từ 22 -> 35 - Nhiệt tình, ham học hỏi, có tinh thần cầu tiến\r\n- Tốt nghiệp từ Trung cấp trở lên\r\n- Thành thạo internet và các ứng dụng khác.\r\n- Có kinh nghiệm ngành Bất Động Sản là một lợi thế', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Như', '0598.1999.57  ', '1 Nguyễn Huệ Quận 1', 'hoa5789@gmail.com', '2021-01-19', 'nhan-vien-tu-van-kinh-doanh-bat-dong-san', 3, '2020-12-02 10:10:52', '2020-12-03 10:10:52'),
(20, 'tbl20\r\n', 20, 20, 'Sales Manager', 1, 1, 8, 7, 11, 8, 9, '2 Lê Duẩn, P.Bến Nghé, Q.1, TPHCM', 44, 'Xác định khách hàng mục tiêu phù hợp với sản phẩm và dịch vụ do công ty cung cấp\r\nThiết lập mối quan hệ với khách hàng tiềm năng thông qua các hình thức tiếp cận khác nhau\r\nLàm việc chặt chẽ với các nhóm Marketing, tư vấn để xác định và đề nghị giải pháp, dịch vụ phù hợp tới khách hang', 'Tốt nghiệp đại học, chuyên nghành kinh tế, marketing hoặc CNTT sẽ là lợi thế\r\nCó ít nhất 5 năm kinh nghiệm bán hang\r\nCó kinh nghiệm trong lĩnh vực CNTT, phần mềm hoặc dịch vụ cloud sẽ là lợi thế\r\nKhả năng tiếng Anh tốt với ít nhất kỹ năng đọc, nghe và nói', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Phượng', '0993.898.006 ', 'Đang cập nhật', 'fambichha@gmail.com', '2021-01-27', '', 0, '2020-12-01 10:10:52', '2020-12-01 10:10:52'),
(21, 'tbl21\r\n', 21, 21, 'Trưởng Phòng Phát Triển Kinh Doanh', 1, 2, 14, 5, 10, 7, 7, '8 Trần Hưng Đạo, P. 2, Q. 5, Tp. Hồ Chí Minh (TPHCM)', 45, 'Quản lý hoạt động Kinh doanh Chuyển phát nhanh: B2B, B2C, Khách hàng sàn giao dịch Thương mại điện tử, các Nền tảng bán hàng và Thanh toán trực tuyến;\r\nBáo giá, đàm phán, ký kết hợp đồng khách hàng;\r\nChịu trách nhiệm về doanh số và nhân sự của nhóm kinh doanh\r\nCùng Ban Lãnh đạo công ty xây dựng các chiến lược - kế hoạch kinh doanh;\r\nPhối hợp với phòng Marketing thực hiện các chương trình tr', 'Tốt nghiệp Cao đẳng trở lên chuyên ngành Quản trị kinh doanh, Kinh tế, Ngoại thương, Giao thông vận tải, Công nghệ Thông tin;\r\nTối thiểu 2 - 3 năm kinh nghiệm làm việc trong ngành Chuyển phát nhanh, có kinh nghiệm làm việc với các nền tảng bán hàng, thanh toán và thương mại điện tử;\r\nCó hiểu biết về Vận hành chuyển phát nhanh;\r\nCó kinh nghiệm quản lý nhóm, phát triển đội ngũ;', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng hiệu quả kinh doanh, KPI, lễ tết, đánh giá hài lòng của KH\r\n12 ngày nghép có lương/năm. Đầy đủ chế độ BH theo Luật Lao động\r\nThường xuyên tham gia các khóa đào tạo nâng cao nghiệp vụ, kỹ năng quản lý.', 'Bích Quân', '0599.399.226  ', 'Số 1 ,Đường Số 1, KCN Biên Hòa 1, Biên Hòa Đồng Nai', 'thuyduong231995@gmail.com', '2020-12-27', 'truong-phong-phat-trien-kinh-doanh', 1, '2020-12-02 10:25:12', '2020-12-02 10:25:13'),
(22, 'tbl22\r\n', 22, 22, 'Sales Manager Quản Lý Kinh Doanh', 1, 3, 38, 6, 8, 7, 7, 'D5 street, ward 25, Binh Thanh district, HCMC', 5, 'Bạn đang tìm một môi trường thân thiện, chuyên nghiệp & đáng tin cậy để gắn bó, cống hiến và phát triển lâu dài + gặt hái thành công? Hãy gửi CV cho chúng tôi.', '(Vietnamese only). Tuổi từ 28 – 45 tuổi\r\nTốt nghiệp Đại học (ưu tiên cho các chuyên ngành Kinh tế, quản trị kinh doanh, Xã hội nhân văn, Tài chính; và/hoặc đã kinh qua các khoá đào tạo về quản trị kinh doanh, bán hàng dự án, cũng như các kỹ năng khác bổ trợ ngành Sales.\r\nCó ít nhất 5 năm kinh nghiệm giỏi về bán hàng dự án/ bán hàng công nghệ/ kỹ thuật. (Ưu tiên cho thí sinh đã có kinh nghiệm bán hàng dự án IT/networking, hoặc đã bán hàng cho chuỗi khách sạn 5 sao).\r\nChắc chắn về các kỹ năng: xây dựng quan hệ khách hàng mới, giao tế & trình bày tốt. Khả năng thương thảo & đàm phán khôn ngoan.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Theo thành tích và chỉ tiêu, vượt chỉ tiêu và sự cống hiến tốt hiệu quả.\r\nCác liên hoan trong các Dịp Lễ Tết, và company trip mỗi năm\r\nChăm sóc sức khoẻ, hỗ trợ Mobile phone, ...', 'Bích Quyên', '0993.886.755 ', 'Đang cập nhật', 'tranxuanmai88@gmail.com', '2021-03-17', 'quan-li-kinh-doanh', 2, '2020-12-02 10:25:13', '2020-12-02 10:25:13'),
(23, 'tbl23\r\n', 23, 23, 'Phó Phòng Kinh Doanh Toàn Quốc', 1, 2, 9, 5, 8, 7, 6, '7 Vũ Tùng, P. 2, Q. Bình Thạnh, Tp. Hồ Chí Minh (TPHCM)', 22, 'Chịu trách nhiệm toàn bộ về hoạt động bán hàng Kênh ETC, phân phối sản phẩm, giữ ổn định và phát triển thị trường. Lập kế hoạch, triển khai, giám sát, kiểm tra, đánh giá, báo cáo về tình hình hoạt động kinh doanh của Kênh ETC\r\nXây dựng danh mục sản phẩm tiêu chuẩn, sản phẩm chiến lược.\r\nXây dựng danh mục đấu thầu, tham gia thầu hàng năm cụ thể và chi tiết theo danh mục sản phẩm của Công ty', 'Tốt nghiệp Dược sĩ đại học, Bác sỹ.\r\nKinh nghiệm: 02 - 03 năm trong lĩnh vực quản lý bán hàng kênh ETC\r\nNắm vững các quy định pháp lý trong việc bán hàng kênh ETC, quy trình phát triển kênh ETC, đấu thầu.\r\nAnh văn đọc, viết và giao tiếp tốt', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Bích San', '05993.999.30 ', '276  Trần Hưng Đạo', 'tranthingocnhu2909@gmail.com', '0000-00-00', 'pho-phong-kinh-toan-quoc', 3, '2020-12-01 01:36:21', '2020-12-02 10:36:21'),
(24, 'tbl24\r\n', 24, 24, 'Chuyên Viên Tư Vấn Du Học', 2, 1, 19, 3, 8, 6, 6, '1 Trần Quang Diệu, P. 14, Q. 3, Tp. Hồ Chí Minh (TPHCM)', 24, ' Tư vấn trực tiếp cho khách hàng về các chương trình du học\r\nTìm hiểu, mở rộng thị trường, tư vấn cho học sinh trực tiếp tại các trường học, sự kiện, tìm kiếm nguồn khách hàng online và offline\r\nTìm hiểu, cập nhật thông tin, chính sách Visa, quy trình xét visa du học - du lịch các nước.\r\nHỗ trợ khách hàng chuẩn bị hồ sơ du học.', 'Mức lương hấp dẫn kèm các khoản thưởng dựa trên năng lực (thu nhập trung bình từ 15tr - 20tr)\r\nTrợ cấp ăn trưa\r\nLương tháng 13 + thưởng linh động cho những nhân viên xuất sắc\r\nLàm việc trong môi trường quốc tế, năng động, nhiều cơ hội phát triển và thể hiện bản thân\r\nChế độ BHXH, BHYT, BHTN… theo quy định nhà nước\r\nCơ hội thăng tiến, du lịch nước ngoài thường xuyên', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thu nhập trung bình từ 15-20 triệu\r\nCơ hội thăng tiến, du lịch nước ngoài thường xuyên\r\nLàm việc trong môi trường quốc tế, năng động, nhiều cơ hội phát triển và thể hiện bản thân', 'Bích Thảo', '05993.999.73 ', '15 Nguyễn Huệ, P. Bến Nghé, Q.1, TPHCM', 'thanhdanpt700@gmail.com', '2020-12-28', 'chuyen-vien-tu-van-du-hoc', 3, '2020-12-03 10:50:51', '2020-12-03 10:50:51'),
(25, 'tbl25', 25, 25, '\r\nLogistics Executive', 4, 1, 14, 2, 5, 3, 5, 'Tòa nhà KumHo, 39 Lê Duẩn, P.Bến Nghé, Q.1, TPHCM', 25, '\r\nTìm chi phí đường hàng không / đường biển / chuyển phát nhanh và xử lý đặt chỗ với người giao nhận / hãng vận chuyển Phối hợp với các bộ phận khác để hoàn thiện hồ sơ vận chuyển theo yêu cầu của khách hàng. Luôn thông báo cho khách hàng ETD, ETA và đảm bảo rằng khách hàng nhận hàng an toàn. Theo dõi và giải quyết các vấn đề xảy ra trong quá trình vận chuyển. Thực hiện các yêu cầu từ khách hàng về hậu cần.', 'Tốt nghiệp đại học / cao đẳng - Tiếng Anh: nghe, nói, đọc, viết thành thạo. Kỹ năng xử lý Word, excel, outlook và lập hồ sơ. Tổ chức và lập kế hoạch công việc.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Bích Thoa', '0997.057.051  ', '26/11 Trần Văn Mười, ấp. Xuân Thới Đông 1, X. Xuân Thới Đông,', 'www.humidor-vietnam.com', '2021-01-21', 'logistics-executive', 3, '2020-12-02 10:50:51', '2020-12-03 10:50:51'),
(26, 'tbl26\r\n', 26, 26, 'Angular Developer (JavaScript, React)', 5, 1, 22, 1, 2, 2, 2, '10th Floor, Cevimetal Building, 69 Quang Trung Street, Hai Chau District, Da Nang City, Viet', 25, 'Làm việc trực tiếp với khách hàng Úc, EU để làm rõ các yêu cầu. Phát triển các phần tử giao diện người dùng để tích hợp với logic phía máy chủ. Giải quyết các vấn đề kỹ thuật. Hỗ trợ đồng đội giải quyết vấn đề', 'Có kinh nghiệm về Nginx hoặc Nodemon', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Bích Thu', '05993.999.58  ', 'Đang cập nhật', 'chuyenthuylien@gmail.com', '2020-12-26', 'angular-developer', 1, '2020-12-01 19:33:18', '2020-12-03 06:46:41'),
(27, 'tbl27\r\n', 27, 27, 'Nhân Viên Marketing (Thu Nhập Hấp Dẫn)', 3, 3, 9, 2, 4, 3, 4, '26/11 Trần Văn Mười, ấp. Xuân Thới Đông 1, X. Xuân Thới Đông,', 27, 'Lập kế hoạch quảng cáo sản phẩm, chiến lược đẩy mạnh doanh số, xây dựng hình ảnh thương hiệu trên thị trường\r\nTìm kiếm thị trường cho sản phẩm được phân công.\r\nHỗ trợ bộ phận bán hàng các tài liệu, thông tin liên quan đến sản phẩm bao gồm brochure, nghiên cứu lâm sàng, trình bày sản phẩm trên powerpoint, video clip....để thúc đẩy bán hàng.\r\nHuấn luyện sản phẩm cho nhân viên bán hàng.', 'Tốt nghiệp Cao đẳng trở lên, ưu tiên chuyên ngành Marketing hoặc các ngành liên quan\r\nỨng viên từ 24 – 28 tuổi\r\nKinh nghiệm làm việc ít nhất 2 năm trong lĩnh vực marketing, ưu tiên cho các ứng viên có kinh nghiệm về marketing các sản phẩm liên quan đến thẩm mỹ, làm đẹp và thiết bị y tế.\r\nThành thạo Microsoft Office (Word, Excel, PowerPoint)\r\nKỹ năng thiết kế Photoshop, Illustrator là một lợi thế', 0, 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Mức lương hấp dẫn\r\nCơ hội tiếp cận với các công nghệ thẩm mỹ hàng đầu thế giới, được đào tạo và công tác nước ngoài\r\nMôi trường làm việc chuyên nghiệp', 'Bích Thủy', '	0995.23.98.23  ', 'Đang cập nhật', 'doanvanphudhcl@gmail.com', '2021-01-21', 'nhan-vien-marketing', 0, '2020-12-01 11:04:16', '2020-12-02 11:04:16'),
(28, 'tbl28\r\n', 28, 28, '\r\nGiám Đốc Pháp Lý Dự Án', 1, 1, 8, 3, 7, 7, 6, 'Khu Công Nghiệp Tân Bình, Lô IV-18,Tây Thạnh, P. Tây Thạnh, Q. Tân Phú, Tp. Hồ Chí Minh (TPHCM)', 28, 'Phụ trách các hồ sơ pháp lý, thủ tục có liên quan đến các dự án đầu tư của Công ty từ lúc lập dự án cho đến khi hoàn công.\r\nTriển khai, thực hiện các công tác pháp lý dự án khi có chủ trương được duyệt của Ban lãnh đạo về kế hoạch triển khai dự án.\r\nLập báo cáo tham mưu cho Ban lãnh đạo về định hướng, kế hoạch, tiến độ và chi phí khi triển khai dự án mới.', 'Giới tính: Nam/Nữ\r\nTốt nghiệp Đại học các chuyên ngành Luật, Kinh tế, Xây dựng, Kiến trúc, …\r\nCó tối thiểu 03 năm kinh nghiệm tại vị trí tương đương, ưu tiên trong ngành Bất động sản.\r\nTiếng Anh giao tiếp tốt.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Bích Ty', '0993.679.776 ', 'Đang cập nhật', 'vankhoi29k@yahoo.com', '2020-12-30', 'giam-doc-phap-li-du-an', 2, '2020-12-02 11:18:02', '2020-12-02 11:18:02'),
(29, 'tbl29\r\n', 28, 28, 'Quản Lý Trình Dược Viên', 2, 3, 32, 3, 5, 6, 6, '166 Trần Quang Diệu, P. 14, Q. 3, Tp. Hồ Chí Minh (TPHCM)', 28, 'Quản lý và đào tạo nhóm kinh doanh khoản 5-6 bạn tại địa bàn phụ trách.\r\nDuy trì và mở rộng các mối quan hệ với khách hàng\r\nBáo cáo với cấp trên tình hình của bộ phận kinh doanh\r\nĐảm bảo sự phát triển kinh doanh về doanh số theo định hướng của công ty\r\nĐiều hành và chịu trách nhiệm trước Ban Giám Đốc về hoạt động kinh doanh cùa công ty\r\nThực hiện các nhiệm vụ khác liên quan đến hoạt động kinh doanh của công ty', 'Tốt nghiệp Đại Học Y/ Dược\r\nƯu tiên người có kinh nghiệm quản lý ngành sữa dinh dưỡng tại các bệnh viện, nhà thuốc, đại lý sữa.\r\nKhả năng giao tiếp tốt và có kiến thức về dinh dưỡng\r\nNhiệt tình, nhanh nhẹn, hoạt bát và có trách nhiệm với công việc', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương: 1.000 – 2.000 USD + Thưởng theo chính sách công ty\r\nChế độ lao động, BHXH đầy đủ\r\nMôi trường làm việc năng động, thân thiệ', ' Bích Vân', '0993.901.931  ', 'Đang cập nhật', 'phamha979090@gmail.com', '2021-02-02', 'quan-li-trinh-duoc-vien', 2, '2020-12-03 06:57:56', '2020-12-03 11:18:02'),
(30, 'tbl30\r\n', 30, 30, 'Sales Admin', 1, 2, 17, 2, 4, 2, 7, '49 Trần Hưng Đạo, P. Cầu Kho, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 0, 'Phối hợp với đơn vị giao nhận xử lý các vấn đề phát sinh trong quá trình giao hàng, theo dõi tỷ lệ trả hàng/tỷ lệ hoàn thành, cập nhật danh sách đơn hàng trả.\r\nTạo tài khoản affiliate hằng ngày, làm hợp đồng và thanh toán cho Affiliate hàng tháng\r\nTheo dõi, kiểm kê kho vật tư phụ trách. Đề xuất mua hàng khi tồn kho còn ít .\r\nLàm việc và thanh toán cho các supplier/partner hàng tháng', '1 năm kinh nghiệm admin/ sales admin\r\nKỹ năng giao tiếp tốt.\r\nKỹ năng quản lý thời gian, sắp xếp công việc.\r\nChịu được áp lực công việc', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Chương trình đào tạo khác nhau Các hoạt động, sự kiện xây dựng đội nhóm Môi trường làm việc năng động và năng động', 'Bội Linh', '0995.60.59.79  ', '302 Trần Hưng Đạo, P. Cầu Kho', 'www.muahangtragop.com', '2020-12-30', 'sale-admin', 3, '2020-12-01 06:57:56', '2020-12-03 11:24:51'),
(31, 'tbl31\r\n', 31, 31, 'Game UI/UX Lead', 3, 1, 20, 2, 3, 6, 5, '1901 Sai Gon Trade Center, 37 Tôn Đức Thắng, P . Bến Nghé, Q.', 2, 'Cung cấp các giải pháp UI / UX theo hướng sáng tạo và yêu cầu của dự án \r\nCung cấp hướng dẫn về UI / UX cho các thành viên trong nhóm của bạn', 'Có ít nhất 3 năm kinh nghiệm trong lĩnh vực sản xuất trò chơi điện tử hoặc kinh nghiệm liên quan \r\nNền tảng học thuật về Thiết kế, Nghệ thuật hoặc tương đương \r\nKhả năng giao tiếp tiếng Anh', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Cẩm Hạnh', '(028) 38389999', '37 Tôn Đức Thắng, P . Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 'www.vn100.com', '2020-12-25', 'game-ux-ui-lead', 2, '2020-12-01 07:35:12', '2020-12-02 07:59:52'),
(32, 'tbl32\r\n', 32, 32, 'Nhân Viên Giáo Vụ', 4, 1, 31, 8, 2, 2, 1, ' 245 Tôn Đức Thắng, P . Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 55, 'Giới thiệu và tư vấn cho phụ huynh học sinh về lựa chọn môi trường học tập\r\nXây dựng và duy trì mối quan hệ tốt với phụ huynh hiện tại và khách hàng tiềm năng\r\nHỗ trợ giáo viên các công việc liên quan đến hoạt động dạy và học\r\nThu nhận, lưu trữ, cập nhật hồ sơ học sinh\r\nGiám sát, chăm sóc học sinh trong và ngoài giờ học tại trường', 'Giao tiếp tốt, thành thạo tiếng Anh hoặc tiếng Hàn\r\nCó tinh thần trách nhiệm\r\nTuân thủ kỉ luật\r\nNăng động, chủ động, linh hoạt Hòa nhã, tận tình, chu đáo, yêu trẻ', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Cẩm Hiền', '0993.679.677  ', 'Đâng cập nhật', 'ngocbich94z@gmail.com', '2020-12-26', 'nhan-vien-giao-du', 2, '2020-12-02 11:38:11', '2020-12-01 19:33:18'),
(33, 'tbl33\r\n', 33, 33, '\r\nBusiness Analyst', 2, 1, 21, 4, 6, 7, 7, '2 Trần Ngọc Diện, P. Thảo Điền, Q. 2, Tp. Hồ Chí Minh (TPHCM)', 33, 'Nếu tất cả câu trả lời cho những điều trên là “Có” thì bạn hoàn toàn phù hợp với vị trí Chuyên viên phân tích kinh doanh mà Chợ Tốt Team đang tìm kiếm.\r\n', '\r\nBằng Cử nhân về Tài chính, Khoa học Dữ liệu hoặc các lĩnh vực liên quan khác và kinh nghiệm làm việc ít nhất 2 năm.\r\nTư duy phản biện tốt\r\n', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tiền lương cạnh tranh và thưởng theo doanh số, trợ cấp công tác phí\r\nĐược hưởng đầy đủ các chế độ BHXH, thưởng lễ, tết theo Luật Lao động\r\nCung cấp phương tiện làm việc, đồng phục, du lịch trong nước 1 lần/năm', 'Cẩm Hường', '0993.866.722  ', 'Đang cập nhật', 'ctyvietson@gmail.com', '2020-12-30', 'business-analyst', 3, '2020-12-01 11:38:11', '2020-12-02 11:38:11'),
(34, 'tbl34\r\n', 34, 34, '\r\nPhó Trưởng Khoa Ngoại Ngữ', 1, 2, 6, 2, 5, 6, 5, '88 Trần Ngọc Diện, P. Thảo Điền, Q. 2, Tp. Hồ Chí Minh (TPHCM)', 34, 'Mô tả công việc:\r\nĐiều hành và tham mưu cho Lãnh đạo Khoa về công tác tổ chức nhân sự và công việc chuyên môn của khoa.\r\nTrực tiếp theo dõi công tác đào tạo, kiểm định chất lượng, công tác tuyển sinh\r\nTrực tiếp xây dựng khung chương trình và hệ thống các bài giảng của khoa.', 'Tốt nghiệp Tiến sĩ chuyên ngành liên quan đến Ngữ học (Tiếng Anh)\r\nCó kinh nghiệm quản lý, giảng dạy.\r\n\r\n', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Quyền lợi:\r\nMức lương: theo thỏa thuận từ 20-30 triệu\r\nBảo hiểm: Hưởng đầy đủ chế độ đãi ngộ BHXH, BHTH, BHTN theo quy định của pháp luật', 'Cẩm Liên', '0995.537.533 ', '12 Tôn Đức Thắng, P . Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 'ngotuvien@gmail.com', '2021-02-24', 'ngotuvien@gmail.com', 0, NULL, NULL),
(35, 'tbl35\r\n', 35, 35, '\r\nNhân Viên Thiết Kế Kết Cấu Nhà Gỗ', 3, 3, 24, 2, 6, 6, 4, '8/1-8/3 Nguyễn Huy Tưởng, P. 6, Q. Bình Thạnh, Tp. Hồ Chí Minh (TPHCM)', 35, 'Nhập liệu, xử lý các thông tin và yêu cầu thiết kế trên soft chuyên ngành bằng tiếng Nhật\r\nGia công, xuất bản vẽ thiết bị, bảng vẽ thi công .. cho kiến trúc nhà gỗ kiểu Nhật \r\nCác công việc liên quan được phân công của cấp trên\r\nChi tiết sẽ trao đổi trong buổi phỏng vấn.', 'Chuyên môn:\r\nKhối kỹ thuật chuyên ngành: xây dựng, kỹ thuật\r\nHoặc chuyên ngành Nhật Ngữ (yêu thích các công việc liên quan đến tiếng Nhật), tối thiểu N4~', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương thưởng thỏa đáng\r\nCơ hội đào tạo tại Nhật\r\nCơ hội thăng tiến rộng mở', ' Cẩm Linh', '05993.999.80', '3 Nguyễn Huy Tưởng, P. 6, Q. Bình Thạnh, Tp. Hồ Chí Minh (TPHCM)', 'thoang3nam@yahoo.com', '2020-12-26', 'nhan-vien-thiet-ke-ket-cau-nha-go', 2, '2020-12-01 11:45:29', '2020-12-02 06:46:41'),
(36, 'tbl36\r\n', 36, 36, 'React JS Developer', 1, 1, 22, 2, 4, 6, 6, '48/7 ấp 3, X. Nhị Bình, H. Hóc Môn, Tp. Hồ Chí Minh (TPHCM)', 36, 'Nhập liệu, xử lý các thông tin và yêu cầu thiết kế trên soft chuyên ngành bằng tiếng Nhật Gia công, xuất bản vẽ thiết bị, bảng vẽ thi công .. cho kiến trúc nhà gỗ kiểu Nhật  Các công việc liên quan được phân công của cấp trên Chi tiết sẽ trao đổi trong buổi phỏng vấn.', 'Có ít nhất 3 năm kinh nghiệm trong ReactJS, Redux \r\nCó kiến ​​thức hoặc kinh nghiệm tốt về các công nghệ front-end, chẳng hạn như HTML5 và CSS3 \r\nCó kinh nghiệm kiểm soát nguồn GIT, quy trình Agile \r\nKiến thức về kiến ​​trúc, thuật toán\r\n', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương thưởng thỏa đáng\r\nCơ hội đào tạo tại Nhật\r\nCơ hội thăng tiến rộng mở', 'Cẩm Ly', '0997.093.393 ', 'Lầu 15, Phòng 1504, 2A-4A Tôn Đức Thắng, P. Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 'khanhnguyen@hanwhacorp.com.vn', '2021-01-13', 'react-js-developer', 3, '2020-12-02 12:05:51', '2020-12-01 12:05:51'),
(37, 'tbl37\r\n', 37, 37, 'Giáo Viên Tiếng Anh Giảng Dạy Bậc Mầm Non', 1, 2, 19, 2, 5, 6, 5, '245 Tôn Đức Thắng, P. Bến Nghé, Q. 1\r\n\r\n', 37, 'Giảng dạy Tiếng Anh Mầm Non theo chương trình của Nhà Trường\r\nThực hiện các yêu cầu xây dựng chuyên đề của bộ môn theo sự phân công của Ban Giám Hiệu\r\nĐề xuất ý tưởng & tham gia tổ chức sự kiện, CLB do nhà trường tổ chức để bổ trợ phát triển bộ môn Tiếng Anh bậc Mầm Non', 'Tốt nghiệp Cao Đẳng/Đại học chuyên ngành Sư phạm Tiếng Anh, đối với Tiếng Anh không phải chuyên ngành giảng dạy cần có chứng chỉ sư phạm\r\nNgoại hình thuyết phục, phát âm chuẩn, giọng nói truyền cảm\r\nYêu thích trẻ con, am hiểu tâm lý lứa tuổi Chủ động, chịu được áp lực cao trong công việc', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương thưởng thỏa đáng\r\nCơ hội đào tạo tại Nhật\r\nCơ hội thăng tiến rộng mở', 'Cẩm Nhi', '0598.199.774 ', 'Đang cập nhật', 'cttrongtam@gmail.com', '2021-02-24', 'hcm-giao-vien-tieng-anh-giang-day-bac-mam-non', 3, '2020-12-01 07:11:12', '2020-12-04 08:57:56');
INSERT INTO `job` (`id`, `job_code`, `company_id`, `employer_id`, `name_job`, `type_job_id`, `amount`, `career_id`, `grade_id`, `salary_id`, `degree_id`, `experience_id`, `address`, `city`, `description`, `job_requirements`, `sex_requirements`, `profile_request`, `benefits`, `name_contact`, `phone_contact`, `address_contact`, `email_contact`, `deadline`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(38, 'tbl38\r\n', 38, 38, 'Nhân Viên Marketing – Giao Tiếp Tiếng Hàn', 1, 2, 19, 2, 5, 5, 5, '2 Điện Biên Phủ, P. 15, Q. Bình Thạnh, Tp. Hồ Chí Minh', 38, 'Thu thập các báo giá và so sánh các nhà cung cấp khi có yêu cầu và cần thiết.\r\nLàm việc với đối tác để đặt hàng tài liệu catalogue, brochure, standee,…\r\nLàm việc với nhà thiết kế để tạo poster / banner cho các chương trình khuyến mãi\r\nViết nội dung và đăng Facebook khi được yêu cầu và cần thiết\r\nĐề xuất và thảo luận với đồng nghiệp và sếp về các chiến lược marketing.\r\nĐi gặp khách hàng với giám đốc để phiên dịch.', 'Biết tiếng Anh càng tốt. Có ít nhất 1-2 năm kinh nghiệm làm việc tại vị trí tương đương\r\nKỹ năng giao tiếp & làm việc nhóm tốt\r\nSử dụng tốt nhiều chương trình và ứng dụng máy tính\r\nKhả năng làm việc dưới áp lực cao', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', ' lương: từ 16- 18 triệu\r\nHỗ trợ phí công tác.\r\n Hỗ trợ các chế độ bảo hiểm Y tế & BHXH theo luật\r\nNghỉ phép có lương (theo Luật)', 'Cẩm Nhung', '0254.369.6644', 'Đang cập nhật', 'dieuqt81@gmail.com', '2021-02-18', 'nhan-vien-marketing-giao-tiep-tieng-han', 3, '2020-12-01 19:33:18', '2020-12-03 06:46:41'),
(39, 'tbl39\r\n', 39, 39, '\r\nChuyên Viên Đảm Bảo Chất Lượng', 2, 3, 19, 2, 2, 2, 1, '223 Điện Biên Phủ, P. 15, Q. Bình Thạnh, Tp. Hồ Chí Minh', 39, 'Phối hợp với các đơn vị/bộ phận hỗ trợ để thực hiện hỗ trợ công tác Tự đánh giá và Kiểm định chất lương cấp Trường, cấp CTĐT;\r\nTham gia hoạt động đánh giá tư vấn/ đánh gia chính thức cấp trường hoặc tại các khoa trọng điểm theo lọ trình;\r\nTham gia tổ chức các buổi tập huấn/ hội thảo về các nội dung để đáp ứng theo yêu cầu công tác đảm bảo chất lượng;\r\nCập nhật và nghiên cứu văn bản pháp quy, tài liệu liên quan đến công tác đảm bảo chất lượng;\r\nThực hiện các công việc đột xuất khác theo yêu cầu của lãnh đạp phòng.', 'Trình độ Đại học trở lên;\r\nChuyên ngành: Tiếng Anh, Quản trị kinh doanh, Đo lường và đánh gia trong giáo dục, Quản lý giáo dục, QUản trị chất lượng, Khảo sát xã hội học,Ngữ học, ...\r\nNgoại ngữ: tiếng Anh (ưu tiên IELTS 6.5 trở lên), biết thêm tiếng Pháp là một ưu tiên;\r\nTrình độ vi tính văn phòng căn bản;', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng theo năng lực và được đào tạo, cơ hội thăng tiến cao\r\nCó chế độ công tác phí theo quy định của nhà trường\r\nHưởng đầy đủ các quyền lợi theo quy định theo Bộ luật lao động (BHXH, BHYT, BHTN)', ' Cam Thảo', '0258888996', 'Đang cập nhật', 'service@dmc.vn', '2021-02-01', 'chuyen-vien-dam-bao-chat-luong', 2, '2020-12-01 19:33:18', '2020-12-03 07:11:12'),
(40, 'tbl40\r\n', 40, 40, 'Giảng Viên Chuyên Ngành Thiết Kế Đồ Họa', 1, 2, 19, 2, 5, 6, 4, 'Số 12, Đường 41, P. 6, Q. 4, Tp. Hồ Chí Minh ', 39, 'Xây dựng đề kiểm tra, đề thi, ngân hàng câu hỏi\r\nCoi thi, chấm thi theo qui định\r\nQuản lý lớp học theo qui định của nhà trường.\r\nHỗ trợ, chăm sóc, giúp đỡ sinh viên học tốt các môn chuyên ngành Thiết kế đồ họa\r\nTham gia đầy đủ các buổi họp bộ môn, các buổi hội thảo chuyên đề và các hoạt động ngoại khóa liên quan đến giảng viên.\r\nThực hiện các công việc chuyên môn khác theo phân công của Trường.', 'Bằng cấp/Kinh nghiệm cần thiết:\r\nTốt nghiệp Thạc sĩ trở lên chuyên ngành Thiết kế đồ họa hoặc các chuyên ngành khác có liên quan.\r\n***Phẩm chất/Năng lực cần thiết:\r\nCó khả năng dẫn dắt và kiến tạo môi trường học tập năng động.\r\nCó khả năng truyền lửa tạo động lực cho SV học tập tốt.\r\nNhiệt tình, năng động, yêu thích các hoạt động xã hội, tập thể. Giao tiếp tốt.\r\nTận tâm, yêu nghề.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức thu nhập hấp dẫn\r\nCơ hội tham gia các hoạt động đào tạo nâng cao trình độ\r\nMôi trường làm việc năng động, chuyên nghiệp', 'Cẩm Thúy', '0993.679.668 ', 'Đang cập nhật', 'satraser@hcm.fpt.vn', '2021-02-18', 'giang-vien-chuyen-nganh-thiet-ke-do-hoa', 1, '2020-12-01 06:57:56', '2020-12-01 19:33:18'),
(41, 'tbl41\r\n', 41, 41, 'Chuyên Viên Chăm Sóc Khách Hàng /customer Care Specialist', 3, 3, 1, 1, 2, 2, 2, 'Số 12, Đường 41, P. 6, Q. 4, Tp. Hồ Chí Minh (TPHCM)', 52, '1.Thành thạo các tính năng và cách sử dụng live streaming, hiểu được nhu cầu và tâm lý của người dùng VIP;\r\n2. Chịu trách nhiệm thiết lập liên lạc với người dùng VIP, thu thập, kết hợp phân tích và quản lý thông tin người dùng;\r\n3. Phân biệt các dịch vụ cho người dùng VIP, giải đáp thắc mắc và duy trì giao tiếp tốt với người dùng;\r\n4. Tiếp tục theo dõi tình trạng của người dùng VIP hàng ngày, đồng thời đưa ra các chiến lược để duy trì và nâng cao hoạt động của người dùng, đồng thời hướng dẫn nạp tiền;\r\n5. Phối hợp và phân tích các hoạt động hiệu quả khác nhau phù hợp với các chính sách / kế hoạch của nhóm vận hành, đồng thời giúp nhóm vận hành thu thập các câu hỏi và phản hồi từ người dùng VIP.', 'Độ tuổi dưới 26 tuổi- chỉ tuyển nữ\r\n1. Trình độ cử nhân trở lên, cơ sở tại Hồ Chí Minh;\r\n2. Ưu tiên ngoại hình, tính tình tốt, có kinh nghiệm bán hàng;\r\n3. Thích lĩnh vực internet, và có thể nhanh chóng thích ứng với lĩnh vực live streaming;\r\n4. Có kỹ năng giao tiếp tốt;\r\n5. Chịu được áp lực công việc, có khả năng ứng phó với sự cố, đưa ra các giải pháp kịp thời và hợp lý.', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: Tùy theo năng lực (15tr- 20tr)', 'Cẩm Tú', '(028) 39415013', '18 Tây Thạnh, P. Tây Thạnh, Q. Tân Phú, Tp. Hồ Chí Minh (TPHCM)', 'chanhrvice@tanimex.com.vn', '2021-01-14', 'chuyen-vien-cham-soc-khach-hang', 0, '2020-12-03 06:57:56', '2020-12-03 07:11:12'),
(42, 'tbl42\r\n', 42, 42, 'Nhân Viên Kho', 1, 1, 34, 2, 3, 4, 1, '149 Trần Hưng Đạo, P. Cầu Kho, Q. 1, Tp. Hồ Chí Minh (TPHCM)\r\n\r\n', 42, 'Nhân viên kho.\r\nGiờ làm việc từ Thứ Hai tới Thứ Bảy, 1 tháng được nghỉ 4 ngày (48 tiếng/ tuần).\r\nĐịa chỉ làm việc: 44 Nguyễn Văn Lạc, Phường 19, quận Bình Thạnh, TPHCM.\r\nThời gian : 8h-17h', ' Bạn là người CÓ TRÁCH NHIỆM, trung thực & luôn giữ lời hứa.\r\nBạn là người HOÀN THÀNH CÔNG VIỆC: bạn không ngại làm thêm việc, kể cả những việc nằm ngoài Bảng mô tả công việc của mình để hoàn thành nhiệm vuh được giao.\r\nBạn là người CÓ ĐAM MÊ, LUÔN MUỐN HỌC HỎI và CỞI MỞ với những phản hồi thẳng thắn về hiệu suất công việc của bạn và luôn tìm hướng để phát triển.', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương 7- 8 triệu/tháng\r\nLương tháng 13, hưởng đầy đủ các chế độ theo quy định: BHXH, BHYT...\r\nLàm việc trong môi trường trẻ trung, năng động', 'Cẩm Vân', '0993.152.039  ', 'Đang cập nhật', 'ktkthuong87@gmail.com', '2021-02-18', 'nhan-vien-kho', 2, '2020-12-01 06:57:56', '2020-12-03 06:46:41'),
(43, 'tbl43\r\n', 43, 43, '\r\nGiáo Viên Tiếng Anh', 1, 1, 19, 1, 5, 7, 4, '41 Trần Hưng Đạo, P. Cầu Kho, Q. 1, Tp. Hồ Chí Minh (TPHCM)\r\n\r\n', 42, 'Giảng dạy Anh Văn thiếu nhi và các trình độ khác.\r\nĐảm bảo chất lượng giảng dạy và quản lý lớp tốt.\r\nThực hiện công tác theo sự phân công của Ban Giám Đốc Trung Tâm.', 'Mức lương: từ 104.000 đ/1 giờ/ 60 phút đến 140.000 đồng/ 1 giờ/ 60 phút\r\n-ốt nghiệp Đại học hoặc Cao đẳng chuyên ngành Tiếng Anh. Tuổi: từ 20 đến 35 tuổi. Ưu tiên người có Chứng chỉ B1 hoặc B2 và kinh nghiệm giảng dạy.\r\nCó kỹ năng giảng dạy, năng động và nắm bắt được tâm lý của học sinh. Có khả năng tạo được hứng thú trong lớp học, truyền được cảm hứng cho học sinh.\r\nYêu thích công việc giảng dạy, có mong muốn làm việc lâu dài. Có tinh thần trách nhiệm, nhiệt tình trong công việc.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Hưởng bảo hiểm y tế và bảo hiểm xã hội theo luật Việt Nam\r\nThưởng ngày lễ tết theo quy định chung của công ty\r\nCơ hội phát triển nghề nghiệ', 'Cẩm Yến', '0996.239.858 ', 'Đang cập nhật', 'hongngoc10041991@gmail.com', '2021-02-16', 'giao-vien-tieng-anh', 0, '2020-12-01 19:33:18', '2020-12-02 06:46:41'),
(44, 'tbl44\r\n', 44, 44, 'Nhân Viên Đảm Bảo Chất Lượng/ QA Systems', 1, 1, 21, 2, 6, 6, 4, '1901 Sai Gon Trade Center, 37 Tôn Đức Thắng, P . Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 44, 'a. Trách nhiệm:\r\n- Chịu trách nhiệm trước trưởng Phòng Đảm bảo chất lượng về tất cả các hoạt động liên quan hệ thống tài liệu hồ sơ GMP.\r\n- Đảm bảo hoạt động của các phòng ban liên quan trong hệ thống quản lý chất lượng tuân thủ quy định của hệ thống quản lý ISO/GMP.\r\n- Quản lý, ban hành tài liệu- hồ sơ của phòng Đảm bảo chất lượng và các tài liệu của hệ thống.\r\n- Có trách nhiệm hoàn thành những yêu cầu công việc đã mô tả trong bản mô tả công việc.\r\nb. Quyền hạn:\r\n- Điều động, phân công công việc cho nhân viên cấp dưới.\r\n- Có quyền đề nghị soạn thảo tài liệu, quy trình hướng dẫn để hệ thống GMP hoạt động hoàn thiện hơn.', 'a. Trình độ: Tốt nghiệp Cao đẳng trở lên, được đào tạo về GMP.\r\nb. Năng lực:\r\n- Có kiến thức liên quan đến chất lượng và sản xuất.\r\n- Có khả năng soạn thảo tài liệu.\r\n- Có kinh nghiệm làm việc theo quy trình, hệ thống\r\n- Có khả năng điều hành và quản lý.\r\n- Có kỹ năng sắp xếp, lưu trữ hồ sơ, tài liệu.\r\n- Tiếng Anh nói, viết tốt (bắt buộc)\r\nc. Kinh nghiệm: Tối thiểu 1 - 2 năm kinh nghiệm làm việc ở vị trí tương đương', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương phù hợp với năng lực\r\nCác chế độ phúc lợi xã hội như: BHYT, BHXH, BH thất nghiệp theo quy định\r\nChế độ đào tạo nâng cao nghiệp vụ và có cơ hội thăng tiến trong nghề nghiệp', 'Cát Cát', '0598.1999.28 ', 'Đang cập nhật', 'nhudonghf@gmail.com', '2021-01-20', 'nhan-vien-dam-bao-chat-luong-qa-systems', 1, '2020-12-01 19:33:18', '2020-12-01 19:33:18'),
(45, 'tbl45\r\n', 45, 45, 'Kinh Doanh Kỹ Thuật/ Kỹ Sư Bán Hàng (Sales Technical), Lương Cao', 3, 3, 9, 2, 4, 7, 6, 'Số 2, Đường 41, P. 6, Q. 4, Tp. Hồ Chí Minh (TPHCM)', 46, 'Khai thác thị trường giải pháp công nghệ sản xuất thông minh\r\nĐi đến các nhà máy sản xuất công nghiệp lớn; các dự án nhà máy đang được thiết kế, triển khai xây dựng để chào bán giải pháp quản lý và vận hành sản xuất (MES/MOM)\r\nKhảo sát hệ thống sản xuất của khách hàng để tư vấn, triển khai ứng dụng giải pháp\r\nChăm sóc khách hàng trước, trong và sau bán hàng\r\nThực hiện các yêu cầu công việc liên quan đến kinh doanh và tiếp cận thị trường theo chỉ đạo của Trưởng phòng / Giám đốc', 'Có khả năng tự học tài liệu kỹ thuật công nghệ bằng tiếng Anh\r\nYêu thích kinh doanh, quan tâm và hứng thú với công nghệ 4.0 (nhà máy thông minh)\r\nTự tin, năng động, nhanh nhẹn, hoạt bát trong giao tiếp, có khả năng trình bày thuyết phục và chăm sóc khách hàng tốt\r\nSẵn lòng đi công tác trong và ngoài nước', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương từ 15 - 20 triệu, lương điều chỉnh hàng năm theo khả năng thực hiện công việc\r\nThưởng % theo giá trị đơn hàng\r\nĐược trang bị laptop workstation, phụ cấp phí: điện thoại, công tác, gặp gỡ khách hàng', 'Cát Linh', '0993.95.97.87  ', 'Đang cập nhật', 'tandfcorp@gmail.com', '2021-01-04', 'kinh-doanh-ky-thuat-ky-su-ban-hang-sales-technical-luong-cao', 0, '2020-12-01 19:33:18', '2020-12-01 19:33:18'),
(46, 'tbl46\r\n', 46, 46, 'C/C++ Engineer', 1, 2, 21, 2, 5, 6, 5, '119 Trương Định, P. 7, Q. 3, Tp. Hồ Chí Minh (TPHCM)', 47, 'Viết mã rõ ràng, con người có thể đọc được với các bài kiểm tra đơn vị \r\n Phát triển mã chất lượng cao và duy trì mã nguồn phần mềm được viết bằng C / C ++, sử dụng OOP, STL \r\nPhân tích và sửa lỗi phần mềm bằng cách sử dụng các công cụ kiểm tra mã và thiết bị kiểm tra \r\nTạo và duy trì tài liệu phần mềm', 'Khả năng cộng tác hiệu quả với nhiều người trong các lĩnh vực kinh doanh và kỹ thuật\r\n C / C ++ Ninja, biết và hiệu quả công cụ và gỡ lỗi mã cấp thấp.\r\n Mẫu thiết kế thành thạo: biết cách viết mã SOLID, biết ưu và nhược điểm của các mẫu thiết kế và có thể thực hiện các cân bằng phù hợp \r\n Nền tảng Toán học vững chắc', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: Tùy theo năng lực (15tr- 20tr)', 'Cát Ly', '0993.52.73.79', 'Đang cập nhật', 'ptxmducnhung@gmail.com', '2021-01-14', 'c-c-plus-plus-engineer', 3, '2020-12-01 06:57:56', '2020-12-04 05:54:55'),
(47, 'tbl47\r\n', 47, 47, 'Sales Manager', 1, 1, 30, 6, 12, 8, 9, '29 Lê Duẩn, P. Bến Nghé, Q. 1', 50, 'Quản lý đội ngũ bán hàng và hoạt động như một bộ phận hỗ trợ “tại chỗ” và báo cáo trực tiếp với Ban Giám đốc, tạo và thực hiện các chiến lược bán hàng để tăng lượng phân phối, bằng cách đạt được mức tăng trưởng về số lượng và hiệu quả.\r\n', 'Có kiến ​​thức tốt về bia thủ công và ngành của nó. \r\n3 năm kinh nghiệm ở các cấp quản lý. \r\nĐộng lực và sự tích cực để bán hàng \r\nKỹ năng tìm kiếm khách hàng tiềm năng và kỹ năng đàm phán\r\n', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: Tùy theo năng lực (15tr- 20tr)', 'Cát Tiên', '0995.242.898 ', 'Đang cập nhật', 'hahakinhdoanh@et2cint.com', '2021-01-18', 'sales-manager', 1, '2020-12-01 07:11:12', '2020-12-01 19:33:18'),
(48, 'tbl48\r\n', 48, 48, 'Chuyên Viên Kiểm Soát Thị Trường (Sales Audit)', 1, 2, 26, 3, 9, 7, 7, 'Số 60 Nguyễn Đình Chiểu, P. Đăk, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 22, 'Với nhiệm vụ chi tiết như dưới đây:\r\n1/ Xây dựng kế hoạch và chương trình kiểm soát chi tiết theo Kế hoạch định hướng và mục tiêu Quản lý giao; Kiểm soát các hoạt động ngoài thị trường thuộc hệ thống phân phối của công ty và đơn vị thành viên\r\n2/ Kiểm tra thông tin khách hàng, đơn hàng, tuyến bán hàng trên thực địa\r\n3/ Kiểm toán thường xuyên, định kỳ, đột xuất theo yêu cầu sự tuân thủ công việc của hệ thống bán hàng: NVBH, PG', ' Tối thiểu 02 năm kinh nghiệm tại vị trí kiểm soát thị trường, hoặc giám sát bán hàng\r\n- Tốt nghiệp cao đẳng trở lên, chuyên ngành quản trị kinh doanh, kiểm toán và các ngành liên quan\r\n- Có kinh nghiệm liên quan đến quản trị thị trường và tư duy xây dựng hệ thống phân phối\r\n- Am hiểu về bán hàng, có kỹ năng thiết lập và quản lý số liệu theo yêu cầu\r\n- Có kiến thức về hệ thống phân phối ngành hàng tiêu dùng.', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng cuối năm cao\r\nBảo hiểm cấp quản lý\r\nMáy tính xách tay', 'Chi Mai', '05993.999.42  ', 'Đang cập nhật', 'tranxuanmai88@gmail.com.ec', '2021-02-24', 'chuyen-vien-kiem-soat-thi-truong-sales-audit', 2, '2020-12-01 19:33:18', '2020-12-03 06:46:41'),
(49, 'tbl49\r\n', 49, 49, '\r\nNhân Viên Digital Marketing', 1, 2, 3, 1, 2, 2, 2, '199 Trần Quang Diệu, P. 14, Q. 3, Tp. Hồ Chí Minh (TPHCM)', 1, 'Quản lý các trang mạng xã hội của công ty\r\n- Xây dựng, quản lý nội dung (bao gồm viết nội dung, trình bày nội dung, ý tưởng về hình ảnh) trên Fanpage, Website.\r\n- Lên kế hoạch content chi tiết cho Fanpages của công ty\r\n- Lập kế hoạch, triển khai và theo dõi quảng cáo sản phẩm, dịch vụ của Công ty trên các kênh Online: Google, Facebook, Zalo, Linkedin,…', 'Giới tính: Nam/Nữ.\r\n- Số lượng: 02 người.\r\n- Tốt nghiệp đại học chính quy trở lên, chuyên ngành Marketing\r\n- Có kiến thức Marketing bài bản. Có kinh nghiệm xây dựng chiến lược marketing (branding, sản phẩm, truyền thông, Digital...)\r\n- Tiếng Anh giao tiếp tốt.', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', ' Mức lương: Chế độ lương, thưởng hấp dẫn (Mức lương theo thỏa thuận).\r\n- Môi trường làm việc năng động, thúc đẩy phát triển nghề nghiệp, khả năng thăng tiến cao.\r\n- Thưởng lễ, thưởng hoàn thành KPI, tết, sinh nhật, lương tháng 13, phép năm, hoa hồng, thưởng sáng kiến, thưởng đột xuất…\r\n- Tembuiding, du lịch, tất niên, kỷ niệm ngày thành lập, sinh nhật nhân viên hằng tháng.\r\n- Được hưởng các chế độ BHXH, BHYT, BHTN.', 'Dã Lan', 'Dã Lan', 'Đang cập nhật', 'co_be_ko_tim@yahoo.com.vn', '2021-01-22', 'nhan-vien-digital-marketing', 3, '2020-12-01 19:33:18', '2020-12-01 19:33:18'),
(50, 'tbl50\r\n', 50, 50, 'Nhân Viên Content Marketing', 4, 2, 17, 3, 6, 6, 4, '99 Trần Ngọc Diện, P. Thảo Điền, Q. 2, Tp. Hồ Chí Minh (TPHCM)', 10, 'Caryophy là thương hiệu mỹ phẩm Hàn Quốc có mặt tại Việt Nam từ năm 2017. Hiện tại đã có mặt trên tất cả các chuỗi cửa hàng làm đẹp uy tín khắp cả nước.\r\nCaryophy cũng từng nhận được sự review của các KOLs lớn như : Hari Won, Thủy Tiên, Mi Du, Tuấn Trần …\r\n\r\nCaryophy mang tầm nhìn trở thành thương hiệu dẫn đầu cho những xu hướng chăm sóc da và thị trường làm đẹp tại Việt Nam với những sản phẩm uy tín, chất lượng và đặc biệt an toàn cho làn da.\r\nHiện nay, chúng tôi đang tìm kiếm các tài năng marketing. Đến với Caryophy, chúng tôi cam kết bạn sẽ nhận được những quyền lợi như sau:', 'Có ít nhất 1 năm kinh nghiệm content kênh social, ưu tiên có kinh nghiệm trong lĩnh vực mỹ phẩm, làm đẹp\r\nĐam mê sáng tạo và viết lách,...\r\nLàm đúng trách nhiệm, sáng tạo và cầu tiến trong công việc', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương tháng 13 + Thưởng tết + Thưởng KPI\r\nCơ hội được thăng tiến và nâng cao nghiệp vụ chuyên môn\r\nMôi trường trẻ trung năng động', 'Dạ Lan', '0995.242.080  ', 'Đang cập nhật', 'huonglien001@gmail.com', '2021-02-18', 'nhan-vien-content-marketing', 1, '2020-12-01 06:57:56', '2020-12-01 19:33:18'),
(51, 'tbl51\r\n', 51, 51, 'Nhân Viên Content SEO', 2, 3, 17, 2, 3, 1, 2, '1A10 Nguyễn Thái Sơn, P. 3, Q. Gò Vấp, Tp. Hồ Chí Minh (TPHCM)', 11, '- Phát triển nội dung các bài chuẩn SEO lên 2 site chính VietnamBiz và Việt Nam Mới;\r\n- Nghiên cứu và đưa ra ý tưởng nội dung;\r\n- Viết nội dung theo kế hoạch của Công ty;\r\n- Biên tập lại các bài viết cũ;\r\n- Nghiên cứu từ khóa đơn giản và sử dụng các nguyên tắc SEO để tăng lưu lượng truy cập website.', 'Có kiến thức cơ bản về SEO;\r\n- Có kinh nghiệm viết bài chuẩn SEO > 1 năm;\r\n- Có trình độ tiếng anh tốt, có thể dịch được các bài viết nước ngoài tốt.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Được đào tạo và phát triển kỹ năng nghề nghiệp trong suốt thời gian làm việc\r\nDu lịch, nghỉ mát 02 lần/năm\r\nLàm việc trong môi trường trẻ trung, hiện đại, ở các vị trí trung tâm bậc nhất ở HCM và HN', 'Dạ Nguyệt', '0995.425.000  ', 'Đang cập nhật', 'mozartnht@gmail.com', '2021-01-31', 'nhan-vien-content-seo', 0, '2020-12-01 07:11:12', '2020-12-02 06:46:41'),
(52, 'tbl52\r\n', 52, 52, 'Chuyên Viên Marketing', 1, 1, 28, 2, 6, 3, 6, '85/99 Khu Phố 4,Đường Số 9, P. Bình Hưng Hòa, Q. Bình Tân', 12, ' Hiểu sản phẩm và thương hiệu của Công ty.\r\nLên ý tưởng và triển khai các chương trình quảng cáo online, event online, chiến dịch social media thúc đẩy doanh số và hiệu quả bán hàng, khuyếch trương hình ảnh/ thương hiệu sản phẩm.\r\nXây dựng kế hoạch content, quản lý hệ thống content marketing online của nhãn hàng: fanpage, website', 'Nam/Nữ tốt nghiệp Đại học các chuyên ngành báo chí, MKT, truyền thông, PR, quảng cáo…\r\nSử dụng thành thạo các phần mềm tin học văn phòng.\r\nƯu tiên ứng viên có kinh nghiệm làm việc đã từng làm trong các ngành bệnh viện, mỹ phẩm, làm đẹp, dược phẩm, trong đó có ít nhất 01 năm ở vị trí tương đương\r\nƯu tiên ứng viên thông thạo phương tiện truyền thông', 0, 'HỒ SƠ:\r\nCV cá nhân ứng tuyển trự tiếp thông qua website VietnamWorks\r\nTiêu đề mail viết theo cấu trúc: Vị trí ứng tuyển- họ và tên ứng viên (Vd: Chuyên Viên Marketing - Trần Như Mai)', 'Thu nhập: Theo thỏa thuận + Phụ cấp khác\r\nChế độ BHXH, BHYT, BHTN theo quy định\r\nKhám sức khỏe định kỳ, được hưởng các chế độ ưu đãi nhân viên và người thân trong gia đình', 'Dã Thảo', '0598.1998.63 ', 'Đang cập nhật', 'tanvle2804@gmail.com', '2020-12-29', 'chuyen-vien-marketing', 1, '2020-12-01 19:33:18', '2020-12-01 19:33:18'),
(53, 'tbl53\r\n', 53, 53, 'Chuyên Viên Phát Triển Nội Dung - Copy Writer', 3, 3, 12, 2, 4, 3, 4, '45 Đường Số 9, Cư Xá Bình Thới, P. 8, Q. 11, Tp. Hồ Chí Minh', 33, 'Sáng tạo và viết lời quảng cáo cho catalogue, brochure, website, phim dự án, phim doanh nghiệp…\r\nSáng tạo và đặt tên dự án, slogan dự án, phân khu, tên đường…\r\nThực hiện các công việc phối hợp khác trong phạm vi trách nhiệm của Phòng Marketing theo phân công của GĐ Marketing.', 'Yêu cầu về chuyên môn: tốt nghiệp đại học các chuyên ngành liên quan\r\nCó hiểu biết căn bản về marketing, đặc biệt là đối với ngành bất động sản.\r\nCó khả năng phát triển ý tưởng & sáng tạo cao.\r\nKỹ năng thể hiện và trình bày ý tưởng tốt, viết tốt.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng tết tối thiểu 3 tháng lương, Thưởng KPI\r\nFull chế độ bảo hiểm, phúc lợi\r\n12 ngày nghỉ phép có lương', 'Dạ Thảo', '05993.999.24 ', 'Đang cập nhật', 'chuyen-vien-phat-trien-noi-dung-copy-writer', '2020-12-28', 'vnvananhnguyen91@gmail.com', 0, '2020-12-02 06:46:41', '2020-12-01 07:35:12'),
(54, 'tbl54\r\n', 54, 54, 'Phó Giám Đốc Đào Tạo Công Nghệ Thông Tin', 1, 1, 15, 6, 11, 8, 8, 'Số 29-30 Đường số 2, Khu Phố Hưng Gia 5, Phường Tân Phong, Quận 7 ', 36, 'Xây dựng và triển khai chiến lược sản phẩm dịch vụ đào tạo mới\r\nTổ chức xây dựng phát triển giáo trình, tài liệu đào tạo cho học sinh\r\nTổ chức triển khai các hoạt động đào tạo chuyển giao công nghệ đào tạo cho đội ngũ giáo viên Teky đảm bảo duy trì chất lượng giảng dạy', 'Tốt nghiệp Đại học trở lên, các chuyên ngành: Sư phạm kỹ thuật; Công nghệ thông tin; Điện tử; Tự động hóa hoặc Truyền thông đa phương tiện,…\r\nCó kinh nghiệm tối thiểu 5 năm đào tạo hoặc quản lý đào tạo cho các đơn vị trường học hoặc lĩnh vực CNTT/ Tự động hóa/ Truyền thông đa phương tiện.\r\nTối thiểu 3 năm ở vị trí quản lý.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương cạnh tranh tối thiểu từ 25-30tr; thưởng và các chế độ đãi ngộ khác theo quy định của công ty\r\nĐược tìm hiểu và tiếp cận giáo trình, giáo án, chương trình giảng dạy chuyên nghiệp của Hàn Quốc\r\nĐược tham gia vào các hoạt động đào tạo, workshop từ chuyên gia trong lĩnh vực, trong nước và quốc', 'Dạ Thi', '0995.242.234  ', 'Đang cập nhật', 'vuthuhang1811@gmail.com', '2021-01-02', 'pho-giam-doc-dao-tao-cong-nghe-thong-tin-luong-tu', 1, '2020-12-01 07:11:12', '2020-12-02 07:11:12'),
(55, 'tbl55\r\n', 55, 55, 'Chuyên Gia Thẻ Tín Dụng ', 1, 2, 9, 5, 10, 7, 8, 'Khu Phố Hưng Gia 5, Phường Tân Phong, Quận 7 ', 25, 'Nghiên cứu thị trường và nhu cầu của khách hàng để đề xuất sản phẩm đồng thương hiệu mới; \r\nLập tiến độ và phân phối sản phẩm / kế hoạch / nhiệm vụ / nhiệm vụ mới; \r\nPhối hợp với CNTT để mô tả yêu cầu sản phẩm, kiểm tra sản phẩm mới\r\n', 'Tốt nghiệp đại học kinh tế / ngân hàng / tài chính / CNTT \r\n Có kiến ​​thức về ngân hàng bán lẻ, đặc biệt là phát triển và quản lý các sản phẩm Thẻ\r\n Có ít nhất 07 năm kinh nghiệm làm việc trong lĩnh vực ngân hàng bán lẻ hoặc 05 năm kinh nghiệm nghiên cứu và phát triển sản phẩm Thẻ tại các ngân hàng, tổ chức tài chính uy tín\r\n', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thu nhập hấp dẫn, lương thưởng cạnh tranh theo năng lực\r\n', 'Dạ Yến', '0995.242.234 ', 'Số 2 - 4 Đường Số 20, KĐT Him Lam, P. Tân Hưng, Q.7, Tp. Hồ Chí Minh (TPHCM)', 'tran780@yahoo.com.vn', '2021-02-12', 'chuyen-gia-the-tin-dung-co-brand-card-phong-san-pham-the-ho-chi-minh', 0, '2020-12-01 07:11:12', '2020-12-02 06:46:41'),
(56, 'tbl56\r\n', 56, 56, 'Chuyên Gia Phê Duyệt Tín Dụng Cấp 1 Tại Hồ Chí Minh\r\n', 1, 1, 12, 2, 10, 7, 7, '70/48/7 ấp 3, X. Nhị Bình, H. Hóc Môn, Tp. Hồ Chí Minh (TPHCM)', 12, '1. Các nhóm công việc được phân công\r\na) Phối hợp, góp phần xây dựng tập thể gắn kết, đồng tâm thực hiện nhiệm vụ cấp trên giao\r\nb) Thực hiện đầy đủ, chất lượng và đúng thời gian yêu cầu đối với công việc được giao\r\nc) Thực hiện đầy đủ và gửi cán bộ đầu mối Báo cáo công việc theo mẫu định kỳ.\r\n2. Nhiệm vụ trực tiếp\r\na) Rà soát rủi ro tín dụng và phê duyệt tín dụng\r\n- Thực hiện phê duyệt tín dụng theo thẩm quyền.\r\n- Thực hiện rà soát rủi ro tín dụng khách hàng của chi nhánh/TSC trình lãnh đạo Phòng để trình cấp thẩm quyền.\r\n- Nghiên cứu có ý kiến với lãnh đạo Phòng về khách hàng thuộc ngành nghề phụ trách', '1. Các nhóm công việc được phân công\r\na) Phối hợp, góp phần xây dựng tập thể gắn kết, đồng tâm thực hiện nhiệm vụ cấp trên giao\r\nb) Thực hiện đầy đủ, chất lượng và đúng thời gian yêu cầu đối với công việc được giao\r\nc) Thực hiện đầy đủ và gửi cán bộ đầu mối Báo cáo công việc theo mẫu định kỳ.\r\n2. Nhiệm vụ trực tiếp\r\na) Rà soát rủi ro tín dụng và phê duyệt tín dụng\r\n- Thực hiện phê duyệt tín dụng theo thẩm quyền.\r\n- Thực hiện rà soát rủi ro tín dụng khách hàng của chi nhánh/TSC trình lãnh đạo Phòng để trình cấp thẩm quyền.\r\n- Nghiên cứu có ý kiến với lãnh đạo Phòng về khách hàng thuộc ngành nghề phụ trách\r\nb) Quản lý danh mục tín dụng\r\n- Thực hiện đánh giá chất lượng tín dụng ngành phụ trách.', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Theo quy định của Ngân hàng', 'Ðinh Hương', '079.999.111.3  ', 'Đang cập nhật', 'sallomon2008@gmail.com', '2021-01-18', 'chuyen-gia-phe-duyet-tinh-dung-cap-1', 1, '2020-12-01 07:11:12', '2020-12-03 06:46:41'),
(57, 'tbl57\r\n', 57, 57, '\r\nGiám Đốc Trung Tâm Kinh Doanh- Trụ Sở Chính', 1, 3, 7, 6, 12, 8, 8, '\r\nGiám Đốc Trung Tâm Kinh Doanh- Trụ Sở Chính', 29, 'Phụ trách kinh doanh khu vực thành phố Hồ Chí Minh\r\nPhân phối sản phẩm bảo hiểm bán lẻ (con người, xe cơ giới, nhà tư nhân) trên các kênh đối tác theo hệ thống hoặc chuỗi bán lẻ (không bao gồm các công ty tài chính và ngân hàng)\r\nQuy mô doanh thu dự kiến trên 50 tỷ/ năm trong năm 2021 và tăng trưởng 30-50% mỗi năm\r\nQuy mô: số lượng nhân sự trên 20 người', ' Tốt nghiệp đại học trở lên\r\nCó tối thiểu 05 năm kinh nghiệm trong lĩnh vực bảo hiểm phi nhân thọ, tài chính hoặc ngân hàng, bán lẻ FMCG,… trong đó kinh nghiệm làm quản lý điều hành tối thiểu 3 năm\r\nƯu tiên Tiếng Anh nghe nói lưu\r\nCó mối quan hệ rộng\r\nĐộ tuổi không quá 40 tuổi', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức thu nhập hấp dẫn theo thỏa thuận không giới hạn (trung bình 14 – 15 tháng thu nhập/năm)\r\nTrợ cấp ăn trưa + trang thiết bị sử dụng phục vụ công việc\r\nBảo hiểm sức khoẻ toàn diện cho bản thân & hỗ trợ gói bảo hiểm dành cho người thân (tối đa 5 người)', 'Ðoan Thanh', '0961.11.14.14  ', 'Đang cập nhật', 'ngocphuong2908@gmail.com', '2021-01-28', 'giam-doc-trung-tam-kinh-doanh-tru-so-chinh', 2, '2020-12-01 07:20:55', '2020-12-04 06:57:56'),
(58, 'tbl58\r\n', 58, 58, 'Giám Đốc Khách Hàng Bán Lẻ', 1, 2, 25, 4, 9, 7, 8, '145 Lê Thị Hoa, Bình Chiểu, Thủ Đức, Tp. Hồ Chí Minh (TPHCM)', 24, 'VAI TRÒ\r\nQuản lý, tổ chức thực hiện và chịu trách nhiệm toàn diện về mọi hoạt động của Phòng KHBL, đảm bảo hoàn thành các chỉ tiêu kinh doanh được giao và phát triển thương hiệu của OceanBank, hướng tới sự chuyên nghiệp, an toàn, hiệu quả và tuân thủ các quy định của OceanBank và pháp luật.\r\n\r\nNHIỆM VỤ CHÍNH\r\n1. Tham mưu, tư vấn, giúp việc cho Giám đốc/Phó Giám đốc CN về công tác phát triển kinh doanh các sản phẩm, dịch vụ ngân hàng cho KHBL.\r\n2. Chỉ đạo, quản lý và tổ chức thực hiện hoạt động kinh doanh KHBL theo quy định của OceanBank và pháp luật', 'YÊU CẦU VỀ TRÌNH ĐỘ VÀ KINH NGHIỆM\r\n- Tốt nghiệp Đại học trở lên ngành Kinh tế, Quản trị kinh doanh, ưu tiên chuyên ngành Tài chính Ngân hàng, Marketing, Thương mại.\r\n- Kinh nghiệm quản lý: Có 03 năm trở lên làm việc trực tiếp trong lĩnh vực tài chính, ngân hàng, trong đó tối thiểu 01 năm làm việc ở vị trí quản lý.\r\n- Tiếng Anh và tin học văn phòng: Thành thạo.\r\n', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương thưởng hấp dẫn\r\nĐược hưởng các chế độ bảo hiểm theo Luật lao động\r\nMôi trường làm việc chuyên nghiệp, năng động', 'Ðoan Trang', '079.999.5775 ', 'Đang cập nhật', 'bichphuongnshd@gmail.com', '2021-02-02', 'giam-doc-khach-hang-ban-le', 3, '2020-12-02 16:09:14', '2020-12-02 16:09:14'),
(59, 'tbl59\r\n', 59, 59, 'Chuyên Viên Hỗ Trợ Tư Vấn - Kênh Liên Doanh Ngân Hàng BIDV', 1, 1, 12, 8, 6, 6, 6, '14/23C Văn Chung, P.13, Q.Tân Bình, Tp. Hồ Chí Minh (TPHCM)', 44, 'Làm việc trực tiếp tại Chi nhánh Ngân hàng hàng đầu Việt Nam, xây dựng mối quan hệ và hỗ trợ nhân viên Ngân hàng và Chi nhánh trong các hoạt động kinh doanh\r\nXây dựng kế hoạch, thực hiện các chiến lược để xây dụng được sự tín nhiệm và niềm tin trong các mối quan hệ', 'Trình độ: Cao đẳng / Đại học\r\nKinh nghiệm: Ít nhất 2 năm trong lãnh vực Sales, trưởng nhóm tư vấn tài chính. Có kinh nghiệm trong lãnh vực Ngân hàng/ Tài chính/ Bảo hiểm là một lợi thế\r\nTác phong: chuyên nghiệp, nhanh nhẹn\r\nNgoại hình ưa nhìn', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thu nhập cạnh tranh; Công nhận hiệu suất; Kế hoạch chăm sóc sức khỏe cho gia đình; Nghỉ hàng năm> = 14 ngày\r\n', ' Ðông Nghi', '079.999.888.1 ', 'Đang cập nhật', 'ngohuyen546@gmail.com', '2021-02-17', 'chuyen-vien-ho-tro-tu-van-kenh-lien-doanh-ngan-hang-bidv', 3, '2020-12-01 19:33:18', '2020-12-01 07:35:12'),
(60, 'tbl60\r\n', 60, 60, 'Tín Dụng Cá Nhân - CN Phú Mỹ Hưng', 1, 1, 35, 2, 6, 7, 5, '53 Phạm Huy Thông, Phường 17, Quận Gò Vấp, Tp. Hồ Chí Minh', 24, 'Tìm kiếm, giới thiệu và tư vấn các sản phẩm tín dụng cá nhân tới khách hàng.\r\nTiếp nhận hồ sơ, thực hiện đánh giá tín dụng, thẩm định hồ sơ, tài sản đảm bảo,vv trình phê duyệt khoản vay.\r\nPhối hợp với khách hàng chuẩn bị hợp đồng vay vốn và trình phê duyệt để tiến hành giải ngân.\r\nQuản lý hạch toán giải ngân, thu nợ gốc lãi, các khoản phí phát sinh và quản lý khách hàng sau giải ngân.\r\nThực hiện phân loại nhóm nợ, xử lý nợ đến hạn, quá hạn.\r\nThực hiện các yêu cầu khác theo sự phân công của cấp trên.', ' Nộp CV bằng tiếng Anh hoặc tiếng Hàn;\r\nKhông yêu cầu kinh nghiệm\r\nCó khả năng giao tiếp tiếng Anh hoặc tiếng Hàn;\r\nNhiệt tình, chăm chỉ, trách nhiệm, năng động;\r\nCó khả năng làm việc độc lập và theo nhóm.', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng cố định 300% lương cơ bản mỗi năm; Bảo hiểm xã hội theo quy định của Việt Nam; Bảo hiểm PTI Các chuyến đi teambuilding hàng năm;\r\n', 'Ðông Nhi', '079.999.6776  ', 'Đang cập nhật', 'minhnguyet0294@yahoo.com', '2021-02-12', 'tin-dung-ca-nhan-cn-phu-my-hung', 2, '2020-12-01 05:54:55', '2020-12-03 06:46:41'),
(61, 'tbl61\r\n', 61, 61, 'Chuyên Viên Tài Chính Đầu Tư', 1, 3, 5, 3, 8, 7, 4, '28 KP.2, Đường số 34, P. Bình An, Q. 2, Tp. Hồ Chí Minh (TPHCM)\r\n\r\n', 50, 'Hỗ trợ xây dựng và triển khai kế hoạch kinh doanh, ngân sách định kỳ\r\nXây dựng và quản lý chính sách và quy trình lập, báo cáo và theo dõi kế hoạch kinh doanh\r\nTriển khai công tác lập kế hoạch Kinh doanh định kỳ', 'Kinh nghiệm 3-5 về tài chính, ưu tiên ứng viên từng làm khối ngân hàng, tài chính doanh nghiệp và ứng viên từng làm vị trí tương đương cho các công ty về dự án\r\nQuy trình, Quy chế, Luật và các Quy định hiện hành.(Mức độ: Thành thạo)\r\nExcel, Power Point, Word (Mức độ: Thành thạo)\r\nTiếng Anh (Mức độ: Cơ bản)', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương : Thỏa thuận phù hợp với năng lực\r\nLàm việc từ thứ Hai – thứ Sáu hàng tuần\r\nThưởng lễ, tết, thưởng tháng lương 13 theo quy định của Công ty', 'Ðông Trà', '0799.99.55.44  ', 'Đang cập nhật', 'ducly79@gmail.com', '2021-05-17', 'chuyen-vien-tai-chinh-dau-tu', 3, '2020-12-01 07:11:12', '2020-12-01 07:35:12'),
(62, 'tbl62\r\n', 62, 62, 'Kiến Trúc Sư – Quản Lý Sản Xuất', 1, 2, 24, 3, 9, 7, 7, '90B Lý Thường Kiệt, P. 14, Q. 10, Tp. Hồ Chí Minh (TPHCM)\r\n\r\n', 36, 'Quản lý và kiểm tra hồ sơ bản vẽ, đãm bảo chất lượng, phù hợp các bộ môn\r\nTổ chức và phối hợp nhân sự thực hiện dự án.\r\nKĩ năng chú ý đến chi tiết và độ chính xác là rất quan trọng.\r\nLàm việc với team Nội thất để phát triển các giải pháp & khái niệm thiết kế; xác định giao diện tổng thể của các dự án và định hướng của quản lý', ' 5 năm kinh nghiệm trở lên ở vị trí tương đương và có kiến thức trong mảng Nội Thất\r\nCó khả năng quản lý và thực hiện nhiều dự án cùng một lúc\r\nCó khả năng tổ chức , quản lý công việc tốt\r\nThành thạo các phần mềm liên qua đến thiết kế : 3dmax, sketchup, vray, autocad, photoshop, indesign, Render đẹp…', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương thưởng hấp dẫn - từ 30tr trở lên + hoa hồng\r\nĐược hưởng các quyền lợi theo quy định của nhà nước, có BHXH, BHYT,…\r\nChế độ thưởng theo từng dự án, xem xét tăng huyên nghiệp, năng động và sáng tạo', 'Ðông Tuyền', '0799.99.44.55  ', 'Đang cập nhật', 'thoank@clevercfo.com', '2021-02-18', 'kien-truc-su-quan-ly-san-xuat', 3, '2020-12-01 06:57:56', '2020-12-01 06:57:56'),
(63, 'tbl63\r\n', 63, 63, '\r\n Kinh Doanh Chứng Khoán', 4, 1, 7, 6, 5, 3, 3, '74 Đặng Nguyên Cẩn, P. 4, Q. 6, Tp. Hồ Chí Minh (TPHCM)\r\n\r\n', 24, 'Tìm kiếm khách hàng tiềm năng, mở rộng nguồn khách hàng networking.\r\nTư vấn khách hàng, giới thiệu sản phẩm.\r\nThuyết phục khách hàng mua sản phẩm.\r\nTham gia thực hiện quy trình ra hợp đồng.\r\nThực hiện ký hợp đồng cho khách hàng.\r\nTheo dõi thanh toán đủ đợt 1.\r\n', 'rình độ: Cao đẳng cấp trở lên.\r\nKiến thức: về Thương mại, Quản trị Marketing, Thương hiệu.\r\nKinh nghiệm: ngành Bất Động Sản, Ngân hàng, Tài Chính, Chứng khoán, Bảo Hiểm, Mỹ Phẩm, Ô tô, Đầu tư, Hàng cao cấp, Hàng Không/du lịch, Nhà hàng/khách sạn, Dịch vụ khách hàng.\r\nCác yêu cầu khác:\r\n- Hiệu quả - Chính trực – Chuyên nghiệp\r\n- Giọng nói dễ nghe.\r\nQuyền lợi vị trí', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'LỘ TRÌNH THĂNG TIẾN RÕ RÀNG\r\nCHẾ ĐỘ LƯƠNG THƯỞNG HẤP DẪN\r\nƯU ĐÃI MUA NHÀ & DỊCH VỤ KHÁC', 'Ðông Vy', '079.999.2882  ', 'Đang cập nhật', 'letich.dn567@yahoo.com', '2021-02-25', 'chuyen-vien-kinh-doanh-bat-dong-san', 0, '2020-12-01 07:11:12', '2020-12-01 07:35:12'),
(64, 'tbl64\r\n', 64, 64, '\r\nNhân Viên Khảo Sát Giá', 2, 1, 1, 1, 2, 2, 2, '319 -B14 Lý Thường Kiệt, P. 15, Q. 11, Tp. Hồ Chí Minh (TPHCM)', 53, 'Triển khai việc thu thập thông tin giá: hàng tiêu dùng nhanh, thực phẩm tươi sống và sản phẩm đồ dùng gia đình theo sự phân công của trưởng nhóm.\r\n- Thường xuyên cải tiến phương pháp thu thập thông tin giá hiệu quả và chính xác nhất\r\n- Bảo đảm thông tin thu thập là chính xác và đúng thời gian yêu cầu\r\n- Phối hợp hoạt động với các bộ phận chức năng khác trong hệ thống', ' Sử dụng tốt Microsoft Office (đặc biệt, Excel)\r\n- Hiểu rõ và nhận biết chính xác danh sách sản phẩm phải thu thập thông tin giá bán thường và giá khuyến mãi (nếu có).\r\n- Giao tiếp tốt, năng động\r\n- Khả năng xử lý tình huống tốt\r\n- Kỹ năng phân tích, tổng hợp\r\n- Trung thực, nghiêm túc trong công việc', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Tháng lương thứ 13\r\nChăm sóc sức khỏe cá nhân\r\nMáy tính xách tay', 'Gia Hân', '079.999.5885 ', 'Đang cập nhật', 'haivu74ftu@gmail.com', '2021-03-31', 'chuyen-vien-khao-sat-gia', 3, '2020-12-01 05:54:55', '2020-12-04 05:54:55'),
(65, 'tbl65', 65, 65, '\r\nTrợ Lý Phần Mềm - Kiểm Soát Nội Bộ', 4, 2, 22, 8, 5, 3, 4, '1027 Phạm thế Hiển, P. 5, Q. 8, Tp. Hồ Chí Minh (TPHCM)', 25, 'Quản lý công việc team barcode\r\nĐọc báo cáo, đánh giá thực hiện công việc của từng thành viên trong team\r\nSắp xếp nhân sự trong team sao cho phù hợp và hiệu quả nhất\r\nChuẩn hóa quy trình barcode, phù hợp với những thay đổi của kho.\r\nBáo cáo, chịu trách nhiệm với cấp quản lý về hoạt động của team', 'Độ tuổi: > 25 tuổi\r\nGiới tính: Nam/nữ. (Nếu là Nữ, yêu cầu cam kết không sinh con trong 2 năm từ khi nhận việc)\r\nTrình độ chuyên môn: Đại học/Cao đẳng\r\nChuyên ngành: Kế toán-Kiểm toán/ Công nghệ thông tin.', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Được tham gia các khóa kỹ năng mềm, kỹ năng chuyên môn tại các trung tâm uy tín\r\nCông ty có xe đưa đón cho Nhân viên từ đường Thoại Ngọc Hầu, quận Tân Phú\r\nĐược tham gia đầy đủ BHXH, BHYT, BHTN. Đặc biệt, Công ty sẽ đóng 100% toàn bộ chi phí', 'Gia Khanh', '07671.44442  ', 'Đang cập nhật', 'traitimbinhyen_cth_8x@yahoo.com', '2021-02-16', 'tro-ly-phan-mem-kiem-soat-noi-bo', 0, '2020-12-01 19:33:18', '2020-12-01 19:33:18'),
(66, 'tbl66\r\n', 66, 66, '\r\nNhân Viên Kĩ Thuật', 1, 2, 11, 2, 5, 4, 4, '39/2 Đường 1, P. 10, Q. Tân Bình, Tp. Hồ Chí Minh (TPHCM)', 13, 'Phụ trách lắp ráp, thiết lập, cài đặt, khởi động, vận hành máy móc, thiết bị nha khoa (như máy chụp X-quang răng, ghế nha khoa, tay khoan dùng trong nha khoa, máy móc phòng Lab...)\r\nHỗ trợ sửa chữa, bảo trì máy móc, thiết bị , xử lý kịp thời khi máy bị lỗi, hư hỏng\r\nCác công việc liên quan khác theo chỉ thị của cấp trên', 'Tốt nghiệp đại học ngành vật lý kỹ thuật, khoa khoa học ứng dụng\r\n Ưu tiên ứng viên tiếng Anh giao tiếp cơ bản trở lên', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương cao, thương lượng theo năng lực (lương cứng + phụ cấp + thưởng)\r\nHỗ trợ các chế độ bảo hiểm Y tế & BHXH theo luật\r\nCó cơ hội tham gia các chương trình đào tạo, teambuilding, hội thảo, triển lãm trong và ngoài nước', 'Gia Linh', '0888.838.074  ', 'Đang cập nhật', 'anhktltv@gmail.com', '2021-02-08', 'nhan-vien-ki-thuat', 2, '2020-12-02 07:20:55', '2020-12-04 05:54:55'),
(67, 'tbl67\r\n', 67, 67, 'Trợ Lý Giám Đốc Kinh Doanh', 1, 1, 35, 2, 5, 6, 5, '438/9/7 Ngô Gia Tự, P. 4, Q. 10, Tp. Hồ Chí Minh (TPHCM)', 34, 'Vị trí tuyển dụng: Trợ lý Giám đốc kinh doanh\r\nChức vụ: Nhân viên\r\nSố lượng cần tuyển: 02', 'Yêu cầu giới tính: Nữ\r\n- Ưu tiên có kinh nghiệm từ 3 năm trở lên ở vị trí trợ lý, sales admin, service admin.\r\n- Yêu cầu bằng cấp: Cao đẳng, Đại học chuyên ngành Quản Trị Kinh Doanh, Ngoại thương, Kinh tế.\r\n- Yêu cầu độ tuổi: 22 – 27\r\n', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng tháng lương thứ 13+ thưởng theo năng lực thực tế và theo chính sách của công ty\r\nĐược tham gia đầy đủ các quyền lợi theo Luật Lao Động Việt Nam\r\nMôi trường làm việc thân thiện , năng động', 'Gia Nhi', '0836.11.11.70 ', 'Đang cập nhật', 'hongcuc02@gmail.com', '2021-06-09', 'tro-ly-giam-doc-kinh-doanh', 3, '2020-12-01 07:11:12', '2020-12-01 07:35:12'),
(68, 'tbl68\r\n', 68, 68, '\r\nChuyên Viên Truyền Thông Mạng Xã Hội', 1, 3, 12, 2, 8, 6, 6, '4 Ngô Gia Tự, P. 4, Q. 10, Tp. Hồ Chí Minh ', 40, 'Kiểm soát, phân tích và đánh giá thông tin về thương hiệu Thaco và các lĩnh vực SXKD trên báo chí/MXH.\r\n- Hỗ trợ thực hiện báo cáo Truyền thông hàng tuần/tháng/quý/năm\r\n- Tham mưu cho GĐ Truyền thông các công cụ và phương pháp kiểm soát thông tin trên báo chí và mạng xã hội.\r\n- Các công việc khác liên quan đến việc kiểm soát thông tin theo phân công.', '-Tốt nghiệp Đại học chuyên ngành, Truyền thông, Báo chí, Quản trị kinh doanh, Marketing hoặc các chuyên ngành liên quan.\r\n- Kinh nghiệm làm việc trên 3 năm ở vị trí tương đương.\r\n- Có kiến thức về các nền tảng mạng xã hội, báo chí, digital marketing.\r\n- Có kiến thức về truyền thông Việt Nam.\r\n- Có khả năng thu thập, phân tích, xử lý thông tin và báo cáo.\r\n- Am hiểu các phần mềm, công cụ liên quan đến kiểm soát thông tin, sử dụng vi tính thành thạo, kỹ năng nghiên cứu tìm kiếm thông tin.', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Thưởng cuối năm hấp dẫn\r\nChăm sóc sức khỏe hằng năm', 'Gia Quỳnh', '088886.97.90  ', '12 Lam Sơn, P. 5, Q. Phú Nhuận, Tp. Hồ Chí Minh', 'hongcuc2109@gmail.com', '2021-02-11', 'chuyen-vien-truyen-thong-mang-xa-hoi', 2, '2020-12-02 06:46:41', '2020-12-04 05:54:55'),
(69, 'tbl69\r\n', 69, 69, 'Java Developer ', 1, 3, 22, 2, 6, 6, 5, '549 Trần Hưng Đạo B, P. 14, Q. 5, Tp. Hồ Chí Minh (TPHCM)', 25, ' Lập trình và phát triển ứng dụng web, web service trên nền tảng Java.\r\n- Tham gia nghiên cứu, phát triển và ứng dụng các công nghệ mã nguồn mở vào trong dự án về cổng thanh toán trực truyến và dịch vụ tài chính.\r\n- Tham gia vào phân tích thiết kế hệ thống và fix bugs.\r\n- Kết hợp với các bộ phận liên quan (Sản phẩm, UI/UX, thiết kế, kiểm thử, hệ thống…) để triển khai hoàn thành dự án trên các môi trường.\r\n- Báo cáo tiến độ và tình trạng công việc cho quản lý dự án.\r\n- Các công việc khác theo sự phân công yêu cầu của cấp quản lý.', 'ốt nghiệp đại học các chuyên ngành Công nghệ thông tin, Điện tử viễn thông, Mạng máy tính và các chuyên ngành tương đương.\r\n- Có 2 năm kinh nghiệm lập trình trên nền tảng Java.\r\n- Thành thạo Java Core, Spring Framework, Hibernate, Transaction Management, Struts.\r\n- Có kiến thức về cơ sở dữ liệu MySQL, MS SQL hoặc PostgreSQL, hiểu về kiến trúc Microservices, RESTful APIs.\r\n- Am hiểu và sử dụng tốt OOP & Design Patterns.\r\n- Có kinh nghiệm với Application server (Tomcat, WebLogic, Apache).\r\n- Biết sử dụng công nghệ Redis.', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Gói thu nhập tương đương từ 14 - 17 tháng lương quy đổi\r\nGói bảo hiểm sức khỏe chuyên biệt (FPT Care – Khám chữa bệnh miễn phí tại tất cả các bệnh viện)\r\nThưởng lương tháng 13, lương kinh doanh, tiền mừng tuổi...', 'Giáng Ngọc', '0888.82.82.03 ', '99 Trần Hưng Đạo B, P. 14, Q. 5, Tp. Hồ Chí Minh (TPHCM)', 'toankt8@yahoo.com', '2021-02-25', 'java-developer', 3, '2020-12-01 07:11:12', '2020-12-01 19:33:18'),
(70, 'tbl70\r\n', 70, 70, 'Kỹ Sư Cơ Điện MEP Engineer', 1, 1, 16, 2, 5, 6, 3, '14 Lam Sơn, P. 5, Q. Phú Nhuận, Tp. Hồ Chí Minh ', 24, 'Sẽ được mô tả chi tiết khi phỏng vấn\r\n', 'Tốt nghiệp Đại học chuyên ngành, có hiểu biết về Điện, Điều hòa thông gió.\r\n- Có ít nhất 4 - 5 năm kinh nghiệm về Điện công trình, Điều hòa thông gió công trình xây dựng.\r\n- Làm việc ở các dự án tại Hải Phòng, Hồ Chí Minh và các tỉnh lân cận.\r\n- Ưu tiên thành thạo Autocad & các phần mềm về đồ họa, nếu chưa có kinh nghiệm công ty sẽ đào tạo thêm (đào tạo trong và ngoài nước).', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Giang Thanh', '08132.77771 ', 'Đang cập nhật', 'toankt8@yahoo.com', '2021-01-14', 'ky-su-co-dien-mep-engineer', 3, '2020-12-02 07:20:55', '2020-12-02 07:11:12'),
(71, 'tbl71\r\n', 71, 71, '\r\nKỹ Sư Tích Hợp', 1, 3, 38, 3, 5, 3, 6, '438/9/7 Ngô Gia Tự, P. 4, Q. 10, Tp. Hồ Chí Minh (TPHCM)', 44, 'Mô Tả Công Việc:\r\n• Chịu trách nhiệm Lập trình phần mềm, các module tích hợp dựa trên các sản phẩm, giải pháp, nền tảng lõi nhằm đáp ứng đầy đủ và tổng quan cho các yêu cầu cụ thể của khách hàng doanh nghiệp.\r\n• Tham gia vào các công đoạn khác của Tích hợp hệ thống Phần mềm từ Thiết kế, kiến trúc phần mềm, kiến trúc tích hợp; Phân tích thông tin, yêu cầu; Phát hiện và sửa lỗi phần mềm; Kiểm thử và tối ưu phần mềm.\r\n• Tham gia xây dựng, soạn thảo và trình bày các giải pháp (solution), đề xuất (proposal), bài thuyết trình (presentation), chứng minh giải pháp (POC) phù hợp đáp ứng các yêu cầu cụ thể của khách hàng và các gói thầu được giao.\r\n• Chịu trách nhiệm tư vấn thiết kế và triển khai các giải pháp về Tích hợp hệ thống (System Integration) cho khách hàng doanh nghiệp và tổ chức viễn thông', 'Yêu Cầu Công Việc:\r\n• Tốt nghiệp Đại học chuyên ngành Công nghệ thông tin, Khoa học máy tính,...\r\n• Tối thiểu 02 năm kinh nghiệm về phát triển phần mềm.\r\n• Yêu cầu ngôn ngữ: C#, ASP.NET, MVC, .NET framework , Entity Framework, OOP, Python.\r\n• Yêu cầu kiến thức về JavaScript, CSS, HTML, bootstrap, Ext.js.\r\n• Xây dựng Web Service và tích hợp API.', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: $500 - $1000\r\nCơ hội huấn luyện,đào tạo trong/ngoài nước từ Hãng đang là đối tác như (Cisco,Microsoft,Google…)\r\nCấp laptop làm việc', 'Giáng Tiên', '08888.45.717  ', '54Bis Nguyễn Đình Chiểu, P. Đa Kao, Q. 1, Tp. Hồ Chí Minh', 'hoducbinh91@gmail.com', '2021-01-19', 'ky-su-tich-hop', 3, '2020-12-01 19:33:18', '2020-12-02 06:46:41'),
(72, 'tbl72\r\n', 71, 72, 'Front End Developer (ReactJS)', 5, 2, 22, 1, 2, 6, 2, 'Lầu 6, 80A Huỳnh Văn Bánh,P.15, Q. Phú Nhuận, Tp. Hồ Chí Minh (TPHCM)', 21, 'Bạn sẽ chịu trách nhiệm phát triển các ứng dụng di động và nội dung được xây dựng cho nền tảng di động tương thích với chuẩn HTML5. \r\nCộng tác với nhóm để nâng cao nền tảng xuất bản Javascript của chúng tôi - Xây dựng ứng dụng web quy mô lớn', 'Kiến thức rất tốt về JavaScript và CSS3 HTML / HTML5 \r\n Có kinh nghiệm làm việc với nhiều hơn một JavaScript framework như: Angular.js, React.js, jQuery, v.v.\r\n Cần có ít nhất 1 năm kinh nghiệm làm việc trong lĩnh vực liên quan cho vị trí này.\r\n', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: Tùy theo năng lực', 'Giáng Uyên', '08888.21.8.06 ', 'Đang cập nhật', 'ngochuyen16289@yahoo.com', '2021-01-20', 'front-end-developer-reactjs', 2, '2020-12-02 06:46:41', '2020-12-02 07:20:55'),
(73, 'tbl73\r\n', 73, 73, 'Technical Leader', 1, 3, 22, 2, 5, 7, 6, '148/4 Hà Huy Giáp, P. Thạnh Lộc, Q. 12, Tp. Hồ Chí Minh', 28, 'Là một nhà phát triển: \r\nTrao đổi với khách hàng để làm rõ yêu cầu và phạm vi công việc. \r\nPhân tích yêu cầu, chuyển giao cho các thành viên trong nhóm. \r\nThiết kế, phát triển, tối ưu hóa và kiểm thử phần mềm sử dụng PHP. \r\nTham gia phân tích hệ thống và thiết kế kiến ​​trúc phần mềm. \r\nPhát triển các giải pháp và thực hiện các bài kiểm tra đơn vị và tích hợp. \r\nÁp dụng kiểm soát phiên bản thích hợp và tung ra các bản phát hành mới.\r\n', 'Phải có: \r\nCó kinh nghiệm NodeJS và PHP với các framework như Laravel, Zend. \r\nCó kinh nghiệm về Python.\r\nCó kinh nghiệm về MySQL và Mongo DB.\r\nThông thạo tiếng Anh\r\n', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: Tùy theo năng lực (15tr- 20tr)', 'Giao Kiều', '0767.5555.77  ', 'Đang cập nhật', 'nguyenduykhanhvipk1@gmail.com', '2021-02-18', 'technical-leader', 3, '2020-12-01 19:33:18', '2020-12-02 06:46:41');
INSERT INTO `job` (`id`, `job_code`, `company_id`, `employer_id`, `name_job`, `type_job_id`, `amount`, `career_id`, `grade_id`, `salary_id`, `degree_id`, `experience_id`, `address`, `city`, `description`, `job_requirements`, `sex_requirements`, `profile_request`, `benefits`, `name_contact`, `phone_contact`, `address_contact`, `email_contact`, `deadline`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(74, 'tbl74\r\n', 74, 74, 'Giám Đốc Thiết Kế', 1, 2, 24, 2, 6, 7, 7, '545 Nguyễn Thị Thập, P. Tân Phong, Q. 7, Tp. Hồ Chí Minh', 51, 'Quản lý toàn bộ các giai đoạn thiết kế (xuyên suốt vòng đời của dự án) cho tất cả các dự án của Công ty.\r\n\r\n- Lập concept thiết kế kiến trúc, điều phối các bộ môn thiết kế (kiến trúc, kết cấu, MEP, hạ tầng…).\r\n\r\n- Tuyển chọn tư vấn thiết kế, đánh giá năng lực tư vấn, xem xét, kiểm tra tất cả các hợp đồng tư vấn thiết kế.\r\n\r\n- Quản lý tiến độ thiết kế theo các yêu cầu của tổng tiến độ dự án.', ' Tốt nghiệp Đại học trở lên, chuyên ngành Kiến trúc sư, Thiết kế Kiến trúc hoặc tương đương.\r\n\r\n- Am hiểu sâu về lĩnh vực thiết kế, kiến trúc, các quy định, tiêu chuẩn và quy chuẩn chuyên ngành.\r\n\r\n- Có khả năng phát họa ý tưởng trên giấy (Sketch) là một lợi thế.\r\n\r\n- Có óc phán đoán, kỹ năng phân tích, tổng hợp và truyền đạt thông tin tốt.\r\n', 0, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương: Tùy theo năng lực (15tr- 20tr)', 'Giao Linh', '07935.33337 ', 'Đang cập nhật', 'nam_xdbadinh@yahoo.com.vn', '2021-01-14', '', 3, '2020-12-02 06:46:41', '2020-12-04 05:54:55'),
(75, 'tbl75\r\n', 75, 75, '\r\nData Analyst', 1, 1, 21, 4, 9, 7, 8, '1004 Trường Chinh, P. 15, Q. Tân Bình, Tp. Hồ Chí Minh', 35, 'Phòng phân tích CRM hỗ trợ các chiến lược Xsell của Công ty với các chiến lược và quy trình Xsell tối ưu, sử dụng phương pháp ra quyết định dựa trên dữ liệu. Trong Phòng, Nhóm chiến dịch CRM chịu trách nhiệm đề xuất, thực hiện và đánh giá các chiến lược chiến dịch Xsell để thúc đẩy Xsell doanh số bán hàng và cuối cùng là lợi nhuận.\r\n', 'Bằng cử nhân, các chuyên ngành ưu tiên: Khoa học dữ liệu, Thống kê, Toán, Kinh tế, Khoa học Máy tính\r\n Ưu tiên sử dụng SQL cơ bản và hiểu biết cơ bản về cơ sở dữ liệu quan hệ \r\nTiếng anh giao tiếp tốt \r\nƯu tiên khoảng 1 năm kinh nghiệm ở các vị trí liên quan đến dữ liệu trong lĩnh vực tài chính / ngân hàng / bảo hiểm\r\n Tư duy phản biện\r\n', 2, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương tháng 13 Cố định và Thưởng KPI.\r\n PTI Chăm sóc sức khỏe\r\n', 'Hà Giang', '08888.223.51 ', 'Đang cập nhật', 'huett.add@gmail.com', '2021-02-19', 'data-analyst', 0, '2020-12-03 18:43:48', '2020-12-03 18:43:48'),
(76, 'tbl76\r\n', 76, 76, 'Tư Vấn Quy Trình Công Nhận Văn Bằng Tại Đức', 1, 1, 12, 3, 6, 7, 6, '159/22 Đường Đào Duy Anh, P. 9, Q. Phú Nhuận, Tp. Hồ Chí Minh', 55, 'Nằm trong khuôn khổ của dự án ProRecognition, bắt đầu từ tháng 11 năm 2015 phòng Công nghiệp và Thương mại Đức tại Việt Nam (GIC│AHK Vietnam) chính thức cung cấp dịch vụ TƯ VẤN MIỄN PHÍ quy trình công nhận văn bằng nước ngoài phục vụ mục đích làm việc tại Đức. Những hoạt động hỗ trợ và tư vấn của chúng tôi bao gồm:\r\n• Tư vấn về các khả năng để bằng cấp được cơ quan thẩm quyền ở Đức đánh giá và công nhận\r\n• Tìm kiếm cơ quan có thẩm quyền tại Đức, nơi thực hiện việc đánh giá và công nhận văn bằng của bạn\r\n• Trợ giúp và đồng hành trong suốt quá trình đánh giá và công nhận bằng cấp\r\n• Tư vấn các cơ hội bồi dưỡng, nâng cao chuyên môn tại Đức sau khi nhận được giấy chứng nhận tương đương\r\n• Hỗ trợ tìm việc tại Đức\r\n• Hỗ trợ thông tin về đời sống và làm việc tại Đức', 'Nếu bạn quan tâm và muốn tìm hiểu quy trình xin việc làm tại Đức và làm cách nào để văn bằng nước ngoài được các cơ quan Đức công nhận? Hãy nhấn nút “APPLY” và gửi CV của bạn cho chúng tôi. Tư vấn viên của chúng tôi sẽ chủ động liên hệ và sắp xếp buổi tư vấn riêng cho bạn.', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Lương thưởng hấp dẫn\r\nChế độ bảo hiểm theo chính sách công ty\r\nMôi trường làm việc thân thiện', 'Hà Liên', '0387.2222.75  ', 'Đang cập nhật', 'lanyenphuc@gmail.com', '2021-01-14', 'tu-van-quy-trinh-cong-nhan-van-bang-tai-duc', 3, '2020-12-02 07:20:55', '2020-12-01 06:57:56'),
(77, 'tbl77\r\n', 77, 77, 'Nhân Viên Kinh Doanh', 3, 1, 31, 2, 3, 2, 1, '549 Trần Hưng Đạo B, P. 14, Q. 5, Tp. Hồ Chí Minh (TPHCM)', 54, ' Tìm kiếm, tư vấn và phát triển khách hàng mới có nhu cầu sử dụng về dịch vụ giám định, khử trùng, thí nghiệm (máy móc thiết bị dây chuyền nhập khẩu, vật liêu xây dựng, sắt thép…) của công ty: Đại lý hải quan, kho bãi, công ty logictics, công ty xuất nhập khẩu...\r\n- Tạo ra các chương trình marketing và bán hàng trên các phương tiện tuyền thông, tham gia các tổ chức ngành nghề/hội thảo,... nhằm tăng doanh thu, tạo dựng thương hiệu công ty\r\n- Phát triển, thiết lập và duy trì mối quan hệ kinh doanh đối với khách hàng/đối tác thông qua công cụ tìm kiếm /mối quan hệ/chương trình quảng cáo/data ,...', '- Tốt nghiệp các trường CĐ, ĐH, liên quan về ngành logistics, kinh tế, thương mại, maketing. Kỹ năng sử dụng máy tính, công cụ tìm kiếm tốt.\r\n- Kinh nghiệm thực tế về XNK, hiểu biết cơ bản ngành sales & marketing , biết lập kế hoạch và triển khai kế hoạch, lập báo cáo, chịu áp lực và hoàn thành doanh thu.', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương hấp dẫn cạnh tranh phù hợp với năng lực + Bonus + Phụ cấp\r\nBHYT, BHXH đầy đủ, 12 ngày nghỉ phép có lương trong năm\r\nThưởng: Lương tháng 13 + Thưởng Lễ, tết', 'Hà Mi', '0766668.428 ', 'Đang cập nhật', 'ntmtrinh390@gmail.com', '2021-02-11', 'nhan-vien-kinh-doanh', 3, '2020-11-30 19:05:56', '2020-11-30 19:05:56'),
(78, 'tbl78\r\n', 78, 78, 'Nhân Viên Xuất Nhập Khẩu', 4, 2, 36, 2, 2, 2, 1, '319 -B14 Lý Thường Kiệt, P. 15, Q. 11, Tp. Hồ Chí Minh (TPHCM)', 38, '- Làm chứng từ liên quan đến xuất nhập khẩu đảm bảo đúng và kịp thời\r\n- Khai tờ khai hải quan xuất nhập khẩu như: Invoice, C/O, Bill, Packing list, định mức, chiết khấu…\r\n- Liên lạc với hãng tàu và forwarder để lấy booking và lịch tàu cho các đợt xuất hàng hoặc từng lô hàng của công ty\r\n- Chịu trách nhiệm thủ tục chứng từ hải quan xuất nhập khẩu, giải quyết các vấn đề phát sinh về hàng hóa/ chứng từ tại cảng/ sân bay (thông báo cho cấp chủ quản các trường hợp vượt thẩm quyền)', '- Tốt nghiệp Trung cấp trở lên chuyên ngành Xuất Nhập Khẩu/Logistics/Hải quan hoặc chuyên ngành liên quan\r\n- Có 3 năm kinh nghiệm trong ngành may gia công\r\n- Có kinh nghiệm làm việc trong doanh nghiệp chế xuất.\r\n- Tiếng Anh tốt (đọc, viết, nghe), thành thạo vi tính văn phòng\r\n- Hiểu rõ các quy trình thủ tục xuất nhập khẩu, am hiểu luật thương mại', 1, 'Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)\r\nSơ yếu lý lịch.\r\nBản sao hộ khẩu, CMND và các bằng cấp có liên quan.\r\nGiấy khám sức khỏe.', 'Mức lương hấp dẫn Bảo hiểm \r\nKế hoạch chăm sóc sức khỏe \r\nMôi trường làm việc chuyên nghiệp\r\n', 'Hà My', '08888.44.296  ', 'Đang cập nhật', 'caukinhtb@yahoo.com', '2021-02-10', 'nhan-vien-xuat-nhap-khau', 3, '2020-12-01 19:05:56', '2020-12-01 19:05:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_seeker`
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
-- Đang đổ dữ liệu cho bảng `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Walker Schinner', 'tiffany99@hartmann.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '+4947565978416', '1', NULL, '2020-11-29 19:40:52', '2020-11-29 19:40:52'),
(2, 'Lê Xuân Tuấn', 'invalid@example.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0988585568', '1', NULL, NULL, NULL),
(3, 'Hoàng Đình Hương', 'ko.huongngoctinhkt1986@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0916175566', '1', NULL, NULL, NULL),
(4, '	\r\nLê Thị Thùy Dung', 'dungiiiung1206@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '85684122012', '1', NULL, NULL, NULL),
(5, 'Trần Minh Nguyệt', 'nguyenthimy2805@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0987898882', '1', NULL, NULL, NULL),
(6, 'Nguyễn Khắc Thành', 'mongtuyenvikor@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '09854598882', '1', NULL, NULL, NULL),
(7, 'Phạm Ngọc Yến', 'yeno@yahoo.com.vn', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '01648129157', '1', NULL, NULL, NULL),
(8, 'Trần Thanh Tùng', 'ckctm12@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0984603663', '1', NULL, NULL, NULL),
(9, '	\r\nTrần Trung Kiên', '	\r\ntrungkienspktnd@gamail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '	\r\n0983888611', '1', NULL, NULL, NULL),
(10, 'Nguyễn Đăng\r\n\r\nHoàng', '	\r\ndanghoang87hl@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0974880788', '1', NULL, NULL, NULL),
(11, '\r\nNguyễn Văn Thẩm', 'nvt.isst.nute@gmail.com 	', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0904770053', '1', NULL, NULL, NULL),
(12, 'Vũ Tiến Lập', '	\r\ntienlapspktnd@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '	\r\n0917749254', '1', NULL, NULL, NULL),
(13, 'Ngô Mạnh Ha', 'manhhachkt08@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0973776072', '1', NULL, NULL, NULL),
(14, 'Trần Thanh Thủy', '	\r\ntranthuy.nute@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0982527982', '1', NULL, NULL, NULL),
(15, 'Tr­ơng Thị Yen', 'yethi@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0975236626', '1', NULL, NULL, NULL),
(16, 'Cao Thị Thu Hằng', 'hangnga@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '01253212277', '1', NULL, NULL, NULL),
(17, 'Nguyễn Thị Thanh', 'thanh@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0983535586', '1', NULL, NULL, NULL),
(18, 'Trịnh Thị Tố Uyêm', 'uyen@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0904567146', '1', NULL, NULL, NULL),
(19, 'Phạm Thị\r\n\r\nHoà ', 'hoa@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0955412681', '1', NULL, NULL, NULL),
(20, '\r\nNguyễn Thị Ngọc', 'ngoc@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0983412681\r\n\r\n', '1', NULL, NULL, NULL),
(21, 'Lê Đức Bắc', 'dzaibacgiang@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0972907579', '1', NULL, NULL, NULL),
(22, 'Nguyễn Trung Cường', 'nguyencuong120586@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '01656077115\r\n\r\n', '1', NULL, NULL, NULL),
(23, 'Phạm Thanh Sơn', 'tutuvinhson@yahoo.com.vn', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0988753023\r\n\r\n', '1', NULL, NULL, NULL),
(24, 'Trần Tuấn Hoàng', 'hoanganyen1209@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '01673433886', '1', NULL, NULL, NULL),
(25, 'Trác Dật Luân', 'secret6786@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0986958908', '1', NULL, NULL, NULL),
(26, 'Ngô Thị Vân', 'tuvanthue68@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '01272389777', '1', NULL, NULL, NULL),
(27, 'Ngô Trọng Quyền', 'quyentra081292@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '01649616718', '1', NULL, NULL, NULL),
(28, 'Nguyễn Bé Nhi', 'nguyennhnhi89@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0977557349\r\n\r\n', '1', NULL, NULL, NULL),
(29, 'Đỗ Thị Thảo', 'thaophong@rocketmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0984084034', '1', NULL, NULL, NULL),
(30, 'Dương Tân Long', 'quanyamaha3smailong@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0974131489\r\n\r\n', '1', NULL, NULL, NULL),
(31, 'Pham Tiến Long', 'longnv@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '216546544', '1', NULL, NULL, NULL),
(32, 'Lê Thị Hương', 'huongtrangkt168@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0968686291', '1', NULL, NULL, NULL),
(33, 'Nguyễn Thị Hồng Hạnh', 'hanhmt@ckca.vn', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0983266986', '1', NULL, NULL, NULL),
(34, 'Nguyễn Thị Hải Yến', 'yenmac90@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0912177345\r\n\r\n', '1', NULL, NULL, NULL),
(35, 'Nguyễn Ngọc Khải', 'vnptca.hotrokekhai@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0903220098', '1', NULL, NULL, NULL),
(36, 'Lê Lan Anh', 'tuananhas2212@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0976785816', '1', NULL, NULL, NULL),
(37, 'Trần Cảnh Dương', 'cogai_daiduong96@yahoo.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0983109724', '1', NULL, NULL, NULL),
(38, 'Bùi Thị Hồng Thắm', 'thamdinh128@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0983899956', '1', NULL, NULL, NULL),
(39, '	\r\nLê Việt Hưng', 'trunghung1206@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0904352749\r\n\r\n', '1', NULL, NULL, NULL),
(40, 'Phạm Minh Tiến', 't_tiens@yahoo.com.vn', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0902210733', '1', NULL, NULL, NULL),
(41, 'Phạm Kiên Cường', 'tam.to@botphucuong.vn', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0934447788', '1', NULL, NULL, NULL),
(42, 'Lê Thị Hương Haly\r\n\r\n', 'haly8893@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0942554498', '1', NULL, NULL, NULL),
(43, 'Phạm Văn Sáu', 'giacquanthusau_9999@yahoo.com.vn', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0388403008\r\n\r\n', '1', NULL, NULL, NULL),
(44, 'Đinh Hữu Thịnh', 'huongthinh0809@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0985861886', '1', NULL, NULL, NULL),
(45, 'Nguyễn Thị Đoan Hiền', 'hienmthvtc@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0904629579\r\n\r\n', '1', NULL, NULL, NULL),
(46, 'Phạm Đức Quán', 'huyquan2404@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0983054815\r\n\r\n', '1', NULL, NULL, NULL),
(47, 'Nguyễn Thị Lý', 'luuly20006@yahoo.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0902207799', '1', NULL, NULL, NULL),
(48, 'Nguyễn Thị Thanh Tâm', 'tamnv2209@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0988464946', '1', NULL, NULL, NULL),
(49, 'Bùi Thu Phương', 'buiphuong3105@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0983463800\r\n\r\n', '1', NULL, NULL, NULL),
(50, 'Lưu Văn Huyền', 'ngohuyen546@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0904148645', '1', NULL, NULL, NULL),
(51, 'Nghiêm Thị Luyến', 'thuluyen_kt@yahoo.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0975778066', '1', NULL, NULL, NULL),
(52, 'Nguyễn Quốc Tuấn', 'tuanav1971@yahoo.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0937303282', '1', NULL, NULL, NULL),
(53, 'Cao Ánh Hồng', 'phamhonggiahan@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0982725726', '1', NULL, NULL, NULL),
(54, 'Trần Quang Phúc', 'anhphucbavi@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0905682529', '1', NULL, NULL, NULL),
(55, 'Ngô Thanh Hiền', 'ngothuhien14@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0979809204', '1', NULL, NULL, NULL),
(56, 'Trần Nhật Tân', 'tanvle2804@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '01669788679', '1', NULL, NULL, NULL),
(57, 'Nguyễn Văn Chính', 'quangchinh39k@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '01669788679', '1', NULL, NULL, NULL),
(58, 'Trần Quốc Khánh', 'khanhonliem2q@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0914162689\r\n\r\n', '1', NULL, NULL, NULL),
(59, 'Lê Thanh Ngân', 'lengan1711@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '2345664422', '1', NULL, NULL, NULL),
(60, 'Nguyễn Dương Quỳnh', 'quynhdungnguyen86@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '04342385234', '1', NULL, NULL, NULL),
(61, 'Võ Văn Bảo', 'vovanbaoquoc0123@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0254878966', '1', NULL, NULL, NULL),
(62, 'Le thúy', 'thuyle2006t@yahoo.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '8527411223', '1', NULL, NULL, NULL),
(63, 'Vũ Đức Thịnh', 'vuducthinh.uct@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0987246616', '1', NULL, NULL, NULL),
(64, 'La Nhu Hiệp', 'nhuhiepqn1992@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0918207369', '1', NULL, NULL, NULL),
(65, 'Nguyễn Thành Tôn', 'anton777@yahoo.com.vn', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0904313086', '1', NULL, NULL, NULL),
(66, 'Nguyễn Minh Tuấn', 'tuananbinh68@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0968686291', '1', NULL, NULL, NULL),
(67, 'Nguyễn Thanh Tùng', 'thanhtunguyen20072003@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '09787891148', '1', NULL, NULL, NULL),
(68, 'Nguyễn Thị Hải Yến', 'utnguyen45@yahoo.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0987987352', '1', NULL, NULL, NULL),
(69, 'Phạm Thị Thanh Thủy', 'thuthuy240990@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0932200679', '1', NULL, NULL, NULL),
(70, 'Bùi Tiến Trịnh', 'kieutrinh2012@yahoo.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0966491916', '1', NULL, NULL, NULL),
(71, 'Lương Thanh Thạch', 'ngocthach.pham@yahoo.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0985505131', '1', NULL, NULL, NULL),
(72, 'Trần Huyền Thu', 'thuhyen87hn@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0989383751', '1', NULL, NULL, NULL),
(73, 'Vũ Thị Thủy Ngân', 'ngantran2042@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0989355751', '1', NULL, NULL, NULL),
(74, 'Phạm Thế Anh', 'anhanahnahx24@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '03273583751', '1', NULL, NULL, NULL),
(75, 'Nguyễn Quang Tuấn', 'akalamtuan@yahoo.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0983512050', '1', NULL, NULL, NULL),
(76, 'Kim Quốc Dũng', 'dungnsh@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '0258741225', '1', NULL, NULL, NULL),
(77, 'Hoang Thuy Linh', 'linhnnnssn@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '02459685733', '1', NULL, NULL, NULL),
(78, 'Nguyễn Quốc Thịnh', 'Thinhng20000@Gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '09876545678', '1', NULL, NULL, NULL),
(79, 'Trần Quang Chánh', 'chanhtq@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '01236699999', '1', NULL, NULL, NULL),
(80, 'Đoàn Quốc Dũng', 'Dungdq@gmail.com', NULL, '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', '02233699885', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_suitable`
--

CREATE TABLE `job_suitable` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `profiles_id` int(10) UNSIGNED NOT NULL
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
(58, '2014_10_12_100000_create_password_resets_table', 1),
(59, '2020_09_12_235948_create_job_seeker_table', 1),
(60, '2020_09_13_000239_create_employer_table', 1),
(61, '2020_09_13_013139_create_admin_table', 1),
(62, '2020_09_23_014646_create_type_job_table', 1),
(63, '2020_09_23_014911_create_career_table', 1),
(64, '2020_09_23_015024_create_grade_table', 1),
(65, '2020_09_23_015210_create_salary_table', 1),
(66, '2020_09_23_015247_create_experience_table', 1),
(67, '2020_09_23_015330_create_degree_table', 1),
(68, '2020_09_26_152823_create_companies_table', 1),
(69, '2020_09_26_153014_create_profiles_table', 1),
(70, '2020_09_26_153240_create_job_table', 1),
(71, '2020_09_28_222321_create_job_suitable_table', 1),
(72, '2020_09_28_222516_create_profiles_suitable_table', 1),
(73, '2020_09_28_231835_create_apply_table', 1),
(74, '2020_09_28_232412_create_save_job_table', 1),
(75, '2020_09_28_232516_create_save_profiles_table', 1),
(76, '2020_11_15_200333_create_city_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_seeker_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `marital_status` tinyint(4) NOT NULL,
  `birthday` date NOT NULL,
  `cover_letter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_job_id` int(10) UNSIGNED NOT NULL,
  `career_id` int(10) UNSIGNED NOT NULL,
  `grade_id` int(10) UNSIGNED NOT NULL,
  `salary_id` int(10) UNSIGNED NOT NULL,
  `degree_id` int(10) UNSIGNED NOT NULL,
  `experience_id` int(10) UNSIGNED NOT NULL,
  `work_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servece` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profiles_suitable`
--

CREATE TABLE `profiles_suitable` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `profiles_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salary`
--

CREATE TABLE `salary` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `salary`
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
-- Cấu trúc bảng cho bảng `save_job`
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
-- Cấu trúc bảng cho bảng `save_profiles`
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
-- Cấu trúc bảng cho bảng `type_job`
--

CREATE TABLE `type_job` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_job`
--

INSERT INTO `type_job` (`id`, `name`) VALUES
(1, 'Nhân viên chính thức'),
(2, 'Nhân viên thời vụ'),
(3, 'Bán thời gian'),
(4, 'Làm thêm ngoài giờ'),
(5, 'Thực tập và dự án');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Chỉ mục cho bảng `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apply_job_id_foreign` (`job_id`),
  ADD KEY `apply_profiles_id_foreign` (`profiles_id`);

--
-- Chỉ mục cho bảng `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_employer_id_foreign` (`employer_id`),
  ADD KEY `companies_career_id_foreign` (`career_id`);

--
-- Chỉ mục cho bảng `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employer_email_unique` (`email`);

--
-- Chỉ mục cho bảng `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_job_code_unique` (`job_code`),
  ADD KEY `job_employer_id_foreign` (`employer_id`),
  ADD KEY `job_company_id_foreign` (`company_id`),
  ADD KEY `job_type_job_id_foreign` (`type_job_id`),
  ADD KEY `job_career_id_foreign` (`career_id`),
  ADD KEY `job_grade_id_foreign` (`grade_id`),
  ADD KEY `job_salary_id_foreign` (`salary_id`),
  ADD KEY `job_degree_id_foreign` (`degree_id`),
  ADD KEY `job_experience_id_foreign` (`experience_id`);

--
-- Chỉ mục cho bảng `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_seeker_email_unique` (`email`);

--
-- Chỉ mục cho bảng `job_suitable`
--
ALTER TABLE `job_suitable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_suitable_profiles_id_foreign` (`profiles_id`),
  ADD KEY `job_suitable_job_id_foreign` (`job_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_job_seeker_id_foreign` (`job_seeker_id`),
  ADD KEY `profiles_type_job_id_foreign` (`type_job_id`),
  ADD KEY `profiles_career_id_foreign` (`career_id`),
  ADD KEY `profiles_grade_id_foreign` (`grade_id`),
  ADD KEY `profiles_salary_id_foreign` (`salary_id`),
  ADD KEY `profiles_degree_id_foreign` (`degree_id`),
  ADD KEY `profiles_experience_id_foreign` (`experience_id`);

--
-- Chỉ mục cho bảng `profiles_suitable`
--
ALTER TABLE `profiles_suitable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_suitable_employer_id_foreign` (`employer_id`),
  ADD KEY `profiles_suitable_job_id_foreign` (`job_id`),
  ADD KEY `profiles_suitable_profiles_id_foreign` (`profiles_id`);

--
-- Chỉ mục cho bảng `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `save_job`
--
ALTER TABLE `save_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `save_job_job_id_foreign` (`job_id`),
  ADD KEY `save_job_job_seeker_id_foreign` (`job_seeker_id`);

--
-- Chỉ mục cho bảng `save_profiles`
--
ALTER TABLE `save_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `save_profiles_job_id_foreign` (`job_id`),
  ADD KEY `save_profiles_profiles_id_foreign` (`profiles_id`),
  ADD KEY `save_profiles_employer_id_foreign` (`employer_id`);

--
-- Chỉ mục cho bảng `type_job`
--
ALTER TABLE `type_job`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `career`
--
ALTER TABLE `career`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `degree`
--
ALTER TABLE `degree`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT cho bảng `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT cho bảng `job_suitable`
--
ALTER TABLE `job_suitable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `profiles_suitable`
--
ALTER TABLE `profiles_suitable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `save_job`
--
ALTER TABLE `save_job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `save_profiles`
--
ALTER TABLE `save_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `type_job`
--
ALTER TABLE `type_job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `apply_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  ADD CONSTRAINT `apply_profiles_id_foreign` FOREIGN KEY (`profiles_id`) REFERENCES `profiles` (`id`);

--
-- Các ràng buộc cho bảng `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_career_id_foreign` FOREIGN KEY (`career_id`) REFERENCES `career` (`id`),
  ADD CONSTRAINT `companies_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`id`);

--
-- Các ràng buộc cho bảng `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_career_id_foreign` FOREIGN KEY (`career_id`) REFERENCES `career` (`id`),
  ADD CONSTRAINT `job_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `job_degree_id_foreign` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`id`),
  ADD CONSTRAINT `job_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`id`),
  ADD CONSTRAINT `job_experience_id_foreign` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`),
  ADD CONSTRAINT `job_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`),
  ADD CONSTRAINT `job_salary_id_foreign` FOREIGN KEY (`salary_id`) REFERENCES `salary` (`id`),
  ADD CONSTRAINT `job_type_job_id_foreign` FOREIGN KEY (`type_job_id`) REFERENCES `type_job` (`id`);

--
-- Các ràng buộc cho bảng `job_suitable`
--
ALTER TABLE `job_suitable`
  ADD CONSTRAINT `job_suitable_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  ADD CONSTRAINT `job_suitable_profiles_id_foreign` FOREIGN KEY (`profiles_id`) REFERENCES `profiles` (`id`);

--
-- Các ràng buộc cho bảng `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_career_id_foreign` FOREIGN KEY (`career_id`) REFERENCES `career` (`id`),
  ADD CONSTRAINT `profiles_degree_id_foreign` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`id`),
  ADD CONSTRAINT `profiles_experience_id_foreign` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`),
  ADD CONSTRAINT `profiles_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`),
  ADD CONSTRAINT `profiles_job_seeker_id_foreign` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`id`),
  ADD CONSTRAINT `profiles_salary_id_foreign` FOREIGN KEY (`salary_id`) REFERENCES `salary` (`id`),
  ADD CONSTRAINT `profiles_type_job_id_foreign` FOREIGN KEY (`type_job_id`) REFERENCES `type_job` (`id`);

--
-- Các ràng buộc cho bảng `profiles_suitable`
--
ALTER TABLE `profiles_suitable`
  ADD CONSTRAINT `profiles_suitable_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`id`),
  ADD CONSTRAINT `profiles_suitable_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  ADD CONSTRAINT `profiles_suitable_profiles_id_foreign` FOREIGN KEY (`profiles_id`) REFERENCES `profiles` (`id`);

--
-- Các ràng buộc cho bảng `save_job`
--
ALTER TABLE `save_job`
  ADD CONSTRAINT `save_job_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  ADD CONSTRAINT `save_job_job_seeker_id_foreign` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`id`);

--
-- Các ràng buộc cho bảng `save_profiles`
--
ALTER TABLE `save_profiles`
  ADD CONSTRAINT `save_profiles_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`id`),
  ADD CONSTRAINT `save_profiles_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`),
  ADD CONSTRAINT `save_profiles_profiles_id_foreign` FOREIGN KEY (`profiles_id`) REFERENCES `profiles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
