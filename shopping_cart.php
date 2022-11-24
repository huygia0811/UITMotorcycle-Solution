<!-- <!DOCTYPE html>
<html>

    <head>
        <title>UIT MotorCycle Shopping Cart</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="./CSS/shopping_cart.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-inverse my_navbar">
            <div class="container-fluid">
                <div class="navbar-header nb_header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="header_cart.html">UIT MotorCycle</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Search..." />
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="user_link"><span class="glyphicon glyphicon-user"></span> Tài khoản</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="cart_list">
            <img src="./asset/header_cart/empty-cart.webp" alt="" class="cart_list-no-cart-img" />
            <a href="header_cart.html" class="home-link">
                <button class="home btn btn-success">HOME</button>
            </a>
            <div class="container text-center">
                <div class="row header_cart">
                    <div class="col-xs-4 col-8">
                        <div class="header_cart-info">
                            <div class="checkbox sanpham">
                                <label><input type="checkbox" value="" />Sản phẩm</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 col-1">
                        <div class="header_cart-info">
                            <span>Đơn giá</span>
                        </div>
                    </div>
                    <div class="col-xs-2 col-1">
                        <div class="header_cart-info">
                            <span>Số lượng</span>
                        </div>
                    </div>
                    <div class="col-xs-2 col-1">
                        <div class="header_cart-info">
                            <span>Thành tiền</span>
                        </div>
                    </div>
                    <div class="col-xs-2 col-1">
                        <div class="header_cart-info">
                            <span>Thao tác</span>
                        </div>
                    </div>
                </div>
                <div class="row" id="row_cart_list-info">
                    <div class="cart_list-info" id="cart_list-info">
                        <div class="col-sm-4">
                            <div class="cart_info">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <input type="checkbox" value="" />
                                    </div>
                                    <div class="col-xs-4">
                                        <img src="./asset/Picture/sh_1_test.jpg" class="cart_info_img" />
                                    </div>
                                    <div class="col-xs-7 cart_name">
                                        <p>Xe máy Yamaha</p>
                                        <p>Màu Đỏ Đen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="cart_price">
                                <span id="cart_price">2000000 </span><span>đ</span>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="cart_quantity">
                                <button class="minus-btn" onclick="handleMinus()">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input type="text" name="amount" id="amount" value="1" />
                                <button class="plus-btn" onclick="handlePlus()">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="cart_price-total">
                                <span id="cart_price-total"></span><span> đ</span>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="cart_delete">
                                <span id="cart_delete">Xóa</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./JS/shopping_cart.js"></script>
    </body>

</html> -->

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

<!-- cart -->
<?php
include('./cart.php');
?>
<!-- footer -->
<?php
  include('./footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>