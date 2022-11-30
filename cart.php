<?php
include('./function/common_function.php');
include('./includes/connect_database.php');
cart();
?>
<div class="container" style="min-height: 400px;">
    <div class="bg-dark">
        <h3 class="text-center">Cart</h3>
    </div>
    <div>
        <form action="" method="post">

       
        <table class="table table-striped">
            <thead>
                <tr>
                     <th>Chọn</th>
                    <th>Tên</th>
                    <th>Hình</th>
                    <th>Số lượng</th>
                    <th>Tổng giá</th>
                    
                    <th colspan="2">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                $getip = getIPAddress();
                $select_cart = "select * from `giohang` where khachhang_ip='$getip'";
                $select_cart_run = mysqli_query($con, $select_cart);
                $count_row = mysqli_num_rows($select_cart_run);
                if ($count_row > 0) {
                    while ($row_cart = mysqli_fetch_array($select_cart_run)) {
                        $masp = $row_cart['MASP'];
                        $soluong=$row_cart['soluong'];
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
                                <td><?php echo $tensp; ?></td>
                                <td>
                                    <img style="width:80px; height: 80px; object-fit: contain;" src="./<?php echo $url_image; ?>" alt="<?php echo $tensp ?>">
                                </td>

                                <td><input type="text" name="qty" class="form-input w-50" value="<?php echo $soluong?>"></td>

                                <td><?php echo $gia."/-" ?></td>
                                

                                <td>
                                    <input type="submit" value="Thanh toán" name="Thanh_toan" class="bg-info p-2 border-0 my-2 px-2">
                                    <input type="submit" value="Cập nhập" name="cap_nhap" class="bg-info p-2 border-0 my-2 px-2">
                                    <input type="submit" value="Xóa" name="xoa" class="bg-info p-2 border-0">
                                   
                                </td>
                            </tr>
                <?php
                        }
                    }
                }
                else
                {
                    echo "k có";
                }
                ?>

            </tbody>
        </table>
        <div class="d-flex">
            <h4 class="px-3">Tổng: <strong class="text-info"><?php echo "$total" ?></strong></h4>

            <a href="#"><button class="bg-info p-2 border-0 mx-4">Thanh toán tất cã</button></a>
            <a href="#"><button class="bg-info p-2 border-0">Thoát</button></a>

        </div>
        </form>
        <?php
            function deleterow()
            {
                global $con;
                if(isset($_POST['xoa']))
                {
                    if(isset($_POST['select']))
                    {
                        foreach($_POST['select'] as $remove_id)
                    {
                        $delete_query="delete from `giohang` where MASP='$remove_id'";
                        $delete_query=mysqli_query($con, $delete_query);
                        if($delete_query)
                        {
                            
                          echo "<script>window.open('shopping_cart.php','_self') </script>";
                            
                        }
                    } 
                    }
                    else
                    {
                        echo "<script>window.open('shopping_cart.php','_self') </script>";
                        echo "kop dc";
                    }
                }
            }
            echo $deleterow=deleterow();
            function thanhtoan()
            {
                global $con;
                $total=0;
                if(isset($_POST['Thanh_toan']))
                {
                    if(isset($_POST['select']))
                    {
                        foreach($_POST['select'] as $remove_id)
                        {
                            //lấy số lượng
                           $select_giohang="select * from `giohang` where MASP='$remove_id'";
                           $select_giohang_run=mysqli_query($con, $select_giohang);
                           $row_giohang=mysqli_fetch_assoc($select_giohang_run);
                           $get_sl=$row_giohang['soluong'];
                           // lấy giá
                           $select_sanpham="select * from `sanpham` where MASP='$remove_id'";
                           $select_sanpham_run=mysqli_query($con,$select_sanpham);
                           $row_sanpham=mysqli_fetch_assoc($select_sanpham_run);
                           $get_gia=$row_sanpham['GIA'];
                           $total+=$get_sl*$get_gia;
                        } 
                            $get_username=$_SESSION['username'];
                            // lấy mã khách hàng
                            $select_khachhang="select * from `taikhoan` where tendangnhap='$get_username'";
                            $select_khachhang_run=mysqli_query($con,$select_khachhang);
                            $row_khachhang=mysqli_fetch_assoc($select_khachhang_run);
                            $get_makh=$row_khachhang['MAKH'];
                            //chèn hóa đơn
                            $insert_hoadon="insert into `hoadon` (NGHD,MAKH,TRIGIA,TRANGTHAI) values ('NOW()','$get_makh','$total','Đang chờ')";
                            $insert_hoadon_run=mysqli_query($con,$insert_hoadon);
                           //lấy số hd mới dc tạo
                            $select_hoadon="select MAX(SOHD) from `hoadon`";
                            $select_hoadon_run=mysqli_query($con,$select_hoadon);
                            $row_hoadon=mysqli_fetch_assoc($select_hoadon_run);
                            $get_sohd=$row_hoadon['MAX(SOHD)'];
                            foreach($_POST['select'] as $remove_id)
                            {
                                //lấy số lượng
                               $select_giohang="select * from `giohang` where MASP='$remove_id'";
                               $select_giohang_run=mysqli_query($con, $select_giohang);
                               $row_giohang=mysqli_fetch_assoc($select_giohang_run);
                               $get_sl=$row_giohang['soluong'];
                               //chèn vào cthd
                               $insert_cthd="insert into `cthd` (SOHD,MASP,SL) value ('$get_sohd','$remove_id','$get_sl')";
                               $insert_cthd_run=mysqli_query($con,$insert_cthd);
                                //chèn xong thì xóa
                                $delete_query="delete from `giohang` where MASP='$remove_id'";
                                $delete_query=mysqli_query($con, $delete_query);
                                if($delete_query)
                                {
                                    echo "<script>window.open('shopping_cart.php','_self') </script>";
                                }
                            } 
                    }
                    else
                    {
                        echo "<script>window.open('index.php','_self') </script>";
                        echo "kop dc";
                    }
                }
            }
            echo $insert=thanhtoan();
            function capnhap()
            {
                global $con;
                if(isset($_POST['cap_nhap']))
                {
                    if(isset($_POST['select']))
                    {
                        foreach($_POST['select'] as $remove_id)
                        {
                            if(isset($_POST['qty']))
                            {
                                $getsl=$_POST['qty'];
                                $update="update `giohang` set soluong='$getsl' where MASP='$remove_id'";
                                $update_run=mysqli_query($con, $update);
                                echo var_dump($update)."<br>";
                                echo var_dump($getsl);
                            }
                            
                        // $delete_query=mysqli_query($con, $delete_query);
                            if($update_run)
                            {
                                
                            echo "<script>window.open('shopping_cart.php','_self') </script>";
                                
                            }
                        } 
                    }
                    else
                    {
                        echo "<script>window.open('shopping_cart.php','_self') </script>";
                        echo "kop dc";
                    }
                }
            }
            echo $capnhap=capnhap();
        ?>
    </div>
</div>