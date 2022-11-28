<?php
    include "./includes/connect_database.php";
    function LaySanPham()
    {
        global $con;
        if (!isset($_GET['loaixe']))
        {
            $truyvan = "select MASP, TENSP, GIA, URL_IMAGE from sanpham limit 20";
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
                                <a href="index.php?add_to_card='.$xe['MASP'].'" class="btn btn-info">Add to cart</a>
                                <a href="Product_Detail.php?typeid='.$xe['MASP'].'" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    }

    function LaySPTheoTab()
    {
        global $con;
        if (isset($_GET['loaixe']))
        {
            $loaixe = $_GET['loaixe'];
            $truyvan = "select MASP, TENSP, GIA, URL_IMAGE from sanpham where LOAIXE = $loaixe limit 20";
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
                                <a href="index.php?add_to_card='.$xe['MASP'].'" class="btn btn-info">Add to cart</a>
                                <a href="Product_Detail.php?tenxe='.$xe['MASP'].'" class="btn btn-secondary">View more</a>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    }
?>