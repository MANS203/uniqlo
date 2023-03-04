<?php
require('Connections.php');

session_start();

$err_s = 0;
if (isset($_POST['login'])) {

   $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
   $pass = mysqli_real_escape_string($conn, md5($filter_pass));

   if (empty($email)) {

      $email_err = '<p id="40" style="color:red;">Please insert your email</p>';
      $err_s = 1;
   }

   if (empty($filter_pass)) {

      $pass_err = '<p id="40" style="color:red;">Please insert your password</p>';
      $err_s = 1;
   }

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'");


   if (mysqli_num_rows($select_users) > 0) {

      $row = mysqli_fetch_assoc($select_users);

      if ($row['user_type'] == 'admin') {

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location: admin.php');
      } elseif ($row['user_type'] == 'user') {

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location: index.php');
      } else {
         $err = '<p style="color:red;"> no user found!</p>';
      }
   } else {
      $err = '<p style="color:red;">your email or password incorrect try again</p>';
   }
}
