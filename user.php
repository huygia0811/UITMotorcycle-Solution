<!DOCTYPE html>
<html>

    <head>
        <title>UIT MotorCycle</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- custom css -->
        <link rel="stylesheet" href="./CSS/user.css">
        <!-- fontawwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body style="background-color: #efefef" class="container">


        <div class="container-fluid user_content">
            <div class="header">
                <?php
    include('./header.php');
    ?>
            </div>
            <div class="wrapper">
                <!-- Sidebar  -->

                <nav id="sidebar" class="active">

                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fa-solid fa-user"></i>
                                <span>Tài khoản</span>
                            </a>
                            <ul class="collapse list-unstyled" id="userSubmenu">
                                <li>
                                    <a href="user.php?profile">Hồ sơ</a>
                                </li>
                                <li>
                                    <a href="user.php?password">Đổi mật khẩu</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="user.php?payment">
                                <i class="fas fa-sack-dollar"></i>
                                <span>Nạp tiền</span>
                            </a>
                            <a href="user.php?purchar&type=-2">
                                <i class="fa-solid fa-receipt"></i>
                                <span> Đơn mua</span>
                            </a>
                        </li>
                    </ul>

                </nav>

                <!-- Page Content  -->
                <div id="content">
                    <div>
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

        </div>
        <div class="footer">
            <?php
    include('./footer.php');
    ?>
        </div>





        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
        </script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </body>


</html>