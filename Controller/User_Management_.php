<?php
session_start();
require_once('../model/userModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $filter = trim($_POST['filter']);
    $hasError = false;

    if ($filter == "") {
        echo "Please select a role!";
        $hasError = true;
    } else {
        $_SESSION['role'] = $filter;

        
        $filteredUsers = getUsersByRole($filter);
        $_SESSION['filteredUsers'] = $filteredUsers;

        header("Location: ../View/User_Management.php");
        exit;
    }
} else {
    echo "Invalid request! Please submit form!";
}
?>
