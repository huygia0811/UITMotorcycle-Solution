<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>pagination</title>
	<!-- bootstrap cdn -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- fontawwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
		integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		.container {
			margin: 15px auto 0 auto !important;
			border: none !important;
			padding: 0 !important;
		}

		#card-row {
			margin: 20px 10px;
			row-gap: 15px;
		}

		.card {
			display: grid;
			grid-template-rows: 200px 1fr;
			height: 100%;
			border-radius: 10px;
		}

		.card img {
			height: 100%;
			width: 100%;
			object-fit: contain;
		}

		.card-body {
			background-color: #cbf6f8;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
		}

		.btn-info {
			background-color: #05c5cc !important;
			color: white !important;
		}

		.submenu {
			margin: auto !important;
		}

		.submenu .btn {
			padding-top: 20px !important;
		}

		.submenu .btn:hover {
			background-color: #f0f0f0 !important;
		}

		.card-img-top {
			width: 100%;
			height: 200px;
			object-fit: contain;
		}
		#btnViewMore {
			width:100%;
			background-color: #05c5cc;
			border: none;
		}
		ul.pagi_nation {
			display: flex;
			list-style-type: none;
			justify-content: center;
		}
		.pagi_nation .is_disabled {
			cursor: not-allowed;
		}
		.pagi_nation a {
			color:black;
			text-decoration:none;
		}
		.pagi_nation li {
			padding: 5px 15px;
			background-color: #fff;
			border: 1px solid #ddd;
		}
		.pagi_nation li:first-child {
			border-top-left-radius: 7px;
			border-bottom-left-radius: 7px;
		}
		.pagi_nation li:last-child {
			border-top-right-radius: 7px;
			border-bottom-right-radius: 7px;
		}
		.pagi_nation li:hover {
			background-color: #eee;
		}
		.pagi_nation a:hover {
			color:black;
			text-decoration:none;
		}
		.pagi_nation  li.is_disabled:hover {
			background-color:#fff;
		}
		.pagi_nation li.is_active, li.is_active>a:hover {
			color:#fff;
			background-color:#05c5cc;
			border-top: 1px solid #05c5cc;
			border-bottom: 1px solid #05c5cc;
		}
    </style>
</head>
<body>
<div class="container border bg-light">
	<div class="row " id="card-row">
	<?php
	include('./includes/connect_database.php');
	include "./function/currency_format.php";
	if (isset($_GET['trang']) && $_GET['trang']!="") {
	$trang = $_GET['trang'];
	} else {
	$trang = 1;
	}

	$sp_tren_trang = 12;
	$offset = ($trang-1) * $sp_tren_trang;
	$previous_page = $trang - 1;
	$next_page = $trang + 1;
	$adjacents = "2";

	$result_count = mysqli_query($con,"SELECT COUNT(distinct TENSP) As tong_so_xe FROM `sanpham`");
	$tong_so_xe = mysqli_fetch_array($result_count);
	$tong_so_xe = $tong_so_xe['tong_so_xe'];
	$tong_so_trang = ceil($tong_so_xe / $sp_tren_trang);
	$second_last = $tong_so_trang - 1;

	$result = mysqli_query($con,"SELECT distinct TENSP FROM `sanpham` LIMIT $offset, $sp_tren_trang");

	while($row = mysqli_fetch_array($result)){
		$tensp = $row['TENSP'];
		$select_one = "select TENSP, GIA, URL_IMAGE from sanpham where TENSP='$tensp' LIMIT 1";
		$kq = mysqli_query($con, $select_one);
		while ($xe = mysqli_fetch_assoc($kq)) {
			echo '
				<div class="col-6 col-md-4  mb-2 ">
					<div class="card">
						<img src="' . $xe['URL_IMAGE'] . '" class="card-img-top" alt="$product_image3">
						<div class="card-body">
							<h5 class="card-title">' . $xe['TENSP'] . '</h5>
							<p class="card-text">' . currency_format($xe['GIA']) . ' đ</p>
							<a href="Product_Detail.php?tenxe=' . $xe['TENSP'] . '" class="btn btn-secondary" id="btnViewMore">View more</a>
						</div>
					</div>
				</div>
			';
		}
	}
	mysqli_close($con);
	?>
	</div>


	<!-- <div class="phantrang"> -->
		<ul class="pagi_nation">
			<li <?php if($trang <= 1){ echo "class='is_disabled'"; } ?>>
				<a <?php if($trang > 1){ echo "href='?trang=$previous_page'"; } ?>>Trước</a>
			</li>
			
			<?php 
				if ($tong_so_trang <= 10){  	 
					for ($counter = 1; $counter <= $tong_so_trang; $counter++){
						if ($counter == $trang) {
					echo "<li class='is_active'><a>$counter</a></li>";	
							}else{
					echo "<li><a href='?trang=$counter'>$counter</a></li>";
							}
					}
				}
				else if($tong_so_trang > 10){
					
				if($trang <= 4) {			
				for ($counter = 1; $counter < 8; $counter++){		 
						if ($counter == $trang) {
					echo "<li class='is_active'><a>$counter</a></li>";	
							}else{
					echo "<li><a href='?trang=$counter'>$counter</a></li>";
							}
					}
					echo "<li><a>...</a></li>";
					echo "<li><a href='?trang=$second_last'>$second_last</a></li>";
					echo "<li><a href='?trang=$tong_so_trang'>$tong_so_trang</a></li>";
					}

				elseif($trang > 4 && $trang < $tong_so_trang - 4) {		 
					echo "<li><a href='?trang=1'>1</a></li>";
					echo "<li><a href='?trang=2'>2</a></li>";
					echo "<li><a>...</a></li>";
					for ($counter = $trang - $adjacents; $counter <= $trang + $adjacents; $counter++) {			
					if ($counter == $trang) {
					echo "<li class='is_active'><a>$counter</a></li>";	
							}else{
					echo "<li><a href='?trang=$counter'>$counter</a></li>";
							}                  
				}
				echo "<li><a>...</a></li>";
				echo "<li><a href='?trang=$second_last'>$second_last</a></li>";
				echo "<li><a href='?trang=$tong_so_trang'>$tong_so_trang</a></li>";      
						}
					
					else {
					echo "<li><a href='?trang=1'>1</a></li>";
					echo "<li><a href='?trang=2'>2</a></li>";
					echo "<li><a>...</a></li>";

					for ($counter = $tong_so_trang - 6; $counter <= $tong_so_trang; $counter++) {
					if ($counter == $trang) {
					echo "<li class='is_active'><a>$counter</a></li>";	
							}else{
					echo "<li><a href='?trang=$counter'>$counter</a></li>";
							}                   
							}
						}
				}
			?>
			
			<li <?php if($trang >= $tong_so_trang){ echo "class='is_disabled'"; } ?>>
			<a <?php if($trang < $tong_so_trang) { echo "href='?trang=$next_page'"; } ?>>Sau</a>
			</li>
			<?php if($trang < $tong_so_trang){
				echo "<li><a href='?trang=$tong_so_trang'>Cuối &rsaquo;&rsaquo;</a></li>";
			} ?>
		</ul>
	<!-- </div> -->
</div>
</body>
</html>