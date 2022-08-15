<?php 
namespace ErrorSession;
session_start();
class CustomError {
    public function ErrorReportingBySessions ($err)
    {
        return $_SESSION['err'] = $err;
    }
}
