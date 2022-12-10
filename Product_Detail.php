<?php
include('./function/common_function.php');
cart();
?>
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
    if (!isset($_GET['tenxe'])) {
        return null;
    }
    ?>
    <main>
        <div class="container">
            <div class="prod_detail">
                <div class="prod_row_0">
                    <?php
                    include "./function/currency_format.php";

                    $tenxe = $_GET['tenxe'];
                    $sql = "SELECT * from sanpham where TENSP = '$tenxe'";
                    $kq = $con->query($sql);
                    $xe = $kq->fetch_assoc();
                    echo '
                            <div class="url_img">
                                <img id="prod_img_url" src="' . $xe['URL_IMAGE'] . '"/>
                            </div>
                            <div class="detail">
                                <h2>' . $xe['TENSP'] . '</h2>
                                <h3>' . currency_format($xe['GIA']) . '</h3>
                        '
                    ?>
                    <div class="mauxe">
                        <div id="txtMauxe">Màu sắc:</div>
                        <div class="lstmau">
                            <?php
                            $kq2 = $con->query($sql);
                            $getcolor = '';
                            while ($xe2 = $kq2->fetch_assoc()) {
                                $url_img = $xe2['URL_IMAGE'];
                                $mausac = $xe2['MAU'];
                                echo '
                                            <div id="btnMau" onclick="document.getElementById
                                        ';
                                echo "
                                            ('prod_img_url').src='$url_img';get_color('$mausac');
                                        ";
                                echo '
                                            ">' . $mausac . '</div>
                                        ';
                                    }
                                ?>
                                <script>
                                function get_color(color) {
                                    var x = document.getElementById('get_color_name').value = color;
                                    console.log(x);

                                }
                            </script>"
                            </div>
                        </div>


                    <div class="addToCart_Buynow">
                        <form action="" method="post">
                            <input type="hidden" id="get_color_name" name="get_color" value="">

                            <button type="submit" name="mua" value="">
                                    tHÊM
                            </button>
                        </form>
                        <?php
                            if(isset($_POST['mua']))
                            {
                                $get_Color=$_POST['get_color'];
                                $select_sp = "select * from `sanpham` where TENSP = '$tenxe' and MAU='$get_Color'";
                                $select_run = mysqli_query($con, $select_sp);
                                $row = mysqli_fetch_assoc($select_run);
                                $typeid = $row['MASP'];
                                echo "<script>window.open('Product_Detail.php?add_to_card=$typeid&soluong=1','_self')</script>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="more-details">
                <table>
                    <tr>
                        <th colspan="2">
                            <h3>Thông tin chi tiết</h3>
                        </th>
                    </tr>
                    <?php
                    $sql2 = "select TENHANG, LOAIXE, PHANKHOI, NAMSX from sanpham, hangxe where sanpham.MAHANG = hangxe.MAHANG and TENSP = '$tenxe'";
                    $kq = $con->query($sql2);
                    $xe = $kq->fetch_assoc();
                    if ($xe['LOAIXE'] == 1) {
                        $tenloai = "Xe số";
                    } else if ($xe['LOAIXE'] == 2) {
                        $tenloai = "Tay ga";
                    } else {
                        $tenloai = "Phân khối lớn";
                    }
                    echo '
                                <tr>
                                    <th>Hãng xe</th>
                                    <td>' . $xe['TENHANG'] . '</td>
                                </tr>
                                <tr>
                                    <th>Loại xe</th>
                                    
                                    <td>' . $tenloai . '</td>
                                </tr>
                                <tr>
                                    <th>Năm sản xuất</th>
                                    <td>' . $xe['NAMSX'] . '</td>
                                </tr>
                                <tr>
                                    <th>Phân khối</th>
                                    <td>' . $xe['PHANKHOI'] . '</td>
                                </tr>
                            ';
                    ?>

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