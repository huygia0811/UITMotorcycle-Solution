<?php
ob_start();
session_start();
include('./includes/connect_database.php');
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
    #list{
         
        display: none;
         top: 50px;
         position: absolute;
         right: 2%;
         background:#ffffff;
 z-index:100 !important;
   width: 25vw;
   margin-left: -37px;
  
   padding:0 !important;
   margin:0 auto !important;
   
         
       }
</style>
<!-- tEST THÔNG BÁO -->
<?php
// if(isset($_SESSION['username']))
// {

//     $username=$_SESSION['username'];
//     $select_makh="select * from `taikhoan` where tendangnhap='$username'";
//     $select_makh_run=mysqli_query($con,$select_makh);
//     $row_makh=mysqli_fetch_assoc($select_makh_run);
//     $get_makh=$row_makh['MAKH'];
//     $select_thongbao="select * from `thongbao` where MAKH='$get_makh' and ROLE=1";
//     $select_thongbao_run=mysqli_query($con,$select_thongbao);
//     $count_thongbao='';
//     $thong_bao_new=array();
//     $thong_bao_old=array();
//     while($row_makh=mysqli_fetch_assoc($select_thongbao_run))
//     {
//         $count_thongbao=mysqli_num_rows($select_thongbao_run);
//         $thong_bao_new[]=array(
//             "id"=>$row_makh['MATIEUDE'],
//             "tieude"=>$row_makh['TIEUDE'],
//             "noidung"=>$row_makh['NOIDUNG'],
//         );
//     }
    
//     //truy vấn thông báo củ
//     $select_thongbao_old="select * from `thongbao` where MAKH='$get_makh' and ROLE=0";
//     $select_thongbao_old_run=mysqli_query($con,$select_thongbao_old);
//     while($rows = mysqli_fetch_assoc($select_thongbao_old_run)){
//         $thong_bao_old[] = array(
//                     "id" => $rows['MATIEUDE'],
//                     "tieude"=>$rows['TIEUDE'],
//                     "noidung"=>$rows['NOIDUNG']
//         );
//       }
//     }
// ?>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<!-- ##  -->
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
<script>
$(document).ready(function(){
    var ids = new Array();
    $('#over').on('click',function(){
           $('#list').toggle();  
       });

   //Message with Ellipsis
   $('div.msg').each(function(){
       var len =$(this).text().trim(" ").split(" ");
      if(len.length > 12){
         var add_elip =  $(this).text().trim().substring(0, 65) + "…";
         $(this).text(add_elip);
      }
     
}); 


   $("#bell-count").on('click',function(e){
        e.preventDefault();

        let belvalue = $('#bell-count').attr('data-value');
        
        if(belvalue == ''){
         
          console.log("inactive");
        }else{
          $(".round").css('display','none');
          $("#list").css('display','block');
          //Ajax
          $('.message').click(function(e){
            e.preventDefault();
              $.ajax({
                url:'./function/deactive.php',
                type:'POST',
                data:{"id":$(this).attr('data-id')},
                success:function(data){
                 
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