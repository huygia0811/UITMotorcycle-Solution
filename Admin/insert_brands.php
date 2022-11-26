<?php
include('../includes/connect_database.php');
if(isset($_POST['insert_brand']) && $_POST['insert_brand'] == "Thêm hãng")
{
    $brand_name=$_POST['brand_name'];
    
    // insert image
    $brand_image=$_FILES['brand_image']['name'];

    //link image
    $temp_image=$_FILES['brand_image']['tmp_name'];
    
    if($brand_name=='' or  $brand_image=='')
    {
        echo "<script>alert('Vui lòng nhập đầy đủ ') </'script>";
        exit();
    }
    else
    {
        $select_query="select * from `hangxe` where LOWER(TENHANG)= LOWER('".$brand_name."')";
        $result_query=mysqli_query($con,$select_query);
        $number=mysqli_num_rows($result_query);
        if($number>0)
        {
            echo "<script>alert('Đã tồn tại trong cơ sở dữ liệu') </script>";
        }
        else
        {
            $brand_urlimg="Asset/DB-Picture/".$brand_image;
            move_uploaded_file( $temp_image,'../'.$brand_urlimg);
            $insert_brand="insert into `hangxe` (TENHANG, URLIMAGE) values('".$brand_name."', '".$brand_urlimg."')";
            $result_query=mysqli_query($con, $insert_brand);
            if($result_query)
            {
                echo "<script>alert('Thêm hãng xe thành công') </script>";
            }
            else echo "<script>alert('Không thể thêm hãng xe')</script>";
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
        <title>Insert brand</title>
        <!--bootstrap  css link-->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!--font asswsome link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- css -->
        <link rel="stylesheet" href="../CSS/admin.css">
    </head>

    <body class="insert_brand">
        <h1 class="text-center">Thêm hãng xe</h1>
        <form action="" method="post" class="mb-2" enctype="multipart/form-data">
            <div class="input-group w-50 mb-2 m-auto my-4">
                <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
                <input type="text" class="form-control" name="brand_name" placeholder="Nhập hãng xe" aria-label="brands"
                    aria-describedby="basic-addon1" required="required">
            </div>
            <div class="input-group w-50 mb-2 m-auto my-4">
                <input type="file" name="brand_image" id="brand_image" class="form-control" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto my-4">
                <input type="submit" class="btn btn-info mb-3 px-3" name="insert_brand" value="Thêm hãng"
                    placeholder="Thêm hãng" aria-label="Username" aria-describedby="basic-addon1">

            </div>
        </form>

    </body>

</html>