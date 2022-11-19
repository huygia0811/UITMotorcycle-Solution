<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="password-resert-code.php" method="post">
            <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>"/>
            <div class="form-group">
                <label for="">Email Address</label>
                <input type="text" name="email" class="form-control" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" placeholder="Nhập email"/>
            </div>
            <div class="form-group">
                <label for="">New password</label>
                <input type="text" name="new_password" class="form-control" placeholder="Nhập mật khẩu"/>
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="text" name="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu"/>
            </div>
            <button name="password_update" type="submit" class="btn btn-success">ĐẶT LẠI</button>
            
        </form>
    </div>
</body>
</html>