<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="css/blog.css">
        <!-- <link rel="stylesheet" href="css/uniqlo.css"> -->

         <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Blog</title>
        
    </head>
    <?php include("base/navbar.php"); ?>
    <body>
        
<?php
session_start();


$user_id = $_SESSION['user_id'];

// if not user redirect to login page

if(!isset($user_id)){
   header('location: login.php');
}
?>

        

        <section class="Landing-blog">
            <h2>Blog</h2>
            <a href="index.php">Home</a><span class='blog'>/Blog</span>
        </section>


        <div class="content">
            <div class="card">
                <img src="images/image1.png.webp">
            </div>
            <div class="card">
                <img src="images/image2.png.webp">
            </div>
            <div class="card">
                <img src="images/image3.png.webp">
            </div>
           
            <div class="card">
                <img src="images/image3.png.webp" >
            </div>
            <div class="card">
                <img src="images/image2.png.webp">
            </div>
            <div class="card">
                <img src="images/image1.png.webp" >
            </div>
      

        
            <div class="card">
                <img src="images/image2.png.webp">
            </div>
            <div class="card">
                <img src="images/image3.png.webp" >
            </div>
            <div class="card">
                <img src="images/image1.png.webp">
            </div>
            </div>

        <section class="load-more">
            <a href="blog.php" class="button">Load More</a>
        </section>

        <?php include("base/footer.php");?>
       
        
    </body>
</html>















