<?php
 

class LogoutController{
    public function Logout(){
        
    session_start();
    session_unset();
    session_destroy();
    header("Location: /Login-sys/Views/welcome.php");
    exit;

    }
}

$logout = new LogoutController();
$logout->Logout();