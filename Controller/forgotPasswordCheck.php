<?php
    session_start();
    require_once('../Model/userModel.php');
    
    $input = json_decode(file_get_contents('php://input'), true);
    $email = $input['email'];
    $password = $input['password'];

    $status = updatePasswordByEmail($email,$password);

    if ($status)
    {
        echo 'success';
    }
    
    else
    {
        echo 'error';
    }
?>