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
    <title>Change Avatar</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
    <legend><b>CHANGE AVATAR</b></legend>
    <form method="post" action="../Controller/Change_Avatar_.php" enctype="multipart/form-data" onsubmit="return validate()">

        <label for="avatar">Select Image:</label><br>
        <input type="file" id="avatar" name="avatar" accept="image/*"><br>
        <p id="avatarerror"></p>

        <input type="submit" name="submit" value="Upload Avatar">
        <a href="View_Profile.php"><input type="button" value="Back"></a>

    </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Change_Avatar.css">
    <script src="../Asset/Change_Avatar.js"></script>
</body>
</html>