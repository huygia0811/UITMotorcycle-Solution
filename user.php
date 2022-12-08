<!DOCTYPE html>
<html>
<head>
    <title>UIT MotorCycle</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- fontawwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .container {
        margin: 15px auto 0 auto !important;
        border: none !important;
        padding: 0 !important;
    }
    .row-top{
        background-color: #ffff;
        border-radius: 4px;
    }
    .user_left{
        border-right: 2px solid red;
    }
    </style>
</head>

<body style="background: #efefef">
    <?php
    include('./header.php');
    ?>

    <div class="container">
        <div class="row row-top">
            <div class="col-2 user_left">
                <div class="d-flex flex-column">
                    <div>
                        <div class="d-flex flex-row">
                            <i class="fa-solid fa-user"> </i>
                            <a href="user.php?profile">Tài khoản của tôi</a>
                        </div>
                        <div>
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="user.php?profile">Hồ sơ</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="user.php?password">Đổi Mật khẩu</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                    <i class="fa-solid fa-sack-dollar"></i>
                     <a href="user.php?payment">Nạp tiền</a>
                    </div>
                    <div class="d-flex flex-row">
                     <i class="fa-solid fa-cart-shopping"></i>
                     <a href="user.php?cart">Giỏ hàng</a>
                    </div>

                    <div class="d-flex flex-row">
                    <i class="fa-solid fa-receipt"></i>
                     <a href="user.php?purchar">Đơn mua</a>
                    </div>
                </div>
            </div>
            <div class="col-10 " style="min-height:400px ;">
            <?php
            if(isset($_GET['profile']))
            {
                include('profile.php');
            }
            if(isset($_GET['payment']))
            {
                include('payment.php');
            }
           
            if(isset($_GET['password']))
            {
                include('password.php');
            }
            if(isset($_GET['cart']))
            {
                include('cart.php');
            }
            if(isset($_GET['purchar']))
            {
                include('purchar.php');
            }
            ?>
            </div>
        </div>
    </div>


    <?php
    include('./footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>


</html>