<?php

// Connect to the database
require("Connections.php");


session_start();


$admin_id = $_SESSION['admin_id'];

// if not user redirect to login page

if (!isset($admin_id)) {
  header('location: ../login.php');
}

// Retrieve the products from the database
$result = $conn->query("SELECT * FROM products");

// Output the products in an HTML table
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Description</th><th>Created At</th><th>image</th></tr>";
while ($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "<td>" . $row['created_at'] . "</td>";
  echo "<td>" . $row['image'] . "</td>";
  echo "</tr>";
}
echo "</table>";

?>

<h4><a href="../admin.php">Back to Admin page</a></h4>