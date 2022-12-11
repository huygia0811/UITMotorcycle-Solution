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
        <form method="GET">
            <div>
                <h1>Nạp tiền QUA MOMO</h1>
                <form action="" method="get">
                    Nhập ngày <input type="date" name="date"> <br>
                    Số tiền <input type="text" name="sotien"> <br>
                    Số tài khoản <input type="text" name="sotaikhoan"> <br>
                    <input type="submit" class='btn-naptien' name="NapTien" value='Nạp tiền'>
                </form>
            </div>
        </form>
        <?php
        if (isset($_GET["NapTien"]) && $_GET["NapTien"] == "Nạp tiền") {
            if (empty($_GET["date"]) || empty($_GET["sotien"]) || empty($_GET["sotaikhoan"])) {
                echo "VUI LÒNG NHẬP ĐẦY ĐỦ!!!";
            } else {
                $sotien = $_GET["sotien"];
                $ngaynap = $_GET["date"];
                $sotaikhoan = $_GET["sotaikhoan"];
                $insert = "INSERT INTO NAPTIEN (`MAKH`, `SOTIEN`, `NGAYNAP`, `SOTAIKHOAN`, `DADUYET`) VALUES (0, '$sotien', '$ngaynap', '$sotaikhoan', 0)";
                $result_query = mysqli_query($con, $insert);
            }
        }
        ?>
    </div>
</body>

</html>