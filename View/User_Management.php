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
    <title>User Management</title>
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
            <input type="button" value="Sort A-Z" onclick="alert('Sorted A-Z')">
            <input type="button" value="Bulk Delete" onclick="alert('Bulk delete initiated!')">
            <input type="button" value="Add User" onclick="alert('Add user functionality!')">
        </form>
    </fieldset>

    <fieldset>
        <legend><b>USER LIST</b></legend>
        <p><b>1. Nafiz Ahmed</b> - Admin <input type="button" value="Delete" onclick="alert('User Deleted')"></p>
        <p><b>2. Mr. Zakir </b> - User <input type="button" value="Delete" onclick="alert('User Deleted')"></p>
        <p><b>3. Hasan Ali</b> - User <input type="button" value="Delete" onclick="alert('User Deleted')"></p><br><br>

        <a href="Admin_Panel.php"><input type="button" class="blue" value="Back"></a>
    </fieldset>

    <link rel="stylesheet" href="../Asset/User_Management.css">
    <script src="../Asset/User_Management.js"></script>
</body>
</html>
