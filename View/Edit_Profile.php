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
    <form onsubmit="ajax(); return false;">
            
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

        <p id="response"></p>
    </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Edit_Profile.css">
    <script>
        function ajax(){
            let name = document.getElementById('name').value.trim();
            let email = document.getElementById('email').value.trim();
            let phone = document.getElementById('phone').value.trim();

            let json = {
                'name': name,
                'email': email,
                'phone': phone
            };
            let data = JSON.stringify(json);

            let xhttp = new XMLHttpRequest();
            xhttp.open('post', '../Controller/Edit_Profile_.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('json=' + data);
            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    let response = JSON.parse(this.responseText);
                    document.getElementById('response').innerHTML = response.message;
                }
            }
        }
    </script>
</body>
</html>
