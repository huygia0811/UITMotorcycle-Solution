<?php

include './includes/connect_database.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>UIT MotorCycle Sign In</title>
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
    <link rel="stylesheet" href="./CSS/signin.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <a href="#">UIT MotorCycle</a>
      <span>Đăng nhập</span>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-sm-5">
          <h2>UIT MotorCycle</h2>
        </div>
        <div class="col-lg-5 col-sm-7 signin_form">
          <h4>Đăng nhập</h4>

          <form action="" method="post">
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
              <div class="forget_pwd">
                <a href="#">Quên mật khẩu?</a>
              </div>
            </div>
           
            <input type="submit" name="login_user" value="Đăng nhập" class="btn btn-primary signin_btn">
            
           
            <span class="nav_signup"
              >Chưa có tài khoản?
              <a class="signup" href="./signup.php">Đăng ký ngay</a></span
            >
          </form>
          <?php
              if(isset($_POST['login_user']))
              {
                $username=$_POST['username'];
                $pwd=$_POST['pwd'];
                if( $username=='' or $pwd=='')
                {
                  echo "<script>alert('Vui lòng nhập đầy đủ')</script>";
                  echo "<script>window.open('signin.php','_self')</script>";
                }
                else
                {
                  $check_query="select * from `taikhoan` where tendangnhap='$username' ";
                  $result_query=mysqli_query($con, $check_query);
                  $count_row=mysqli_num_rows( $result_query);  
                  $row_data=mysqli_fetch_assoc( $result_query);
                  // $kq=var_dump($row_data['matkhau']);
                  // echo $kq;
                  //echo $count_row;
                  // $kq=password_verify( $pwd,$row_data['matkhau']);
                  // echo var_dump($kq);
                  if($count_row==1)
                  {
                    if(password_verify( $pwd,$row_data['matkhau']))
                    {
                      echo "<script>alert('Đăng nhập thành công')</script>";
                      echo "<script>window.open('MainPage.php','_self')</script>";
                    }
                    else
                    {
                      echo "<script>alert('Tên đăng nhập hoặt mật khẩu không chính xác')</script>";
                      echo "<script>window.open('signin.php','_self')</script>";
                    }
                  }
                  else
                  {
                    echo "<script>alert('Tên đăng nhập hoặt mật khẩu không chính xác')</script>";
                    echo "<script>window.open('signin.php','_self')</script>";
                  }
                 }
              }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
