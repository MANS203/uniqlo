<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<?php

// Connect to the database
include('inc/Connections.php');

// check if he admin if not admin redirct to the login page

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location: login.php');
};

// include('base/navbar.php');

echo '<div class="bg-dark">';
echo '<nav class="navbar navbar-dark bg-dark">';
echo '<p class="text-success font-weight-bold text-uppercase"><i class="fa-sharp fa-solid fa-user"></i> Current User : <span class="text-info"><?php echo $fetch_user["name"]; ?><br><span class="text-capitalize text-muted">you are logged in ,to logout click logout on the top-right</span></span> </p>';
echo '<a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm("Are you sure?");" class="btn btn-danger float-right">Logout</a>
</div> ';

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};




// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image = $_POST['uploadfile'];
  $price_discount = $_POST['price_discount'];
  $description = $_POST['description'];


  // Determine if the user wants to add or delete a product
  if ($_POST['action'] == 'add') {
    // Add the product
    $conn->query("INSERT INTO products (name, price, price_discount, description,image) VALUES ('$name', '$price', '$price_discount', '$description','$image')");
  } else if ($_POST['action'] == 'delete') {
    // Delete the product
    $conn->query("DELETE FROM products WHERE name = '$name'");
  }

  // Redirect back to the product management page
  header("Location: inc/dbproducts.php");
  exit;
}

?>
<html>
<head>
  <title>Product Management</title>
</head>
<body>
  <h1>Product Management</h1>

  <form method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price"><br>

    <label for="price_discount">Price after discount:</label><br>
    <input type="text" id="price_discount" name="price_discount"><br>

    <label for="img">Select image:</label><br>
    <input class="form-control" type="file" name="uploadfile" value="" /><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description"></textarea><br>

    <input type="radio" name="action" value="add" checked> Add Product<br>
    <input type="radio" name="action" value="delete"> Delete Product<br>
    
    <input type="submit" name="submit" value="Submit">
  </form> 

  <h4><a href="inc/dbproducts.php">Back to products page</a></h4>

</body>
</html>
