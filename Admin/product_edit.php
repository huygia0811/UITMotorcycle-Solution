<?php
include('../includes/connect_database.php');
include "index.php";
if(isset($_POST['update_btn']) &&$_POST['update_btn']=="Update") {
	$valid = 1;

    $path = $_FILES['new_image']['name'];
    $path_tmp = $_FILES['new_image']['tmp_name'];

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message = 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1)
    {
        if($path == '') {
            $statement=$con->prepare("UPDATE `sanpham` SET
            TENSP=?,
            MAU=?,
            NAMSX=?,
            PHANKHOI=?,
            GIA=?,
            MAHANG=?,
            LOAIXE=?,
            URL_IMAGE=?
            
            WHERE MASP=?");
            
            $statement->execute(array(
            $_POST['product_name'],
            $_POST['product_color'],
            $_POST['product_year'],
            $_POST['product_meter'],
            $_POST['product_price'],
            $_POST['product_brand'],
            $_POST['product_type'],
            $_POST['current_photo'],
            $_REQUEST['id']
            ));
            }
        else {
            $final_name = 'Asset/DB-Picture/'.$path;
            move_uploaded_file( $path_tmp, '../'.$final_name );
            
            
            $statement=$con->prepare("UPDATE `sanpham` SET
            TENSP=?,
            MAU=?,
            NAMSX=?,
            PHANKHOI=?,
            GIA=?,
            MAHANG=?,
            LOAIXE=?,
            URL_IMAGE=?
            
            WHERE MASP=?");
            
            $statement->execute(array(
            $_POST['product_name'],
            $_POST['product_color'],
            $_POST['product_year'],
            $_POST['product_meter'],
            $_POST['product_price'],
            $_POST['product_brand'],
            $_POST['product_type'],
            $final_name,
            $_REQUEST['id']));
        }
        $success_message = 'Brand is updated successfully.';
    }
}

?>

<?php
if(!isset($_REQUEST['id'])) {
    ('location: view_products.php');
	exit;
} else {
	// Check the id is valid or not
    $id=$_REQUEST['id'];
    $select_query="select * FROM `sanpham` WHERE MASP='".$id."'";
    $result_query=mysqli_query($con, $select_query);
    $number=mysqli_num_rows($result_query);
    if($number==0)
    {
        ('location: view_products.php');
        exit;
    }
    // $error_message="";
    // $success_message="";
}
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<section class="container">
    <div class="content-header-right">
        <h1>Edit product</h1>
    </div>
    <div class="content-header-right">
        <a href="view_products.php" class="btn btn-primary btn-sm">View All</a>
    </div>
</section>

<?php

$id=$_REQUEST['id'];
$select_query="select * from `sanpham` WHERE MASP='".$id."'";
    $result_query=mysqli_query($con, $select_query);
    $number=mysqli_num_rows($result_query);
while($row=mysqli_fetch_assoc($result_query))
    {
        $product_name=$row['TENSP'];
        $product_color=$row['MAU'];
        $product_year=$row['NAMSX'];
        $product_meter=$row['PHANKHOI'];
        $product_price=$row['GIA'];
    
        $product_brand_id=$row['MAHANG'];
        $product_type=$row['LOAIXE'];
        $product_image=$row['URL_IMAGE'];
    }
?>


<section class="container">

    <?php if(isset($error_message)): ?>
    <div class="alert alert-danger">

        <p><?php echo $error_message; ?></p>
    </div>
    <?php endif; ?>

    <?php if(isset($success_message)): ?>
    <div class="alert alert-success">

        <p><?php echo $success_message; ?></p>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">



            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                <div class="box box-info">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Tên sản phẩm </label>
                            <div class="col-sm-4">
                                <input type="text" name="product_name" class="form-control"
                                    value="<?php echo $product_name; ?> " required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Màu </label>
                            <div class="col-sm-4">
                                <input type="text" name="product_color" class="form-control"
                                    value="<?php echo $product_color; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Năm sản xuất </label>
                            <div class="col-sm-4">
                                <input type="text" name="product_year" class="form-control"
                                    value="<?php echo $product_year; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Phân khối </label>
                            <div class="col-sm-4">
                                <input type="text" name="product_meter" class="form-control"
                                    value="<?php echo $product_meter; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Giá </label>
                            <div class="col-sm-4">
                                <input type="text" name="product_price" class="form-control"
                                    value="<?php echo $product_price; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <select name="product_brand" class="form-control select2">
                                    <option value="">Hãng xe</option>
                                    <?php
                                    $id=$_REQUEST['id'];
                                    $select_query="select * FROM `hangxe`";
                                    $result_query=mysqli_query($con, $select_query);

                           
                                    foreach ($result_query as $row) {
                                    $mahang=$row['MAHANG'];
                                    $tenhang=$row['TENHANG'];
                                    ?>
                                    <option value="<?php echo $mahang; ?>"
                                        <?php if($mahang == $product_brand_id){echo 'selected';} ?>>
                                        <?php echo $tenhang; ?></option>
                                    <?php
		                           }
		                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <select name="product_type" class="form-control select2">
                                    <option value="">Loại xe</option>
                                    <?php
                                    $select_query="select * FROM `loaixe`";
                                    $result_query=mysqli_query($con, $select_query);

                           
                                    foreach ($result_query as $row) {
                                    $maloai=$row['LOAIXE'];
                                    $tenloai=$row['TENLOAI'];
                                    ?>
                                    <option value="<?php echo $maloai; ?>"
                                        <?php if($maloai == $product_type){echo 'selected';} ?>>
                                        <?php echo $tenloai; ?></option>
                                    <?php
		                           }
		                            ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Ảnh trong cơ sở dữ liệu</label>
                            <div class="col-sm-4" style="padding-top:4px;">
                                <img src="../<?php echo $product_image; ?>" alt="" style="width:150px;" name="image">
                                <input type="hidden" name="current_photo" <?php echo "value='".$product_image."'"?>>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Đổi ảnh </label>
                            <div class="col-sm-4" style="padding-top:4px;">
                                <input type="file" name="new_image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-success pull-left" name="update_btn" value="Update">
                            </div>
                        </div>
                    </div>
                </div>

            </form>


        </div>
    </div>

</section>