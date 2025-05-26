<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $cardtype = trim($_POST['cardtype']);
    $cardid = trim($_POST['cardid']);
    $hasError = false;

    if ($cardtype == "") {
        echo "Card type must be selected!<br>";
        $hasError = true;
    }

    if ($cardid == "") {
        echo "Card ID must be selected!<br>";
        $hasError = true;
    }

    else {
        echo "Card added successfully!<br>";
    }

} else {
    echo "Invalid request! Please submit form!";
}
?>
