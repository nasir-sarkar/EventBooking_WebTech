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
    <title>Content Moderation</title>
</head>
<body>
    <div class="header">Event Booking</div>

  
    <fieldset>
        <legend><b>CREATE EVENT</b></legend>
         <form method="post" action="../Asset/Content_Moderation_.php" onsubmit="return validate()">
            <label for="ename">Event Name:</label><br>
            <input type="text" id="ename" name="ename"><br>
            <p id="enameerror"></p>

            <label for="edate">Event Date:</label><br>
            <input type="date" id="edate" name="edate"><br>
            <p id="edateerror"></p>

            <label for="ecat">Category:</label><br>
            <select id="ecat" name="ecat">
                <option value="">Select Category</option>
                <option value="Music">Music</option>
                <option value="Tech">Tech</option>
                <option value="Festival">Festival</option>
            </select><br>
            <p id="ecaterror"></p>

            <input type="submit" name="submit" value="Create Event" onclick="validate()">
        </form>
    </fieldset>

 
    <fieldset>
        <legend><b>EVENT LIST</b></legend>
        <p><b>1. Party Night</b> - 2025-06-01 | Category: Music <input type="button" value="Delete" onclick="alert('Event Deleted')"></p>
        <p><b>2. Tech Conference</b> - 2025-06-15 | Category: Tech <input type="button" value="Delete" onclick="alert('Event Deleted')"></p>
    </fieldset>

   
    <fieldset>
        <legend><b>REFUND REQUESTS</b></legend>
        <p><b>1. John Doe</b> - Event: Tech Conference <input type="button" value="Approve" onclick="alert('Refund Approved')"> <input type="button" value="Reject" onclick="alert('Refund Rejected')"></p>
        <p><b>2. Jane Smith</b> - Event: Party Night <input type="button" value="Approve" onclick="alert('Refund Approved')"> <input type="button" value="Reject" onclick="alert('Refund Rejected')"></p>
    
    <a href="Admin_Panel.php"><input type="button" class="blue" value="Back"></a>
    </fieldset>

    
    <link rel="stylesheet" href="../Asset/Content_Moderation.css">
    <script src="../Asset/Content_Moderation.js"></script>
</body>
</html>
