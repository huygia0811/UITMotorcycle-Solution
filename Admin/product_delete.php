<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert cart</title>
    </head>

    <body>

        <?php
include('../includes/connect_database.php');
 include "index.php";?>
        <?php 
if(!isset($_REQUEST['id'])) {
    header('location:view_products.php');
	exit;
} else {

    $id = $_GET['id'];
   
    $select_query = "delete FROM `giohang` WHERE MASP=$id";
    $result_query = mysqli_query($con, $select_query);

    $select_query = "delete FROM `cthd` WHERE MASP=$id";
    $result_query = mysqli_query($con, $select_query);
    
    $select_query="delete FROM `sanpham` WHERE MASP=$id";
    $result_query=mysqli_query($con, $select_query);

    mysqli_close($con);
    header('location:view_products.php');
}
?>
    </body>

</html>