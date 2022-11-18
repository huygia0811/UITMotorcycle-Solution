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


<!-- body -->
<div class="container my-4 ">
    <div class="row ">
        <div class="col-12 col-sm-5">
            <img src="./Asset/Picture/sh_1.jpg" alt="" style="width: 100%; height: 100%; object-fit: contain;">
        </div>
        <div class="col-12 col-sm-7 bg-secondary">
            <h3>Tên xe</h3>
            <div class="bg-light">
                <h3>Lead 110</h3>
                <p>11111111</p>
            </div>
            <div class="bg-light p-2">
                <div class="d-flex flex-row justify-content-between">
                    <p >Năm sản xuất</p>
                    <p>2022</p>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <p >Đông cơ</p>
                    <p>100cc</p>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <p >Màu sắc</p>
                    <p>ok</p>
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