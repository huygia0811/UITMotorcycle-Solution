<?php
ob_start();
session_start();
?>
<style>
.set_Color_nav {
    background-color: #06c7ce !important;
}

nav a {
    color: white !important;
}
#nav_btnBoloc {
        margin: 10px;
    }
    @media screen and (max-width: 991px) {
        #nav_btnBoloc {
            margin-left: 0;
        }
        #myBtn {
            width: 100%;
        }
    }
</style>
<nav class="container navbar navbar-expand-lg bg-info set_Color_nav">
    <div class="container-fluid ">
        <img src="./Asset/Picture/logo.jpg" alt="" style="width: 7%; height: 7%; object-fit: contain;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                </li>

                <!-- tượng trưng -->

                <?php
                if(isset($_SESSION['username']))
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./user.php?profile"><i class="fa-solid fa-user"></i> Tài Khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">Đăng xuất</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_shopping_cart.php"><i
                            class="fa-solid fa-cart-shopping"></i><sup>1</sup> Giỏ hàng</a>
                </li>
                <p><?php echo $_SESSION['username'] ?></p>
                <?php
                }
                else
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./signin.php">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./signup.php">Đăng ký</a>
                </li>
                
                <?php
                }
                ?>
            </ul>
            <form class="d-flex" role="search" action="index.php" method="GET">
                <input class="form-control me-2" name="search_data" type="search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product"  >
            </form>
            <form id="nav_btnBoloc" class="d-flex">
                <input id="myBtn" type="button" value="Bộ lọc" class="btn btn-outline-light">
            </form>
            <?php
                include "./search_popup.php";
            ?>
        </div>
    </div>
</nav>