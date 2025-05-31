<?php
session_start();
require_once('../model/userModel.php');

if (isset($_POST['submit'])) {
    $filter = trim($_POST['filter']);
    $hasError = false;

    
    if ($filter == "") {
        echo "Please select a role!";
        $hasError = true;
    } 
    
    else {
        $_SESSION['role'] = $filter;
        
        $filteredUser = filteredUser($filter);
        $_SESSION['filteredUser'] = $filteredUser;

        header("Location: ../View/User_Management.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
