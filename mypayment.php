<?php include('./function/currency_format.php'); ?>
<div class="container border">
    <h3>Quản lý tài chính <i class="fa-solid fa-credit-card"></i></h3>
    <div class="row my-5 border-top">
        <div class="col-6 border-end border-danger">
            <h5>Thông tin số dư tài khoản</h5>
            <div class="position-relative">
                <?php
                      $get_tdn = $_SESSION['username'];
                      $select_makh = "select * from `taikhoan` where tendangnhap='$get_tdn'";
                      $select_makh_run = mysqli_query($con, $select_makh);
                      $row = mysqli_fetch_assoc($select_makh_run);
                      $makh = $row['MAKH'];
                      $select_khachhang="select * from `khachhang` where MAKH='$makh'";
                      $select_khachhang_run=mysqli_query($con,$select_khachhang);
                      $row_khachhang=mysqli_fetch_assoc($select_khachhang_run);
                      $get_sodu=$row_khachhang['SODU'];
                ?>
                <p>Số dư tài khoản hiện tại:</p>
                <h5 class="text-danger"><?php echo currency_format($get_sodu )?></h5>
                <div class="position-absolute bottom-0 end-0">
                    <a class="bg-success p-2 rounded" href="">Nạp tiền</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h5>Biến động số dư</h5>
            <div class="row" style="overflow-x:scroll;">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" role="grid" aria-describedby="products_info">
                            <thead class="thead-dark">
                                <tr role="row" style='text-align:center'>
                                    <th width="50" scope="col">
                                        Mã khách hàng</th>
                                    <th width="50" scope="col">
                                        Thời gian</th>
                                    <th width="50" scope="col">
                                        Mô tả</th>
                                    <th width="50" scope="col">
                                        Số dư</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="">
        <h5>Lịch sử nạp tiền</h5>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" role="grid" aria-describedby="products_info">
                        <thead class="thead-dark">
                            <tr role="row" style='text-align:center'>
                                <th width="50" scope="col">
                                    Mã nạp tiền</th>
                                <th width="50" scope="col">
                                    Mã khách hàng</th>
                                <th width="250" scope="col">
                                    Ngày nạp</th>
                                <th width="160" scope="col">
                                    Số tài khoản</th>
                                <th width="160" scope="col">
                                    Số tiền</th>
                                <th width="120" scope="col">
                                    Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $get_tdn = $_SESSION['username'];
                            $select_makh = "select * from `taikhoan` where tendangnhap='$get_tdn'";
                            $select_makh_run = mysqli_query($con, $select_makh);
                            $row = mysqli_fetch_assoc($select_makh_run);
                            $makh = $row['MAKH'];
                            $select_naptien = "select * from `naptien` where MAKH='$makh'";
                            $select_naptien_run = mysqli_query($con, $select_naptien);
                            while ($row_naptien = mysqli_fetch_assoc($select_naptien_run)) {
                            ?>

                                <tr class="text-center">
                                    <td><?php echo $row_naptien['MANAPTIEN'] ?></td>
                                    <td><?php echo $row_naptien['MAKH'] ?></td>
                                    <td><?php echo $row_naptien['NGAYNAP'] ?></td>
                                    <td><?php echo $row_naptien['SOTAIKHOAN'] ?></td>
                                    <td><?php echo $row_naptien['SOTIEN'] ?></td>
                                    <td><?php if ($row_naptien['DADUYET'] == 1) {
                                            echo "Thành công";
                                        } else {
                                            echo "Đang xác nhận";
                                        } ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>