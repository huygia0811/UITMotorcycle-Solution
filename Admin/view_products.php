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
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-body table-responsive">
                            <table id="example1" class="table table-bordered table-hover table-striped">
                                <thead class="thead-dark">
                                    <tr style='text-align:center'>
                                        <th width="10">#</th>
                                        <th>Ảnh</th>
                                        <th width="160">Tên sản phẩm</th>
                                        <th width="100">Màu</th>
                                        <th width="100">Phân khối</th>
                                        <th width="130">Hãng</th>
                                        <th width="130">Loại</th>
                                        <th width="160">Giá</th>
                                        <th width="160">Thao tác</th>
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
                                        echo "<tr style='text-align:center'>";
                                        echo "<td>";
                                        echo $row['MASP'];
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
                                        echo $row['GIA'];
                                        echo " đ</td>";
                                        echo "</tr>";
                                    }
                                        ?>
                                    <!-- <td>
                                            <a href="product-edit.php?id=<?php echo $row['p_id']; ?>"
                                                class="btn btn-primary btn-xs">Edit</a>
                                            <a href="#" class="btn btn-danger btn-xs"
                                                data-href="product-delete.php?id=<?php echo $row['p_id']; ?>"
                                                data-toggle="modal" data-target="#confirm-delete">Delete</a>
                                        </td> -->
                                    <!-- </tr>                                                                                            -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>