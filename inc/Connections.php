<?php

//connect to mysql database named 'shop'

$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
   die('error' . mysqli_connect_error());
}
