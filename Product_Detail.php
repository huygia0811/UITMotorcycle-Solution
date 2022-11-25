<!DOCTYPE html>
<html>
<head>
	<title>UIT MotorCycle</title>
    <link rel="icon" href="./asset/DB-Picture/logo.ico" type="image/x-icon">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- fontawwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/style_chitietsp.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<?php
    include "./includes/connect_database.php";
    include('./header.php');
    
?> 
<body>
    <?php
        if (!isset($_GET['tenxe']))
        {
            return null;
        }
    ?>
    <main>
        <div class = "container">
            <div class="prod_detail">
                <div class="prod_row_0">
                    <?php 
                        include "./function/currency_format.php";
                        global $conn;
                        $tenxe = $_GET['tenxe'];
                        $sql = "SELECT * from sanpham where TENSP = '$tenxe'";
                        $kq = $con->query($sql);
                        $xe = $kq->fetch_assoc();
                        echo '
                            <div class="url_img">
                                <img id="prod_img_url" src="'.$xe['URL_IMAGE'].'"/>
                            </div>
                            <div class="detail">
                                <h2>'.$xe['TENSP'].'</h2>
                                <h3>'.currency_format($xe['GIA']).'</h3>
                        '
                    ?>
                    <!-- <div class="url_img">
                        <img src="asset/DB-Picture/xs01.png"/>
                    </div>
                    <div class="detail">
                        <h2>CB150R The Streetster</h2>
                        <h3>105.500.000 d</h3> -->
                        <div class="cart_quantity">
                            <div id="txtQuantity">Số lượng</div>
                            <div id="btn_Giam">−</div>
                            <div id="amount">01</div>
                            <div id="btn_Tang">+</div>
                        </div>
                        <div class="mauxe">
                            <div id="txtMauxe">Màu sắc:</div>
                            <div class="lstmau">
                                <?php  
                                    $kq2 = $con->query($sql);
                                    while ($xe2 = $kq2->fetch_assoc())
                                    {
                                        $url_img = $xe2['URL_IMAGE'];
                                        $mausac = $xe2['MAU'];
                                        echo '
                                            <div id="btnMau" onclick="document.getElementById
                                        ';
                                        echo "
                                            ('prod_img_url').src='$url_img'
                                        ";
                                        echo '
                                            ">'.$mausac.'</div>
                                        ';
                                    }
                                ?>
                            </div>
                            <!-- <div id="btnMau">Đen</div> -->
                        </div>
                        <div class="addToCart_Buynow">
                            <div id="addtocart">Thêm vào giỏ</div>
                            <div id="Buynow">Mua ngay</div>
                        </div>
                    </div>
                </div>
                
                <div class="more-details">
                    <table>
                        <tr>
                            <th colspan = "2"><h3>Thông tin chi tiết</h3></th>
                        </tr>
                        <?php
                            $sql2 = "select TENHANG, LOAIXE, PHANKHOI, NAMSX from sanpham, hangxe where sanpham.MAHANG = hangxe.MAHANG and TENSP = '$tenxe'";
                            $kq = $con->query($sql2);
                            $xe = $kq->fetch_assoc();
                            if ($xe['LOAIXE'] == 1) {
                                $tenloai = "Xe số";
                            }
                            else if ($xe['LOAIXE'] == 2) {
                                $tenloai = "Tay ga";
                            }
                            else {
                                $tenloai = "Phân khối lớn";
                            }
                            echo '
                                <tr>
                                    <th>Hãng xe</th>
                                    <td>'.$xe['TENHANG'].'</td>
                                </tr>
                                <tr>
                                    <th>Loại xe</th>
                                    
                                    <td>'.$tenloai.'</td>
                                </tr>
                                <tr>
                                    <th>Năm sản xuất</th>
                                    <td>'.$xe['NAMSX'].'</td>
                                </tr>
                                <tr>
                                    <th>Phân khối</th>
                                    <td>'.$xe['PHANKHOI'].'</td>
                                </tr>
                            ';
                        ?>
                        <!-- <tr>
                            <th>Hãng xe</th>
                            <td>Honda</td>
                        </tr>
                        <tr>
                            <th>Loại xe</th>
                            <td>Phân khối lớn</td>
                        </tr>
                        <tr>
                            <th>Năm sản xuất</th>
                            <td>2021</td>
                        </tr>
                        <tr>
                            <th>Phân khối</th>
                            <td>150cc</td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
		
		<script src="./JS/javscr.js"></script>
	</main>
    <?php
        include "footer_copy.php";
    ?>
    
</body>
</html>