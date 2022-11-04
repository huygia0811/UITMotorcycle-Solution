<!DOCTYPE html>
<html>

<head>
	<title>UIT MotorCycle</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style_header.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="style_main.css">
	<link rel="stylesheet" href="style_footer.css">
</head>

<body class="body">
<?php
$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "UITMOTORCYCLE";
$conn= mysqli_connect($SERVER, $USERNAME, $PASSWORD,$DBNAME);
$strSQL = "SELECT MASP, TENSP from SANPHAM WHERE LOAIXE = '1';";
$result = mysqli_query($conn, $strSQL);
while ($row = mysqli_fetch_row($result)){
	echo $row[0] . " " .$row[1] . "<br>";
	};
//đóng kết nối
mysqli_close($conn);
?>
	<header>
		<div class="fixed_nav">
			<div class="menu_logo">
				<a href="#">
					<img title="Trang chủ" src="asset/Picture/logo.jpg" height="100px" />
				</a>
			</div>
			<div class="menu_col2">
				<div class="account" id="submenu_account">
					<a href="#"><img src="asset/Picture/cart.png" height="15px" /> Giỏ hàng</a>
					<a href="#"><img src="asset/Picture/lsmh.png" height="15px" /> Lịch sử mua hàng</a>
					<a href="#"><img src="asset/Picture/user.png" height="15px" /> Tài khoản</a>
					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
				</div>
				<div class="search">
					<div class="srch_input">
						<input type="search" placeholder="&#xF002;   Nhập từ khóa tìm kiếm" style="padding: 10px; text-align:center; font-family: FontAwesome">
					</div>
					<div class="srch_button">
						<button type="button"><img src="asset/Picture/filter-icon@2x.png" /></button>
					</div>
				</div>
			</div>
		</div>
		<div class="tab_categories">
			<div id="each_tab">
				<a href="">
					<img src="asset/Picture/icon-grid.svg" height="25px" />
					<p>Tất cả</p>
				</a>
			</div>
			<div id="each_tab">
				<a href="">
					<img src="asset/Picture/icon-gear.svg" height="25px" />
					<p>Xe số</p>
				</a>
			</div>
			<div id="each_tab">
				<a href="">
					<img src="asset/Picture/icon-scooter.svg" height="25px" />
					<p>Xe tay ga</p>
				</a>
			</div>
			<div id="each_tab">
				<a href="">
					<img src="asset/Picture/icon-pkl.svg" height="25px" />
					<p>Xe phân khối lớn</p>
				</a>
			</div>
		</div>
	</header>
	<main>
		<div class="slideshow-container">
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="asset/Picture/banner_1.png" style="width:100%;">
				<div class="text"> UIT CAR</div>
			</div>
			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="https://www.w3schools.com/howto/img_snow_wide.jpg" style="width:100%">
				<div class="text"> UIT CAR</div>
			</div>
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%">
				<div class="text"> UIT CAR</div>
			</div>
		</div>
		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>
		<div class="content">
			<div class="content_row">
				<div id="content_col">
					<div id="content_post">
						<div class="content_img_post">
							<img src="asset/Picture/sh_1.jpg">
							<div id="content_img_post_hover"></div>
							<div id="content_img_hover_link">
								<a href="">Xem chi tiết</a>
							</div>
						</div>

						<div class="content_detail">
							<div class="post_name_brand">
								<img src="asset/Picture/Honda.png">
								<p id="TenXe">SH MOD 110</p>
							</div>
							<p id="NamSX">2020</p>
							<p id="GiaTien">14.600.000 vnđ</p>
						</div>
					</div>
				</div>
				<div id="content_col">
					<div id="content_post">
						<div class="content_img_post">
							<img src="asset/Picture/sh_1.jpg">
							<div id="content_img_post_hover"></div>
							<div id="content_img_hover_link">
								<a href="">Xem chi tiết</a>
							</div>
						</div>

						<div class="content_detail">
							<div class="post_name_brand">
								<img src="asset/Picture/Honda.png">
								<p id="TenXe">SH MOD 110</p>
							</div>
							<p id="NamSX">2020</p>
							<p id="GiaTien">14.600.000 vnđ</p>
						</div>
					</div>
				</div>
				<div id="content_col">
					<div id="content_post">
						<div class="content_img_post">
							<img src="asset/Picture/sh_1.jpg">
							<div id="content_img_post_hover"></div>
							<div id="content_img_hover_link">
								<a href="">Xem chi tiết</a>
							</div>
						</div>

						<div class="content_detail">
							<div class="post_name_brand">
								<img src="asset/Picture/Honda.png">
								<p id="TenXe">SH MOD 110</p>
							</div>
							<p id="NamSX">2020</p>
							<p id="GiaTien">14.600.000 vnđ</p>
						</div>
					</div>
				</div>
				<div id="content_col">
					<div id="content_post">
						<div class="content_img_post">
							<img src="asset/Picture/sh_1.jpg">
							<div id="content_img_post_hover"></div>
							<div id="content_img_hover_link">
								<a href="">Xem chi tiết</a>
							</div>
						</div>

						<div class="content_detail">
							<div class="post_name_brand">
								<img src="asset/Picture/Honda.png">
								<p id="TenXe">SH MOD 110</p>
							</div>
							<p id="NamSX">2020</p>
							<p id="GiaTien">14.600.000 vnđ</p>
						</div>
					</div>
				</div>
				<div id="content_col">
					<div id="content_post">
						<div class="content_img_post">
							<img src="asset/Picture/sh_1.jpg">
							<div id="content_img_post_hover"></div>
							<div id="content_img_hover_link">
								<a href="">Xem chi tiết</a>
							</div>
						</div>

						<div class="content_detail">
							<div class="post_name_brand">
								<img src="asset/Picture/Honda.png">
								<p id="TenXe">SH MOD 110</p>
							</div>
							<p id="NamSX">2020</p>
							<p id="GiaTien">14.600.000 vnđ</p>
						</div>
					</div>
				</div>
				<div id="content_col">
					<div id="content_post">
						<div class="content_img_post">
							<img src="asset/Picture/sh_1.jpg">
							<div id="content_img_post_hover"></div>
							<div id="content_img_hover_link">
								<a href="">Xem chi tiết</a>
							</div>
						</div>

						<div class="content_detail">
							<div class="post_name_brand">
								<img src="asset/Picture/Honda.png">
								<p id="TenXe">SH MOD 110</p>
							</div>
							<p id="NamSX">2020</p>
							<p id="GiaTien">14.600.000 vnđ</p>
						</div>
					</div>
				</div>
				<div id="content_col">
					<div id="content_post">
						<div class="content_img_post">
							<img src="asset/Picture/sh_1.jpg">
							<div id="content_img_post_hover"></div>
							<div id="content_img_hover_link">
								<a href="">Xem chi tiết</a>
							</div>
						</div>

						<div class="content_detail">
							<div class="post_name_brand">
								<img src="asset/Picture/Honda.png">
								<p id="TenXe">SH MOD 110</p>
							</div>
							<p id="NamSX">2020</p>
							<p id="GiaTien">14.600.000 vnđ</p>
						</div>
					</div>
				</div>
				<div id="content_col">
					<div id="content_post">
						<div class="content_img_post">
							<img src="asset/Picture/sh_1.jpg">
							<div id="content_img_post_hover"></div>
							<div id="content_img_hover_link">
								<a href="">Xem chi tiết</a>
							</div>
						</div>

						<div class="content_detail">
							<div class="post_name_brand">
								<img src="asset/Picture/Honda.png">
								<p id="TenXe">SH MOD 110</p>
							</div>
							<p id="NamSX">2020</p>
							<p id="GiaTien">14.600.000 vnđ</p>
						</div>
					</div>
				</div>
				<div id="content_col">
					<div id="content_post">
						<div class="content_img_post">
							<img src="asset/Picture/sh_1.jpg">
							<div id="content_img_post_hover"></div>
							<div id="content_img_hover_link">
								<a href="">Xem chi tiết</a>
							</div>
						</div>

						<div class="content_detail">
							<div class="post_name_brand">
								<img src="asset/Picture/Honda.png">
								<p id="TenXe">SH MOD 110</p>
							</div>
							<p id="NamSX">2020</p>
							<p id="GiaTien">14.600.000 vnđ</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="javscr.js"></script>
	</main>
	<footer>
		<div class="footer_container">
			<div class="footer_row">
				<div class="footer_col">
					<h6 id="ft_cl1_header">UIT MotorCycle</h6>
					<div class="HCM">
						<p><b>Địa chỉ: </b>Trường Đại học CNTT, Khu phố 6, P.Linh Trung, TP.Thủ Đức, TP. HCM</p>
						<p><b>Điện thoại: </b>1234567890</p>
					</div>
				</div>
				<div class="footer_col">
					<h6>HỖ TRỢ KHÁCH HÀNG</h6>
					<div class="ft_horizontal_line"></div>
					<div class="support">
						<p><b>Hotline: </b>1234567890 (9:00 - 21:00)</p>
						<p><b>Email: </b>uitmotorcycle@gmail.com</p>
					</div>
					<div class="khieu_nai">
						<p><a href="#">Chính sách giải quyết khiếu nại</a></p>
						<p><a href="#">Chính sách bảo mật</a> </p>
						<p><a href="#">Quy định đăng tin</a> </p>
					</div>

				</div>
				<div class="footer_col">
					<div class="about_us">
						<h6>VỀ CHÚNG TÔI</h6>
						<div class="ft_horizontal_line"></div>
						<div class="intro">
							<p><a href="#">Giới thiệu</a></p>
							<p><a href="#">Điều khoản sử dụng</a></p>
							<p><a href="#">Quy chế hoạt động</a></p>
							<p><a href="#">Trung tâm khách hàng</a></p>
							<p><a href="#">Hỏi đáp (FAQ)</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>