<?php

namespace DatabaseFunction;

use Database\ConnectionDB;

session_start();

class DatabaseFunction
{
    function  __construct()
    {

        require 'ConnectionDB.php';
        $db =  new ConnectionDB();
        $this->db = $db->Connect();
    }

    public function RegisterSql($name, $email, $password, $image)
    {
        return mysqli_query($this->db, "INSERT INTO `Accounts`( `name`, `email`, `password`, `image`) VALUES ('$name','$email','$password','$image')");
    }

    public function isUserExitst($name, $email)
    {
        $sql =  mysqli_query($this->db, "SELECT * FROM `Accounts` WHERE name =  '" . $name . "'AND email=  '" . $email . "'");
        echo $row = mysqli_num_rows($sql);
        if ($row > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function SelectDataProfileByEmail($email)
    {
        $select = mysqli_query($this->db, "SELECT * FROM `Accounts` WHERE email = '$email' ");
        $profileId = mysqli_fetch_array($select);
        $row = mysqli_num_rows($select);
        if ($row == 1) {
            $_SESSION['id'] = $profileId['id'];
            $_SESSION['name'] = $profileId['name'];
            $_SESSION['email'] = $profileId['email'];
            $_SESSION['image'] = $profileId['image'];
        } else {
            echo "Error";
        }
    }
    public function SingIn($email, $password)
    {

        $sql = mysqli_query($this->db, "SELECT * FROM Accounts WHERE email = '$email' AND password = '$password'");

        $profile_data = mysqli_fetch_array($sql);
        $number_rows =  mysqli_num_rows($sql);

        if ($number_rows == 1) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $profile_data['id'];
            $_SESSION['name'] = $profile_data['name'];
            $_SESSION['email'] = $profile_data['email'];
            $_SESSION['image'] = $profile_data['image'];
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
