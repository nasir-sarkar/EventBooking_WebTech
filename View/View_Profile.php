<?php
session_start();
if (!isset($_SESSION['status'])) {
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
    
    <fieldset>    
        <legend><b>VIEW PROFILE</b></legend>
        <form>

            <div class="avatar-container">
                <img id="avatar" src="../Image/default-avatar.jpg" alt="Profile Picture" width="100">
                <a href="Change_Avatar.html"><input type="button" class="avatar" value="Change Avatar"></a>
            </div>

            <p><b>Name:</b> <?php echo $_SESSION['name']; ?></p>
            <p><b>Email:</b> <?php echo $_SESSION['email']; ?></p>
            <p><b>Phone:</b> <?php echo $_SESSION['phone']; ?></p>

            <a href="Edit_Profile.php"><input type="button" value="Edit Profile"></a>
            <a href="Update_Password.php"><input type="button" value="Update Password"></a>
            <a href="logout.php"><input type="button" value="Logout"></a>
            
        </form>
    </fieldset>

    <link rel="stylesheet" href="../CSS/View_Profile.css">
</body>
</html>
