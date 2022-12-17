<h1 class="text-danger">Push tạm chưa xong</h1>
<div class="container border mx-auto">
    <div class="row">
        <?php
        $get_tdn = $_SESSION['username'];
        $select_makh = "select * from `taikhoan` where tendangnhap='$get_tdn'";
        $select_makh_run = mysqli_query($con, $select_makh);
        $row = mysqli_fetch_assoc($select_makh_run);
        $makh = $row['MAKH'];
        $select_hoadon = "select * from `hoadon` where MAKH='$makh'";
        $select_hoadon_run = mysqli_query($con, $select_hoadon);
        while ($row_hoadon = mysqli_fetch_assoc($select_hoadon_run)) {
            $get_trangthai = $row_hoadon['TRANGTHAI'];
            $get_sohd = $row_hoadon['SOHD'];
            $select_cthd = "select * from `cthd` where SOHD='$get_sohd'";
            $select_cthd_run = mysqli_query($con, $select_cthd);
            $row_cthd = mysqli_fetch_assoc($select_cthd_run);
            $get_masp = $row_cthd['MASP'];
            $select_sanpham = "select * from `sanpham` where MASP='$get_masp'";
            $select_sanpham_run = mysqli_query($con, $select_sanpham);
            $row_sanpham = mysqli_fetch_assoc($select_sanpham_run);
            $get_image = $row_sanpham['URL_IMAGE'];
            $get_ten=$row_sanpham['TENSP'];
        ?>

            <div class="col-md-12 my-2 shadow-lg rounded">
                <div class="d-flex flex-row ">
                    <img class="align-self-start" style="width: 25%; height: 30%; object-fit: contain;" src="./<?php echo $get_image ?>" alt="<?php echo "" ?>">
                    <div class="d-flex flex-column align-self-center">
                        <h5>
                            <?php
                            if ($get_trangthai == -2) {
                                echo "Đơn hàng có số hóa đơn " . $get_sohd . " đang chờ để được xác nhận.";
                            }
                            if ($get_trangthai == 0) {
                                echo "Đơn hàng có số hóa đơn " . $get_sohd . " đang được giao";
                            }
                            if ($get_trangthai == 1) {
                                echo "Đơn hàng có số hóa đơn " . $get_sohd . " đã giao thành công";
                            }
                            if ($get_trangthai == -1) {
                                echo "Đơn hàng có số hóa đơn " . $get_sohd . " đã được hủy";
                            }
                            ?>
                        </h5>
                        <p>
                            <?php
                            if ($get_trangthai == -2) {
                                echo "Đơn hàng có số hóa đơn " . $get_sohd . " đang chờ để được xác nhận vui lòng đợi trong vòng 24h để chúng tôi làm việc";
                            }
                            if ($get_trangthai == 0) {
                                echo "Đơn hàng có số hóa đơn " . $get_sohd . " đang được giao dự kiến sẽ đến trong vòng 2-3 ngày";
                            }
                            if ($get_trangthai == 1) {
                                echo "Đơn hàng có số hóa đơn " . $get_sohd . " đã giao thành công cảm ơn quý khách đã tin tưởng";
                            }
                            if ($get_trangthai == -1) {
                                echo "Đơn hàng có số hóa đơn " . $get_sohd . " đã được hủy";
                            }
                            ?>
                        </p>
                        <p>
                            <?php
                            echo "Ngày hóa đơn: " . $row_hoadon['NGHD'];
                            ?>
                        </p>
                    </div>
                    <div class="align-self-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="<?php echo $get_sohd ?>">Xem chi tiết</button>
                    </div>
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <!-- <label for="recipient-name" class="col-form-label">Hóa đơn: </label>
                                        <input type="hidden" name="sohd_" value="" class="form-control" id="recipient-name">
                                        <input type="text" name="sohd_" value="" class="form-control" id="recipient-name_" disabled> -->
                                        <table>
                                            <tr>
                                                <td>Họ và tên</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Số điện thoại</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Địa chỉ</td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Số hóa đơn <?php echo $get_sohd ?></label>
                                        <!-- <textarea class="form-control" id="message-text"></textarea> -->
                                        <div class="d-flex flex-row">
                                          <img class="align-self-start" style="width: 25%; height: 25%; object-fit: contain;" src="./<?php echo $get_image ?>" alt="<?php echo "" ?>">
                                          <p><?php echo $get_ten ?></p>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <button type="submit" name="cap_nhap" class="btn btn-primary">Cập nhập</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<script>
    const exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        const modalTitle = exampleModal.querySelector('.modal-title')
        // const modalBodyInput = exampleModal.querySelector('.modal-body input')
        const modalBodyInput = document.getElementById('recipient-name');
        const modalBodyInput_ = document.getElementById('recipient-name_');


        modalTitle.textContent = `Thông tin hóa đơn: ${recipient}`
        modalBodyInput.value = recipient
        modalBodyInput_.value = recipient
    })
</script>