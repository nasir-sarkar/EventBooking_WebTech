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
    <title>View Profile</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <div class="fieldsets-container">
        <fieldset class="profile">    
            <legend><b>VIEW PROFILE</b></legend>
            <form>
                <div class="avatar-container">
                <img id="avatar" src="default-avatar.jpg" alt="Profile Picture" width="100">
                <a href="Change_Avatar.php"><input type="button" class="avatar" value="Change Avatar"></a>
                </div>

                <p><b>Name:</b> Nasir Sarkar</p>
                <p><b>Email:</b> nasir@gmail.com</p>
                <p><b>Phone:</b> 0181818181</p>

                <a href="Edit_Profile.php"><input type="button" class="left" value="Edit Profile"></a>
                <a href="Update_Password.php"><input type="button" class="left" value="Update Password"></a>
            </form>
        </fieldset>

        <fieldset class="menu">    
            <legend><b>MENU</b></legend>
            <form>
                <a href="Event_Cards.php"> <input type="button" class="right" value="See Events"></a><br><br>
                <a href="Terms_Display.php"><input type="button" class="right" value="Refund"></a><br><br>
                <a href="qrscanner.html"><input type="button" class="right" value="QR SCanner"></a><br><br>
                <a href="../Controller/logout.php"><input type="button" class="right" value="Logout"></a>
            </form>
        </fieldset>
    </div>

    <link rel="stylesheet" href="../Asset/View_Profile.css">
</body>
</html>
