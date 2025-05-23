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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Delete User</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
        <legend><b>DELETE USER</b></legend>
        <form method="post" action="../Asset/Delete_User_.php" onsubmit="return validate()">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <p id="usernameerror"></p>

            <input type="submit" name="submit" value="Delete User">
            <a href="User_Management.php"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Delete_user.css" />
    <script src="../Asset/Delete_User.js"></script>
</body>
</html>
