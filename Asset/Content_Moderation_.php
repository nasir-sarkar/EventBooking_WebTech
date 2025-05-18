<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $ename = trim($_POST['ename']);
    $edate = trim($_POST['edate']);
    $ecat = trim($_POST['ecat']);
    $hasError = false;

    if ($ename === "") {
        echo "Please enter event name!<br>";
        $hasError = true;
    } 
    else if ($edate === "") {
        echo "Please select a date!<br>";
        $hasError = true;
    } 
    else if ($ecat === "") {
        echo "Please select a category!<br>";
        $hasError = true;
    }

    if (!$hasError) {
        header("Location: ../View/Abc.php");
        exit;
    }
    
} else {
    echo "Invalid request! Please submit form!";
}
?>

