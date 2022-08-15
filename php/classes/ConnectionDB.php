<?php

namespace Database;

class ConnectionDB
{
    function __construct()
    {
        require_once 'db_data.php';
        $db =  mysqli_connect(server, user, pass, db_name);
        return   mysqli_connect_error($db) != 0  ? die("Connecting Problem")  :  $db;
    }
}
