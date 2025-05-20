<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $trackId = trim($_POST['trackId']);
    $hasError = false;

    if ($trackId == "") {
        echo "Request ID cannot be empty!";
        $hasError = true;
    } 
    else {
        echo "Status: [Pending / Approved / Rejected]<br>";
    }

} 
else {
    echo "Invalid request! Please submit form!";
}
?>
