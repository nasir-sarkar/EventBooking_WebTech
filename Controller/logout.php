<?php
    session_start();
    $_SESSION = array();
    session_destroy();

    setcookie('status', 'true', time()-10, '/');

    header('location: ../View/login.php');  
    exit;
?>