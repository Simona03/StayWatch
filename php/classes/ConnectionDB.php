<?php

namespace Database;

class ConnectionDB
{
    public function Connect()
    {

        require_once 'db_data.php';
        $db =  mysqli_connect(server, user, pass, db_name);
        if(!$db){
            die("Can`t connecting");
        }else{
            return $db;
        }
    }
    public function Close($db)
    {
        mysqli_close($db);
    }
}
