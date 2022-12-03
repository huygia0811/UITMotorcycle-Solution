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
	exit;
} else {

    $id = $_GET['id'];
    $select_query="delete FROM `sanpham` WHERE MASP=$id";
    $result_query=mysqli_query($con, $select_query);
    //giam gia tri cac masp phia sau sanpham vua xoa de cac gia tri lien tiep
    $select_query = "select * from `sanpham` where MASP>$id";
    $result_query = mysqli_query($con, $select_query);
    while($row=mysqli_fetch_assoc($result_query))
    {
        $update_query = "update sanpham set MASP = $id where MASP='".$row['MASP']."'";
        $result_update = mysqli_query($con,$update_query);
        $id++;
    }
    mysqli_close($con);
}
?>
    </body>

</html>