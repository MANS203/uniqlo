<?php
include('Connections.php');


if(isset($_POST['register'])){

  $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $name = mysqli_real_escape_string($conn, $filter_name);
  $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
  $email = mysqli_real_escape_string($conn, $filter_email);
  $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
  $pass = mysqli_real_escape_string($conn, md5($filter_pass));
  $filter_cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_STRING);
  $cpass = mysqli_real_escape_string($conn, md5($filter_cpass));

  $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

  if(mysqli_num_rows($select_users) > 0){
     $message[] = 'user already exist!';
   }else{
     if($pass != $cpass){
        $message[] = '<p style"color=red;">confirm password not matched!</p>';
     }else{
        mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
        $message[] = 'registered successfully!';
        header('location:login.php');
     }
  }

}





