<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email == "" || $password == "") {
        echo "null email/password!";
    } else if ($email == "nasir@gmail.com" && $password == "nasir123") {
        $_SESSION['status'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = "Nasir Sarkar";
        $_SESSION['phone'] = "01808080808";

        setcookie('status', 'true', time() + 1800, '/');

        header('location: ../View/View_Profile.php');
        exit();
    } else if ($email == "admin@gmail.com" && $password == "admin123") {
        $_SESSION['status'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = "Admin";
        $_SESSION['role'] = "admin";

        setcookie('status', 'true', time() + 1800, '/');

        header('location: ../View/Admin_Panel.php');
        exit();
    } else {
        echo "invalid user!";
    }
} else {
    echo "Invalid request! Please submit form!";
}
?>

