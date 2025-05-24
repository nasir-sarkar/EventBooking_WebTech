<?php
require_once('db.php');

function saveContact($fullname, $email, $message) {
    $con = getConnection();
    $fullname = mysqli_real_escape_string($con, $fullname);
    $email = mysqli_real_escape_string($con, $email);
    $message = mysqli_real_escape_string($con, $message);

    $sql = "INSERT INTO contacts (fullname, email, message) VALUES ('$fullname', '$email', '$message')";
    $result = mysqli_query($con, $sql);

    return $result;
}
