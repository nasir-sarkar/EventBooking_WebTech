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
    <title>Status Tracker</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
    <legend><b>REQUEST STATUS TRACKER</b></legend>
    <form onsubmit="ajax(); return false;">
            
        <label for="eventId">Enter event ID:</label><br>
        <input type="text" id="eventId" name="eventId"><br>
        <p id="eventIderror"></p>

        <input type="submit" name="submit" value="Track Status">
        <a href="Terms_Display.php"><input type="button" value="Back"></a>

        <br><br>
        <p><b>Status:</b></p>
        <p id="statusResult">[Pending / Approved / Rejected]</p>

        
    </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Status_Tracker.css">
    <script>
        function ajax(){
            let eventId = document.getElementById('eventId').value.trim();
            let error = false;

            if (eventId === "") {
                document.getElementById('eventIderror').innerHTML = "Event ID cannot be empty!";
                error = true;
            } 
            else {
                document.getElementById('eventIderror').innerHTML = "";
            }

            if (error) return;

            let json = {
                'eventId': eventId
            };
            let data = JSON.stringify(json);

            let xhttp = new XMLHttpRequest();
            xhttp.open('post', '../Controller/Status_Tracker_.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('json=' + data);
            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    let response = JSON.parse(this.responseText);
                    document.getElementById('statusResult').innerHTML = response.message;
                }
            }
        }
    </script>
</body>
</html>
