<?php
session_start();
require_once('../model/userModel.php');

$role = $_SESSION['role'];

$filteredUsers = getUsersByRole($role);

$_SESSION['filteredUsers'] = $filteredUsers;

header('location: ../View/User_Management.php');
exit;
?>
