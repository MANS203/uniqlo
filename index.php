<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniqlo</title>
    <!-- Google fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <!-- Main Template Css File -->
    <link rel="stylesheet" href="css/uniqlo.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">

</head>

<body>
    <?php
    include('inc/Connections.php');
    ?>
    <?php
    session_start();


    $user_id = $_SESSION['user_id'];

    // if not user redirect to login page
    
    if (!isset($user_id)) {
        header('location: login.php');
    }

    ?>
    <?php
    if (isset($_GET['remove'])) {

        $remove_id = $_GET['remove'];
        mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
        header('location:cart.php');
    }

    if (isset($_GET['delete_all'])) {
        mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        header('location:cart.php');
    }
    ?>
    <?php
    if (isset($_GET['logout'])) {
        unset($user_id);
        session_destroy();
        header('location:login.php');
    }
    ;
    ?>
    <?php
    $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
    if (mysqli_num_rows($select_user) > 0) {
        $fetch_user = mysqli_fetch_assoc($select_user);
    }
    ;
    ?>

    <?php include('base/navbar.php'); ?>

    <!-- Start Landing -->
    <div class="Landing ">

        <div class="text">

            <a href="index.php" class="main-btn">New Product <span class="col"> Collectoin </span> </a>
            <div class="shop">
                <a href="shop.php">Shop Now<del>---</del></a>

            </div>
        </div>

    </div>


    <!-- End Landing -->

    <div>
        <?php
        if (isset($err_4)) {
            echo $err_4;
        }
        ?>

    </div>

    <section class="cards" id="services">
        <h2 class="category-title">
            <div class="categories">
                <a href="#All" class="all">ALL</a>
                <a href="#Furnitures">FURNITURES</a>
                <a href="#bAGS">BAGS</a>
                <a href="#DECORATION">DECORATION</a>
                <a href="#ACCESSORIES">ACCESSORIES</a>
            </div>
        </h2>


        <div class="content">


            <?php include("inc/products.php"); ?>


        </div>

    </section>


    <?php include('base/footer.php'); ?>

</body>

</html>