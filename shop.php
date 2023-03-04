<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Main Template Css File -->
    <link rel="stylesheet" href="css/shop.css">
     <!-- Render All Elements Normally -->
     <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/uniqlo.css">
    

    <title>shop</title>
</head>
<body>
    
<?php
session_start();


$user_id = $_SESSION['user_id'];

// if not user redirect to login page

if(!isset($user_id)){
   header('location: login.php');
}
?>

        <?php include("base/navbar.php");?>

        <br><br><br><br>


    <section class="cards" id="services">
        <h2 class="title">
            <div class="navigation2">
                <a href="#All" class="all">ALL</a>
                <a href="#Furnitures">FURNITURES</a>
                <a href="#bAGS">BAGS</a>
                <a href="#DECORATION">DECORATION</a>
                <a href="#ACCESSORIES">ACCESSORIES</a>
            </div>
        </h2>
        <div class="content">
            <?php include("inc/products.php");?>
        </div>
    </section>
    <section class="load-more">
        <a href="shop.php" class="button">LOAD MORE </a>
    </section>

    
    <?php include('base/footer.php');?>

</body>
</html>