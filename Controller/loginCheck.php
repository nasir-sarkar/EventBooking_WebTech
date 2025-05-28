<?php
error_reporting(E_ALL);
require_once('../Model/userModel.php');
session_start();

$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (isset($data['email']) && isset($data['password'])) {
    $email = trim($data['email']);
    $password = trim($data['password']);

    if ($email == "" || $password == "") {
        echo "null email/password!";
        exit;
    }

    $user = login($email, $password);

    if ($user) {
        $_SESSION['status'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['fullname'];
        $_SESSION['phone'] = $user['phone'];
        $_SESSION['usertype'] = $user['usertype'];

        if (!empty($user['avatar'])) {
            $_SESSION['avatar'] = $user['avatar'];
        } else {
            $_SESSION['avatar'] = '';
        }

        setcookie('status', 'true', time() + 1800, '/');
        
        echo trim($user['usertype']);
        exit;
    } else {
        echo "invalid user!";
        exit;
    }
} else {
    echo "invalid request!";
    exit;
}
?>