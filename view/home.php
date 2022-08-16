<?php 
session_start();
setcookie("image_name",$_SESSION['image'],36000)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src=" ../php/functions/image/<?php echo $_SESSION['image']  ?>" alt="" srcset="">
     <p><?php print_r( $_SESSION)?></p>
</body>
</html>