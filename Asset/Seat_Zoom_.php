<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $seat = trim($_POST['seat']);
    $access = trim($_POST['access']);
    $errors = [];

    if ($seat == "") {
        $errors[] = "Please select a seat!";
    }
    if ($access == "") {
        $errors[] = "Please select an accessibility option!";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo '<p><a href="../View/Seat_Zoom.php">Go Back</a></p>';
        exit;
    }

    
    $_SESSION['temp_seat'] = $seat;
    $_SESSION['temp_access'] = $access;

    header("Location: ../Controller/passInfo.php");
    exit;


} else {
    echo "Invalid request! Please submit form!";
}
?>
