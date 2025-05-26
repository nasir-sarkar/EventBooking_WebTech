<?php
session_start();

if (isset($_POST['submit'])) {
    $seat = trim($_POST['seat']);
    $access = trim($_POST['access']);
    $hasError = false;

    if ($seat == "") {
        echo "Please select a seat!";
        $hasError = true;
    } 

    else if ($access == "") {
        echo "Please select an accessibility option!";
        $hasError = true;
    } 

    else {
        $_SESSION['temp_seat'] = $seat;
        $_SESSION['temp_access'] = $access;

        header("Location: ../Controller/passInfo.php");
        exit;
    }

} 
else {
    echo "Invalid request! Please submit form!";
}
?>
