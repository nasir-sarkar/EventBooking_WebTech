<?php
session_start();
if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}

require_once('../model/userModel.php');

if (isset($_SESSION['filteredUsers'])) {
    $users = $_SESSION['filteredUsers'];
    unset($_SESSION['filteredUsers']);
} else {
    $users = getAllUsers();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="../Asset/User_Management.css">
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
        <legend><b>USER MANAGEMENT</b></legend>
         <form method="post" action="../Asset/User_Management_.php" onsubmit="return validate()">
            <label for="filter">Filter By Role:</label><br>
            <select id="filter" name="filter">
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select><br>
            <p id="filtererror"></p>

            <input type="submit" name="submit" value="Apply Filter">
        </form>
    </fieldset>

    <fieldset>
        <legend><b>USER LIST</b></legend>
        <?php foreach ($users as $user): ?>

            <p><b>Name: </b> <?= $user['fullname'] ?> </p><br>
            <p><b>Username: </b> <?= $user['username'] ?> </p><br>
            <p><b>Email: </b> <?= $user['email'] ?> </p><br>
            <p><b>Status: </b> <?= $user['usertype'] ?> </p><br>
            <hr>

        <?php endforeach; ?>

        <br><br>
        <input type="button" value="Add User" onclick="alert('Add user functionality!')">
        <input type="button" value="Delete" onclick="alert('User Deleted')">
        <a href="Admin_Panel.php"><input type="button" class="blue" value="Back"></a>
    </fieldset>

    <script src="../Asset/User_Management.js"></script>
</body>
</html>
