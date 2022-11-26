<?php
include('../includes/connect_database.php');
if(isset($_POST['insert_brand'])&& $_POST['insert_brand'] == "Thêm hãng")
{
    if(empty($_POST['brand_name']))
    {
        echo "<script>alert('Vui lòng nhập hãng xe') </script>";
    }
    else
    {
        $brand_name=$_POST['brand_name'];
        $select_query="select * from `hangxe` where LOWER(TENHANG)= LOWER('".$brand_name."')";
        $result_query=mysqli_query($con,$select_query);
        $number=mysqli_num_rows($result_query);
        if($number>0)
        {
            echo "<script>alert('Đã tồn tại trong cơ sở dữ liệu') </script>";
        }
        else
        {
            $inser_query="insert into `hangxe` (TENHANG) values('".$brand_name."')";
            $result_insert=mysqli_query($con, $inser_query);
            if($result_insert)
            {
                echo "<script>alert('Thêm hãng xe thành công') </script>";
            }
        }
    }
}
?>

<h2 class="text-center">Thêm hãng xe</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_name" placeholder="Nhập hãng xe" aria-label="brands"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto insert_brand_btn">

        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value="Thêm hãng"
            placeholder="Thêm hãng" aria-label="Username" aria-describedby="basic-addon1">

    </div>
</form>