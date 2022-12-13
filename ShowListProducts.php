<?php
    include "./includes/connect_database.php";
    function LaySanPham()
    {
        global $con;
        if (!isset($_GET['search_data']) && (!isset($_GET['Filter'])||($_GET['Filter'] != "Lọc sản phẩm")))
        {
            if (!isset($_GET['loaixe']))
            {
                $truyvan = "select MASP, TENSP, GIA, URL_IMAGE from sanpham where IS_ACTIVE=1";
            }
            else if (isset($_GET['loaixe']))
            {
                $loaixe = $_GET['loaixe'];
                $truyvan = "select MASP, TENSP, GIA, URL_IMAGE from sanpham where LOAIXE = $loaixe and IS_ACTIVE=1";
            }
            $ketqua = $con->query($truyvan);
            while ($xe = $ketqua->fetch_assoc())
            {
                echo '
                    <div class="col-6 col-md-4  mb-2 ">
                        <div class="card">
                            <img src="'.$xe['URL_IMAGE'].'" class="card-img-top" alt="$product_image3">
                            <div class="card-body">
                                <h5 class="card-title">'.$xe['TENSP'].'</h5>
                                <p class="card-text">'.currency_format($xe['GIA']).' đ</p>
                                <a href="Product_Detail.php?tenxe='.$xe['TENSP'].'" class="btn btn-secondary" id="btnViewMore">View more</a>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
        
    }
?>