<?php ?>
<!DOCTYPE html>
<html>

    <head>
        <title>UIT MotorCycle</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./asset/DB-Picture/logo.ico" type="image/x-icon">
        <link rel="stylesheet" href="CSS/style_header.css">
        <link rel="stylesheet" href="CSS/shopping_cart.css">
        <!-- bootstrap cdn -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- fontawwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>

    <body>

        <div class="sp_header">
            <!-- Header -->
            <?php
  include('./header.php');
  ?>

        </div>
        <div class="cart_content">
            <!-- cart -->
            <?php
include('./page_cart.php');
?>
        </div>
        <div class="sp_footer">
            <!-- footer -->
            <?php
  include('./footer.php');
  ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="./JS/shopping_cart.js"></script>

    </body>

</html>