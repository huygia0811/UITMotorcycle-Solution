<?php
include('../includes/connect_database.php');
include "index.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container pt-4">
        <table id="products" class="table table-striped table-hover" role="grid" aria-describedby="products_info">
            <thead class="thead-dark">
                <tr role="row" style='text-align:center'>
                    <th width="50" scope="col">
                        Số hóa đơn</th>
                    <th width="50" scope="col">
                        Mã khách hàng</th>
                    <th width="160" scope="col">
                        Tên khách hàng</th>
                    <th width="250" scope="col">
                        Tên sản phẩm và số lượng</th>
                    <th width="160" scope="col">
                        Ngày hóa đơn</th>
                    <th width="160" scope="col">
                        Tổng tiền</th>
                    <th width="120" scope="col">
                        Trạng thái</th>
                    <th width="160" scope="col">
                        Thao tác</th>
                </tr>
            </thead>
            <tbody> 
                <?php
                $select_query = "SELECT * FROM HOADON, KHACHHANG WHERE HOADON.MAKH = KHACHHANG.MAKH";
                $result_query = mysqli_query($con, $select_query);
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $sohd = $row['SOHD'];
                    $makh = $row['MAKH'];
                    $tenkh = $row['HOTEN'];
                    $tongtien = $row['TRIGIA'];
                    $ngayhd = $row['NGHD'];
                    $trangthai = $row['TRANGTHAI'];
                    switch($trangthai){
                        case -2:
                        $trangthai_text = "Chờ xác nhận";
                        break;
                        case -1:
                        $trangthai_text = "Đã hủy";
                        break;
                        case 0:
                        $trangthai_text = "Đang giao";
                        break;
                        case 11:
                        $trangthai_text = "Đã giao";
                        break;
                    }
                    $select_query1 = "SELECT * FROM CTHD, SANPHAM WHERE CTHD.MASP = SANPHAM.MASP AND SOHD = $sohd";
                    $result_query1 = mysqli_query($con, $select_query1);
                    echo "<tr style='text-align:center'>";
                    echo "<td style='text-align:left'>";
                    echo $sohd;
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $makh;
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $tenkh;
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    while ($row1 = mysqli_fetch_assoc($result_query1)) {
                        $tensp = $row1['TENSP'];
                        $soluong = $row1['SL'];
                        echo $tensp.": ".$soluong."<br>";
                    }
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $ngayhd;
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $tongtien." VNĐ";
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $trangthai_text;
                    echo "</td>";
                    echo "<td></td></tr>";                   
                }
                ?>
            </tbody>
            
        </table>
    </div>
</body>
</html>