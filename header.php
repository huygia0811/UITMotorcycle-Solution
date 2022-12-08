<style>
.navbar {
    background-color: #06c7ce !important;
}

nav a {
    color: white !important;
}
</style>
<nav class="container navbar navbar-expand-lg bg-info ">
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
                <li class="nav-item">
                    <a class="nav-link" href="">Sản phẩm</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
                <!-- tượng trưng -->
                <li class="nav-item">
                    <a class="nav-link" href="./user.php?profile">Tài Khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./signin.php">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./signup.php">Đăng ký</a>
                </li>
                <!--  -->
                <li class="nav-item">
                    <a class="nav-link" href="page_shopping_cart.php"><i
                            class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" name="search_data" type="search" placeholder="Search"
                    aria-label="Search">
                <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
            </form>
        </div>
    </div>
</nav>