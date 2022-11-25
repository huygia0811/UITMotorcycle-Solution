<?php include('../includes/connect_database.php');?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View product</title>
        <!--bootstrap  css link-->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!--font asswsome link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- css -->
        <link rel="stylesheet" href="../CSS/admin.css" />
    </head>

    <body>
        <section class="content viewproduct_content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-body table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_length" id="example1_length"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="dataTables_filter" id="example1_filter"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1"
                                            class="table table-bordered table-hover table-striped dataTable no-footer"
                                            role="grid" aria-describedby="example1_info">
                                            <thead class="thead-dark">
                                                <tr role="row" style='text-align:center'>
                                                    <th width="10" class="sorting_asc" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1"
                                                        aria-sort="ascending" style="font-size: 1.5vw;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1">Ảnh</th>
                                                    <th width="160" class="sorting" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1">Tên sản phẩm
                                                    </th>
                                                    <th width="100" class="sorting" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1">Màu</th>
                                                    <th width="100" class="sorting" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1">Phân khối</th>
                                                    <th width="130" class="sorting" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1">Hãng</th>
                                                    <th width="130" class="sorting" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1">Loại</th>
                                                    <th width="120" class="sorting" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1">Năm sản xuất
                                                    </th>
                                                    <th width="130" class="sorting" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1">Giá</th>
                                                    <th width="160" class="sorting" tabindex="0"
                                                        aria-controls="example1" rowspan="1" colspan="1">Thao tác</th>
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
                                                    echo "<td>";
                                                    echo $masp;
                                                    echo "</td>";
                                                    echo "<td style='width:90px;'><img src='../$url_img' style='width: 100%; height: 100%; object-fit: contain;'>";
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
                                                    echo "<div class='Action'><a href='product_edit.php?id=$masp' class='btn btn-primary btn-sm'>Edit</a>";
                                                    echo "<a href='#' class='btn btn-danger btn-sm' data-href='product_delete.php?id=$masp' data-toggle='modal' data-target='#confirm-delete'>Delete</a>";
                                                    echo "</div></td>";
                                                    echo "</tr>";
                                                }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="example1_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 20 entries</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" id="example1_previous">
                                                    <a href="#" aria-controls="example1" data-dt-indx="0"
                                                        tabindex="0">Previous</a>
                                                </li>
                                                <li class="paginate_button active">
                                                    <a href="#" aria-controls="example1" data-dt-indx="1"
                                                        tabindex="0">1</a>
                                                </li>
                                                <li class="paginate_button">
                                                    <a href="#" aria-controls="example1" data-dt-indx="2"
                                                        tabindex="0">2</a>
                                                </li>
                                                <li class="paginate_button next" id="example1_next">
                                                    <a href="#" aria-controls="example1" data-dt-indx="3"
                                                        tabindex="0">Next</a>
                                                </li>
                                            </ul>
                                        </div>
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
    </body>

</html>