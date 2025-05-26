<?php
require_once('../model/userModel.php');

if (isset($_POST['submit'])) {
    $fullname = trim($_POST['fullname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $usertype = trim($_POST['usertype']);
    $hasError = false;


    if ($fullname === "") {
        echo "Please enter full name!<br>";
        $hasError = true;
    }

    else if ($username === "") {
        echo "Please enter username!<br>";
        $hasError = true;
    }

    else if ($password === "") {
        echo "Please enter password!<br>";
        $hasError = true;
    }

    else if ($email === "") {
        echo "Please enter email!<br>";
        $hasError = true;
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!<br>";
        $hasError = true;
    }

    else if ($phone === "") {
        echo "Please enter phone number!<br>";
        $hasError = true;
    }

    else if ($usertype === "") {
        echo "Please enter user type!<br>";
        $hasError = true;
    }


    if (!$hasError) {
        $result = addUser($fullname, $username, $password, $email, $phone, $usertype);
        if ($result) {
            echo "User added successfully!<br>";
        } 
        else {
            echo "Failed to add user!<br>";
        }
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>