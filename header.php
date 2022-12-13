<?php
ob_start();
session_start();
include('./includes/connect_database.php');
?>
<link rel="stylesheet" href="./CSS/style_header.css">
<nav class="container navbar navbar-expand-lg bg-info set_Color_nav">
    <div class="container-fluid ">
        <a class="navbar-brand" href="index.php"><img src="./Asset/Picture/logo.jpg" alt="" width="70" height="70"
                class="d-inline-block align-top logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav_ul">
                
                <!-- tượng trưng -->

                <?php
                if(isset($_SESSION['username']))
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./user.php?profile"><i class="fa-solid fa-user"></i>
                        <?php echo $_SESSION['username'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php"><i class="fas fa-sign-out"></i> Đăng xuất</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page_shopping_cart.php"><i
                            class="fa-solid fa-cart-shopping"></i><sup>1</sup> Giỏ hàng</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#"><?php echo $_SESSION['username'] ?></a>
                </li> -->
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
                <input class="form-control me-2" name="search_data" type="search" placeholder="Search"
                    aria-label="Search">
                <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
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
<script>
$(document).ready(function() {
    var ids = new Array();
    $('#over').on('click', function() {
        $('#list').toggle();
    });

    //Message with Ellipsis
    $('div.msg').each(function() {
        var len = $(this).text().trim(" ").split(" ");
        if (len.length > 12) {
            var add_elip = $(this).text().trim().substring(0, 65) + "…";
            $(this).text(add_elip);
        }

    });


    $("#bell-count").on('click', function(e) {
        e.preventDefault();

        let belvalue = $('#bell-count').attr('data-value');

        if (belvalue == '') {

            console.log("inactive");
        } else {
            $(".round").css('display', 'none');
            $("#list").css('display', 'block');
            //Ajax
            $('.message').click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: './function/deactive.php',
                    type: 'POST',
                    data: {
                        "id": $(this).attr('data-id')
                    },
                    success: function(data) {

                        console.log(data);
                        location.reload();
                    }
                });
            });
        }
    });

    //submit form
    //    $('#notify').on('click',function(e){
    //         e.preventDefault();
    //         var name = $('#notifications_name').val();
    //         var ins_msg = $('#message').val();
    //         if($.trim(name).length > 0 && $.trim(ins_msg).length > 0){
    //           var form_data = $('#frm_data').serialize();
    //         $.ajax({
    //           url:'./connection/insert.php',
    //                 type:'POST',
    //                 data:form_data,
    //                 success:function(data){
    //                     location.reload();
    //                 }
    //         });
    //         }else{
    //           alert("Please Fill All the fields");
    //         }


    //    }
    //    );
});
</script>