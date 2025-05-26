<?php
session_start();
if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
        <legend><b>ADD USER</b></legend>
        <form method="post" action="../Controller/Add_User_.php" onsubmit="return validate()">

            <label for="fullname">Full Name:</label><br>
            <input type="text" id="fullname" name="fullname"><br>
            <p id="fullnameerror"></p>

            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <p id="usernameerror"></p>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <p id="passworderror"></p>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <p id="emailerror"></p>

            <label for="phone">Phone:</label><br>
            <input type="text" id="phone" name="phone"><br>
            <p id="phoneerror"></p>

            <label for="usertype">User Type:</label><br>
            <input type="text" id="usertype" name="usertype"><br>
            <p id="usertypeerror"></p>

            <input type="submit" name="submit" value="Add User">
            <a href="User_Management.php"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Add_User.css">
    <script src="../Asset/Add_User.js"></script>
</body>
</html>
