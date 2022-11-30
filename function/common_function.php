<?php
include('./includes/connect_database.php');
include('./function/get_ipaddress.php');
function showproduct()
{
    global $con;
    $select_product="select * from `sanpham`";
    $select_product_run=mysqli_query($con,$select_product);
    while($row=mysqli_fetch_assoc($select_product_run))
    {
        $masp=$row['MASP'];
        $tensp=$row['TENSP'];
        $phankhoi=$row['PHANKHOI'];
        $mau=$row['MAU'];
        $namsx=$row['NAMSX'];
        $gia=$row['GIA'];
        $img=$row['URL_IMAGE'];
        echo "
        <div class='col-6 col-md-4  mb-2 '>
        <div class='card'>
          <img src='./$img' class='card-img-top' alt='$tensp'>
          <div class='card-body'>
            <h5 class='card-title'>$tensp</h5>
            <p class='card-text'>$gia</p>
            <a href='index.php?add_to_card=$masp' class='btn btn-info'>Add to cart</a>
            <a href='chitiet.php?sanpham=$masp' class='btn btn-secondary'>View more</a>
          </div>
        </div>
      </div>
        ";
    }
}


function cart()
{
  if(isset($_GET['add_to_card']))
  {
    global $con;
    $masp=$_GET['add_to_card'];
    $ip_address=getIPAddress();
    $select_query="select * from `giohang` where MASP='$masp' and khachhang_ip='$ip_address'";
    $soluong=$_GET['soluong'];
    $select_query_run=mysqli_query($con, $select_query);
    $count=mysqli_num_rows($select_query_run);
    if($count >0)
    {
      echo "<script>alert('sản phẩm đã có sẵn trong giỏ hàng')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
      $insert_query="insert into `giohang` (MASP, khachhang_ip,soluong) values ('$masp','$ip_address','$soluong')";
      $result_query=mysqli_query($con, $insert_query);
      if($result_query)
      {
        echo "<script>alert('this item added inside cart') </script>";
        echo "<script>window.open('index.php','_self')</script>";
      }
      
    }
  }
}


function viewmore()
{
  global $con;
  if(isset($_GET['sanpham']))
  {
    $sanpham_id=$_GET['sanpham'];
    $select_query="SELECT * FROM `hangxe`, `sanpham` WHERE hangxe.MAHANG=sanpham.MAHANG AND MASP = '$sanpham_id'";
    $select_result=mysqli_query($con, $select_query);
    $row=mysqli_fetch_assoc($select_result);

    $url_image=$row['URL_IMAGE'];
    $url_image_hang=$row['URLIMAGE'];
    $tenhang=$row['TENHANG'];
    $tensp=$row['TENSP'];
    $phankhoi=$row['PHANKHOI'];
    $mau=$row['MAU'];
    $namsx=$row['NAMSX'];
    $gia=$row['GIA'];
echo "
<div class='col-12 col-sm-5'>   
<img src='./$url_image' alt='$tensp' style='width: 100%; height: 100%; object-fit: contain;'>

</div>
<div class='col-12 col-sm-7 bg-secondary'>
     
<h3>$tensp<h3>
<h4>$gia VNĐ<h4>
<div class='d-flex flex-row justify-content-star border my-2'><img src='./$url_image_hang' alt='$tenhang' style='width: 100px; height:100%; object-fit:contain;'><h4  class='d-flex flex-col align-items-center'> $tenhang</h4></div>


<div class='bg-light p-2'>
<div class='d-flex flex-row justify-content-between'>
 <p>Năm sản xuất:</p>
 <p>$namsx</p>
 </div>
 <div class='d-flex flex-row justify-content-between'>
 <p>Phân khối:</p>
 <p>$phankhoi</p>
 </div>
 <div class='d-flex flex-row justify-content-between'>
 <p>Màu sắc:</p>
 <p>$mau</p>
 </div>
 </div>
 <a href='shopping_cart.php?add_to_card=$sanpham_id' class=' btn btn-danger'>Thêm vào giỏ hàng</a>
</div>
";
   
  }
}