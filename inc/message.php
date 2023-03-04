<?php

function message($connect)
{
    require('Connections.php');
    $err_s = 0;
    if (isset($_POST['connect'])) {

        // insert code 
        
        $name = stripslashes(strtolower($_POST['re_name']));
        $subject = stripslashes($_POST['subject']);
        $email = stripslashes($_POST['email']);
        $message = stripslashes($_POST['message']);

        //scurty code 

        $name = htmlentities(mysqli_real_escape_string($connect, $_POST['re_name']));
        $subject = htmlentities(mysqli_real_escape_string($connect, $_POST['subject']));
        $email = htmlentities(mysqli_real_escape_string($connect, $_POST['email']));
        $message = htmlentities(mysqli_real_escape_string($connect, $_POST['message']));

        if (empty($email)) {
            $email_err = '<p> Please insert your email </p>';
            $err_s = 1;
        }

        if ($err_s == 0) {
            mysqli_query($connect, "INSERT INTO messages (name_resent , email , SUBJECT , message )
            VALUES('$name', '$email', '$subject','$message')") or die('query failed');
            echo ' Resent successfully! ';
            header('location:..about.php');
        } else {
            echo '< h1> please insert agin </h1>';
        }
    }
}
