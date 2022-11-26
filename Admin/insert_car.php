<?php
include('../includes/connect_database.php');
if(isset($_POST['insert_product']))
{
   
    
    // $product_name=$_POST['product_name'];
    // $product_meter=$_POST['product_meter'];
    // $product_color1=$_POST['product_color1'];
    // $product_color2=$_POST['product_color2'];
    // $product_color3=$_POST['product_color3'];
    // $product_year=$_POST['product_year'];
    // $product_price=$_POST['product_price'];
    $product_name=$_POST['product_name'];
    $product_color=$_POST['product_color'];
    $product_year=$_POST['product_year'];
    $product_meter=$_POST['product_meter'];
    $product_price=$_POST['product_price'];

    $product_brand_id=$_POST['product_brand'];
    $product_type=$_POST['product_type'];
    



    // insert image
    $product_image=$_FILES['product_image']['name'];

    //link image
    $temp_image=$_FILES['product_image']['tmp_name'];

    if($product_name=='' or  $product_meter=='' or $product_color=='' or $product_year=='' or  $product_price=='' or  $product_image=='' or $product_brand_id=='' or $product_type=='')
    {
        echo "<script>alert('Vui lòng nhập đầy đủ ') </'script>";
        exit();
    }
    else
    {
        $product_urlimg="Asset/DB-Picture/".$product_image;
        move_uploaded_file( $temp_image,'../'.$product_urlimg);

        //insert
        $insert_product="insert into `sanpham`(TENSP,MAU,NAMSX,PHANKHOI,MAHANG,LOAIXE,GIA,URL_IMAGE)
        values('".$product_name."','".$product_color."','".$product_year."', '".$product_meter."', '".$product_brand_id."','".$product_type."', '".$product_price."','".$product_urlimg."')";
        $result_query=mysqli_query($con, $insert_product);
        if($result_query)
        {
            echo "<script>alert('Thêm sản phẩm thành công')</script>";
        }
        else
        {
            echo "<script>alert('Không thể thêm sản phẩm')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert cart</title>
        <!--bootstrap  css link-->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!--font asswsome link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- css -->
    </head>

    <body>
        <div class="container mt-3">
            <h1 class="text-center">Thêm sản phẩm</h1>
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_name" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Nhập tên sản phẩm"
                        autocomplete="off" required="required">
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_color" class="form-label">Màu</label>
                    <input type="text" name="product_color" class="form-control" placeholder="Nhập màu sản phẩm"
                        autocomplete="off" required="required">
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_year" class="form-label">Năm sản xuất</label>
                    <input type="text" name="product_year" class="form-control" placeholder="Nhập năm sản xuất"
                        autocomplete="off" required="required">
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_meter" class="form-label">Phân khối</label>
                    <input type="text" name="product_meter" class="form-control" placeholder="Nhập phân khối xe"
                        autocomplete="off" required="required">
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_price" class="form-label">Giá sản phẩm</label>
                    <input type="text" name="product_price" class="form-control" placeholder="Nhập giá sản phẩm"
                        autocomplete="off" required="required">
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_type" id="" class="form-select">
                        <option value="">Loại xe</option>
                        <?php
                            $select_type="select * FROM `loaixe`";
                            $type_query=mysqli_query($con, $select_type);
                            while($row=mysqli_fetch_assoc($type_query))
                            {
                                $type_name=$row['TENLOAI'];
                                $type_id=$row['LOAIXE'];

                                echo"<option value='$type_id'>$type_name</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_brand" id="" class="form-select">
                        <option value="">Hãng xe</option>
                        <?php
                            $select_brand="select * from `hangxe`";
                            $brand_query=mysqli_query($con, $select_brand);
                            while($row=mysqli_fetch_assoc($brand_query))
                            {
                                $brand_name=$row['TENHANG'];
                                $brand_id=$row['MAHANG'];

                                echo"<option value='$brand_id'>$brand_name</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="file" name="product_image" id="product_image" class="form-control" required="required">
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="insert_product" value="Thêm sản phẩm" class="btn btn-info mb-3 px-3"
                        required="required">
                </div>
            </form>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </body>

</html>