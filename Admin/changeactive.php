<?php
include('../includes/connect_database.php');
$masp = $_GET['id'];
$select_query = "SELECT * FROM SANPHAM WHERE MASP = $masp";
$result_query = mysqli_query($con, $select_query);
$row = mysqli_fetch_assoc($result_query);
if($row['IS_ACTIVE'] == 1)
{
    $sql = "UPDATE SANPHAM SET IS_ACTIVE = 0 WHERE MASP = $masp";
    $result_query1 = mysqli_query($con, $sql);
    echo "Đã đổi trạng thái thành công!!!";
}
else
{
    $sql = "UPDATE SANPHAM SET IS_ACTIVE = 1";
    $result_query1 = mysqli_query($con, $sql); 
    echo "Đã đổi trạng thái thành công!!!";
}
echo "<a href='./view_products.php'>Quay lại</a>"
?>
