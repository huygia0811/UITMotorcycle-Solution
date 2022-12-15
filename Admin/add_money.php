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
    <?php
    $manaptien = $_GET['id'];
    $select_query = "SELECT * FROM NAPTIEN WHERE MANAPTIEN ='$manaptien'";
    $result_query = mysqli_query($con, $select_query);
    $row = mysqli_fetch_assoc($result_query);
    $makh = $row['MAKH'];
    $sotien = $row['SOTIEN'];
    $daduyet = $row['DADUYET'];
    if ($daduyet == 0) {
        $select_query1 = "SELECT * FROM KHACHHANG WHERE MAKH = $makh";
        $result_query1 = mysqli_query($con, $select_query1);
        $row2 = mysqli_fetch_assoc($result_query1);
        $sodu = $row2['SODU'];
        $sodu += $sotien;
        $select_query2 = "UPDATE KHACHHANG SET SODU = '$sodu' WHERE MAKH = $makh";
        $result_query2 = mysqli_query($con, $select_query2);
        $select_query3 = "UPDATE NAPTIEN SET DADUYET = 1 WHERE MANAPTIEN = '$manaptien'";
        $result_query3 = mysqli_query($con, $select_query3);
        echo "ĐÃ CỘNG TIỀN VÀO TÀI KHOẢN KHÁCH HÀNG!!!";
    }
    else{
        echo "ĐÃ DUYỆT TRƯỚC ĐÓ!!! THAO TÁC THẤT BẠI!!!";
    }
    echo "<br><a href='check_payment.php'>QUAY LẠI</a>"
    ?>
    
</body>

</html>