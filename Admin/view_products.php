<?php include('../includes/connect_database.php');include "index.php";?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View products</title>
        <!--bootstrap  css link-->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
        <!--font asswsome link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- css -->
        <link rel="stylesheet" href="../CSS/admin.css" />
    </head>

    <body>
        <section class="container viewproduct_content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-body table-responsive">
                            <div id="products_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="products" class="table table-striped table-hover" role="grid"
                                            aria-describedby="products_info">
                                            <thead class="thead-dark">
                                                <tr role="row" style='text-align:center'>
                                                    <th width="10" scope="col">#</th>
                                                    <th width="160" scope="col">
                                                        Ảnh</th>
                                                    <th width="160" scope="col">
                                                        Tên sản phẩm
                                                    </th>
                                                    <th width="100" scope="col">
                                                        Màu</th>
                                                    <th width="100" rscope="col">
                                                        Phân khối</th>
                                                    <th width="110" scope="col">
                                                        Hãng</th>
                                                    <th width="150" scope="col">
                                                        Loại</th>
                                                    <th width="140" scope="col">
                                                        Năm sản xuất
                                                    </th>
                                                    <th width="110" scope="col">
                                                        Giá</th>
                                                    <th width="160" scope="col">
                                                        Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $select_query="SELECT
                                                                            
                                                            t1.`MASP`,
                                                            t1.`URL_IMAGE`,
                                                            t1.`TENSP`,
                                                            t1.`MAU`,
                                                            t1.`PHANKHOI`,

                                                            t2.`TENHANG`,
                                                            
                                                            t3.`TENLOAI`,

                                                            t1.`NAMSX`,

                                                            t1.`GIA`
                                                            
                                                            FROM `sanpham` t1
                                                            JOIN `hangxe` t2
                                                            ON t1.`MAHANG`=t2.`MAHANG`
                                                            JOIN `loaixe` t3
                                                            ON t3.`LOAIXE`=t1.`LOAIXE`
                                                            ORDER BY t1.`MASP` ASC
                                                            ";
                                                $product_query=mysqli_query($con, $select_query);
                                                
                                                while($row=mysqli_fetch_assoc($product_query))
                                                {
                                                    $url_img=$row['URL_IMAGE'];
                                                    $masp=$row['MASP'];
                                                    echo "<tr style='text-align:center'>";
                                                    echo "<td scope='row'>";
                                                    echo $masp;
                                                    echo "</td>";
                                                    echo "<td style='width:100px;'><img src='../$url_img' style='width: 100%; height: 100%; object-fit: contain;'>";
                                                    echo "<td style='text-align:left'>";
                                                    echo $row['TENSP'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo $row['MAU'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo $row['PHANKHOI'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo $row['TENHANG'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo $row['TENLOAI'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo $row['NAMSX'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo $row['GIA'];
                                                    echo " đ</td>";
                                                    echo "<td>";
                                                    echo "<div class='Action'><a href='product_edit.php?id=$masp' class='btn btn-sm btn-primary'>Edit</a>";
                                                    echo "<a href='#' class='btn btn-sm btn-danger btn-xl' data-href='product_delete.php?id=$masp' data-toggle='modal' data-target='#confirm-delete'>Delete</a>";
                                                    echo "</div></td>";
                                                    echo "</tr>";
                                                }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to delete this item?</p>
                        <p style="color:red;">Be careful! This product will be deleted from the order table, payment
                            table, size
                            table, color table and rating table also.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger btn-ok">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#products').DataTable();
        })
        </script>

    </body>

</html>