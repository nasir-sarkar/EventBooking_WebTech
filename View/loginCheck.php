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
            header('location: View_Profile.php');
        } else {
            echo "invalid user!";
        }
    } else {
        echo "Invalid request! Please submit form!";
    }
?>
