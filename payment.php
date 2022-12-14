<?php
include './includes/connect_database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./asset/DB-Picture/logo.ico" type="image/x-icon">
    <title>Payment</title>
</head>

<body>
    <div>
        <img style="height:auto; width:300px;" src="Asset/Picture/momo.jpg">
        <div>
            <h1>Nạp tiền QUA MOMO</h1>
            <form action="" method="post">
                Nhập ngày <input type="date" name="date"> <br>
                Số tiền <input type="text" name="sotien"> <br>
                Số tài khoản <input type="text" name="sotaikhoan"> <br>
                <input type="submit" class='btn-naptien' name="NapTien" value='Nạp tiền'>
            </form>
        </div>
        <?php
        if (isset($_POST["NapTien"]) && $_POST["NapTien"] == "Nạp tiền") {
            if (empty($_POST["date"]) || empty($_POST["sotien"]) || empty($_POST["sotaikhoan"])) {
                echo "VUI LÒNG NHẬP ĐẦY ĐỦ!!!";
            } else {
                $get_user = $_SESSION['username'];
                $sql = "Select MAKH from taikhoan where tendangnhap = '$get_user'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $makh = $row['MAKH'];
                $sotien = $_POST["sotien"];
                $ngaynap = $_POST["date"];
                $sotaikhoan = $_POST["sotaikhoan"];
                $insert = "INSERT INTO NAPTIEN (`MAKH`, `SOTIEN`, `NGAYNAP`, `SOTAIKHOAN`, `DADUYET`) VALUES ('$makh', '$sotien', '$ngaynap', '$sotaikhoan', 0)";
                $result_query = mysqli_query($con, $insert);
            }
        }
        ?>
    </div>
</body>

</html>