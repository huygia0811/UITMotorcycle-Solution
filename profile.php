<div class="mt-2">
    <h3>Hồ sơ của tôi</h3>
    <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
</div>
<div class="row">
    <div class="col-10 border-botton">
        <div class="form-group d-flex flex-row justify-content-between mb-5">
            <label for="">Tên đăng nhập</label>
            <input class="from-control" style="width: 80%;" type="text" name="tendangnhap" placeholder="<?php echo "nhớ echo php tên đnăg nhập" ?>">
        </div>
        <div class="form-group d-flex flex-row justify-content-between mb-5">
            <label for="">Tên</label>
            <input class="from-control" style="width: 80%;" type="text" name="tendangnhap" placeholder="<?php echo "nhớ echo tên" ?>">
        </div>
        <div class="form-group mb-5">
            Giới tính
            Nam <input class="form-check-input mt-0" type="radio" value="Nam" name="gioitinh">
            Nữ <input class="form-check-input mt-0" type="radio" value="Nữ" name="gioitinh">
            Khác <input class="form-check-input mt-0" type="radio" value="Khác" name="gioitinh">
        </div>
        <div class="form-group d-flex flex-row justify-content-between mb-5">
            <label for="">Ngày sinh</label>
            <input class="form-control" style="width: 80%;" type="text" name="ngaysinh" placeholder="nnn/ttt/nnn" />
        </div>
        <button class="btn btn-danger" type="submit" name="thaydoi">Thay đổi</button>




    </div>
    <div class="col-2">
        <div class="form-outline mb-4 w-20 m-auto">
            <label for="product_image2" class="form-label">Chọn ảnh</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
        </div>
    </div>
</div>