<?php

include '../php/classes/ConnectionDB.php';


use Database\ConnectionDB;

$db =  new ConnectionDB();
$db->Connect();
session_start();
$user_id = $_SESSION['id'];

if (isset($_POST['update_profile'])) {

    $update_name = mysqli_real_escape_string($db->Connect(), $_POST['update_name']);
    $update_email = mysqli_real_escape_string($db->Connect(), $_POST['update_email']);
    mysqli_query($db->Connect(), "UPDATE `Accounts` SET name = '$update_name', email = '$update_email'   WHERE id = '$user_id'") or die('query failed');


    $new_pass = mysqli_real_escape_string($db->Connect(), md5($_POST['new_pass']));
    $confirm_pass = mysqli_real_escape_string($db->Connect(), md5($_POST['confirm_pass']));


    if (!empty($new_pass) != !empty($confirm_pass)) {
        $message[] = 'confirm password not matched!';
    } else {
        mysqli_query($db->Connect(), "UPDATE `Accounts` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
        $message[] = 'password updated successfully!';
    }


    $update_image = $_FILES['update_image']['name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = '../php/functions/image/' . $update_image;

    if (!empty($update_image)) {
        if ($update_image_size > 200000000) {
            $message[] = 'image is too large';
        } else {
            $image_update_query = mysqli_query($db->Connect(), "UPDATE `Accounts` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
            if ($image_update_query) {
                move_uploaded_file($update_image_tmp_name, $update_image_folder);
                $_SESSION['image'] = $update_image;
            }
            $message[] = 'image updated succssfully!';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update profile</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="dist/css/table.css">

</head>

<body>

    <div class="update-profile">

        <?php
        $select = mysqli_query($db->Connect(), "SELECT * FROM `Accounts` WHERE id = '$user_id'") or die('query failed');
        if (mysqli_num_rows($select) > 0) {
            $fetch = mysqli_fetch_assoc($select);
        }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <?php
            if ($fetch['image'] == '') {
                echo '<img src="image/default-avatar.png">';
            } else {
                echo '<img src="../php/functions/image/' . $fetch['image'] . '" width="100" height="100"';
            }
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>
            <div class="flex">
                <div class="inputBox">
                    <span>username :</span>
                    <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box" autocomplete="off">
                    <span>your email :</span>
                    <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" autocomplete="off" class="box">

                    <span>update your pic :</span>
                    <input type="file" name="update_image" accept="image/*" autocomplete="off"  class="box">
                </div>
                <div class="inputBox">
                    <span>new password :</span>
                    <input type="password" name="new_pass" placeholder="enter new password" autocomplete="off"class="box">
                    <span>confirm password :</span>
                    <input type="password" name="confirm_pass" placeholder="confirm new password" class="box" autocomplete="off" required>
                </div>
            </div>
            <input type="submit" value="update profile" name="update_profile" class="btn">
            <a href="../index.php" class="delete-btn">go back</a>
        </form>

    </div>

</body>

</html>