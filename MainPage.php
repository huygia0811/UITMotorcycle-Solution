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



  <!-- Header -->
  <?php
  include('./header.php');
  ?>

  <div class="container ">
    <div class="row">
      <div class="col-3 btn btn-outline-light">
        <a href="" class="text-decoration-none text-dark">
          <img src="asset/Picture/icon-grid.svg" height="25px" />
          <p>Tất cả</p>
        </a>
      </div>
      <div class="col-3 btn btn-outline-light">
        <a href="" class="text-decoration-none text-dark">
          <img src="asset/Picture/icon-gear.svg" height="25px" />
          <p>Xe số</p>
        </a>
      </div>
      <div class="col-3 btn btn-outline-light">
        <a href="" class="text-decoration-none text-dark">
          <img src="asset/Picture/icon-scooter.svg" height="25px" />
          <p>Xe tay ga</p>
        </a>
      </div>
      <div class="col-3 btn btn-outline-light">
        <a href="" class="text-decoration-none text-dark">
          <img src="asset/Picture/icon-pkl.svg" height="25px" />
          <p>Xe phân khối lớn</p>
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
    <div class="row ">
      <div class="col-6 col-md-4  mb-2 ">
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
      </div>
    </div>
  </div>
<!-- footer -->
  <?php
  include('./footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>