<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $seat = trim($_POST['seat']);
    $hasError = false;

    if ($seat == "") {
        echo "Please select a seat!";
        $hasError = true;
    } 
    else {
        echo "Seat selected successfully!<br>";
    }

    if (!$hasError) {
        header("Location: ../View/Accessibility_Filter.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
