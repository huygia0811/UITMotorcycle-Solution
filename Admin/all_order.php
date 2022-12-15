<?php
include('../includes/connect_database.php');
include "index.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container pt-4">
        <table id="products" class="table table-striped table-hover" role="grid" aria-describedby="products_info">
            <thead class="thead-dark">
                <tr role="row" style='text-align:center'>
                    <th width="50" scope="col">
                        Số hóa đơn</th>
                    <th width="50" scope="col">
                        Mã khách hàng</th>
                    <th width="160" scope="col">
                        Tên khách hàng</th>
                    <th width="250" scope="col">
                        Tên sản phẩm và số lượng</th>
                    <th width="160" scope="col">
                        Ngày hóa đơn</th>
                    <th width="160" scope="col">
                        Tổng tiền</th>
                    <th width="120" scope="col">
                        Trạng thái</th>
                    <th width="160" scope="col">
                        Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select_query = "SELECT * FROM HOADON, KHACHHANG WHERE HOADON.MAKH = KHACHHANG.MAKH";
                $result_query = mysqli_query($con, $select_query);
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $sohd = $row['SOHD'];
                    $makh = $row['MAKH'];
                    $tenkh = $row['HOTEN'];
                    $tongtien = $row['TRIGIA'];
                    $ngayhd = $row['NGHD'];
                    $trangthai = $row['TRANGTHAI'];
                    switch ($trangthai) {
                        case -2:
                            $trangthai_text = "Chờ xác nhận";
                            break;
                        case -1:
                            $trangthai_text = "Đã hủy";
                            break;
                        case 0:
                            $trangthai_text = "Đang giao";
                            break;
                        case 1:
                            $trangthai_text = "Đã giao";
                            break;
                        $trangthai_text = "Đang giao";
                        break;
                        case 1:
                        $trangthai_text = "Đã giao";
                        break;
                    }
                    $select_query1 = "SELECT * FROM CTHD, SANPHAM WHERE CTHD.MASP = SANPHAM.MASP AND SOHD = $sohd";
                    $result_query1 = mysqli_query($con, $select_query1);
                    echo "<tr style='text-align:center'>";
                    echo "<td style='text-align:left'>";
                    echo $sohd;
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $makh;
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $tenkh;
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    while ($row1 = mysqli_fetch_assoc($result_query1)) {
                        $tensp = $row1['TENSP'];
                        $soluong = $row1['SL'];
                        echo $tensp . ": " . $soluong . "<br>";
                    }
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $ngayhd;
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $tongtien . " VNĐ";
                    echo "</td>";
                    echo "<td style='text-align:left'>";
                    echo $trangthai_text;
                    echo "</td>";
                ?>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="<?php echo $sohd ?>">Sửa trạng thái</button>
                    </td>
                <?php
                }
                ?>
            </tbody>
            <!-- model -->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Hóa đơn: </label>
                                    <input type="text" name="sohd_" value="" class="form-control" id="recipient-name" >
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Trạng thái:</label>
                                    <!-- <textarea class="form-control" id="message-text"></textarea> -->
                                    <select name="trang_thai">
                                        <option value="">Chọn trạng thái</option>
                                        <option value="0">Đang giao</option>
                                        <option value="1">Đã giao</option>
                                        <option value="-1">Đã hủy</option>
                                    </select>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" name="cap_nhap" class="btn btn-primary">Cập nhập</button>
                        </div>
                        </form>
                        <?php
                        if (isset($_POST['cap_nhap'])) {
                            $get_sohd = $_POST['sohd_'];
                            $get_trangthai = $_POST['trang_thai'];
                            $update_hd = "update `hoadon` set TRANGTHAI='$get_trangthai' where SOHD='$get_sohd'";
                            $update_hd_run = mysqli_query($con, $update_hd);
                            if ($update_hd_run) {
                                //echo var_dump($get_trangthai);
                                echo "<script>alert('$get_trangthai')</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <!--  -->
        </table>
    </div>
</body>

</html>
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
       const modalBodyInput=document.getElementById('recipient-name');

        modalTitle.textContent = `Cập nhập trạng thái hóa đơn: ${recipient}`
        modalBodyInput.value = recipient
    })
</script>
