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
    <title>Edit Profile</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
    <legend><b>EDIT PROFILE</b></legend>
    <form method="post" action="../Controller/Edit_Profile_.php" onsubmit="return validate()">
            
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <p id="nameerror"></p>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <p id="emailerror"></p>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br>
        <p id="phoneerror"></p>

        <input type="submit" name="submit" value="Save Changes">
        <a href="View_Profile.php"><input type="button" value="Back"></a>
        
    </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Edit_Profile.css">
    <script src="../Asset/Edit_Profile.js"></script>
</body>
</html>
