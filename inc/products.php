<style>
    .err_4{
        position: relative;
        margin: 5px 5px;
        display: flex;
        color: red;
        text-align: center;
        padding: 1em;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  if(isset($err_4)){
    echo $err_4;
 }
include("Connections.php");
if(isset($_POST['add_to_cart'])){
    
    $product_name = $_POST['name'];
    $product_price = $_POST['price_discount'];
    $product_image = $_POST['image'];
    $product_quantity =$_POST['quantity'];
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
 
    if(mysqli_num_rows($select_cart) > 0){
       $err_4= '<p class="err_4">This is a danger alert—check it out!<p>';
    }else{
       mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image,quantity)
        VALUES('$user_id', '$product_name', '$product_price','$product_image','$product_quantity')") or die('query failed');
       $success= '<div class="alert" role="alert"> The product has added to cart
       </div>';
    }
     if(isset($success)){
        echo $success;
     }
    
     
    
 };


 
 
 


$query = "SELECT * FROM products";
$result = mysqli_query($conn,$query);

$n = 1;

  
echo '<br>';
while ($row = mysqli_fetch_array($result)){
    $product_id = $row['id'];
    $product_name = $row['name'];
    $product_pd = $row['price_discount'];
    $product_imagea = $row['image'];
    // echo "<form method='post'";
    echo "<form method='post' class='card'>";  
    echo "<div class='icon'> <img src='images/product/$n.png'><div class='add-cart'>";
    echo "
    <input type='hidden' name='id' value='$product_id'>
    <input type='hidden' name='name' value='$product_name'>
    <input type='hidden' name='price_discount' value='$product_pd'>
    <input type='number' min='1' name='quantity' value='1'>
    <input type='hidden' name='image' value='$product_imagea'>
    ";
    echo "<button type='submit' name='add_to_cart' class='btn'><i class='fa-sharp fa-solid fa-cart-shopping'></i></button>";
    // echo "<i class='fa-sharp fa-solid fa-cart-shopping'></i>";
    echo "</div></div>";
    echo "<div class='info'><p>" . $row['name'] . "</p><p><del >" . $row['price'] . "</del> <span class='money'>" . $row['price_discount'] . "</span> </p></div>";
    echo "</form>";
    $n++;
}

 

    


?>

<!-- <form class="card">
                <div class="icon">
                    <img src="images/product/1.png">
                    <div class="add-cart">
                <input type="hidden" name="id">
                <input type="hidden" name="name">
                <input type="hidden" name="price">
                <button type="submit" name="add_to_cart">Add To Cart</button>
                <i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                </div>
                </div>
                
                <div class="info">
                    <p>Simple Black clock</p>
                    <p><del>$16.00</del> <span class="money">$10.00</span> </p>
                </div>
         </form> -->