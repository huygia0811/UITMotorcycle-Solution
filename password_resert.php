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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if(isset($_SESSION['status']))
                {
                    ?>
                    <div class="alert alert-success">
                        <h5><?=$_SESSION['status'] ;?></h5>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                }
                
                ?>
                <form action="password-resert-code.php" method="post">
                    <div class="form-group mb-3">
                        <label for="">Email address</label>
                        <input type="text" name="email" class="form-control" placeholder="nhập email">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" name="password_resert_link" class="btn btn-info">Sent password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>