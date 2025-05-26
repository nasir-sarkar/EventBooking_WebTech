<?php
require_once('../model/userModel.php');

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);


    if ($username === "") {
        echo "Please enter username!<br>";
    } 

    else {
        $deleted = deleteUserByUsername($username);
        if ($deleted) {
            echo "User deleted successfully.<br>";
        } 
        else {
            echo "User not found or could not be deleted.<br>";
        }
    }

} 
else {
    echo "Invalid request! Please submit the form.";
}
?>
