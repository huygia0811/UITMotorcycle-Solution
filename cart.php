<?php
include('./function/common_function.php');
include('./includes/connect_database.php');
cart();
?>
<div class="container">
    <div class="bg-dark">
        <h3 class="text-center">Cart</h3>
    </div>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Hình</th>
                    <th>Số lượng</th>
                    <th>Tổng giá</th>
                    <th>Xóa</th>
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
                                <td><?php echo $tensp; ?></td>
                                <td>
                                    <img style="width:80px; height: 80px; object-fit: contain;" src="./<?php echo $url_image; ?>" alt="<?php echo $tensp ?>">
                                </td>

                                <td><input type="text" name="qty" class="form-input w-50"></td>

                                <td><?php echo $gia."/-" ?></td>
                                <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>

                                <td>
                                    <input type="submit" value="Thanh toán" name="Thanh_toan" class="bg-info p-2 border-0 my-2 px-2">
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
            <h4 class="px-3">Tổng: <strong class="text-info"><?php echo "giá????" ?>/-</strong></h4>

            <a href="#"><button class="bg-info p-2 border-0 mx-4">Thanh toán tất cã</button></a>
            <a href="#"><button class="bg-info p-2 border-0">Thoát</button></a>

        </div>
    </div>
</div>