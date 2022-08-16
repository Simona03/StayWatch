<?php

require '../../php/classes/MysqlFun.php';
use DatabaseFunction\DatabaseFunction;
$db =  new DatabaseFunction();
error_reporting();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $profile = $db->SingIn($email, md5($pass));
    
    if ($profile) {
        
        header("location:../../index.php");
    } else {
        header("location: ?err= Login not susses");
    }
}