-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 01:52 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhanvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ma_nv` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phongban` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luong` float NOT NULL,
  `ngayvaolam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`ma_nv`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
(1, 'Phạm Văn A', 'nhân viên', 'Phòng Kế Toán', 4000000, '2010-12-10'),
(2, 'Nguyễn Văn B', 'Thủ quỹ', 'Phòng Kế Toán', 5000000, '2010-09-10'),
(3, 'Lê Văn C', 'nhân viên', 'Phòng Kế Toán', 4000000, '2010-04-09'),
(4, 'Vũ Văn D', 'Phó phòng', 'Phòng Kế Toán', 6000000, '2009-01-10'),
(5, 'Phạm Văn E', 'nhân viên', 'Phòng Chính trị', 5000000, '2010-09-10'),
(6, 'Phạm Văn F', 'nhân viên', 'Phòng Chính trị', 5000000, '2009-12-03'),
(7, 'Nguyễn Thị G', 'thủ quỹ', 'Phòng Chính trị', 6000000, '2010-03-01'),
(8, 'Lê Văn F', 'nhân viên', 'Phòng Kiểm kê', 6000000, '2010-01-10'),
(9, 'Phạm Văn K', 'nhân viên', 'Phòng kiểm kê', 6000000, '2010-12-10'),
(10, 'Nguyễn Văn L', 'nhân viên', 'Phòng Kiểm kê', 4000000, '2010-12-10'),
(11, 'Phạm Văn M', 'Phó phòng', 'Phòng Kiểm kê', 8000000, '2010-12-10');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ma_nv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
