<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Google fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <!-- Main Template Css File -->
    <link rel="stylesheet" href="css/cart.css">
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

if(!isset($user_id)){
   header('location: login.php');
}

?>

<?php include('base/navbar.php');?>

  <!-- Start Landing -->
  <div class="Landing-cart">
            <h2>Cart</h2>
            <a href="index.php">Home</a><span class='cart'>/cart</span>
 </div>

 <div class="table-cart">
<!-- End Landing -->
<?php
if(isset($_POST['update_cart'])){
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
    $message[] = '<div class="alert alert-info" role="alert"> Quantity updated.
  </div>';
 }
 
 if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
    header('location:cart.php');
 }
   
 if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
 }
 ?>


<!-- Start Table -->
<table>
<thead>
<tr>
    <th>IMAGE</th>
    <th>PRODUCT</th>
    <th>PRICE</th>
    <th>QUANTITY</th>
    <th>TOTAL</th>
    <th>REMOVE</th>
</tr>

</thead>

<tbody>
    
<?php
         $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>
<tr>
    <td>
    <img src="images/product/<?php echo $fetch_cart['image']; ?>" height="75" alt="">
    </td>
    <td>
    <?php echo $fetch_cart['name']; ?>
    </td>
    <td>
       <h5><?php echo $fetch_cart['price']; ?>$ </h5>
    </td>
    <td>
    <form action="" method="post">
                  <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                  <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                  <input type="submit" name="update_cart" value="edit" class="option-btn">
               </form>
    </td>
    <td>
       <h5><?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>$</h5>
    </td>
    <td>
        <button class="remove"><a href="index.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('Do yo want to delete this product from cart');">delete</a></i></button>
    
    </td>

    
</tr>
<?php
$grand_total += $sub_total;
   }
}else{
    echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">The Cart Is Empty</td></tr>';
 }
?>    
</tr>
<tr class="table-bottom">
         <td colspan="4">Total-Price :</td>
         <td><?php echo $grand_total; ?>$</td>
         <td><a href="index.php?delete_all" onclick="return confirm('Delete all products from card ?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Delete All</a></td>
      </tr>
</tbody>

</table>

 </div>

<!-- End  Table -->

                    <button class="Btn">Proceed To Checkout </button>



    
</body>
</html>