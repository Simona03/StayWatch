<?php

namespace DatabaseFunction;

use Database\ConnectionDB;


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
}
