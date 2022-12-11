<?php
ob_start();
session_start();
include('../includes/connect_database.php');
$error_message='';
if(isset($_POST['form1'])) {
    $username=$_POST['tdn'];
    $pwd=$_POST['password'];
    if(empty($_POST['tdn']) || empty($_POST['password'])) {
        $error_message = 'Vui lòng điền đầy đủ<br>';
    } else {
		
        $check_query="select * from `taikhoan` where tendangnhap='$username' and is_admin=1";
        $result_query=mysqli_query($con, $check_query);
        $count_row=mysqli_num_rows( $result_query);  
        $row_data=mysqli_fetch_assoc( $result_query);
       
        if($count_row==1)
        {
          if(password_verify( $pwd,$row_data['matkhau']))
          {
           
            $error_message="Đăng nhập thành công";
            $_SESSION['user']='$username';
            header("Location:index.php");
            exit(0);
          }
          else
          {
            $error_message="Tên đăng nhập hoặc mật khẩu không chính xác";
          }
        }
        else
        {
            $error_message="Tên đăng nhập hoặc mật khẩu không chính xác";
        }
    }

    
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!--bootstrap  css link-->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
        <!--font asswsome link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- css -->
</head>

<body class="hold-transition login-page sidebar-mini">

<div class="login-box">
	<div class="login-logo">
		<b>Admin Panel</b>
	</div>
  	<div class="login-box-body">
    	<p class="login-box-msg">Log in to start your session</p>
        <?php 
	    if( (isset($error_message)) && ($error_message!='') ):
	        echo '<div class="error">'.$error_message.'</div>';
	    endif;
	    ?>
		<form action="" method="post">
			
			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Tên đăng nhập" name="tdn" type="text" autocomplete="off" autofocus>
			</div>
			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Mật khẩu" name="password" type="password" autocomplete="off" value="">
			</div>
			<div class="row">
				<div class="col-xs-8"></div>
				<div class="col-xs-4">
					<input type="submit" class="btn btn-success btn-block btn-flat login-button" name="form1" value="Log In">
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>