 <!-- Start Header -->
 <?php
 include('inc/Connections.php');
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 


$user_id = $_SESSION['user_id'];

// if not user redirect to login page

if(!isset($user_id)){
   header('location: login.php');
}
$select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
if(mysqli_num_rows($select_user) > 0){
   $fetch_user = mysqli_fetch_assoc($select_user);
};

?>

 <header>
 
 <div class="bg-dark">
 <nav class="navbar navbar-dark bg-dark">
 <p class='text-success font-weight-bold text-uppercase'><i class="fa-sharp fa-solid fa-user"></i> Current User : <span class="text-info"><?php echo $fetch_user['name']; ?><br><span class="text-capitalize text-muted">you are logged in ,to logout click logout on the top-right</span></span> </p>
 <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are you sure?');" class="btn btn-danger float-right">Logout</a>
 </div>
</nav>

        <div class="container">
        
            <a href="index.php" class="logo">
                <img class="logo" src="images/uniqlo.png" alt="Logo" />
            </a>
            

            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>  
                    <li> <a href="shop.php">Shop</a></li>                 
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="cart.php">My Cart</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>

            </nav>
            <div class="form">
            <!-- create a search button -->
                <a href="index.php"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>

                <a href="login.php"><i class="fa-sharp fa-solid fa-user"></i></i></a>
                <a href="cart.php"> <i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                <a href="#"> <i class="fa-sharp fa-solid fa-bars"></i></a>
            </div>
                </div>
    </header>
    <!-- End Header -->

    