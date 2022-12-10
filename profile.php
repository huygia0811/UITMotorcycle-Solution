<?php
include('./includes/connect_database.php');
include('./function/common_function.php');
?>
<div class="mt-2">
    <h1>Hồ sơ của tôi</h1>
    <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
</div>
<div class="row">
    <div class="col-10 border-botton">
        <form action="" method="post">
            <div class="form-group d-flex flex-row justify-content-between mb-5">
                <label for="">Tên đăng nhập</label>
                <input class="from-control" style="width: 80%;" type="text" name="tendangnhap" placeholder=""
                    value="<?php echo $_SESSION['username'] ?>">
            </div>
            <div class="form-group d-flex flex-row justify-content-between mb-5">
                <label for="">Tên</label>
                <input class="from-control" style="width: 80%;" type="text" name="hoten" placeholder="Nhập họ tên">
            </div>
            <div class="form-group mb-5">
                Giới tính
                Nam <input class="form-check-input mt-0" type="radio" value="Nam" name="gioitinh">
                Nữ <input class="form-check-input mt-0" type="radio" value="Nữ" name="gioitinh">
                Khác <input class="form-check-input mt-0" type="radio" value="Khác" name="gioitinh">
            </div>
            <div class="form-group d-flex flex-row justify-content-between mb-5">
                <label for="">Địa chỉ</label>
                <input class="form-control" style="width: 80%;" type="text" name="diachi" placeholder="Nhập địa chỉ" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mb-5">
                <label for="">Số điện thoại</label>
                <input class="form-control" style="width: 80%;" type="text" name="sodt"
                    placeholder="Nhập số điện thoại" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mb-5">
                <label for="">CCCD</label>
                <input class="form-control" style="width: 80%;" type="text" name="cccd" placeholder="Nhập CCCD" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mb-5">
                <label for="">Ngày sinh</label>
                <input class="form-control" style="width: 80%;" type="date" name="ngaysinh" placeholder="dd-mm-yyyy"
                    value="" min="1950-01-01" max="2030-12-31" />
            </div>
            <?php
    if(isset($_SESSION['status_profile']))
    {
?>
            <div class="alert alert-success text-center">
                <h5><?= $_SESSION['status_profile']; ?></h5>
            </div>
            <?php
    unset($_SESSION['status_profile']);   
    }
?>
            <button class="btn btn-danger" type="submit" name="thaydoi">Thay đổi</button>
        </form>

    </div>
    <!-- <div class="col-2">
        <div class="form-outline mb-4 w-20 m-auto">
            <label for="product_image2" class="form-label">Chọn ảnh</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
        </div>
    </div> -->
</div>
<?php
if(isset($_POST['thaydoi']))
{
    $hoten=$_POST['hoten'];
    $diachi=$_POST['diachi'];
    $sodt=$_POST['sodt'];
    $cccd=$_POST['cccd'];
    $ngaysinh=$_POST['ngaysinh'];
    $gioitinh=$_POST['gioitinh'];
    $getip=getIPAddress();
    $getussername=$_SESSION['username'];
    $select_taikhoan="select * from `taikhoan` where tendangnhap='$getussername'";
    $select_taikhoan_run=mysqli_query($con,$select_taikhoan);
    $get_row=mysqli_fetch_assoc($select_taikhoan_run);
    $get_makh=$get_row['MAKH'];
    if($hoten=='' or $diachi =='' or $sodt==''or $cccd=='' or $ngaysinh=='' or $gioitinh=='')
    {
        $_SESSION['status_profile']="Vui lòng nhập đầy đủ thông tin";
        echo "<script>window.open('user.php?profile','_self')</script>";
        exit(0);
    }
    else
    {
        $update_khachhang="update `khachhang` set HOTEN='$hoten', DCHI='$diachi',SODT='$sodt',NGSINH='$ngaysinh',GIOITINH='$gioitinh',SOCCCD='$cccd' where MAKH='$get_makh'";
        $update_khachhang_run=mysqli_query($con,$update_khachhang);
        if($update_khachhang_run)
        {
            $_SESSION['status_profile']="Cập nhập thành công";
            echo "<script>window.open('user.php?profile','_self')</script>";
            exit(0);
        }
        else
        {
            $_SESSION['status_profile']="Đã có lỗi xảy ra";
            echo "<script>window.open('user.php?profile','_self')</script>";
            exit(0);
        }
    }
}
?>