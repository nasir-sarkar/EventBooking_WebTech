<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $filter = trim($_POST['filter']);
    $hasError = false;

    if ($filter == "") {
        echo "Please select a role!";
        $hasError = true;
    } 
    else {
        echo "Filter applied for $filter<br>";
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

