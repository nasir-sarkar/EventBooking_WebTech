<?php
if (isset($_POST['submit'])) {
    $section = trim($_POST['section']);
    $hasError = false;


    if ($section == "") {
        echo "Please select a section!";
        $hasError = true;
    } 

    else {
        echo "Section selected successfully!<br>";
    }

    if (!$hasError) {
        header("Location: ../View/parkingmap.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
