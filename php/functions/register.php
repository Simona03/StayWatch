<?php
require 'Error.php';
require '../classes/MysqlFun.php';

use DatabaseFunction\DatabaseFunction;
use ErrorSession\CustomError;

$err =  new CustomError();
$db =  new DatabaseFunction();

error_reporting();

$name = $_POST['username'];
$email = $_POST['emial'];

$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$image_name = $_FILES['image']['name'];

$tempname = $_FILES["image"]["tmp_name"];
$folder = "image/" . $image_name;

    if (!empty($name)) {
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (!empty($password) && !empty($cpassword)) {
                if ($password == $cpassword) {
                    if (strlen($password) <= 60) {
                        if (!$db->isUserExitst($name, $email)) {

                            if (move_uploaded_file($tempname, $folder)) {
                                $db->RegisterSql($name,$email,$password,$image_name);
                                header("location: ../Home.php");
                            } else {
                                $err_rep = "Registration Not Successful";
                            }
                        } else {
                            $err_rep = "User is Exists";
                        }
                    } else {
                        $err_rep = "Max Limit for password is 60 sym.";
                    }
                } else {
                    $err_rep = "Password != curent Password";
                }
            } else {
                $err_rep = "Password not validate";
            }
        } else {
            $err_rep = "Email not validate";
        }
    } else {
        $err_rep = "Username not Validate";
    }


echo $err->ErrorReportingBySessions($err_rep);
