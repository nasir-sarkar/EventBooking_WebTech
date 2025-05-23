<?php
require_once('db.php');

function insertFeedback($fullname, $feedback, $rating) {
    $con = getConnection();

    $fullname = mysqli_real_escape_string($con, $fullname);
    $feedback = mysqli_real_escape_string($con, $feedback);
    $rating = (int)$rating;

    $sql = "INSERT INTO feedbacks (fullname, feedback, rating) VALUES ('$fullname', '$feedback', $rating)";
    mysqli_query($con, $sql);
}
?>
