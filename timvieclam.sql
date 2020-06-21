-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2020 lúc 11:24 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `id` int(11) NOT NULL,
  `tenCongViec` varchar(150) NOT NULL,
  `soluong` int(4) NOT NULL,
  `capBac` varchar(50) NOT NULL,
  `mucLuong` varchar(15) NOT NULL,
  `diaDiem` varchar(30) NOT NULL,
  `nganhNghe` varchar(30) NOT NULL,
  `moTa` int(11) NOT NULL COMMENT 'Mô tả công việc',
  `quyenLoi` int(11) NOT NULL COMMENT 'Quyền lợi công việc',
  `kinhNghiem` varchar(20) NOT NULL,
  `trinhDo` varchar(20) NOT NULL COMMENT 'Trình độ bằng cấp',
  `gioiTinh` varchar(5) NOT NULL,
  `deadline` date NOT NULL,
  `yeuCau` int(11) NOT NULL COMMENT 'Yêu cầu công việc',
  `yeuCauHoSo` int(11) NOT NULL COMMENT 'Yêu cầu hồ sơ',
  `tenNguoiLienHe` int(11) NOT NULL COMMENT 'Tên người liên hệ',
  `phoneNLH` int(11) NOT NULL COMMENT 'SĐT người liên hệ',
  `emailNLH` int(11) NOT NULL COMMENT 'Email người liên hệ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosocongty`
--

CREATE TABLE `hosocongty` (
  `id` int(11) NOT NULL,
  `idNhaTuyeDung` int(11) NOT NULL,
  `tenCty` varchar(100) NOT NULL,
  `idChi` varchar(100) NOT NULL,
  `tinh` varchar(20) NOT NULL,
  `quyMo` varchar(20) NOT NULL,
  `linhVucHD` varchar(150) NOT NULL,
  `soLuocCty` text NOT NULL,
  `logoCty` varchar(100) NOT NULL,
  `website` varchar(30) NOT NULL,
  `phoneCty` varchar(11) NOT NULL,
  `nguoiLH` varchar(20) NOT NULL COMMENT 'Người liên hệ',
  `phoneNguoiLH` varchar(11) NOT NULL,
  `dcNguoiLH` int(11) NOT NULL COMMENT 'địa chỉ người liên hệ',
  `emailNLH` int(11) NOT NULL COMMENT 'Email người liên hệ',
  `chuVu` int(11) NOT NULL COMMENT 'Chức vụ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosoungvien`
--

CREATE TABLE `hosoungvien` (
  `id` int(11) NOT NULL,
  `idUngVien` int(11) NOT NULL,
  `hoTen` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `quocTich` varchar(15) NOT NULL,
  `diaChi` varchar(100) NOT NULL,
  `tinh` varchar(20) NOT NULL,
  `gioiTinh` varchar(5) NOT NULL,
  `honNhan` varchar(10) NOT NULL,
  `avata` varchar(150) NOT NULL,
  `cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatuyedung`
--

CREATE TABLE `nhatuyedung` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoTen` varchar(100) NOT NULL COMMENT 'Tên Liên hệ',
  `soDienThoai` varchar(10) NOT NULL,
  `tenCty` varchar(100) NOT NULL COMMENT 'Tên đầy đủ của công ty',
  `linhVucHD` varchar(200) NOT NULL COMMENT 'Lĩnh vực hoạt động',
  `quyMo` varchar(20) NOT NULL COMMENT 'Quy mô công ty',
  `diaChi` varchar(100) NOT NULL COMMENT 'Địa chỉ công ty',
  `tinh` varchar(50) NOT NULL COMMENT 'tỉnh, thành phố'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ungvien`
--

CREATE TABLE `ungvien` (
  `id` int(11) NOT NULL,
  `hoTen` int(50) NOT NULL,
  `soDienThoai` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hosocongty`
--
ALTER TABLE `hosocongty`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hosoungvien`
--
ALTER TABLE `hosoungvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhatuyedung`
--
ALTER TABLE `nhatuyedung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ungvien`
--
ALTER TABLE `ungvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hosocongty`
--
ALTER TABLE `hosocongty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hosoungvien`
--
ALTER TABLE `hosoungvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhatuyedung`
--
ALTER TABLE `nhatuyedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ungvien`
--
ALTER TABLE `ungvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
