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
  `SOHD` int(10) NOT NULL,
  `MASP` char(10) NOT NULL,
  `SL` int(5) DEFAULT NULL,
  `TRANGTHAI` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hangxe`
--

CREATE TABLE `hangxe` (
  `MAHANG` char(4) NOT NULL,
  `TENHANG` char(50) DEFAULT NULL,
  `URLIMAGE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hangxe`
--

INSERT INTO `hangxe` (`MAHANG`, `TENHANG`, `URLIMAGE`) VALUES
('1', 'Honda', 'Asset/DB-Picture/Honda.png'),
('2', 'Suzuki', 'Asset/DB-Picture/Suzuki.png'),
('3', 'Yamaha', 'Asset/DB-Picture/Yamaha.png'),
('4', 'SYM', 'Asset/DB-Picture/SYM.png');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `SOHD` int(10) NOT NULL,
  `NGHD` datetime DEFAULT NULL,
  `MAKH` char(4) DEFAULT NULL,
  `MANV` char(4) DEFAULT NULL,
  `TRIGIA` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` char(4) NOT NULL,
  `HOTEN` varchar(100) DEFAULT NULL,
  `DCHI` varchar(200) DEFAULT NULL,
  `SODT` varchar(12) DEFAULT NULL,
  `NGSINH` datetime DEFAULT NULL,
  `NGDK` datetime DEFAULT NULL,
  `SODU` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--


-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` char(4) NOT NULL,
  `HOTEN` varchar(40) DEFAULT NULL,
  `SODT` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `HOTEN`, `SODT`) VALUES
('NV01', 'Nguyen Nhu Nhut', '927345678'),
('NV02', 'Le Thi Phi Yen', '987567390'),
('NV03', 'Nguyen Van B', '997047382'),
('NV04', 'Ngo Thanh Tuan', '913758498'),
('NV05', 'Nguyen Thi Truc Thanh', '918590387');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` char(10) NOT NULL,
  `MAHANG` char(4) DEFAULT NULL,
  `TENSP` varchar(200) DEFAULT NULL,
  `PHANPHOI` varchar(20) DEFAULT NULL,
  `MAU` varchar(20) DEFAULT NULL,
  `NAMSX` varchar(4) DEFAULT NULL,
  `GIA` int(20) DEFAULT NULL,
  `LOAIXE` int(2) DEFAULT NULL,
  `URL_IMAGE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `MAHANG`, `TENSP`, `PHANPHOI`, `MAU`, `NAMSX`, `GIA`, `LOAIXE`, `URL_IMAGE`) VALUES
('XPKL_1', '1', 'CB150R The Streetster', '150cc', 'Đen', '2022', 105500000, 3, 'Asset/DB-Picture/XPKL_1.png'),
('XPKL_10', '1', 'Gold Wing', '1833cc', 'Đen', '2022', 123100000, 3, 'Asset/DB-Picture/XPKL_10.png'),
('XPKL_11', '1', 'Gold Wing', '1833cc', 'Trắng', '2022', 123100000, 3, 'Asset/DB-Picture/XPKL_11.png'),
('XPKL_12', '2', 'GSX-S150', '150cc', 'Đen', '2022', 145000000, 3, 'Asset/DB-Picture/XPKL_12.jpg'),
('XPKL_13', '2', 'GSX-S150', '150cc', 'Xanh Đen', '2022', 145000000, 3, 'Asset/DB-Picture/XPKL_13.jpg'),
('XPKL_14', '2', 'Satria F150', '150cc', 'Đen', '2022', 59000000, 3, 'Asset/DB-Picture/XPKL_14.png'),
('XPKL_15', '3', 'MT-07', '689cc', 'Xanh', '2022', 259000000, 3, 'Asset/DB-Picture/XPKL_15.jpg'),
('XPKL_16', '3', 'MT-07', '689cc', 'Đen', '2022', 259000000, 3, 'Asset/DB-Picture/XPKL_16.jpg'),
('XPKL_17', '3', 'MT-10', '998cc', 'Đen', '2022', 439000000, 3, 'Asset/DB-Picture/XPKL_17.jpg'),
('XPKL_18', '3', 'MT-10', '998cc', 'Xám', '2022', 439000000, 3, 'Asset/DB-Picture/XPKL_18.jpg'),
('XPKL_19', '3', 'Tracer 9', '890cc', 'Đỏ', '2022', 369000000, 3, 'Asset/DB-Picture/XPKL_19.jpg'),
('XPKL_2', '1', 'Winner X', '150cc', 'Trắng Đen', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_2.png'),
('XPKL_20', '3', 'Tracer 9', '890cc', 'Đen', '2022', 369000000, 3, 'Asset/DB-Picture/XPKL_20.jpg'),
('XPKL_3', '1', 'Winner X', '150cc', 'Bạc Đen', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_3.png'),
('XPKL_4', '1', 'Winner X', '150cc', 'Đỏ Đen', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_4.png'),
('XPKL_5', '1', 'Winner X', '150cc', 'Đỏ Đen Xanh', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_5.png'),
('XPKL_6', '1', 'Winner X', '150cc', 'Đen vàng', '2022', 46160000, 3, 'Asset/DB-Picture/XPKL_6.png'),
('XPKL_7', '1', 'Rebel 1100', '1084cc', 'Đen', '2022', 449000000, 3, 'Asset/DB-Picture/XPKL_7.png'),
('XPKL_8', '1', 'Rebel 1100', '1084cc', 'Nâu', '2022', 449000000, 3, 'Asset/DB-Picture/XPKL_8.png'),
('XPKL_9', '1', 'Gold Wing', '1833cc', 'Xanh', '2022', 123100000, 3, 'Asset/DB-Picture/XPKL_9.png'),
('XS_1', '1', 'Wave Alpha 110cc phiên bản 2023', '110cc', 'Đỏ, bạc', '2022', 17859273, 1, 'Asset/DB-Picture/xs01.png'),
('XS_10', '1', 'Future 125 FI', '125cc', 'Trắng, đen', '2020', 31506545, 1, 'Asset/DB-Picture/xs10.png'),
('XS_11', '1', 'Future 125 FI', '125cc', 'Xanh, đen', '2020', 31506545, 1, 'Asset/DB-Picture/xs11.png'),
('XS_12', '1', 'Future 125 FI', '125cc', 'Đỏ, đen', '2020', 31506545, 1, 'Asset/DB-Picture/xs12.png'),
('XS_13', '1', 'Future 125 FI', '125cc', 'Đen', '2020', 31997455, 1, 'Asset/DB-Picture/xs13.png'),
('XS_14', '1', 'Future 125 FI', '125cc', 'Xanh, đen', '2020', 31997455, 1, 'Asset/DB-Picture/xs14.png'),
('XS_15', '1', 'Future 125 FI', '125cc', 'Đỏ, đen', '2020', 30328363, 1, 'Asset/DB-Picture/xs15.png'),
('XS_16', '1', 'Future 125 FI', '125cc', 'Xanh, đen', '2020', 30328363, 1, 'Asset/DB-Picture/xs16.png'),
('XS_17', '1', 'Super Cub C125', '125cc', 'Đen', '2021', 86782909, 1, 'Asset/DB-Picture/xs17.png'),
('XS_18', '1', 'Super Cub C126', '125cc', 'Xanh, trắng', '2021', 85801091, 1, 'Asset/DB-Picture/xs18.png'),
('XS_19', '1', 'Super Cub C127', '125cc', 'Xanh, trắng', '2021', 85801091, 1, 'Asset/DB-Picture/xs19.png'),
('XS_2', '1', 'Wave Alpha 110cc phiên bản 2024', '110cc', 'Trắng, bạc', '2022', 17859273, 1, 'Asset/DB-Picture/xs02.png'),
('XS_20', '1', 'Super Cub C128', '125cc', 'Đỏ, trắng', '2021', 85801091, 1, 'Asset/DB-Picture/xs20.png'),
('XS_21', '1', 'Wave RSX FI 110', '110cc', 'Trắng, đen', '2020', 24633818, 1, 'Asset/DB-Picture/xs21.png'),
('XS_22', '1', 'Wave RSX FI 111', '110cc', 'Đỏ, đen', '2020', 24633818, 1, 'Asset/DB-Picture/xs22.png'),
('XS_23', '1', 'Wave RSX FI 112', '110cc', 'Xanh, đen', '2020', 24633818, 1, 'Asset/DB-Picture/xs23.png'),
('XS_24', '3', 'Exciter 150 Phiên bản RC', '150cc', 'Đen', '2020', 44800000, 1, 'Asset/DB-Picture/xs24.png'),
('XS_25', '3', 'Exciter 150 Phiên bản RC', '150cc', 'Đỏ, đen', '2020', 44800000, 1, 'Asset/DB-Picture/xs25.png'),
('XS_26', '3', 'Exciter 150 Phiên bản RC', '150cc', 'Xám, đen, cam', '2020', 44800000, 1, 'Asset/DB-Picture/xs26.png'),
('XS_27', '3', 'Exciter 150 Phiên bản RC', '150cc', 'Trắng, đỏ, đen', '2020', 44800000, 1, 'Asset/DB-Picture/xs27.png'),
('XS_28', '3', 'Jupiter FI Phiên bản tiêu chuẩn', '114cc', 'Đen', '2022', 30000000, 1, 'Asset/DB-Picture/xs28.png'),
('XS_29', '3', 'Jupiter FI Phiên bản tiêu chuẩn', '114cc', 'Đỏ, đen', '2022', 30000000, 1, 'Asset/DB-Picture/xs29.png'),
('XS_3', '1', 'Wave Alpha 110cc phiên bản 2025', '110cc', 'Xanh, bạc', '2022', 17859273, 1, 'Asset/DB-Picture/xs03.png'),
('XS_30', '3', 'Jupiter FINN Phiên bản cao cấp', '114cc', 'Vàng', '2022', 28000000, 1, 'Asset/DB-Picture/xs30.png'),
('XS_31', '3', 'Jupiter FINN Phiên bản cao cấp', '114cc', 'Bạc', '2022', 28000000, 1, 'Asset/DB-Picture/xs31.png'),
('XS_32', '3', 'Sirius Phiên bản phanh cơ màu mới', '110cc', 'Trắng, xanh', '2022', 20500000, 1, 'Asset/DB-Picture/xs32.png'),
('XS_33', '3', 'Sirius Phiên bản phanh cơ màu mới', '110cc', 'Xám, đen', '2022', 20500000, 1, 'Asset/DB-Picture/xs33.png'),
('XS_34', '3', 'Sirius FI Phiên bản phanh đĩa', '115cc', 'Đen, xám', '2021', 21000000, 1, 'Asset/DB-Picture/xs34.png'),
('XS_35', '3', 'Sirius FI Phiên bản phanh đĩa', '115cc', 'Đỏ, đen', '2021', 21000000, 1, 'Asset/DB-Picture/xs35.png'),
('XS_36', '3', 'Sirius FI Phiên bản phanh đĩa', '115cc', 'Trắng, xanh', '2021', 21000000, 1, 'Asset/DB-Picture/xs36.png'),
('XS_37', '4', 'Star SR 170 (ABS)', '175cc', 'Đen, đỏ', '2019', 52400000, 1, 'Asset/DB-Picture/xs37.png'),
('XS_38', '4', 'Star SR 170 (ABS)', '175cc', 'Đen, xanh', '2019', 52400000, 1, 'Asset/DB-Picture/xs38.png'),
('XS_39', '4', 'Elegant 110', '110cc', 'Xanh, đen', '2021', 16700000, 1, 'Asset/DB-Picture/xs39.png'),
('XS_4', '1', 'Wave Alpha 110cc phiên bản 2026', '110cc', 'Đen mờ', '2022', 18448364, 1, 'Asset/DB-Picture/xs04.png'),
('XS_40', '4', 'Elegant 111', '110cc', 'Đỏ, đen', '2021', 16700000, 1, 'Asset/DB-Picture/xs40.png'),
('XS_41', '4', 'Elegant 112', '110cc', 'Trắng, đen', '2021', 16700000, 1, 'Asset/DB-Picture/xs41.png'),
('XS_42', '4', 'Angela 50', '50cc', 'Xám, đen', '2021', 16800000, 1, 'Asset/DB-Picture/xs42.png'),
('XS_43', '4', 'Angela 51', '50cc', 'Trắng, đỏ', '2021', 16800000, 1, 'Asset/DB-Picture/xs43.png'),
('XS_44', '4', 'Angela 52', '50cc', 'Xanh, trắng', '2021', 16800000, 1, 'Asset/DB-Picture/xs44.png'),
('XS_45', '4', 'Galaxy 49', '50cc', 'Đen, cam (sơn mờ)', '2020', 17300000, 1, 'Asset/DB-Picture/xs45.png'),
('XS_46', '4', 'Galaxy 50', '50cc', 'Đỏ, đen', '2020', 16800000, 1, 'Asset/DB-Picture/xs46.png'),
('XS_47', '4', 'Elegant 50', '50cc', 'Đỏ, đen', '2020', 16000000, 1, 'Asset/DB-Picture/xs47.png'),
('XS_48', '4', 'Elegant 51', '50cc', 'Xanh, đen', '2020', 16000000, 1, 'Asset/DB-Picture/xs48.png'),
('XS_5', '1', 'Blade 110', '110cc', 'Đen, xanh, xám', '2020', 21295637, 1, 'Asset/DB-Picture/xs05.png'),
('XS_6', '1', 'Blade 111', '110cc', 'Đen, đỏ, xám', '2020', 21295637, 1, 'Asset/DB-Picture/xs06.png'),
('XS_7', '1', 'Blade 112', '110cc', 'Đen, xám', '2020', 21295637, 1, 'Asset/DB-Picture/xs07.png'),
('XS_8', '1', 'Blade 113', '110cc', 'Đỏ, đen', '2020', 18841091, 1, 'Asset/DB-Picture/xs08.png'),
('XS_9', '1', 'Blade 114', '110cc', 'Đen', '2020', 19822909, 1, 'Asset/DB-Picture/xs09.png'),
('XTG_1', '1', 'Air Blade 125 Phiên bản Đặc biệt', '125cccc', 'Đen Vàng', '2022', 42502909, 2, 'Asset/DB-Picture/XTG_1.png'),
('XTG_10', '1', 'Lead 125cc Cao cấp', '125cccc', 'Xanh', '2022', 41226545, 2, 'Asset/DB-Picture/XTG_10.png'),
('XTG_11', '1', 'Lead 125cc Cao cấp', '125cccc', 'Xám', '2022', 41226545, 2, 'Asset/DB-Picture/XTG_11.png'),
('XTG_12', '1', 'Lead 125cc Đặc biệt', '125cccc', 'Đen', '2022', 42306454, 2, 'Asset/DB-Picture/XTG_12.png'),
('XTG_13', '1', 'Lead 125cc Đặc biệt', '125cccc', 'Bạc', '2022', 42306454, 2, 'Asset/DB-Picture/XTG_13.png'),
('XTG_14', '1', 'Lead 125cc Tiêu chuẩn', '125cccc', 'Trắng', '2022', 39066545, 2, 'Asset/DB-Picture/XTG_14.png'),
('XTG_15', '1', 'Lead 125cc Tiêu chuẩn', '125cccc', 'Đỏ', '2022', 39066545, 2, 'Asset/DB-Picture/XTG_15.png'),
('XTG_16', '3', 'FreeGo Phiên bản Tiêu chuẩn màu mới', '125cccc', 'Đỏ Đen', '2022', 29900000, 2, 'Asset/DB-Picture/XTG_16.png'),
('XTG_17', '3', 'FreeGo Phiên bản Tiêu chuẩn màu mới', '125cccc', 'Trắng Đen', '2022', 29900000, 2, 'Asset/DB-Picture/XTG_17.png'),
('XTG_18', '3', 'FreeGo Phiên bản Tiêu chuẩn màu mới', '125cccc', 'Đen', '2022', 29900000, 2, 'Asset/DB-Picture/XTG_18.png'),
('XTG_19', '3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Đỏ Đen', '2022', 33800000, 2, 'Asset/DB-Picture/XTG_19.png'),
('XTG_2', '1', 'Air Blade 125 Phiên bản Tiêu chuẩn', '125cccc', 'Xanh Đen', '2022', 41324727, 2, 'Asset/DB-Picture/XTG_2.png'),
('XTG_20', '3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Xám Đen', '2022', 33800000, 2, 'Asset/DB-Picture/XTG_20.png'),
('XTG_21', '3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Xanh lá Đen', '2022', 33800000, 2, 'Asset/DB-Picture/XTG_21.png'),
('XTG_22', '3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Xanh Đen', '2022', 33800000, 2, 'Asset/DB-Picture/XTG_22.png'),
('XTG_23', '3', 'Latte Phiên bản Tiêu chuẩn', '125cccc', 'Đỏ Đen', '2022', 37800000, 2, 'Asset/DB-Picture/XTG_23.png'),
('XTG_24', '3', 'Latte Phiên bản Tiêu chuẩn', '125cccc', 'Trắng Đen', '2022', 37800000, 2, 'Asset/DB-Picture/XTG_24.png'),
('XTG_25', '3', 'Latte Phiên bản Tiêu chuẩn', '125cccc', 'Đen', '2022', 37800000, 2, 'Asset/DB-Picture/XTG_25.png'),
('XTG_26', '3', 'Latte Phiên bản Giới hạn', '125cccc', 'Bạc', '2022', 38300000, 2, 'Asset/DB-Picture/XTG_26.png'),
('XTG_27', '3', 'Grande Blue Core Hybrid Phiên bản Tiêu chuẩn', '125cccc', 'Đỏ Đen', '2022', 45200000, 2, 'Asset/DB-Picture/XTG_27.png'),
('XTG_28', '3', 'Grande Blue Core Hybrid Phiên bản Tiêu chuẩn', '125cccc', 'Trắng Đen', '2022', 45200000, 2, 'Asset/DB-Picture/XTG_28.png'),
('XTG_29', '3', 'Grande Blue Core Hybrid Phiên bản Tiêu chuẩn', '125cccc', 'Đen', '2022', 45200000, 2, 'Asset/DB-Picture/XTG_29.png'),
('XTG_3', '1', 'Air Blade 125 Phiên bản Tiêu chuẩn', '125cccc', 'Đỏ Đen', '2022', 41324727, 2, 'Asset/DB-Picture/XTG_3.png'),
('XTG_30', '3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Hồng ánh đồng Đen', '2022', 51000000, 2, 'Asset/DB-Picture/XTG_30.png'),
('XTG_31', '3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Bạc Đen', '2022', 51000000, 2, 'Asset/DB-Picture/XTG_31.png'),
('XTG_32', '3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Xám Đen', '2022', 51000000, 2, 'Asset/DB-Picture/XTG_32.png'),
('XTG_33', '3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Xanh Đen', '2022', 51000000, 2, 'Asset/DB-Picture/XTG_33.png'),
('XTG_34', '2', 'Impulse 125 FI', '125cccc', 'Đen Mờ', '2019', 31408000, 2, 'Asset/DB-Picture/XTG_34.png'),
('XTG_35', '2', 'Impulse 125 FI', '125cccc', 'Đen Mờ Xám', '2019', 31408000, 2, 'Asset/DB-Picture/XTG_35.png'),
('XTG_36', '2', 'Impulse 125 FI', '125cccc', 'Xanh Đỏ', '2019', 31408000, 2, 'Asset/DB-Picture/XTG_36.png'),
('XTG_37', '2', 'Impulse 125 FI', '125cccc', 'Trắng Nâu Bạc', '2019', 31408000, 2, 'Asset/DB-Picture/XTG_37.png'),
('XTG_38', '2', 'Burgman Street', '125cccc', 'Xám Mờ Vàng Đồng', '2022', 48600000, 2, 'Asset/DB-Picture/XTG_38.png'),
('XTG_39', '2', 'Burgman Street', '125cccc', 'Đen Vàng Đồng', '2022', 48600000, 2, 'Asset/DB-Picture/XTG_39.png'),
('XTG_4', '1', 'Air Blade 160 Phiên bản Đặc biệt', '160cccc', 'Xanh Xám Đen', '2022', 57190000, 2, 'Asset/DB-Picture/XTG_4.png'),
('XTG_40', '2', 'Burgman Street', '125cccc', 'Trắng Vàng Đồng', '2022', 48600000, 2, 'Asset/DB-Picture/XTG_40.png'),
('XTG_5', '1', 'Air Blade 160 Phiên bản Tiêu chuẩn', '160cccc', 'Đỏ Xám', '2022', 55990000, 2, 'Asset/DB-Picture/XTG_5.png'),
('XTG_6', '1', 'Air Blade 160 Phiên bản Tiêu chuẩn', '160cccc', 'Đen Xám', '2022', 55990000, 2, 'Asset/DB-Picture/XTG_6.png'),
('XTG_7', '1', 'Air Blade 160 Phiên bản Tiêu chuẩn', '160cccc', 'Xanh Xám', '2022', 55990000, 2, 'Asset/DB-Picture/XTG_7.png'),
('XTG_8', '1', 'Lead 125cc Cao cấp', '125cccc', 'Trắng', '2022', 41226545, 2, 'Asset/DB-Picture/XTG_8.png'),
('XTG_9', '1', 'Lead 125cc Cao cấp', '125cccc', 'Đỏ', '2022', 41226545, 2, 'Asset/DB-Picture/XTG_9.png');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `khachhang_id` int(11) NOT NULL,
  `tendangnhap` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `MAKH` char(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `khachhang_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`SOHD`,`MASP`),
  ADD KEY `fk02_CTHD` (`MASP`);

--
-- Indexes for table `hangxe`
--
ALTER TABLE `hangxe`
  ADD PRIMARY KEY (`MAHANG`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`SOHD`),
  ADD KEY `fk01_HD` (`MAKH`),
  ADD KEY `fk02_HD` (`MANV`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD KEY `fk01_SANPHAM` (`MAHANG`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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

ALTER TABLE `taikhoan` ADD CONSTRAINT `fk01_TK` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`)