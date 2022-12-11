<?php
include('./function/common_function.php');
include('./includes/connect_database.php');
cart();
?>
<div class="container" style="min-height: 400px;">
    <div>
        <?php
        $total = 0;
        $getip = getIPAddress();
        $select_cart = "select * from `giohang` where khachhang_ip='$getip'";
        $select_cart_run = mysqli_query($con, $select_cart);
        $count_row = mysqli_num_rows($select_cart_run);
        if ($count_row > 0) {
            echo "<form action='' method='post'><table class='table table-striped' style='text-align:center'>
                    <thead class='thead-dark'>
                        <tr role='row' >
                            <th width='50'>Chọn</th>
                            <th width='160'>
                                Ảnh</th>
                            <th width='180'>
                                Tên sản phẩm
                            </th>
                            <th width='100'>
                                Màu</th>
                            <th width='70'>
                                Số lượng</th>
                            <th width='120'>
                                Tổng tiền</th>
                            <th width='180'>
                                Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>";
            while ($row_cart = mysqli_fetch_array($select_cart_run)) {
                $masp = $row_cart['MASP'];
                $soluong = $row_cart['soluong'];
                $select_product = "select * from `sanpham` where MASP='$masp'";
                $select_product_run = mysqli_query($con, $select_product);
                while ($row_product = mysqli_fetch_array($select_product_run)) {
                    $tensp = $row_product['TENSP'];
                    $url_image = $row_product['URL_IMAGE'];
                    $mau = $row_product['MAU'];
                    $gia = $row_product['GIA'];
                    $total += $gia;
        ?>
                    <tr>
                        <td><input type="checkbox" name="select[]" value="<?php echo $masp ?>"></td>
                        <td>
                            <img style="width: 60%; height: 60%; object-fit: contain;" src="./<?php echo $url_image; ?>" alt="<?php echo $tensp ?>">
                        </td>
                        <td><?php echo $tensp; ?></td>
                        <td><?php echo $mau; ?></td>

                        <td>
                            <div class="cart_quantity">
                                <button class="minus-btn" onclick="handleMinus()">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input type="text" name="qty" id="qty" value="<?php echo $soluong ?>" />
                                <button class="plus-btn" onclick="handlePlus()">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- <input type="text" name="qty" class="form-input w-50" value="<?php echo $soluong ?>"></td> -->

                        <td><?php echo $gia; ?> đ</td>


                        <td>
                            <input type="submit" value="Thanh toán" name="Thanh_toan" class="bg-info p-2 border-0 my-2 px-2">
                            <input type="submit" value="Xóa" name="xoa" class="bg-info p-2 border-0">

                        </td>
                    </tr>
            <?php
                }
            }
            ?>
            </tbody>
            </table>
            <div class="d-flex">
                <h4 class="px-3">Tổng: <strong class="text-info"><?php echo "$total" ?></strong></h4>

                <a href="#"><button type="submit" name="thanhtoantatca" class="bg-info p-2 border-0 mx-4">Thanh toán tất cả</button></a>
                <a href="#"><button class="bg-info p-2 border-0">Thoát</button></a>

            </div>
            </form>
        <?php
        } else {
            echo "<div class='cart_list cart_list--no-cart'>
                    <img src='./asset/header_cart/empty-cart.webp' alt='' class='cart_list-no-cart-img' />
                    <a href='./index.php' class='home-link'>
                        <button class='home btn btn-lg btn-success'>Trang chủ</button>
                    </a>
                    </div>";
        }
        ?>



        <script src="./JS/shopping_cart.js"></script>
        <?php
        function deleterow()
        {
            global $con;
            if (isset($_POST['xoa'])) {
                if (isset($_POST['select'])) {
                    foreach ($_POST['select'] as $remove_id) {
                        $delete_query = "delete from `giohang` where MASP='$remove_id'";
                        $delete_query = mysqli_query($con, $delete_query);
                        if ($delete_query) {

                            echo "<script>window.open('page_shopping_cart.php','_self') </script>";
                        }
                    }
                } else {
                    echo "<script>window.open('page_shopping_cart.php','_self') </script>";
                    echo "kop dc";
                }
            }
        }
        echo $deleterow = deleterow();
        function check_thongtin()
        {
            global $con;
            if(isset($_POST['Thanh_toan']) or isset($_POST['thanhtoantatca']))
            {
            $username=$_SESSION['username'];
            $select_makh="select * from `taikhoan` where tendangnhap='$username'";
            $select_makh_run=mysqli_query($con,$select_makh);
            $row_taikhoan=mysqli_fetch_assoc($select_makh_run);
            $get_makh=$row_taikhoan['MAKH'];
            $select_khachhang="select * from `khachhang` where MAKH='$get_makh'";
            $select_khachhang_run=mysqli_query($con,$select_khachhang);
            $row_khachhang=mysqli_fetch_assoc($select_khachhang_run);
            $get_hoten=$row_khachhang['HOTEN'];
            $get_dchi=$row_khachhang['DCHI'];
            $get_sodt=$row_khachhang['SODT'];
            $get_gioitinh=$row_khachhang['GIOITINH'];
            $get_socccd=$row_khachhang['SOCCCD'];
            if($get_hoten=='' or $get_dchi=='' or $get_sodt=='' or $get_gioitinh=='' or $get_socccd=='')
            {
                echo "<script> alert('Bạn phải cập nhập đầy đủ thông tin trước khi thanh toán') </script>";
                echo "<script>window.open('user.php?profile','_self')</script>>";
                exit(0);
            }
        }
        }
        echo $check_thongtin=check_thongtin();
        function thanhtoan()
        {
            global $con;
            $total = 0;
            if (isset($_POST['Thanh_toan'])) {
                if (isset($_POST['select'])) {
                    foreach ($_POST['select'] as $remove_id) {
                        //lấy số lượng
                        $select_giohang = "select * from `giohang` where MASP='$remove_id'";
                        $select_giohang_run = mysqli_query($con, $select_giohang);
                        $row_giohang = mysqli_fetch_assoc($select_giohang_run);
                        $get_sl = $row_giohang['soluong'];
                        // lấy giá
                        $select_sanpham = "select * from `sanpham` where MASP='$remove_id'";
                        $select_sanpham_run = mysqli_query($con, $select_sanpham);
                        $row_sanpham = mysqli_fetch_assoc($select_sanpham_run);
                        $get_gia = $row_sanpham['GIA'];
                        $total += $get_sl * $get_gia;
                    }
                    $get_username = $_SESSION['username'];
                    // lấy mã khách hàng
                    $select_khachhang = "select * from `taikhoan` where tendangnhap='$get_username'";
                    $select_khachhang_run = mysqli_query($con, $select_khachhang);
                    $row_khachhang = mysqli_fetch_assoc($select_khachhang_run);
                    $get_makh = $row_khachhang['MAKH'];
                    //chèn hóa đơn
                    $insert_hoadon = "insert into `hoadon` (NGHD,MAKH,TRIGIA,TRANGTHAI) values ('NOW()','$get_makh','$total','-2')";
                    $insert_hoadon_run = mysqli_query($con, $insert_hoadon);
                    //lấy số hd mới dc tạo
                    $select_hoadon = "select MAX(SOHD) from `hoadon`";
                    $select_hoadon_run = mysqli_query($con, $select_hoadon);
                    $row_hoadon = mysqli_fetch_assoc($select_hoadon_run);
                    $get_sohd = $row_hoadon['MAX(SOHD)'];
                    foreach ($_POST['select'] as $remove_id) {
                        //lấy số lượng
                        $select_giohang = "select * from `giohang` where MASP='$remove_id'";
                        $select_giohang_run = mysqli_query($con, $select_giohang);
                        $row_giohang = mysqli_fetch_assoc($select_giohang_run);
                        $get_sl = $row_giohang['soluong'];
                        //chèn vào cthd
                        $insert_cthd = "insert into `cthd` (SOHD,MASP,SL) value ('$get_sohd','$remove_id','$get_sl')";
                        $insert_cthd_run = mysqli_query($con, $insert_cthd);
                        //chèn xong thì xóa
                        $delete_query = "delete from `giohang` where MASP='$remove_id'";
                        $delete_query = mysqli_query($con, $delete_query);
                        if ($delete_query) {
                            echo "<script>window.open('page_shopping_cart.php','_self') </script>";
                        }
                    }
                } else {
                    echo "<script>window.open('user.php?purchar&type=-3','_self') </script>";
                    
                }
            
             }
        }
        echo $insert = thanhtoan();
        function thanhtoantatca()
        {
            global $con;
            $total=0;
            if (isset($_POST['thanhtoantatca'])) {
                $select_giohang="select * from `giohang`";
                $select_giohang_run=mysqli_query($con,$select_giohang);
                while($row=mysqli_fetch_assoc($select_giohang_run))
                {
                    $get_id=$row['MASP'];
                    $get_soluong=$row['soluong'];
                    $select_sanpham = "select * from `sanpham` where MASP='$get_id'";
                    
                    $select_sanpham_run = mysqli_query($con, $select_sanpham);
                    $row_sanpham = mysqli_fetch_assoc($select_sanpham_run);
                    $get_gia = $row_sanpham['GIA'];
                    $total += $get_soluong * $get_gia;
                    
                }
                $get_username = $_SESSION['username'];
                // lấy mã khách hàng
                $select_khachhang = "select * from `taikhoan` where tendangnhap='$get_username'";
                $select_khachhang_run = mysqli_query($con, $select_khachhang);
                $row_khachhang = mysqli_fetch_assoc($select_khachhang_run);
                $get_makh = $row_khachhang['MAKH'];
                //chèn hóa đơn
                $insert_hoadon = "insert into `hoadon` (NGHD,MAKH,TRIGIA,TRANGTHAI) values ('NOW()','$get_makh','$total','0')";
                $insert_hoadon_run = mysqli_query($con, $insert_hoadon);
                //lấy số hd mới dc tạo
                $select_hoadon = "select MAX(SOHD) from `hoadon`";
                $select_hoadon_run = mysqli_query($con, $select_hoadon);
                $row_hoadon = mysqli_fetch_assoc($select_hoadon_run);
                $get_sohd = $row_hoadon['MAX(SOHD)'];
                $select_tesst="select * from `giohang`";
                $select_tesst_run=mysqli_query($con,$select_tesst);
                while($row_=mysqli_fetch_assoc($select_tesst_run))
                {
                    echo var_dump($row_);
                    //lấy số lượng
                    $select_giohang = "select * from `giohang`";
                    $select_giohang_run = mysqli_query($con, $select_giohang);
                    $row_giohang = mysqli_fetch_assoc($select_giohang_run);
                    $get_sl = $row_giohang['soluong'];
                    $get_id=$row_giohang['MASP'];
                    //chèn vào cthd
                    $insert_cthd = "insert into `cthd` (SOHD,MASP,SL) value ('$get_sohd','$get_id','$get_sl')";
                    
                    $insert_cthd_run = mysqli_query($con, $insert_cthd);
                    //chèn xong thì xóa
                    $delete_query = "delete from `giohang` where MASP='$get_id'";
                    $delete_query = mysqli_query($con, $delete_query);
                    if ($delete_query) {
                        echo "<script>window.open('page_shopping_cart.php','_self') </script>";
                    }
                }
            }
        }
        echo $thanhtoan=thanhtoantatca();
        ?>
    </div>
</div>