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
        .container{
            max-width: 1080px !important;
        }
    </style>
</head>

<body >
<!-- slide showw -->


<!--  -->

<nav class="container navbar navbar-expand-lg bg-info " >
    <div class="container-fluid ">
      <img src="./Asset/Picture/logo.jpg" alt="" style="width: 7%; height: 7%; object-fit: contain;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Sản phẩm</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">Liên hệ</a>
        </li>
        <!-- tượng trưng -->
        <li class="nav-item">
          <a class="nav-link" href="#">Tài Khoản</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./signin.php">Đăng nhập</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./signup.php">Đăng ký</a>
        </li>
        <!--  -->
        <li class="nav-item">
          <a class="nav-link" href=""><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
      
      </ul>
      <form class="d-flex" role="search" >
        <input class="form-control me-2" name="search_data" type="search" placeholder="Search" aria-label="Search">
        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<div class="container ">
    <div class="row">
        <div  class="col-3 btn btn-outline-light">
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
            <div class="card" >
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
            <div class="card" >
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
            <div class="card" >
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
<div class="container bg-light " >
        
        <div class="row ">
            <div class="col-4  mx-auto">
                <h5>Công ty TNHH OKXE Việt Nam</h5>
                <div >
                    
                    <p><span>Hà Nội: </span>Tòa nhà Sao Mai - Tầng 11, số 19 Lê Văn Lương, P. Nhân Chính, Q. Thanh Xuân. </p>
                    <p>Điện thoại: (024) 73 077 889</p>
                </div>
                <div class="HCM">
                    <p><span>Hồ Chí Minh: </span>Tòa nhà TTC - Tầng 17, số 253 Hoàng Văn Thụ, P.2, Q. Tân Bình.
                    </p>
                    <p>Điện thoại: (028) 73 057 057</p>
                </div>
               
            </div>
            <div class="col-4 mx-auto">
                <h6>HỖ TRỢ KHÁCH HÀNG</h6>
                <div>
                  
                    <p> Hổ trợ <br>
                        Hotline: 1900 636 135 (9:00 - 21:00)</p>
                    <p>Email: support@okxe.vn</p>
                </div>
                <div class="khieu_nai">
                    <p><a href="#">Chính sách giải quyết khiếu nại</a></p>
                    <p><a href="#">Chính sách bảo mật</a> </p>
                    <p><a href="#">Quy định đăng tin</a> </p>
                </div>
               
            </div>
            <div class="col-4 mx-auto">
                <div >
                    <h6>VỀ CHÚNG TÔI</h6>
                    <div class="intro">
                        <p><a href="#">Giới thiệu</a></p>
                        <p><a href="#">Điều khoản sử dụng</a></p>
                        <p><a href="#">Quy chế hoạt động</a></p>
                        <p><a href="#">Trung tâm khách hàng</a></p>
                        <p><a href="#">Hỏi đáp (FAQ)</a></p>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="footer-footer">
            <p>Số ĐKKD: 0108473996 - Ngày cấp 16/10/2018, được sửa đổi lần 4 ngày 19/06/2020 - Cấp bởi: Sở Kế hoạch & Đầu tư TP Hà Nội</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>