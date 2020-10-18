-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2020 lúc 03:20 PM
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
-- Cơ sở dữ liệu: `db_tvl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangcap`
--

CREATE TABLE `bangcap` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bangcap`
--

INSERT INTO `bangcap` (`id`, `name`) VALUES
(1, 'Tất cả trình độ'),
(2, 'Lao động phổ thông'),
(3, 'Trung học'),
(4, 'Trung cấp'),
(5, 'Cao đẳng'),
(6, 'Đại học'),
(7, 'Trên đại học'),
(8, 'Thạc sĩ'),
(9, 'Tiến sĩ'),
(10, 'Giáo sư'),
(11, 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `capbac`
--

CREATE TABLE `capbac` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `capbac`
--

INSERT INTO `capbac` (`id`, `name`) VALUES
(0, 'Mới tốt nghiệp / Thực tập sinh'),
(1, 'Nhân viên'),
(2, 'Nhóm trưởng'),
(3, 'Trưởng phòng'),
(4, 'Phó giám đốc'),
(5, 'Giám đốc'),
(6, 'Tổng giám đốc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietlvhd`
--

CREATE TABLE `chitietlvhd` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `idparent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietlvhd`
--

INSERT INTO `chitietlvhd` (`id`, `name`, `idparent`) VALUES
(3, 'Xây dựng nhà các loại', 3),
(4, 'Xây dựng công trình kỹ thuật dân dụng', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congty`
--

CREATE TABLE `congty` (
  `id` int(11) NOT NULL,
  `idnhatuyendung` int(11) NOT NULL COMMENT 'Liên kết với bản Nhà tuyển dụng',
  `tencongty` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `tinh` varchar(20) NOT NULL,
  `quymo` int(2) NOT NULL COMMENT '0: Dưới 20, 1:20-150,2:150-300,3:Trên 300',
  `linhvuchoatdong` int(5) NOT NULL,
  `soluoccongty` text NOT NULL COMMENT 'Giới thiệu sơ lượt về công ty',
  `logo` varchar(100) NOT NULL COMMENT 'URL logo của công ty',
  `website` varchar(30) NOT NULL,
  `sdtcongty` varchar(11) NOT NULL,
  `nguoilienhe` varchar(20) NOT NULL COMMENT 'Người liên hệ',
  `sdtnguoilienhe` varchar(11) NOT NULL COMMENT 'Số điện thoại người liên hệ',
  `dcnguoilienhe` varchar(200) NOT NULL COMMENT 'địa chỉ người liên hệ',
  `emailnguoilienhe` varchar(100) NOT NULL COMMENT 'Email người liên hệ',
  `chucvu` varchar(100) NOT NULL COMMENT 'Chức vụ của người liên hệ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `id` int(11) NOT NULL,
  `idnhatuyendung` int(11) NOT NULL,
  `tencongviec` varchar(200) NOT NULL,
  `soluong` int(4) NOT NULL,
  `loaicongviec` int(5) NOT NULL,
  `capbac` int(5) NOT NULL,
  `mucluong` int(5) NOT NULL,
  `diadiem` varchar(30) NOT NULL,
  `nganhnghe` int(5) NOT NULL,
  `motacongviec` text NOT NULL COMMENT 'Mô tả công việc',
  `quyenloi` text NOT NULL COMMENT 'Quyền lợi công việc',
  `kinhnghiem` int(5) NOT NULL,
  `bangcap` int(5) NOT NULL COMMENT 'Trình độ bằng cấp',
  `gioitinh` tinyint(1) NOT NULL COMMENT '1:Tất cả, 2:Nam, 3 Nữ',
  `deadline` date NOT NULL COMMENT 'Hạn chót nộp hồ sơ',
  `yeucaucongviec` text NOT NULL COMMENT 'Yêu cầu công việc',
  `yeucauhoso` text NOT NULL COMMENT 'Yêu cầu hồ sơ',
  `tennguoilienhe` varchar(100) NOT NULL COMMENT 'Tên người liên hệ',
  `sdtnguoilienhe` varchar(11) NOT NULL COMMENT 'SĐT người liên hệ',
  `emailnguoilienhe` varchar(100) NOT NULL COMMENT 'Email người liên hệ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoso_uv`
--

CREATE TABLE `hoso_uv` (
  `id` int(11) NOT NULL,
  `idungvien` int(11) NOT NULL,
  `vitricongviec` varchar(50) NOT NULL COMMENT 'Vị trí cần tìm',
  `hocvan` int(5) NOT NULL,
  `kinhnghiem` int(5) NOT NULL,
  `noilamviec` int(11) NOT NULL COMMENT 'Nơi làm việc',
  `nghanhnghe` int(5) NOT NULL,
  `loaicongivec` int(5) NOT NULL,
  `capbac` int(5) NOT NULL,
  `mucluong` int(5) NOT NULL,
  `muctieu` text NOT NULL COMMENT 'Mục tiêu nghề nghiệp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinhnghiem`
--

CREATE TABLE `kinhnghiem` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kinhnghiem`
--

INSERT INTO `kinhnghiem` (`id`, `name`) VALUES
(1, 'Tất cả kinh nghiệm'),
(2, 'Chưa có kinh nghiệm'),
(3, 'Dưới 1 năm'),
(4, '1 năm'),
(5, '2 năm'),
(6, '3 năm'),
(7, '4 năm'),
(8, '5 năm'),
(9, 'Trên 5 năm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuchoatdong`
--

CREATE TABLE `linhvuchoatdong` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `linhvuchoatdong`
--

INSERT INTO `linhvuchoatdong` (`id`, `name`) VALUES
(1, 'NÔNG NGHIỆP, LÂM NGHIỆP VÀ THUỶ SẢN'),
(2, 'CÔNG NGHIỆP, CHẾ BIẾN, CHẾ TẠO'),
(3, 'XẬY DỰNG'),
(4, 'THÔNG TIN VÀ TRUYỀN THÔNG'),
(5, 'HOẠT ĐỘNG TÀI CHÍNH, NGÂN HÀNG'),
(6, 'BẤT ĐỘNG SẢN'),
(7, 'GIÁO DỤC VÀ ĐÀO TẠO'),
(8, 'NGHỆ THUẬT, VUI CHƠI, GIẢ TRÍ'),
(9, 'DỊCH VỤ LƯU TRÚ VÀ ĂN UỐNG'),
(10, 'DỊCH VỤ VẬN TẢI'),
(11, 'NÔNG NGHIỆP, LÂM NGHIỆP, THỦY HẢI SẢN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaicongviec`
--

CREATE TABLE `loaicongviec` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaicongviec`
--

INSERT INTO `loaicongviec` (`id`, `name`, `image`) VALUES
(1, 'Nhân viên chính thức', 'official_staff.png'),
(2, 'Nhân viên thời vụ', 'thoi-vu.png'),
(3, 'Bán thời gian', 'part-time-employee.png'),
(4, 'Làm thêm ngoài giờ', 'work-extra-overtime.png'),
(5, 'Thực tập và dự án', 'thuc-tap-sinh.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mucluong`
--

CREATE TABLE `mucluong` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `mucluong`
--

INSERT INTO `mucluong` (`id`, `name`) VALUES
(1, '1-3 triệu'),
(2, '3-5 triệu'),
(3, '5-7 triệu'),
(4, '7-10 triệu'),
(5, '10-12 triệu'),
(6, '12-15 triệu'),
(7, '15-20 triệu'),
(8, '20-25 triệu'),
(9, '25-30 triệu'),
(10, 'Trên 30 triệu'),
(11, 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhnghe`
--

CREATE TABLE `nganhnghe` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nganhnghe`
--

INSERT INTO `nganhnghe` (`id`, `name`) VALUES
(1, 'Kinh doanh'),
(2, 'Bán hàng'),
(3, 'Chăm sóc khách hàng'),
(4, 'Hành chính/Thư ký/Trợ lý'),
(5, 'Tài chính/Kế toán/Kiểm toán'),
(6, 'Cơ khí/Kĩ thuật ứng dụng'),
(7, 'Lao động phổ thông'),
(8, 'Sinh viên/Mới tốt nghiệp/Thực tập'),
(9, 'Điện/Điện tử/Điện lạnh'),
(10, 'Báo chí/Biên tập viên'),
(11, 'Bảo vệ/Vệ sĩ/An ninh'),
(12, 'Bất động sản'),
(13, 'Biên dịch/Phiên dịch'),
(14, 'Bưu chính viễn thông'),
(15, 'Công nghệ thông tin'),
(16, 'Dầu khí/Địa chất'),
(17, 'Dệt may'),
(18, 'Du lịch/Nhà hàng/Khách sạn'),
(19, 'Dược/Hóa chất/Sinh hóa'),
(20, 'Giải trí/Vui chơi'),
(21, 'Giáo dục/Đào tạo/Thư viện'),
(22, 'Giao thông/Vận tải'),
(23, 'Giày da/Thuộc da'),
(24, 'Khác'),
(25, 'Kho vận/Vật tư/Thu mua'),
(26, 'Khu chế xuất/Khu công nghiệp'),
(27, 'Kiến trúc/Nội thất'),
(28, 'Làm đẹp/Thể lực/Spa'),
(29, 'Luật/Pháp lý'),
(30, 'Môi trường/Xử lý chất thải'),
(31, 'Mỹ phẩm/Thời trang/Trang sức'),
(32, 'Ngân hàng/Chứng khoán/Đầu tư'),
(33, 'Nghệ thuật/Điện ảnh'),
(34, 'Ngoại ngữ'),
(35, 'Nhân sự'),
(36, 'Nông/Lâm/Ngư nghiệp'),
(37, 'PG/PB/Lễ tân'),
(38, 'Phát triển thị trường'),
(39, 'Phục vụ/Tạp vụ/Giúp việc'),
(40, 'Quan hệ đối ngoại'),
(41, 'Quản lý điều hành'),
(42, 'Quảng cáo/Marketing/PR'),
(43, 'Sản xuất/Vận hành sản xuất'),
(44, 'Tài xế/Lái xe/Giao nhận'),
(45, 'Thẩm định/Giám định/Quản lý chất lượng'),
(46, 'Thể dục/Thể thao'),
(47, 'Thiết kế/Mỹ thuật'),
(48, 'Thời vụ/Bán thời gian'),
(49, 'Thực phẩm/DV ăn uống'),
(50, 'Trang thiết bị công nghiệp'),
(51, 'Trang thiết bị gia dụng'),
(52, 'Tư vấn bảo hiểm'),
(53, 'Xây dựng'),
(54, 'Xuất-Nhập khẩu/Ngoại thương'),
(55, 'Y tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatuyendung`
--

CREATE TABLE `nhatuyendung` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL COMMENT 'Tên Liên hệ',
  `sodienthoai` varchar(11) NOT NULL,
  `tencongty` varchar(100) NOT NULL COMMENT 'Tên đầy đủ của công ty',
  `linhvuchoatdong` int(5) NOT NULL COMMENT 'Lĩnh vực hoạt động',
  `quymo` int(2) NOT NULL COMMENT 'Quy mô công ty',
  `diachi` varchar(100) NOT NULL COMMENT 'Địa chỉ công ty',
  `tinh` varchar(50) NOT NULL COMMENT 'tỉnh, thành phố'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quymo`
--

CREATE TABLE `quymo` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quymo`
--

INSERT INTO `quymo` (`id`, `name`) VALUES
(1, 'Dưới 20 người'),
(2, '20 - 150 người'),
(3, '150 - 300 người'),
(4, 'Trên 300 người');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtincanhan_uv`
--

CREATE TABLE `thongtincanhan_uv` (
  `id` int(11) NOT NULL,
  `idungvien` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sodienthoai` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `quoctich` varchar(15) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `huyen` varchar(50) NOT NULL,
  `tinh` int(3) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL COMMENT '0: Nam, 1: Nữ',
  `honnhan` tinyint(1) NOT NULL COMMENT '0: độc thân, 1: đã oke',
  `avatar` varchar(150) NOT NULL DEFAULT 'avatar_1.png',
  `cv` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Thông tin các nhân ứng viên';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ungtuyen`
--

CREATE TABLE `ungtuyen` (
  `id` int(11) NOT NULL,
  `idCongviec` int(11) NOT NULL,
  `idUngvien` int(11) NOT NULL,
  `idNhaTuyenDung` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ungvien`
--

CREATE TABLE `ungvien` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sodienthoai` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bangcap`
--
ALTER TABLE `bangcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `capbac`
--
ALTER TABLE `capbac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietlvhd`
--
ALTER TABLE `chitietlvhd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_linhvuchoatdong` (`idparent`);

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nhatuyendung` (`idnhatuyendung`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cv_nhatuyendung` (`idnhatuyendung`),
  ADD KEY `FK_cv_capbac` (`capbac`),
  ADD KEY `FK_cv_mucluong` (`mucluong`),
  ADD KEY `FK_cv_nghanhnghe` (`nganhnghe`),
  ADD KEY `FK_cv_kinhnghiem` (`kinhnghiem`),
  ADD KEY `FK_cv_bangcap` (`bangcap`),
  ADD KEY `FK_cv_gioitinh` (`gioitinh`);

--
-- Chỉ mục cho bảng `hoso_uv`
--
ALTER TABLE `hoso_uv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_hoso_ungvien` (`idungvien`),
  ADD KEY `FK_hoso_hocvan` (`hocvan`),
  ADD KEY `FK_hoso_kinhnghiem` (`kinhnghiem`),
  ADD KEY `FK_hoso_nghanhnghe` (`nghanhnghe`),
  ADD KEY `FK_hoso_loaicongviec` (`loaicongivec`),
  ADD KEY `FK_hoso_capbac` (`capbac`),
  ADD KEY `FK_hoso_mucluong` (`mucluong`);

--
-- Chỉ mục cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `linhvuchoatdong`
--
ALTER TABLE `linhvuchoatdong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaicongviec`
--
ALTER TABLE `loaicongviec`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mucluong`
--
ALTER TABLE `mucluong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ntd_hitietlvhd` (`linhvuchoatdong`) USING BTREE,
  ADD KEY `FK_ntd_quymo` (`quymo`) USING BTREE;

--
-- Chỉ mục cho bảng `quymo`
--
ALTER TABLE `quymo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtincanhan_uv`
--
ALTER TABLE `thongtincanhan_uv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_hsuv_UngVien` (`idungvien`);

--
-- Chỉ mục cho bảng `ungtuyen`
--
ALTER TABLE `ungtuyen`
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
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bangcap`
--
ALTER TABLE `bangcap`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `capbac`
--
ALTER TABLE `capbac`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `chitietlvhd`
--
ALTER TABLE `chitietlvhd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `congty`
--
ALTER TABLE `congty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `hoso_uv`
--
ALTER TABLE `hoso_uv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `linhvuchoatdong`
--
ALTER TABLE `linhvuchoatdong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `loaicongviec`
--
ALTER TABLE `loaicongviec`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `mucluong`
--
ALTER TABLE `mucluong`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quymo`
--
ALTER TABLE `quymo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thongtincanhan_uv`
--
ALTER TABLE `thongtincanhan_uv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `ungtuyen`
--
ALTER TABLE `ungtuyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `ungvien`
--
ALTER TABLE `ungvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietlvhd`
--
ALTER TABLE `chitietlvhd`
  ADD CONSTRAINT `FK_linhvuchoatdong` FOREIGN KEY (`idparent`) REFERENCES `linhvuchoatdong` (`id`);

--
-- Các ràng buộc cho bảng `congty`
--
ALTER TABLE `congty`
  ADD CONSTRAINT `FK_nhatuyendung` FOREIGN KEY (`idnhatuyendung`) REFERENCES `nhatuyendung` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `FK_cv_bangcap` FOREIGN KEY (`bangcap`) REFERENCES `bangcap` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_cv_capbac` FOREIGN KEY (`capbac`) REFERENCES `capbac` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_cv_kinhnghiem` FOREIGN KEY (`kinhnghiem`) REFERENCES `kinhnghiem` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_cv_mucluong` FOREIGN KEY (`mucluong`) REFERENCES `mucluong` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_cv_nghanhnghe` FOREIGN KEY (`nganhnghe`) REFERENCES `nganhnghe` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_cv_nhatuyendung` FOREIGN KEY (`idnhatuyendung`) REFERENCES `nhatuyendung` (`id`);

--
-- Các ràng buộc cho bảng `hoso_uv`
--
ALTER TABLE `hoso_uv`
  ADD CONSTRAINT `FK_hoso_capbac` FOREIGN KEY (`capbac`) REFERENCES `capbac` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_hoso_hocvan` FOREIGN KEY (`hocvan`) REFERENCES `bangcap` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_hoso_kinhnghiem` FOREIGN KEY (`kinhnghiem`) REFERENCES `kinhnghiem` (`id`),
  ADD CONSTRAINT `FK_hoso_loaicongviec` FOREIGN KEY (`loaicongivec`) REFERENCES `loaicongviec` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_hoso_mucluong` FOREIGN KEY (`mucluong`) REFERENCES `mucluong` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_hoso_nghanhnghe` FOREIGN KEY (`nghanhnghe`) REFERENCES `nganhnghe` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_hoso_ungvien` FOREIGN KEY (`idungvien`) REFERENCES `ungvien` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD CONSTRAINT `FK_chitietlvhd` FOREIGN KEY (`linhvuchoatdong`) REFERENCES `chitietlvhd` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_quymo` FOREIGN KEY (`quymo`) REFERENCES `quymo` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `thongtincanhan_uv`
--
ALTER TABLE `thongtincanhan_uv`
  ADD CONSTRAINT `FK_ttcnuv_UngVien` FOREIGN KEY (`idungvien`) REFERENCES `ungvien` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
