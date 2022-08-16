<?php

session_start();
if (!isset($_SESSION['id'])) {   ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./Page/images/pizza-icon.png" type="image/x-icon">
        <link rel="stylesheet" href="../tools/css/froms.css">
        <title>StayWatch </title>
    </head>

    <body>
        <div class="container">
            <div class="overlay" id="overlay">
                <div class="sign-in" id="sign-in">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="switch-button" id="slide-right-button">Sign Up</button>
                </div>
                <div class="sign-up" id="sign-up">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start a journey with us</p>

                    <button class="switch-button" id="slide-left-button"> Sign In</button>
                </div>
            </div>
            <div class="form">
                <div class="sign-in" id="sign-in-info">
                    <h1>Create Account</h1>

                    <p class="small">or use your email for registration:</p>
                    <form action="../php/functions/register.php" method="post" enctype="multipart/form-data" id="sign-up-form">
                        <input type="text" name="username" placeholder="Username" class="box" autocomplete="off" required>
                        <input type="email" name="emial" placeholder="email" class="box" autocomplete="off" required>
                        <input type="password" name="password" placeholder="password" class="box" autocomplete="off" required>
                        <input type="password" name="cpassword" placeholder="c password" class="box" autocomplete="off" required>
                        <input type="file" name="image" accept="image/*" class="box" require>
                        <input type="submit" name="register" class="btn" value="Sing Up">
                    </form>

                </div>
                <div class="sign-up" id="sign-up-info">
                    <h1>Sign In</h1>

                    <p class="small">or use your email account:</p>
                    <form action="../php/functions/login.php" method="post" id="sign-in-form">
                        <input type="email" name="email" placeholder="enter email" class="box" required>
                        <input type="password" name="password" placeholder="enter password" class="box" required>
                        <input type="submit" name="login" value="login" class="btn">

                    </form>
                </div>
            </div>
        </div>



    </body>
    <script src="../tools/js/form.js"></script>

    </html>
<?php } else {
    header("Location: ./Page/index.php");
} ?>