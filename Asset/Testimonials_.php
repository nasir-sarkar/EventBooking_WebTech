<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $user = trim($_POST['user']);
    $feedback = trim($_POST['feedback']);
    $rating = trim($_POST['rating']);
    $hasError = false;

    if ($user == "") {
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
        echo "Testimonial submitted successfully!<br>";
    }

    if (!$hasError) {
        header("Location: ../View/Abc.php");
        exit;
    }
}
else {
    echo "Invalid request! Please submit form!";
}
?>
