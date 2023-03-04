<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <!-- Main Template Css File -->
    <link rel="stylesheet" href="css/login.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- <title>Login & Register Form </title> -->
    <title>Login | Register</title>

    <style>
        .error{
            color:red;
        }
    </style>

</head>


<body>


    <div class="wrapper">
        <div class="modalForm">
            <div class="actionBtns">
                <button class="actionBtn loginBtn">Login</button>
                <button class="actionBtn registerBtn">Register</button>
                <button class="moveBtn ">Login</button>
            </div>

            <!-- login form -->

            <div id="login" class="userForm " role="tabpanel">

                <?php include('inc/login_post.php');?>
                
                
                
                
                <form class=" login loginform form loginForm "  method="post">
                    

                
             
                    <?php 
                        if(isset($email_err))
                        {
                            echo $email_err;
                        }elseif(isset($err)){
                            echo '$err';
                        }
                    ?>
                    <div class="inputGroup">
                        
                        <input type="email" placeholder="Email" require  name="email" autocomplete="offf" class="user" >
                    </div>
                    
                    <?php 
                            if(isset($pass_err))
                            {
                        echo '$pass_err';
                            }
                    ?>

                    <div class="inputGroup">
                        <input type="password" placeholder="password"  require name="pass" class="user" autocomplete="offf">
                    </div>
                    
                   <div class="pass-link">
                        <input type="checkbox" name="remember_me">
                        <span class="remember">Remember Me</span>
                        <span class="forget"><a href="#">Forgot password?</a></span>
                    </div>
                    <button type="submit" class="submitBtn"  name="login" value="login">LOGIN</button>
	
                </form>
            
            </div>

            <!--register form-->
            
            <div id="register" class="userForm " role="tabpanel">


                <?php      
                   include('inc/reg_post.php');
                  ?>
                
                

                <form action="" class=" form register "  method="post">

                <?php
                if(isset($message)){
                foreach($message as $message){
                    echo '
                    <div class="error">
                        <span>'.$message.'</span>
                    </div>
                    ';
                }
                }
                ?>    
                    <div class="inputGroup">
                        <input type="text" placeholder="name" require  name="name"   autocomplete="offf">
                    </div>
                    

                    <div class="inputGroup">
                        <input type="email" placeholder="Email" require  name="email"  autocomplete="offf">
                    </div>
                
                
                    <div class="inputGroup">
                        <input type="password" placeholder=" password" require   name="pass" autocomplete="offf">
                    </div>

                    <div class="inputGroup">
                    <input type="password" name="cpass" class="box" placeholder="confirm your password" required>
                    </div>

                    <div class="pass-link">
                        <input type="checkbox">
                        <span class="remember" >Remember Me</span>
                    </div>

                    <button type="submit" name="register" value="register" class="submitBtn">REGISTER</button>
                </form>
                
            </div>
        </div>
    </div>
    <script src="js/javascript.js"></script>
</body>
</html>