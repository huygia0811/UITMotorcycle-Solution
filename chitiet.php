<?php
include './includes/connect_database.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>UIT MotorCycle</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style_header.css">
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- fontawwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- <link rel="stylesheet" href="CSS/style_main.css">
    <link rel="stylesheet" href="CSS/style_footer.css">
    <link rel="stylesheet" href="CSS/header_cart.css" /> -->
  <style>
    .container {
      max-width: 1080px !important;
    }
  </style>
</head>

<body>

  <?php
  include('header.php');
  ?>


  <!-- body -->
  <div class="container my-4 ">
    <div class="row ">
      <div class="col-12 col-sm-5">
        <?php 
        $select_query="SELECT * FROM `hangxe`, `sanpham` WHERE hangxe.MAHANG=sanpham.MAHANG AND MASP = 'XPKL_1'";
        $select_result=mysqli_query($con, $select_query);
        $row = mysqli_fetch_row($select_result);
        echo '<img src="'.$row[11].'" alt="" style="width: 100%; height: 100%; object-fit: contain;">';
        ?>
      </div>
      <div class="col-12 col-sm-7 bg-secondary">
        <?php
        $select_query="SELECT * FROM `hangxe`, `sanpham` WHERE hangxe.MAHANG=sanpham.MAHANG AND MASP = 'XPKL_1'";
        $select_result=mysqli_query($con, $select_query);
        $row = mysqli_fetch_row($select_result);
        
        echo '<h3>'.$row[5].'<h3>';
        echo '<h4>'.$row[9].' VNĐ<h4>';
        echo '<div class="d-flex flex-row justify-content-star border my-2"><img src="'.$row[2].'" alt="" style="width: 100px; height:100%; object-fit:contain;"><h4  class="d-flex flex-col align-items-center">'.$row[1].'</h4></div>';

        $text = array ("Năm sản xuất:", "Phân phối:", "Màu sắc:");
        $text2 = array($row[8], $row[6], $row[7]);
        echo '<div class="bg-light p-2">';
        for($i=0; $i<3; $i++)
        {
          echo '<div class="d-flex flex-row justify-content-between">';
          echo '<p>'.$text[$i].'</p>';
          echo '<p>'.$text2[$i].'</p>';
          echo '</div>';
        }
        echo '</div>';
        ?>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php
  include('footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>