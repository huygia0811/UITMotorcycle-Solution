-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 04:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_uitmotorcycle`
--

-- --------------------------------------------------------

--
-- Table structure for table `cthd`
--

CREATE TABLE `cthd` (
  `SOHD` int(11) NOT NULL,
  `MASP` int(10) NOT NULL,
  `SL` int(5) DEFAULT NULL,
  `TRANGTHAI` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hangxe`
--

CREATE TABLE `hangxe` (
  `MAHANG` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `TENHANG` char(50) DEFAULT NULL,
  `URLIMAGE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hangxe`
--

INSERT INTO `hangxe` (`TENHANG`, `URLIMAGE`) VALUES
('Honda', 'Asset/DB-Picture/Honda.png'),
('Suzuki', 'Asset/DB-Picture/Suzuki.png'),
('Yamaha', 'Asset/DB-Picture/Yamaha.png'),
('SYM', 'Asset/DB-Picture/SYM.png');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `SOHD` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `NGHD` datetime DEFAULT NULL,
  `MAKH` int(10) NOT NULL,
  `MANV` int(10) NOT NULL,
  `TRIGIA` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `HOTEN` varchar(100) DEFAULT NULL,
  `DCHI` varchar(200) DEFAULT NULL,
  `SODT` varchar(12) DEFAULT NULL,
  `NGSINH` datetime DEFAULT NULL,
  `NGDK` datetime DEFAULT NULL,
  `SODU` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--


-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `HOTEN` varchar(40) DEFAULT NULL,
  `SODT` varchar(20) DEFAULT NULL,
  `DIACHI` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--



-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `MAHANG` int(10) DEFAULT NULL,
  `TENSP` varchar(200) DEFAULT NULL,
  `PHANKHOI` varchar(20) DEFAULT NULL,
  `MAU` varchar(20) DEFAULT NULL,
  `NAMSX` varchar(4) DEFAULT NULL,
  `GIA` int(20) DEFAULT NULL,
  `LOAIXE` int(2) DEFAULT NULL,
  `URL_IMAGE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MAHANG`, `TENSP`, `PHANKHOI`, `MAU`, `NAMSX`, `GIA`, `LOAIXE`, `URL_IMAGE`) VALUES
('1', 'CB150R The Streetster', '150cc', 'Đen', '2022', 105500000, 3, 'Asset/DB-Picture/XPKL_1.png'),
('1', 'Gold Wing', '1833cc', 'Đen', '2022', 123100000, 3, 'Asset/DB-Picture/XPKL_10.png'),
('1', 'Gold Wing', '1833cc', 'Trắng', '2022', 123100000, 3, 'Asset/DB-Picture/XPKL_11.png'),
('2', 'GSX-S150', '150cc', 'Đen', '2022', 145000000, 3, 'Asset/DB-Picture/XPKL_12.jpg'),
('2', 'GSX-S150', '150cc', 'Xanh Đen', '2022', 145000000, 3, 'Asset/DB-Picture/XPKL_13.jpg'),
('2', 'Satria F150', '150cc', 'Đen', '2022', 59000000, 3, 'Asset/DB-Picture/XPKL_14.png'),
('3', 'MT-07', '689cc', 'Xanh', '2022', 259000000, 3, 'Asset/DB-Picture/XPKL_15.jpg'),
('3', 'MT-07', '689cc', 'Đen', '2022', 259000000, 3, 'Asset/DB-Picture/XPKL_16.jpg'),
('3', 'MT-10', '998cc', 'Đen', '2022', 439000000, 3, 'Asset/DB-Picture/XPKL_17.jpg'),
('3', 'MT-10', '998cc', 'Xám', '2022', 439000000, 3, 'Asset/DB-Picture/XPKL_18.jpg'),
('3', 'Tracer 9', '890cc', 'Đỏ', '2022', 369000000, 3, 'Asset/DB-Picture/XPKL_19.jpg'),
('1', 'Winner X', '150cc', 'Trắng Đen', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_2.png'),
('3', 'Tracer 9', '890cc', 'Đen', '2022', 369000000, 3, 'Asset/DB-Picture/XPKL_20.jpg'),
('1', 'Winner X', '150cc', 'Bạc Đen', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_3.png'),
('1', 'Winner X', '150cc', 'Đỏ Đen', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_4.png'),
('1', 'Winner X', '150cc', 'Đỏ Đen Xanh', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_5.png'),
('1', 'Winner X', '150cc', 'Đen vàng', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_6.png'),
('1', 'Rebel 1100', '1084cc', 'Đen', '2022', 449000000, 3, 'Asset/DB-Picture/XPKL_7.png'),
('1', 'Rebel 1100', '1084cc', 'Nâu', '2022', 449000000, 3, 'Asset/DB-Picture/XPKL_8.png'),
('1', 'Gold Wing', '1833cc', 'Xanh', '2022', 123100000, 3, 'Asset/DB-Picture/XPKL_9.png'),
('1', 'Wave Alpha 110cc phiên bản 2023', '110cc', 'Đỏ, bạc', '2022', 17859273, 1, 'Asset/DB-Picture/xs01.png'),
('1', 'Future 125 FI', '125cc', 'Trắng, đen', '2020', 31506545, 1, 'Asset/DB-Picture/xs10.png'),
('1', 'Future 125 FI', '125cc', 'Xanh, đen', '2020', 31506545, 1, 'Asset/DB-Picture/xs11.png'),
('1', 'Future 125 FI', '125cc', 'Đỏ, đen', '2020', 31506545, 1, 'Asset/DB-Picture/xs12.png'),
('1', 'Future 125 FI', '125cc', 'Đen', '2020', 31997455, 1, 'Asset/DB-Picture/xs13.png'),
('1', 'Future 125 FI', '125cc', 'Xanh, đen', '2020', 31997455, 1, 'Asset/DB-Picture/xs14.png'),
('1', 'Future 125 FI', '125cc', 'Đỏ, đen', '2020', 30328363, 1, 'Asset/DB-Picture/xs15.png'),
('1', 'Future 125 FI', '125cc', 'Xanh, đen', '2020', 30328363, 1, 'Asset/DB-Picture/xs16.png'),
('1', 'Super Cub C125', '125cc', 'Đen', '2021', 86782909, 1, 'Asset/DB-Picture/xs17.png'),
('1', 'Super Cub C126', '125cc', 'Xanh, trắng', '2021', 85801091, 1, 'Asset/DB-Picture/xs18.png'),
('1', 'Super Cub C127', '125cc', 'Xanh, trắng', '2021', 85801091, 1, 'Asset/DB-Picture/xs19.png'),
('1', 'Wave Alpha 110cc phiên bản 2024', '110cc', 'Trắng, bạc', '2022', 17859273, 1, 'Asset/DB-Picture/xs02.png'),
('1', 'Super Cub C128', '125cc', 'Đỏ, trắng', '2021', 85801091, 1, 'Asset/DB-Picture/xs20.png'),
('1', 'Wave RSX FI 110', '110cc', 'Trắng, đen', '2020', 24633818, 1, 'Asset/DB-Picture/xs21.png'),
('1', 'Wave RSX FI 111', '110cc', 'Đỏ, đen', '2020', 24633818, 1, 'Asset/DB-Picture/xs22.png'),
('1', 'Wave RSX FI 112', '110cc', 'Xanh, đen', '2020', 24633818, 1, 'Asset/DB-Picture/xs23.png'),
('3', 'Exciter 150 Phiên bản RC', '150cc', 'Đen', '2020', 44800000, 1, 'Asset/DB-Picture/xs24.png'),
('3', 'Exciter 150 Phiên bản RC', '150cc', 'Đỏ, đen', '2020', 44800000, 1, 'Asset/DB-Picture/xs25.png'),
('3', 'Exciter 150 Phiên bản RC', '150cc', 'Xám, đen, cam', '2020', 44800000, 1, 'Asset/DB-Picture/xs26.png'),
('3', 'Exciter 150 Phiên bản RC', '150cc', 'Trắng, đỏ, đen', '2020', 44800000, 1, 'Asset/DB-Picture/xs27.png'),
('3', 'Jupiter FI Phiên bản tiêu chuẩn', '114cc', 'Đen', '2022', 30000000, 1, 'Asset/DB-Picture/xs28.png'),
('3', 'Jupiter FI Phiên bản tiêu chuẩn', '114cc', 'Đỏ, đen', '2022', 30000000, 1, 'Asset/DB-Picture/xs29.png'),
('1', 'Wave Alpha 110cc phiên bản 2025', '110cc', 'Xanh, bạc', '2022', 17859273, 1, 'Asset/DB-Picture/xs03.png'),
('3', 'Jupiter FINN Phiên bản cao cấp', '114cc', 'Vàng', '2022', 28000000, 1, 'Asset/DB-Picture/xs30.png'),
('3', 'Jupiter FINN Phiên bản cao cấp', '114cc', 'Bạc', '2022', 28000000, 1, 'Asset/DB-Picture/xs31.png'),
('3', 'Sirius Phiên bản phanh cơ màu mới', '110cc', 'Trắng, xanh', '2022', 20500000, 1, 'Asset/DB-Picture/xs32.png'),
('3', 'Sirius Phiên bản phanh cơ màu mới', '110cc', 'Xám, đen', '2022', 20500000, 1, 'Asset/DB-Picture/xs33.png'),
('3', 'Sirius FI Phiên bản phanh đĩa', '115cc', 'Đen, xám', '2021', 21000000, 1, 'Asset/DB-Picture/xs34.png'),
('3', 'Sirius FI Phiên bản phanh đĩa', '115cc', 'Đỏ, đen', '2021', 21000000, 1, 'Asset/DB-Picture/xs35.png'),
('3', 'Sirius FI Phiên bản phanh đĩa', '115cc', 'Trắng, xanh', '2021', 21000000, 1, 'Asset/DB-Picture/xs36.png'),
('4', 'Star SR 170 (ABS)', '175cc', 'Đen, đỏ', '2019', 52400000, 1, 'Asset/DB-Picture/xs37.png'),
('4', 'Star SR 170 (ABS)', '175cc', 'Đen, xanh', '2019', 52400000, 1, 'Asset/DB-Picture/xs38.png'),
('4', 'Elegant 110', '110cc', 'Xanh, đen', '2021', 16700000, 1, 'Asset/DB-Picture/xs39.png'),
('1', 'Wave Alpha 110cc phiên bản 2026', '110cc', 'Đen mờ', '2022', 18448364, 1, 'Asset/DB-Picture/xs04.png'),
('4', 'Elegant 111', '110cc', 'Đỏ, đen', '2021', 16700000, 1, 'Asset/DB-Picture/xs40.png'),
('4', 'Elegant 112', '110cc', 'Trắng, đen', '2021', 16700000, 1, 'Asset/DB-Picture/xs41.png'),
('4', 'Angela 50', '50cc', 'Xám, đen', '2021', 16800000, 1, 'Asset/DB-Picture/xs42.png'),
('4', 'Angela 51', '50cc', 'Trắng, đỏ', '2021', 16800000, 1, 'Asset/DB-Picture/xs43.png'),
('4', 'Angela 52', '50cc', 'Xanh, trắng', '2021', 16800000, 1, 'Asset/DB-Picture/xs44.png'),
('4', 'Galaxy 49', '50cc', 'Đen, cam (sơn mờ)', '2020', 17300000, 1, 'Asset/DB-Picture/xs45.png'),
('4', 'Galaxy 50', '50cc', 'Đỏ, đen', '2020', 16800000, 1, 'Asset/DB-Picture/xs46.png'),
('4', 'Elegant 50', '50cc', 'Đỏ, đen', '2020', 16000000, 1, 'Asset/DB-Picture/xs47.png'),
('4', 'Elegant 51', '50cc', 'Xanh, đen', '2020', 16000000, 1, 'Asset/DB-Picture/xs48.png'),
('1', 'Blade 110', '110cc', 'Đen, xanh, xám', '2020', 21295637, 1, 'Asset/DB-Picture/xs05.png'),
('1', 'Blade 111', '110cc', 'Đen, đỏ, xám', '2020', 21295637, 1, 'Asset/DB-Picture/xs06.png'),
('1', 'Blade 112', '110cc', 'Đen, xám', '2020', 21295637, 1, 'Asset/DB-Picture/xs07.png'),
('1', 'Blade 113', '110cc', 'Đỏ, đen', '2020', 18841091, 1, 'Asset/DB-Picture/xs08.png'),
('1', 'Blade 114', '110cc', 'Đen', '2020', 19822909, 1, 'Asset/DB-Picture/xs09.png'),
('1', 'Air Blade 125 Phiên bản Đặc biệt', '125cccc', 'Đen Vàng', '2022', 42502909, 2, 'Asset/DB-Picture/XTG_1.png'),
('1', 'Lead 125cc Cao cấp', '125cccc', 'Xanh', '2022', 41226545, 2, 'Asset/DB-Picture/XTG_10.png'),
('1', 'Lead 125cc Cao cấp', '125cccc', 'Xám', '2022', 41226545, 2, 'Asset/DB-Picture/XTG_11.png'),
('1', 'Lead 125cc Đặc biệt', '125cccc', 'Đen', '2022', 42306454, 2, 'Asset/DB-Picture/XTG_12.png'),
('1', 'Lead 125cc Đặc biệt', '125cccc', 'Bạc', '2022', 42306454, 2, 'Asset/DB-Picture/XTG_13.png'),
('1', 'Lead 125cc Tiêu chuẩn', '125cccc', 'Trắng', '2022', 39066545, 2, 'Asset/DB-Picture/XTG_14.png'),
('1', 'Lead 125cc Tiêu chuẩn', '125cccc', 'Đỏ', '2022', 39066545, 2, 'Asset/DB-Picture/XTG_15.png'),
('3', 'FreeGo Phiên bản Tiêu chuẩn màu mới', '125cccc', 'Đỏ Đen', '2022', 29900000, 2, 'Asset/DB-Picture/XTG_16.png'),
('3', 'FreeGo Phiên bản Tiêu chuẩn màu mới', '125cccc', 'Trắng Đen', '2022', 29900000, 2, 'Asset/DB-Picture/XTG_17.png'),
('3', 'FreeGo Phiên bản Tiêu chuẩn màu mới', '125cccc', 'Đen', '2022', 29900000, 2, 'Asset/DB-Picture/XTG_18.png'),
('3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Đỏ Đen', '2022', 33800000, 2, 'Asset/DB-Picture/XTG_19.png'),
('1', 'Air Blade 125 Phiên bản Tiêu chuẩn', '125cccc', 'Xanh Đen', '2022', 41324727, 2, 'Asset/DB-Picture/XTG_2.png'),
('3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Xám Đen', '2022', 33800000, 2, 'Asset/DB-Picture/XTG_20.png'),
('3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Xanh lá Đen', '2022', 33800000, 2, 'Asset/DB-Picture/XTG_21.png'),
('3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Xanh Đen', '2022', 33800000, 2, 'Asset/DB-Picture/XTG_22.png'),
('3', 'Latte Phiên bản Tiêu chuẩn', '125cccc', 'Đỏ Đen', '2022', 37800000, 2, 'Asset/DB-Picture/XTG_23.png'),
('3', 'Latte Phiên bản Tiêu chuẩn', '125cccc', 'Trắng Đen', '2022', 37800000, 2, 'Asset/DB-Picture/XTG_24.png'),
('3', 'Latte Phiên bản Tiêu chuẩn', '125cccc', 'Đen', '2022', 37800000, 2, 'Asset/DB-Picture/XTG_25.png'),
('3', 'Latte Phiên bản Giới hạn', '125cccc', 'Bạc', '2022', 38300000, 2, 'Asset/DB-Picture/XTG_26.png'),
('3', 'Grande Blue Core Hybrid Phiên bản Tiêu chuẩn', '125cccc', 'Đỏ Đen', '2022', 45200000, 2, 'Asset/DB-Picture/XTG_27.png'),
('3', 'Grande Blue Core Hybrid Phiên bản Tiêu chuẩn', '125cccc', 'Trắng Đen', '2022', 45200000, 2, 'Asset/DB-Picture/XTG_28.png'),
('3', 'Grande Blue Core Hybrid Phiên bản Tiêu chuẩn', '125cccc', 'Đen', '2022', 45200000, 2, 'Asset/DB-Picture/XTG_29.png'),
('1', 'Air Blade 125 Phiên bản Tiêu chuẩn', '125cccc', 'Đỏ Đen', '2022', 41324727, 2, 'Asset/DB-Picture/XTG_3.png'),
('3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Hồng ánh đồng Đen', '2022', 51000000, 2, 'Asset/DB-Picture/XTG_30.png'),
('3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Bạc Đen', '2022', 51000000, 2, 'Asset/DB-Picture/XTG_31.png'),
('3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Xám Đen', '2022', 51000000, 2, 'Asset/DB-Picture/XTG_32.png'),
('3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Xanh Đen', '2022', 51000000, 2, 'Asset/DB-Picture/XTG_33.png'),
('2', 'Impulse 125 FI', '125cccc', 'Đen Mờ', '2019', 31408000, 2, 'Asset/DB-Picture/XTG_34.png'),
('2', 'Impulse 125 FI', '125cccc', 'Đen Mờ Xám', '2019', 31408000, 2, 'Asset/DB-Picture/XTG_35.png'),
('2', 'Impulse 125 FI', '125cccc', 'Xanh Đỏ', '2019', 31408000, 2, 'Asset/DB-Picture/XTG_36.png'),
('2', 'Impulse 125 FI', '125cccc', 'Trắng Nâu Bạc', '2019', 31408000, 2, 'Asset/DB-Picture/XTG_37.png'),
('2', 'Burgman Street', '125cccc', 'Xám Mờ Vàng Đồng', '2022', 48600000, 2, 'Asset/DB-Picture/XTG_38.png'),
('2', 'Burgman Street', '125cccc', 'Đen Vàng Đồng', '2022', 48600000, 2, 'Asset/DB-Picture/XTG_39.png'),
('1', 'Air Blade 160 Phiên bản Đặc biệt', '160cccc', 'Xanh Xám Đen', '2022', 57190000, 2, 'Asset/DB-Picture/XTG_4.png'),
('2', 'Burgman Street', '125cccc', 'Trắng Vàng Đồng', '2022', 48600000, 2, 'Asset/DB-Picture/XTG_40.png'),
('1', 'Air Blade 160 Phiên bản Tiêu chuẩn', '160cccc', 'Đỏ Xám', '2022', 55990000, 2, 'Asset/DB-Picture/XTG_5.png'),
('1', 'Air Blade 160 Phiên bản Tiêu chuẩn', '160cccc', 'Đen Xám', '2022', 55990000, 2, 'Asset/DB-Picture/XTG_6.png'),
('1', 'Air Blade 160 Phiên bản Tiêu chuẩn', '160cccc', 'Xanh Xám', '2022', 55990000, 2, 'Asset/DB-Picture/XTG_7.png'),
( '1', 'Lead 125cc Cao cấp', '125cccc', 'Trắng', '2022', 41226545, 2, 'Asset/DB-Picture/XTG_8.png'),
('1', 'Lead 125cc Cao cấp', '125cccc', 'Đỏ', '2022', 41226545, 2, 'Asset/DB-Picture/XTG_9.png');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `khachhang_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `tendangnhap` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `MAKH` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `khachhang_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `GIOHANG`(
  `MASP` int(10) NOT NULL,
  `khachhang_ip` varchar(100) NOT NULL,
  `soluong` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Constraints for table `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `fk01_CTHD` FOREIGN KEY (`SOHD`) REFERENCES `hoadon` (`SOHD`),
  ADD CONSTRAINT `fk02_CTHD` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk01_HD` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`),
  ADD CONSTRAINT `fk02_HD` FOREIGN KEY (`MANV`) REFERENCES `nhanvien` (`MANV`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk01_SANPHAM` FOREIGN KEY (`MAHANG`) REFERENCES `hangxe` (`MAHANG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `taikhoan` ADD CONSTRAINT `fk01_TK` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`);
ALTER TABLE `GIOHANG` ADD CONSTRAINT `fk01_GH` FOREIGN KEY (`MASP`) REFERENCES `SANPHAM` (`MASP`);