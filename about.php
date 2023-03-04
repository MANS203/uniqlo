<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>


    <!-- Google fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <!-- Main Template Css File -->
    <link rel="stylesheet" href="css/about.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- <link rel="stylesheet" href="css/uniqlo.css"> -->

</head>

<body>

    <?php include("base/navbar.php"); ?>


    <section class="Landing-about1">
        <h2>About Us</h2>
        <a href="index.php">Home</a><span class='about-Us'>/About US</span>
    </section>



    <div class="welcome1">
        <p class="welcome2">Welcome To Uniqlo Store</p>
        <p class="Lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br>
            <br>ut labore et dolore gna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br><br>
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in<br> <br>
            voluptate velit esse cillum dolore eu fugiat.
        </p>

    </div>

  
    <div id="register" class="userForm " role="tabpanel">

        <form action="" class=" form register " method="post">

            <div class="inputGroup">
                <input type="text" placeholder="NAME" require name="re_name" autocomplete="offf">
            </div>

            <div class="inputGroup">
                <input type="email" placeholder="EMAIL" require name="email" autocomplete="offf">
            </div>

            <div class="inputGroup">
                <input type="text" class="box" placeholder="SUPJECT" name="sup" required>
            </div>

            <div class="inputGroup">
                <textarea type="text" class="form-control" placeholder="MESSAGE" name="message" required></textarea>
            </div>

            <button type="submit" value="CONTANT US" class="Btn22" name="connect">CONTANT US</button>
        </form>

    </div>



    <div class="welcome1">
        <p class="welcome2">Our Staff</p>
        <p class="Lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do<br><br> eiusmod tempor
            incididunt ut labo.</p>
    </div>

    <!-- images -->
    <div class="contaner2">
        <div class="card2">
            <img src="images/about/abod.jpg" class="img3">
            <p class="text4"> Abdulrahman_Ramadan </p>
        </div>

        <div class="card2">
            <img src="images/about/mans.jpg" class="img3">
            <p class="text4"> Mohamed_Mansour</p>
        </div>

        <div class="card2">

            <img src="images/about/dark.jpg" class="img3">
            <p class="text14"> Abdulrahman_Ewian </p>

        </div>

        <div class="card2">

            <img src="images/about/beso.jpg" class="img3">
            <p class="text4"> Behoy_Khlil </p>
        </div>

        <div class="card2">
            <img src="images/about/ziad.jpg" class="img3">
            <p class="text4"> Ziad_Ashraf </p>
        </div>

        <div class="card2">
            <img src="images/about/jak.jpg" class="img3">
            <p class="text4"> Jac_Gerges </p>
        </div>

        <div class="card2">
            <img src="images/about/kero.jpg" class="img3">
            <p class="text4"> Kerolles_Isaac </p>
        </div>

        <div class="card2">
            <img src="images/about/nabro.jpg" class="img3">
            <p class="text4"> Abdulrahman_ElNabrawy </p>
        </div>

        <div class="card2">
            <img src="images/about/ramy.jpg" class="img3">
            <p class="text4"> Ramy_Hany </p>
        </div>

        <div class="card2">
            <img src="images/about/mario.jpg" class="img3">
            <p class="text4"> Mario_Samy </p>
        </div>


    </div>


    <?php include("base/footer.php"); ?>
</body>

</html>