
CREATE TABLE KHACHHANG(
	MAKH	char(4) not null,	
	HOTEN	varchar(100),
	DCHI	varchar(200),
	SODT	varchar(12),
	NGSINH	datetime,
	NGDK	datetime,
	SODU	int(10),
	EMAIL	varchar(50),
	constraint pk_kh primary key(MAKH)
);

CREATE TABLE NHANVIEN(
	MANV	char(4) not null,	
	HOTEN	varchar(40),
	SODT	varchar(20),	
	constraint pk_nv primary key(MANV)
);

CREATE TABLE SANPHAM(
	MASP	char(10) not null,
	MAHANG char(4),
	TENSP	varchar(200),
	PHANPHOI varchar(20),
	MAU varchar(20),
	NAMSX	varchar(4),
	GIA	int(20),
	LOAIXE int(2),
	URL_IMAGE varchar(200),
	constraint pk_sp primary key(MASP)	
);

CREATE TABLE HOADON(
	SOHD	int(10) not null,
	NGHD 	datetime,
	MAKH 	char(4),
	MANV 	char(4),
	TRIGIA	int(20),
	constraint pk_hd primary key(SOHD)
);

   CREATE TABLE CTHD
   (
	SOHD	int(10),
	MASP	char(10),
	SL	int(5),
	constraint pk_cthd primary key(SOHD,MASP)
	);

	CREATE TABLE HANGXE
   (
	MAHANG	char(4) not null,
	TENHANG char(50),
	constraint pk_hx primary key(MAHANG)
	);


ALTER TABLE HOADON ADD CONSTRAINT fk01_HD FOREIGN KEY(MAKH) REFERENCES KHACHHANG(MAKH);
ALTER TABLE HOADON ADD CONSTRAINT fk02_HD FOREIGN KEY(MANV) REFERENCES NHANVIEN(MANV);

ALTER TABLE CTHD ADD CONSTRAINT fk01_CTHD FOREIGN KEY(SOHD) REFERENCES HOADON(SOHD);
ALTER TABLE CTHD ADD CONSTRAINT fk02_CTHD FOREIGN KEY(MASP) REFERENCES SANPHAM(MASP);

ALTER TABLE SANPHAM ADD CONSTRAINT fk01_SANPHAM FOREIGN KEY(MAHANG) REFERENCES HANGXE(MAHANG);


insert into khachhang values('1','Nguyễn Gia Huy','6A đường 5 Linh Đông TP.Thủ Đức','0909776624','08/11/2002','02/11/2022',10000000, '20520203@gm.uit.edu.vn');
insert into khachhang values('2','Nguyễn Gia Huy','6A đường 5 Linh Đông TP.Thủ Đức','0909776624','08/11/2002','02/11/2022',10000000, '20520203@gm.uit.edu.vn');


insert into nhanvien values('NV01','Nguyen Nhu Nhut','927345678');
insert into nhanvien values('NV02','Le Thi Phi Yen','987567390');
insert into nhanvien values('NV03','Nguyen Van B','997047382');
insert into nhanvien values('NV04','Ngo Thanh Tuan','913758498');
insert into nhanvien values('NV05','Nguyen Thi Truc Thanh','918590387');

insert into hangxe values('1','Honda');
insert into hangxe values('2','Suzuki');
insert into hangxe values('3','Yamaha');
insert into hangxe values('4','SYM');


insert into sanpham values ( 'XPKL_1', '1', 'CB150R The Streetster', '150cc', 'Đen', '2022', '105500000', '3', 'Asset/DB-Picture/XPKL_1.png');
insert into sanpham values ( 'XPKL_2', '1', 'Winner X', '150cc', 'Trắng Đen', '2022', '46160000', '3', 'Asset/DB-Picture/XPKL_2.png');
insert into sanpham values ( 'XPKL_3', '1', 'Winner X', '150cc', 'Bạc Đen', '2022', '46160000', '3', 'Asset/DB-Picture/XPKL_3.png');
insert into sanpham values ( 'XPKL_4', '1', 'Winner X', '150cc', 'Đỏ Đen', '2022', '46160000', '3', 'Asset/DB-Picture/XPKL_4.png');
insert into sanpham values ( 'XPKL_5', '1', 'Winner X', '150cc', 'Đỏ Đen Xanh', '2022', '46160000', '3', 'Asset/DB-Picture/XPKL_5.png');
insert into sanpham values ( 'XPKL_6', '1', 'Winner X', '150cc', 'Đen vàng', '2022', '46160000', '3', 'Asset/DB-Picture/XPKL_6.png');
insert into sanpham values ( 'XPKL_7', '1', 'Rebel 1100', '1084cc', 'Đen', '2022', '449000000', '3', 'Asset/DB-Picture/XPKL_7.png');
insert into sanpham values ( 'XPKL_8', '1', 'Rebel 1100', '1084cc', 'Nâu', '2022', '449000000', '3', 'Asset/DB-Picture/XPKL_8.png');
insert into sanpham values ( 'XPKL_9', '1', 'Gold Wing', '1833cc', 'Xanh', '2022', '123100000', '3', 'Asset/DB-Picture/XPKL_9.png');
insert into sanpham values ( 'XPKL_10', '1', 'Gold Wing', '1833cc', 'Đen', '2022', '123100000', '3', 'Asset/DB-Picture/XPKL_10.png');
insert into sanpham values ( 'XPKL_11', '1', 'Gold Wing', '1833cc', 'Trắng', '2022', '123100000', '3', 'Asset/DB-Picture/XPKL_11.png');
insert into sanpham values ( 'XPKL_12', '2', 'GSX-S150', '150cc', 'Đen', '2022', '145000000', '3', 'Asset/DB-Picture/XPKL_12.jpg');
insert into sanpham values ( 'XPKL_13', '2', 'GSX-S150', '150cc', 'Xanh Đen', '2022', '145000000', '3', 'Asset/DB-Picture/XPKL_13.jpg');
insert into sanpham values ( 'XPKL_14', '2', 'Satria F150', '150cc', 'Đen', '2022', '59000000', '3', 'Asset/DB-Picture/XPKL_14.png');
insert into sanpham values ( 'XPKL_15', '3', 'MT-07', '689cc', 'Xanh', '2022', '259000000', '3', 'Asset/DB-Picture/XPKL_15.jpg');
insert into sanpham values ( 'XPKL_16', '3', 'MT-07', '689cc', 'Đen', '2022', '259000000', '3', 'Asset/DB-Picture/XPKL_16.jpg');
insert into sanpham values ( 'XPKL_17', '3', 'MT-10', '998cc', 'Đen', '2022', '439000000', '3', 'Asset/DB-Picture/XPKL_17.jpg');
insert into sanpham values ( 'XPKL_18', '3', 'MT-10', '998cc', 'Xám', '2022', '439000000', '3', 'Asset/DB-Picture/XPKL_18.jpg');
insert into sanpham values ( 'XPKL_19', '3', 'Tracer 9', '890cc', 'Đỏ', '2022', '369000000', '3', 'Asset/DB-Picture/XPKL_19.jpg');
insert into sanpham values ( 'XPKL_20', '3', 'Tracer 9', '890cc', 'Đen', '2022', '369000000', '3', 'Asset/DB-Picture/XPKL_20.jpg');


insert into sanpham values ('XS_1', '1', 'Wave Alpha 110cc phiên bản 2023', '110cc', 'Đỏ, bạc', '2022', '17859273', '1', 'Asset/DB-Picture/XS_1.png');
insert into sanpham values ('XS_2', '1', 'Wave Alpha 110cc phiên bản 2024', '110cc', 'Trắng, bạc', '2022', '17859273', '1', 'Asset/DB-Picture/XS_2.png');
insert into sanpham values ('XS_3', '1', 'Wave Alpha 110cc phiên bản 2025', '110cc', 'Xanh, bạc', '2022', '17859273', '1', 'Asset/DB-Picture/XS_3.png');
insert into sanpham values ('XS_4', '1', 'Wave Alpha 110cc phiên bản 2026', '110cc', 'Đen mờ', '2022', '18448364', '1', 'Asset/DB-Picture/XS_4.png');
insert into sanpham values ('XS_5', '1', 'Blade 110', '110cc', 'Đen, xanh, xám', '2020', '21295637', '1', 'Asset/DB-Picture/XS_5.png');
insert into sanpham values ('XS_6', '1', 'Blade 111', '110cc', 'Đen, đỏ, xám', '2020', '21295637', '1', 'Asset/DB-Picture/XS_6.png');
insert into sanpham values ('XS_7', '1', 'Blade 112', '110cc', 'Đen, xám', '2020', '21295637', '1', 'Asset/DB-Picture/XS_7.png');
insert into sanpham values ('XS_8', '1', 'Blade 113', '110cc', 'Đỏ, đen', '2020', '18841091', '1', 'Asset/DB-Picture/XS_8.png');
insert into sanpham values ('XS_9', '1', 'Blade 114', '110cc', 'Đen', '2020', '19822909', '1', 'Asset/DB-Picture/XS_9.png');
insert into sanpham values ('XS_10', '1', 'Future 125 FI', '125cc', 'Trắng, đen', '2020', '31506545', '1', 'Asset/DB-Picture/XS_10.png');
insert into sanpham values ('XS_11', '1', 'Future 125 FI', '125cc', 'Xanh, đen', '2020', '31506545', '1', 'Asset/DB-Picture/XS_11.png');
insert into sanpham values ('XS_12', '1', 'Future 125 FI', '125cc', 'Đỏ, đen', '2020', '31506545', '1', 'Asset/DB-Picture/XS_12.png');
insert into sanpham values ('XS_13', '1', 'Future 125 FI', '125cc', 'Đen', '2020', '31997455', '1', 'Asset/DB-Picture/XS_13.png');
insert into sanpham values ('XS_14', '1', 'Future 125 FI', '125cc', 'Xanh, đen', '2020', '31997455', '1', 'Asset/DB-Picture/XS_14.png');
insert into sanpham values ('XS_15', '1', 'Future 125 FI', '125cc', 'Đỏ, đen', '2020', '30328363', '1', 'Asset/DB-Picture/XS_15.png');
insert into sanpham values ('XS_16', '1', 'Future 125 FI', '125cc', 'Xanh, đen', '2020', '30328363', '1', 'Asset/DB-Picture/XS_16.png');
insert into sanpham values ('XS_17', '1', 'Super Cub C125', '125cc', 'Đen', '2021', '86782909', '1', 'Asset/DB-Picture/XS_17.png');
insert into sanpham values ('XS_18', '1', 'Super Cub C126', '125cc', 'Xanh, trắng', '2021', '85801091', '1', 'Asset/DB-Picture/XS_18.png');
insert into sanpham values ('XS_19', '1', 'Super Cub C127', '125cc', 'Xanh, trắng', '2021', '85801091', '1', 'Asset/DB-Picture/XS_19.png');
insert into sanpham values ('XS_20', '1', 'Super Cub C128', '125cc', 'Đỏ, trắng', '2021', '85801091', '1', 'Asset/DB-Picture/XS_20.png');
insert into sanpham values ('XS_21', '1', 'Wave RSX FI 110', '110cc', 'Trắng, đen', '2020', '24633818', '1', 'Asset/DB-Picture/XS_21.png');
insert into sanpham values ('XS_22', '1', 'Wave RSX FI 111', '110cc', 'Đỏ, đen', '2020', '24633818', '1', 'Asset/DB-Picture/XS_22.png');
insert into sanpham values ('XS_23', '1', 'Wave RSX FI 112', '110cc', 'Xanh, đen', '2020', '24633818', '1', 'Asset/DB-Picture/XS_23.png');
insert into sanpham values ('XS_24', '3', 'Exciter 150 Phiên bản RC', '150cc', 'Đen', '2020', '44800000', '1', 'Asset/DB-Picture/XS_24.png');
insert into sanpham values ('XS_25', '3', 'Exciter 150 Phiên bản RC', '150cc', 'Đỏ, đen', '2020', '44800000', '1', 'Asset/DB-Picture/XS_25.png');
insert into sanpham values ('XS_26', '3', 'Exciter 150 Phiên bản RC', '150cc', 'Xám, đen, cam', '2020', '44800000', '1', 'Asset/DB-Picture/XS_26.png');
insert into sanpham values ('XS_27', '3', 'Exciter 150 Phiên bản RC', '150cc', 'Trắng, đỏ, đen', '2020', '44800000', '1', 'Asset/DB-Picture/XS_27.png');
insert into sanpham values ('XS_28', '3', 'Jupiter FI Phiên bản tiêu chuẩn', '114cc', 'Đen', '2022', '30000000', '1', 'Asset/DB-Picture/XS_28.png');
insert into sanpham values ('XS_29', '3', 'Jupiter FI Phiên bản tiêu chuẩn', '114cc', 'Đỏ, đen', '2022', '30000000', '1', 'Asset/DB-Picture/XS_29.png');
insert into sanpham values ('XS_30', '3', 'Jupiter FINN Phiên bản cao cấp', '114cc', 'Vàng', '2022', '28000000', '1', 'Asset/DB-Picture/XS_30.png');
insert into sanpham values ('XS_31', '3', 'Jupiter FINN Phiên bản cao cấp', '114cc', 'Bạc', '2022', '28000000', '1', 'Asset/DB-Picture/XS_31.png');
insert into sanpham values ('XS_32', '3', 'Sirius Phiên bản phanh cơ màu mới', '110cc', 'Trắng, xanh', '2022', '20500000', '1', 'Asset/DB-Picture/XS_32.png');
insert into sanpham values ('XS_33', '3', 'Sirius Phiên bản phanh cơ màu mới', '110cc', 'Xám, đen', '2022', '20500000', '1', 'Asset/DB-Picture/XS_33.png');
insert into sanpham values ('XS_34', '3', 'Sirius FI Phiên bản phanh đĩa', '115cc', 'Đen, xám', '2021', '21000000', '1', 'Asset/DB-Picture/XS_34.png');
insert into sanpham values ('XS_35', '3', 'Sirius FI Phiên bản phanh đĩa', '115cc', 'Đỏ, đen', '2021', '21000000', '1', 'Asset/DB-Picture/XS_35.png');
insert into sanpham values ('XS_36', '3', 'Sirius FI Phiên bản phanh đĩa', '115cc', 'Trắng, xanh', '2021', '21000000', '1', 'Asset/DB-Picture/XS_36.png');
insert into sanpham values ('XS_37', '4', 'Star SR 170 (ABS)', '175cc', 'Đen, đỏ', '2019', '52400000', '1', 'Asset/DB-Picture/XS_37.png');
insert into sanpham values ('XS_38', '4', 'Star SR 170 (ABS)', '175cc', 'Đen, xanh', '2019', '52400000', '1', 'Asset/DB-Picture/XS_38.png');
insert into sanpham values ('XS_39', '4', 'Elegant 110', '110cc', 'Xanh, đen', '2021', '16700000', '1', 'Asset/DB-Picture/XS_39.png');
insert into sanpham values ('XS_40', '4', 'Elegant 111', '110cc', 'Đỏ, đen', '2021', '16700000', '1', 'Asset/DB-Picture/XS_40.png');
insert into sanpham values ('XS_41', '4', 'Elegant 112', '110cc', 'Trắng, đen', '2021', '16700000', '1', 'Asset/DB-Picture/XS_41.png');
insert into sanpham values ('XS_42', '4', 'Angela 50', '50cc', 'Xám, đen', '2021', '16800000', '1', 'Asset/DB-Picture/XS_42.png');
insert into sanpham values ('XS_43', '4', 'Angela 51', '50cc', 'Trắng, đỏ', '2021', '16800000', '1', 'Asset/DB-Picture/XS_43.png');
insert into sanpham values ('XS_44', '4', 'Angela 52', '50cc', 'Xanh, trắng', '2021', '16800000', '1', 'Asset/DB-Picture/XS_44.png');
insert into sanpham values ('XS_45', '4', 'Galaxy 49', '50cc', 'Đen, cam (sơn mờ)', '2020', '17300000', '1', 'Asset/DB-Picture/XS_45.png');
insert into sanpham values ('XS_46', '4', 'Galaxy 50', '50cc', 'Đỏ, đen', '2020', '16800000', '1', 'Asset/DB-Picture/XS_46.png');
insert into sanpham values ('XS_47', '4', 'Elegant 50', '50cc', 'Đỏ, đen', '2020', '16000000', '1', 'Asset/DB-Picture/XS_47.png');
insert into sanpham values ('XS_48', '4', 'Elegant 51', '50cc', 'Xanh, đen', '2020', '16000000', '1', 'Asset/DB-Picture/XS_48.png');

insert into sanpham values ('XTG_1', '1', 'Air Blade 125 Phiên bản Đặc biệt', '125cccc', 'Đen Vàng', '2022', '42502909', '2', 'Asset/DB-Picture/XTG_1.png');
insert into sanpham values ('XTG_2', '1', 'Air Blade 125 Phiên bản Tiêu chuẩn', '125cccc', 'Xanh Đen', '2022', '41324727', '2', 'Asset/DB-Picture/XTG_2.png');
insert into sanpham values ('XTG_3', '1', 'Air Blade 125 Phiên bản Tiêu chuẩn', '125cccc', 'Đỏ Đen', '2022', '41324727', '2', 'Asset/DB-Picture/XTG_3.png');
insert into sanpham values ('XTG_4', '1', 'Air Blade 160 Phiên bản Đặc biệt', '160cccc', 'Xanh Xám Đen', '2022', '57190000', '2', 'Asset/DB-Picture/XTG_4.png');
insert into sanpham values ('XTG_5', '1', 'Air Blade 160 Phiên bản Tiêu chuẩn', '160cccc', 'Đỏ Xám', '2022', '55990000', '2', 'Asset/DB-Picture/XTG_5.png');
insert into sanpham values ('XTG_6', '1', 'Air Blade 160 Phiên bản Tiêu chuẩn', '160cccc', 'Đen Xám', '2022', '55990000', '2', 'Asset/DB-Picture/XTG_6.png');
insert into sanpham values ('XTG_7', '1', 'Air Blade 160 Phiên bản Tiêu chuẩn', '160cccc', 'Xanh Xám', '2022', '55990000', '2', 'Asset/DB-Picture/XTG_7.png');
insert into sanpham values ('XTG_8', '1', 'Lead 125cc Cao cấp', '125cccc', 'Trắng', '2022', '41226545', '2', 'Asset/DB-Picture/XTG_8.png');
insert into sanpham values ('XTG_9', '1', 'Lead 125cc Cao cấp', '125cccc', 'Đỏ', '2022', '41226545', '2', 'Asset/DB-Picture/XTG_9.png');
insert into sanpham values ('XTG_10', '1', 'Lead 125cc Cao cấp', '125cccc', 'Xanh', '2022', '41226545', '2', 'Asset/DB-Picture/XTG_10.png');
insert into sanpham values ('XTG_11', '1', 'Lead 125cc Cao cấp', '125cccc', 'Xám', '2022', '41226545', '2', 'Asset/DB-Picture/XTG_11.png');
insert into sanpham values ('XTG_12', '1', 'Lead 125cc Đặc biệt', '125cccc', 'Đen', '2022', '42306454', '2', 'Asset/DB-Picture/XTG_12.png');
insert into sanpham values ('XTG_13', '1', 'Lead 125cc Đặc biệt', '125cccc', 'Bạc', '2022', '42306454', '2', 'Asset/DB-Picture/XTG_13.png');
insert into sanpham values ('XTG_14', '1', 'Lead 125cc Tiêu chuẩn', '125cccc', 'Trắng', '2022', '39066545', '2', 'Asset/DB-Picture/XTG_14.png');
insert into sanpham values ('XTG_15', '1', 'Lead 125cc Tiêu chuẩn', '125cccc', 'Đỏ', '2022', '39066545', '2', 'Asset/DB-Picture/XTG_15.png');
insert into sanpham values ('XTG_16', '3', 'FreeGo Phiên bản Tiêu chuẩn màu mới', '125cccc', 'Đỏ Đen', '2022', '29900000', '2', 'Asset/DB-Picture/XTG_16.png');
insert into sanpham values ('XTG_17', '3', 'FreeGo Phiên bản Tiêu chuẩn màu mới', '125cccc', 'Trắng Đen', '2022', '29900000', '2', 'Asset/DB-Picture/XTG_17.png');
insert into sanpham values ('XTG_18', '3', 'FreeGo Phiên bản Tiêu chuẩn màu mới', '125cccc', 'Đen', '2022', '29900000', '2', 'Asset/DB-Picture/XTG_18.png');
insert into sanpham values ('XTG_19', '3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Đỏ Đen', '2022', '33800000', '2', 'Asset/DB-Picture/XTG_19.png');
insert into sanpham values ('XTG_20', '3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Xám Đen', '2022', '33800000', '2', 'Asset/DB-Picture/XTG_20.png');
insert into sanpham values ('XTG_21', '3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Xanh lá Đen', '2022', '33800000', '2', 'Asset/DB-Picture/XTG_21.png');
insert into sanpham values ('XTG_22', '3', 'FreeGo S Phiên bản Đặc biệt màu mới', '125cccc', 'Xanh Đen', '2022', '33800000', '2', 'Asset/DB-Picture/XTG_22.png');
insert into sanpham values ('XTG_23', '3', 'Latte Phiên bản Tiêu chuẩn', '125cccc', 'Đỏ Đen', '2022', '37800000', '2', 'Asset/DB-Picture/XTG_23.png');
insert into sanpham values ('XTG_24', '3', 'Latte Phiên bản Tiêu chuẩn', '125cccc', 'Trắng Đen', '2022', '37800000', '2', 'Asset/DB-Picture/XTG_24.png');
insert into sanpham values ('XTG_25', '3', 'Latte Phiên bản Tiêu chuẩn', '125cccc', 'Đen', '2022', '37800000', '2', 'Asset/DB-Picture/XTG_25.png');
insert into sanpham values ('XTG_26', '3', 'Latte Phiên bản Giới hạn', '125cccc', 'Bạc', '2022', '38300000', '2', 'Asset/DB-Picture/XTG_26.png');
insert into sanpham values ('XTG_27', '3', 'Grande Blue Core Hybrid Phiên bản Tiêu chuẩn', '125cccc', 'Đỏ Đen', '2022', '45200000', '2', 'Asset/DB-Picture/XTG_27.png');
insert into sanpham values ('XTG_28', '3', 'Grande Blue Core Hybrid Phiên bản Tiêu chuẩn', '125cccc', 'Trắng Đen', '2022', '45200000', '2', 'Asset/DB-Picture/XTG_28.png');
insert into sanpham values ('XTG_29', '3', 'Grande Blue Core Hybrid Phiên bản Tiêu chuẩn', '125cccc', 'Đen', '2022', '45200000', '2', 'Asset/DB-Picture/XTG_29.png');
insert into sanpham values ('XTG_30', '3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Hồng ánh đồng Đen', '2022', '51000000', '2', 'Asset/DB-Picture/XTG_30.png');
insert into sanpham values ('XTG_31', '3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Bạc Đen', '2022', '51000000', '2', 'Asset/DB-Picture/XTG_31.png');
insert into sanpham values ('XTG_32', '3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Xám Đen', '2022', '51000000', '2', 'Asset/DB-Picture/XTG_32.png');
insert into sanpham values ('XTG_33', '3', 'Grande Phiên bản Giới hạn hoàn toàn mới', '125cccc', 'Xanh Đen', '2022', '51000000', '2', 'Asset/DB-Picture/XTG_33.png');
insert into sanpham values ('XTG_34', '2', 'Impulse 125 FI', '125cccc', 'Đen Mờ', '2019', '31408000', '2', 'Asset/DB-Picture/XTG_34.png');
insert into sanpham values ('XTG_35', '2', 'Impulse 125 FI', '125cccc', 'Đen Mờ Xám', '2019', '31408000', '2', 'Asset/DB-Picture/XTG_35.png');
insert into sanpham values ('XTG_36', '2', 'Impulse 125 FI', '125cccc', 'Xanh Đỏ', '2019', '31408000', '2', 'Asset/DB-Picture/XTG_36.png');
insert into sanpham values ('XTG_37', '2', 'Impulse 125 FI', '125cccc', 'Trắng Nâu Bạc', '2019', '31408000', '2', 'Asset/DB-Picture/XTG_37.png');
insert into sanpham values ('XTG_38', '2', 'Burgman Street', '125cccc', 'Xám Mờ Vàng Đồng', '2022', '48600000', '2', 'Asset/DB-Picture/XTG_38.png');
insert into sanpham values ('XTG_39', '2', 'Burgman Street', '125cccc', 'Đen Vàng Đồng', '2022', '48600000', '2', 'Asset/DB-Picture/XTG_39.png');
insert into sanpham values ('XTG_40', '2', 'Burgman Street', '125cccc', 'Trắng Vàng Đồng', '2022', '48600000', '2', 'Asset/DB-Picture/XTG_40.png');
