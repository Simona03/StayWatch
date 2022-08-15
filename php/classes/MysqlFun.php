<?php

namespace DatabaseFunction;

use Database\ConnectionDB;

session_start();
error_reporting();

require 'ConnectionDB.php';

class DatabaseFunction 
{
    function  __construct()
    {
        $db =  new ConnectionDB();
        $this->db = $db->Connect();
    }

    public function RegisterSql($name, $email, $password, $image)
    {
        return mysqli_query($this->db, "INSERT INTO `Accounts`( `name`, `email`, `password`, `image`) VALUES ('$name','$email','$password','$image')");
    }


}
