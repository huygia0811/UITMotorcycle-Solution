<!DOCTYPE html>
<html>

<head>
  <title>UIT MotorCycle</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./asset/DB-Picture/logo.ico" type="image/x-icon">
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
      margin: 15px auto 0 auto !important;
      border: none !important;
      padding: 0 !important;
    }
    #card-row {
      margin: 20px 10px;
      row-gap: 15px;
    }
    .card {
      display: grid;
      grid-template-rows: 200px 1fr;
      height: 100%;
      border-radius: 10px;
    }
    .card img {
      height: 100%;
      width: 100%;
      object-fit: contain;
    }
    .card-body {
      background-color: #cbf6f8;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
    }
    .btn-info {
      background-color: #05c5cc !important;
      color: white !important;
    }
    .submenu {
      margin: auto !important;
    }
    .submenu .btn {
      padding-top: 20px !important;
    }
    .submenu .btn:hover {
      background-color: #f0f0f0 !important;
    }
  </style>
</head>

<body style="background: #efefef">



  <!-- Header -->
  <?php
  include('./header.php');
  ?>

  <div class="container ">
    <div class="row bg-light submenu">
      <div class="col-3 btn btn-light">
        <a href="index.php" class="text-decoration-none text-dark">
          <img src="asset/Picture/icon-grid.svg" height="25px" />
          <p style="margin-top: 10px">Tất cả</p>
        </a>
      </div>
      <div class="col-3 btn btn-light">
        <a href="index.php?loaixe=1" class="text-decoration-none text-dark">
          <img src="asset/Picture/icon-gear.svg" height="25px" />
          <p style="margin-top: 10px">Xe số</p>
        </a>
      </div>
      <div class="col-3 btn btn-light">
        <a href="index.php?loaixe=2" class="text-decoration-none text-dark">
          <img src="asset/Picture/icon-scooter.svg" height="25px" />
          <p style="margin-top: 10px">Xe tay ga</p>
        </a>
      </div>
      <div class="col-3 btn btn-light">
        <a href="index.php?loaixe=3" class="text-decoration-none text-dark">
          <img src="asset/Picture/icon-pkl.svg" height="25px" />
          <p style="margin-top: 10px">Xe phân khối lớn</p>
        </a>
      </div>
    </div>

  </div>
  <!-- body -->
  <div class="container border bg-light">

    <!-- slide show -->
    <div id="carouselExampleIndicators " class="carousel slide " data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./Asset/Picture/banner_1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./Asset/Picture/banner_1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./Asset/Picture/banner_1.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- sản phẩn -->
    <div class="row " id="card-row">
      <?php
        include "./includes/connect_database.php";
        include "./function/currency_format.php";
        // $sql = "SELECT * FROM sanpham LIMIT 20";
        // $result = $con->query($sql);
        // while($xe = $result->fetch_assoc())
        // {
        //   echo '
        //     <div class="col-6 col-md-4  mb-2 ">
        //       <div class="card">
        //         <img src="'.$xe['URL_IMAGE'].'" class="card-img-top" alt="$product_image3">
        //         <div class="card-body">
        //           <h5 class="card-title">'.$xe['TENSP'].'</h5>
        //           <p class="card-text">'.currency_format($xe['GIA']).' đ</p>
        //           <a href="#" class="btn btn-info">Add to cart</a>
        //           <a href="#" class="btn btn-secondary">View more</a>
        //         </div>
        //       </div>
        //     </div>
        //   ';
        // }
        include "ShowListProducts.php";
        LaySanPham();
        LaySPTheoTab();
      ?>
      <!-- <div class="col-6 col-md-4  mb-2 ">
        <div class="card">
          <img src="./Asset/DB-Picture/XPKL_2.png" class="card-img-top" alt="$product_image3">
          <div class="card-body">
            <h5 class="card-title">name1</h5>
            <p class="card-text">giá</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4  mb-2">
        <div class="card">
          <img src="./Asset/DB-Picture/XPKL_2.png" class="card-img-top" alt="$product_image3">
          <div class="card-body">
            <h5 class="card-title">name1</h5>
            <p class="card-text">giá</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4  mb-2">
        <div class="card">
          <img src="./Asset/DB-Picture/XPKL_2.png" class="card-img-top" alt="$product_image3">
          <div class="card-body">
            <h5 class="card-title">name1</h5>
            <p class="card-text">giá</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more</a>
          </div>
        </div>
      </div> -->
    </div>
  </div>
<!-- footer -->
  <?php
  include('./footer_copy.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>