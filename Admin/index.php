<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <!--bootstrap  css link-->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!--font asswsome link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- css -->
        <link rel="stylesheet" href="../CSS/admin.css" />
    </head>

    <body>
        <div class="row">
            <div class="col-md-12 bg-secondary p-3 d-flex align-content-center">
                <div class="px-5 admin_name">
                    <label class="text-light text-center">Tên admin</label>
                </div>
                <ul class="nav nav-tabs list">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?insert_car">Thêm sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view_products">Xem sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?insert_brands">Thêm hãng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Xem hãng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">All order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">All payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">List users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container my-5 mb-2">
            <?php
            if(isset($_GET['insert_car']))
            {
                include('insert_car.php');
            }
            if(isset($_GET['insert_brands']))
            {
                include('insert_brands.php');
            }
            if(isset($_GET['view_products']))
            {
                include('view_products.php');
            }
             ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </body>

</html>