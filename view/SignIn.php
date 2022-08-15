
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../php/functions/register.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Username" autocomplete="off" required>
        <input type="email" name="emial" placeholder="email" autocomplete="off" required>
        <input type="password" name="password" placeholder="password" autocomplete="off" required>
        <input type="password" name="cpassword" placeholder="c password" autocomplete="off" required>
        <input type="file" name="image" accept="image/*" require>
        <input type="submit" name="register" value="Sing Up">
    </form>
    <?php
    session_start();
    error_reporting();
    print_r($_SESSION['err']);
    print_r($_POST);
    print_r($_FILES);
    
    ?>

</body>

</html>