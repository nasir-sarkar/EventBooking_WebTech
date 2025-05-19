<?php

if (isset($_POST['submit'])) {
    $access = trim($_POST['access']);
    $hasError = false;

    if ($access == "") {
        echo "Please select an accessibility option!";
        $hasError = true;
    } 
    else {
        echo "Accessibility option selected successfully!";
    }

    if (!$hasError) {
        header("Location: ../View/ttgrid.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}

?>
