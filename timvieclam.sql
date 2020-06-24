-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2020 lúc 07:22 PM
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
-- Cấu trúc bảng cho bảng `capbac`
--

CREATE TABLE `capbac` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `capbac`
--

INSERT INTO `capbac` (`id`, `name`) VALUES
(1, 'Nhân viên'),
(2, 'Trưởng nhóm'),
(3, 'Trưởng phòng'),
(4, 'Phó giám đốc'),
(5, 'Giám đốc'),
(6, 'Tổng giám đốc điều hành'),
(7, 'Thực tập sinh'),
(8, 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `id` int(11) NOT NULL,
  `idNhaTuyenDung` int(11) NOT NULL,
  `tenCongViec` varchar(150) NOT NULL,
  `soluong` int(4) NOT NULL,
  `idCapBac` int(11) NOT NULL,
  `mucLuong` varchar(15) NOT NULL,
  `diaDiem` varchar(30) NOT NULL,
  `idNganhNghe` int(11) NOT NULL,
  `moTa` text NOT NULL COMMENT 'Mô tả công việc',
  `quyenLoi` text NOT NULL COMMENT 'Quyền lợi công việc',
  `kinhNghiem` varchar(20) NOT NULL,
  `trinhDo` varchar(20) NOT NULL COMMENT 'Trình độ bằng cấp',
  `gioiTinh` varchar(5) NOT NULL,
  `deadline` date NOT NULL,
  `yeuCau` text NOT NULL COMMENT 'Yêu cầu công việc',
  `yeuCauHoSo` text NOT NULL COMMENT 'Yêu cầu hồ sơ',
  `tenNguoiLienHe` varchar(100) NOT NULL COMMENT 'Tên người liên hệ',
  `phoneNLH` varchar(11) NOT NULL COMMENT 'SĐT người liên hệ',
  `emailNLH` varchar(100) NOT NULL COMMENT 'Email người liên hệ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`id`, `idNhaTuyenDung`, `tenCongViec`, `soluong`, `idCapBac`, `mucLuong`, `diaDiem`, `idNganhNghe`, `moTa`, `quyenLoi`, `kinhNghiem`, `trinhDo`, `gioiTinh`, `deadline`, `yeuCau`, `yeuCauHoSo`, `tenNguoiLienHe`, `phoneNLH`, `emailNLH`) VALUES
(1, 1, 'Nhân viên thết kế Web chuyên nghiệp', 2, 1, '12', 'TP. Hồ Chí Minh', 15, '- Tiếp nhận và phân tích các yêu cầu thiết kế từ khách hàng để tư vấn, định hướng thiết kế cho khách hàng;\r\n- Làm concept và lên phối cảnh 3D của công trình;\r\n- Tư vấn cho khách hàng ý tưởng thiết kế, tư vấn thiết kế, tư vấn chất liệu/ vật liệu thi công,...\r\n- Lập, triển khai bản vẽ sơ bộ và phối hợp với kỹ Thuật để triển khai bản vẽ thi công;\r\n- Giám sát tác quyền…', '- Lương cơ bản từ 10 - 12 triệu\r\n- Thu nhập hấp dẫn ( được hưởng % hoa hồng thiết kế và thi công các dự án)\r\n- Xét tăng lương hàng năm\r\n- Môi trường làm việc mở, trẻ trung, năng động, văn minh.\r\n- Thưởng các ngày lễ, thưởng lương tháng 13 đầy đủ\r\n- Tham gia BHXH, BHYT, BHTN theo quy định Nhà nước\r\n- Hàng năm được tham gia nghỉ mát, thăm quan và nhiều hoạt động ngoại khóa.\r\n- Thường xuyên được đào tạo, nâng cao kỹ năng\r\n- Có nhiều cơ hội thăng tiến', '2 năm', 'Đại học', 'Nam', '2020-06-24', '- Tốt nghiệp Đại học chuyên ngành Công nghệ thông tin hệ chính quy tập trung.\r\n- Tiếng Anh theo chuẩn Quốc tế IELTS tối thiểu 4.0 hoặc TOEIC tối thiểu 350 hoặc có chứng chỉ tương đương; trường hợp tại thời điểm tuyển dụng, nếu nhân sự chưa đáp ứng trình độ ngoại ngữ thì đơn vị có thể xem xét tuyển dụng nhưng người lao động phải cam kết tự đào tạo để đáp ứng yêu cầu chức danh trong thoài gian giao kết hợp đồng xác định thời hạn.\r\n- Độ tuổi không quá 27 tuổi; trường hợp ứng viên là lao động thuê lại đang làm việc cho VNPT Bình Phước, trường hợp không giới hạn độ tuổi tuyển dụng khi ứng viên đáp ứng ít nhất một trong các điều kiện sau:\r\n+ Đã tham gia tối thiểu 03 dự án lớn triển khai cho các khách hàng là các tổ chức/doanh nghiệp uy tín trong và ngoài nước;\r\n+ Có các sản phẩm, công trình nghiên cứu trong lĩnh vực CNTT đạt giải thưởng của các tổ chức uy tín trong nước và quốc tế;\r\n+ Chuyên gia trong các lĩnh vực nghiên cứu phát triển công nghệ mới, cơ sở dữ liệu, giải pháp tích hợp hệ thống; phân tích thiết kế hệ thống, sản phẩm phần mềm.\r\nb. Về kiến thức, kinh nghiệm, kỹ năng, phẩm chất, thái độ:\r\nNhân sự được tuyển dụng phải đáp ứng về kiến thức, kinh nghiệm, kỹ năng, phẩm chất, thái độ làm việc theo yêu cầu của vị trí công việc.', '- Đơn xin tham gia dự tuyển/đơn xin việc (ký 01 bản);\r\n- Bản sơ yếu lý lịch loại 8 trang có dán ảnh 4x6, người khai phải ký tên, có xác nhận của địa phương nơi đăng ký hộ khẩu thường trú (có giá trị trong thời hạn 6 tháng gần nhất);\r\n- Giấy khám sức khỏe của các cơ sở y tế có thẩm quyền (có giá trị trong thời hạn 03 tháng gần nhất);\r\n- Bản sao công chứng hợp pháp các giấy tờ sau: Bằng tốt nghiệp PTTH, học bạ cấp 3; Bằng tốt nghiệp đại học, các chứng chỉ đào tạo; Kết quả học tập theo các văn bằng chứng chỉ; Giấy CMND, giấy khai sinh, hộ khẩu; Giấy chứng nhận ưu tiên (nếu có);\r\n- Ảnh 3x4 và ảnh 4x6 (mỗi loại 02 ảnh).\r\n- Bản tóm tắt thông tin cá nhân của người dự tuyển về quá trình học tập, công tác, kinh nghiệm làm việc, … của bản thân.', 'Đoàn Quốc Dũng', '0398022720', 'doanquocdung55@gmail.com'),
(2, 1, 'Nhân viên thiết kế đồ họa', 2, 1, '12', 'TP. Hồ Chí Minh', 15, '- Tiếp nhận và phân tích các yêu cầu thiết kế từ khách hàng để tư vấn, định hướng thiết kế cho khách hàng;\r\n- Làm concept và lên phối cảnh 3D của công trình;\r\n- Tư vấn cho khách hàng ý tưởng thiết kế, tư vấn thiết kế, tư vấn chất liệu/ vật liệu thi công,...\r\n- Lập, triển khai bản vẽ sơ bộ và phối hợp với kỹ Thuật để triển khai bản vẽ thi công;\r\n- Giám sát tác quyền…', '- Lương cơ bản từ 10 - 12 triệu\r\n- Thu nhập hấp dẫn ( được hưởng % hoa hồng thiết kế và thi công các dự án)\r\n- Xét tăng lương hàng năm\r\n- Môi trường làm việc mở, trẻ trung, năng động, văn minh.\r\n- Thưởng các ngày lễ, thưởng lương tháng 13 đầy đủ\r\n- Tham gia BHXH, BHYT, BHTN theo quy định Nhà nước\r\n- Hàng năm được tham gia nghỉ mát, thăm quan và nhiều hoạt động ngoại khóa.\r\n- Thường xuyên được đào tạo, nâng cao kỹ năng\r\n- Có nhiều cơ hội thăng tiến', '2 năm', 'Đại học', 'Nam', '2020-06-24', '- Tốt nghiệp Đại học chuyên ngành Công nghệ thông tin hệ chính quy tập trung.\r\n- Tiếng Anh theo chuẩn Quốc tế IELTS tối thiểu 4.0 hoặc TOEIC tối thiểu 350 hoặc có chứng chỉ tương đương; trường hợp tại thời điểm tuyển dụng, nếu nhân sự chưa đáp ứng trình độ ngoại ngữ thì đơn vị có thể xem xét tuyển dụng nhưng người lao động phải cam kết tự đào tạo để đáp ứng yêu cầu chức danh trong thoài gian giao kết hợp đồng xác định thời hạn.\r\n- Độ tuổi không quá 27 tuổi; trường hợp ứng viên là lao động thuê lại đang làm việc cho VNPT Bình Phước, trường hợp không giới hạn độ tuổi tuyển dụng khi ứng viên đáp ứng ít nhất một trong các điều kiện sau:\r\n+ Đã tham gia tối thiểu 03 dự án lớn triển khai cho các khách hàng là các tổ chức/doanh nghiệp uy tín trong và ngoài nước;\r\n+ Có các sản phẩm, công trình nghiên cứu trong lĩnh vực CNTT đạt giải thưởng của các tổ chức uy tín trong nước và quốc tế;\r\n+ Chuyên gia trong các lĩnh vực nghiên cứu phát triển công nghệ mới, cơ sở dữ liệu, giải pháp tích hợp hệ thống; phân tích thiết kế hệ thống, sản phẩm phần mềm.\r\nb. Về kiến thức, kinh nghiệm, kỹ năng, phẩm chất, thái độ:\r\nNhân sự được tuyển dụng phải đáp ứng về kiến thức, kinh nghiệm, kỹ năng, phẩm chất, thái độ làm việc theo yêu cầu của vị trí công việc.', '- Đơn xin tham gia dự tuyển/đơn xin việc (ký 01 bản);\r\n- Bản sơ yếu lý lịch loại 8 trang có dán ảnh 4x6, người khai phải ký tên, có xác nhận của địa phương nơi đăng ký hộ khẩu thường trú (có giá trị trong thời hạn 6 tháng gần nhất);\r\n- Giấy khám sức khỏe của các cơ sở y tế có thẩm quyền (có giá trị trong thời hạn 03 tháng gần nhất);\r\n- Bản sao công chứng hợp pháp các giấy tờ sau: Bằng tốt nghiệp PTTH, học bạ cấp 3; Bằng tốt nghiệp đại học, các chứng chỉ đào tạo; Kết quả học tập theo các văn bằng chứng chỉ; Giấy CMND, giấy khai sinh, hộ khẩu; Giấy chứng nhận ưu tiên (nếu có);\r\n- Ảnh 3x4 và ảnh 4x6 (mỗi loại 02 ảnh).\r\n- Bản tóm tắt thông tin cá nhân của người dự tuyển về quá trình học tập, công tác, kinh nghiệm làm việc, … của bản thân.', 'Đoàn Quốc Dũng', '0398022720', 'doanquocdung55@gmail.com'),
(3, 1, 'Nhân viên kĩ thuật ', 2, 1, '12', 'TP. Hồ Chí Minh', 15, '- Tiếp nhận và phân tích các yêu cầu thiết kế từ khách hàng để tư vấn, định hướng thiết kế cho khách hàng;\r\n- Làm concept và lên phối cảnh 3D của công trình;\r\n- Tư vấn cho khách hàng ý tưởng thiết kế, tư vấn thiết kế, tư vấn chất liệu/ vật liệu thi công,...\r\n- Lập, triển khai bản vẽ sơ bộ và phối hợp với kỹ Thuật để triển khai bản vẽ thi công;\r\n- Giám sát tác quyền…', '- Lương cơ bản từ 10 - 12 triệu\r\n- Thu nhập hấp dẫn ( được hưởng % hoa hồng thiết kế và thi công các dự án)\r\n- Xét tăng lương hàng năm\r\n- Môi trường làm việc mở, trẻ trung, năng động, văn minh.\r\n- Thưởng các ngày lễ, thưởng lương tháng 13 đầy đủ\r\n- Tham gia BHXH, BHYT, BHTN theo quy định Nhà nước\r\n- Hàng năm được tham gia nghỉ mát, thăm quan và nhiều hoạt động ngoại khóa.\r\n- Thường xuyên được đào tạo, nâng cao kỹ năng\r\n- Có nhiều cơ hội thăng tiến', '2 năm', 'Đại học', 'Nam', '2020-06-24', '- Tốt nghiệp Đại học chuyên ngành Công nghệ thông tin hệ chính quy tập trung.\r\n- Tiếng Anh theo chuẩn Quốc tế IELTS tối thiểu 4.0 hoặc TOEIC tối thiểu 350 hoặc có chứng chỉ tương đương; trường hợp tại thời điểm tuyển dụng, nếu nhân sự chưa đáp ứng trình độ ngoại ngữ thì đơn vị có thể xem xét tuyển dụng nhưng người lao động phải cam kết tự đào tạo để đáp ứng yêu cầu chức danh trong thoài gian giao kết hợp đồng xác định thời hạn.\r\n- Độ tuổi không quá 27 tuổi; trường hợp ứng viên là lao động thuê lại đang làm việc cho VNPT Bình Phước, trường hợp không giới hạn độ tuổi tuyển dụng khi ứng viên đáp ứng ít nhất một trong các điều kiện sau:\r\n+ Đã tham gia tối thiểu 03 dự án lớn triển khai cho các khách hàng là các tổ chức/doanh nghiệp uy tín trong và ngoài nước;\r\n+ Có các sản phẩm, công trình nghiên cứu trong lĩnh vực CNTT đạt giải thưởng của các tổ chức uy tín trong nước và quốc tế;\r\n+ Chuyên gia trong các lĩnh vực nghiên cứu phát triển công nghệ mới, cơ sở dữ liệu, giải pháp tích hợp hệ thống; phân tích thiết kế hệ thống, sản phẩm phần mềm.\r\nb. Về kiến thức, kinh nghiệm, kỹ năng, phẩm chất, thái độ:\r\nNhân sự được tuyển dụng phải đáp ứng về kiến thức, kinh nghiệm, kỹ năng, phẩm chất, thái độ làm việc theo yêu cầu của vị trí công việc.', '- Đơn xin tham gia dự tuyển/đơn xin việc (ký 01 bản);\r\n- Bản sơ yếu lý lịch loại 8 trang có dán ảnh 4x6, người khai phải ký tên, có xác nhận của địa phương nơi đăng ký hộ khẩu thường trú (có giá trị trong thời hạn 6 tháng gần nhất);\r\n- Giấy khám sức khỏe của các cơ sở y tế có thẩm quyền (có giá trị trong thời hạn 03 tháng gần nhất);\r\n- Bản sao công chứng hợp pháp các giấy tờ sau: Bằng tốt nghiệp PTTH, học bạ cấp 3; Bằng tốt nghiệp đại học, các chứng chỉ đào tạo; Kết quả học tập theo các văn bằng chứng chỉ; Giấy CMND, giấy khai sinh, hộ khẩu; Giấy chứng nhận ưu tiên (nếu có);\r\n- Ảnh 3x4 và ảnh 4x6 (mỗi loại 02 ảnh).\r\n- Bản tóm tắt thông tin cá nhân của người dự tuyển về quá trình học tập, công tác, kinh nghiệm làm việc, … của bản thân.', 'Đoàn Quốc Dũng', '0398022720', 'doanquocdung55@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosocongty`
--

CREATE TABLE `hosocongty` (
  `id` int(11) NOT NULL,
  `idNhaTuyeDung` int(11) NOT NULL,
  `tenCty` varchar(100) NOT NULL,
  `diaChi` varchar(100) NOT NULL,
  `tinh` varchar(20) NOT NULL,
  `quyMo` varchar(20) NOT NULL,
  `idNganhNghe` int(11) NOT NULL,
  `soLuocCty` text NOT NULL,
  `logoCty` varchar(100) NOT NULL,
  `website` varchar(30) NOT NULL,
  `phoneCty` varchar(11) NOT NULL,
  `nguoiLH` varchar(20) NOT NULL COMMENT 'Người liên hệ',
  `phoneNguoiLH` varchar(11) NOT NULL,
  `dcNguoiLH` varchar(200) NOT NULL COMMENT 'địa chỉ người liên hệ',
  `emailNLH` varchar(100) NOT NULL COMMENT 'Email người liên hệ',
  `chuVu` varchar(100) NOT NULL COMMENT 'Chức vụ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hosocongty`
--

INSERT INTO `hosocongty` (`id`, `idNhaTuyeDung`, `tenCty`, `diaChi`, `tinh`, `quyMo`, `idNganhNghe`, `soLuocCty`, `logoCty`, `website`, `phoneCty`, `nguoiLH`, `phoneNguoiLH`, `dcNguoiLH`, `emailNLH`, `chuVu`) VALUES
(1, 1, 'CTy NTHH TM DV Công Nghệ Thành Nhân', '992 Âu cơ, phường 14, Tân bình', 'TP. Hồ Chí Minh', '10 người', 15, 'Công ty như loằn', 'thiet-ke-logo-cong-ty-thang-long-1.jpg', 'thanhnhancomputer.vn', '0398022720', 'Đoàn Quốc Dũng', '0398022147', 'Gò Vấp', 'Doanquocdung55@gmail.com', 'Trưởng phòng nhân sự');

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
-- Cấu trúc bảng cho bảng `nganhnghe`
--

CREATE TABLE `nganhnghe` (
  `id` int(11) NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `nhatuyedung`
--

INSERT INTO `nhatuyedung` (`id`, `email`, `password`, `hoTen`, `soDienThoai`, `tenCty`, `linhVucHD`, `quyMo`, `diaChi`, `tinh`) VALUES
(1, 'dungdq5520@gmail.com', '$2y$10$HzpjWmhiEJLXrT53ZQMIOOnyj2HDO03rkGOrssTIDK/yYPpSIxJNi', 'Đoàn Quốc Dũng', '0398022720', 'Liên Hiệp HTX Thương Mại TP. Hồ Chí Minh', 'CNTT', '50 người', '992 Âu Cơ, Phường 14, Quận Tân Bình', 'TP. Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ungvien`
--

CREATE TABLE `ungvien` (
  `id` int(11) NOT NULL,
  `hoTen` varchar(50) NOT NULL,
  `soDienThoai` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ungvien`
--

INSERT INTO `ungvien` (`id`, `hoTen`, `soDienThoai`, `email`, `password`) VALUES
(1, 'Đoàn Quốc Dũng', '0398022720', 'dungdqps08542@fpt.edu.vn', '$2y$10$HzpjWmhiEJLXrT53ZQMIOOnyj2HDO03rkGOrssTIDK/yYPpSIxJNi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `capbac`
--
ALTER TABLE `capbac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CongViec_NhaTuyenDung` (`idNhaTuyenDung`),
  ADD KEY `FK_CongViec_NghanhNghe` (`idNganhNghe`),
  ADD KEY `FK_CongViec_CapBac` (`idCapBac`);

--
-- Chỉ mục cho bảng `hosocongty`
--
ALTER TABLE `hosocongty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_hsct_NhaTuyenDung` (`idNhaTuyeDung`),
  ADD KEY `FK_hsct_NganhNghe` (`idNganhNghe`);

--
-- Chỉ mục cho bảng `hosoungvien`
--
ALTER TABLE `hosoungvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_hsuv_UngVien` (`idUngVien`);

--
-- Chỉ mục cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
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
-- AUTO_INCREMENT cho bảng `capbac`
--
ALTER TABLE `capbac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hosocongty`
--
ALTER TABLE `hosocongty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hosoungvien`
--
ALTER TABLE `hosoungvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `nhatuyedung`
--
ALTER TABLE `nhatuyedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ungvien`
--
ALTER TABLE `ungvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `FK_CongViec_CapBac` FOREIGN KEY (`idCapBac`) REFERENCES `capbac` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_CongViec_NghanhNghe` FOREIGN KEY (`idNganhNghe`) REFERENCES `nganhnghe` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_CongViec_NhaTuyenDung` FOREIGN KEY (`idNhaTuyenDung`) REFERENCES `nhatuyedung` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `hosocongty`
--
ALTER TABLE `hosocongty`
  ADD CONSTRAINT `FK_hsct_NganhNghe` FOREIGN KEY (`idNganhNghe`) REFERENCES `nganhnghe` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_hsct_NhaTuyenDung` FOREIGN KEY (`idNhaTuyeDung`) REFERENCES `nhatuyedung` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `hosoungvien`
--
ALTER TABLE `hosoungvien`
  ADD CONSTRAINT `FK_hsuv_UngVien` FOREIGN KEY (`idUngVien`) REFERENCES `ungvien` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
