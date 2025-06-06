<?php
session_start();
if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}

require_once('../model/userModel.php');

if (isset($_SESSION['filteredUser'])) {
    $users = $_SESSION['filteredUser'];
    unset($_SESSION['filteredUser']);
} 
else {
    $users = allUsers();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
    <legend><b>USER MANAGEMENT</b></legend>
    <form method="post" action="../Controller/User_Management_.php" onsubmit="return validate()">
            
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
        <a href="Add_User.php"><input type="button" value="Add User"></a>
        <a href="Delete_User.php"><input type="button" value="Delete User"></a>
        <a href="Admin_Panel.php"><input type="button" class="blue" value="Back"></a>

    </fieldset>

    <link rel="stylesheet" href="../Asset/User_Management.css">
    <script src="../Asset/User_Management.js"></script>
</body>
</html>
