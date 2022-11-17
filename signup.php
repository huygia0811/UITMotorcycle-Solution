<?php
include './includes/connect_database.php';
include './function/get_ipaddress.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>UIT MotorCycle Sign Up</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./CSS/signup.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <a href="#">UIT MotorCycle</a>
      <span>Đăng ký</span>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-sm-5">
          <h2>UIT MotorCycle</h2>
        </div>
        <div class="col-lg-5 col-sm-7 signup_form">
          <h4>Đăng ký</h4>

          <form method="post">
            <div class="form-group">
              <label for="uname">Tên đăng nhập:</label>
              <input
                type="text"
                class="form-control"
                id="uname"
                placeholder="Nhập tên đăng nhập"
                name="username"
              />
            </div>
            <div class="form-group">
              <label for="pwd">Mật khẩu:</label>
              <input
                type="password"
                class="form-control"
                id="pwd"
                placeholder="Nhập mật khẩu"
                name="pwd"
              />
            </div>
            <div class="form-group">
              <label for="phonenum">Số điện thoại:</label>
              <input
                type="tel"
                class="form-control"
                id="phonenum"
                placeholder="Nhập số điện thoại"
                name="phonenum"
              />
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Nhập email"
                name="email"
              />
            </div>
            <input type="submit" value="Đăng Ký" name="insert_user" class="btn btn-primary signup_btn">
            <?php
            if(isset($_POST['insert_user']))
            {
              $username=$_POST['username'];
              $pwd=$_POST['pwd'];
              $hash_pwd=password_hash($pwd,PASSWORD_DEFAULT);
              $phonenum=$_POST['phonenum'];
              $email=$_POST['email'];
              $ip = getIPAddress();  
              if($username=='' or  $pwd=='' or  $phonenum=='' or $email=='')
              {
                echo "<script>alert('Vui lòng điền đầy đủ thông tin')</script>";
                echo "<script>window.open('signup.php','_self')</script>";
              }
              else
              {
                $select_query="select * from `taikhoan` where tendangnhap='$username'";
                $select_result=mysqli_query($con, $select_query);
                $count_row=mysqli_num_rows($select_result);
                if($count_row>0)
                {
                  echo "<script>alert('Tài khoản đã có người sử dụng')</script>";
                  echo "<script>window.open('signup.php','_self')</script>";
                }
                else
                {
                  $insert_query="insert into `taikhoan` (tendangnhap,matkhau,dienthoai,email,khachhang_ip) values('$username',' $hash_pwd','$phonenum',' $email','$ip')";
                  $result_query=mysqli_query($con,$insert_query);
                  if($result_query)
                  {
                    echo "<script>alert('Tạo tài khoản thành công')</script>";
                    echo "<script>window.open('signin.php','_self')</script>";
                  }
                }
                
              }

            }

            ?>
             
      
            <span class="nav_signin"
              >Bạn đã có tài khoản?
              <a class="signin" href="./signin.PHP">Đăng nhập ngay</a></span
            >
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
