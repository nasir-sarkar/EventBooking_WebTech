<?php
require_once('../model/feedbackModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $fullname = trim($_POST['fullname']);
    $feedback = trim($_POST['feedback']);
    $rating = trim($_POST['rating']);
    $hasError = false;

    if ($fullname == "") {
        echo "User name cannot be empty!";
        $hasError = true;
    }
    else if ($feedback == "") {
        echo "Feedback cannot be empty!";
        $hasError = true;
    }
    else if ($rating == "") {
        echo "Rating cannot be empty!";
        $hasError = true;
    }
    else if ($rating < 1 || $rating > 5) {
        echo "Rating must be between 1 and 5!";
        $hasError = true;
    }
    else {
        insertFeedback($fullname, $feedback, $rating);
        echo "Testimonial submitted successfully!";
    }
}
else {
    echo "Invalid request! Please submit form!";
}
?>
