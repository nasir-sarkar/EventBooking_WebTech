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
    <form onsubmit="ajax(); return false;">
        
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <p id="usernameerror"></p>

        <input type="submit" name="submit" value="Delete User">
        <a href="User_Management.php"><input type="button" value="Back"></a>

        <p id="response"></p>
    </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Delete_user.css" />
    <script>
        function ajax(){
            let username = document.getElementById('username').value.trim();
            let usernameError = document.getElementById('usernameerror');
            let response = document.getElementById('response');

            usernameError.innerHTML = "";
            response.innerHTML = "";

            if (username === "") {
                usernameError.innerHTML = "Username cannot be empty!";
                return;
            }

            let json = {
                'username': username
            };
            let data = JSON.stringify(json);

            let xhttp = new XMLHttpRequest();
            xhttp.open('post', '../Controller/Delete_User_.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('json=' + data);
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let res = JSON.parse(this.responseText);
                    response.innerHTML = res.message;
                }
            }
        }
    </script>
</body>
</html>
