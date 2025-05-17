<?php

if (isset($_POST['submit'])) {

    $uploadDir = "upload/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $src = $_FILES['avatar']['tmp_name'];
    $des = $uploadDir . $_FILES['avatar']['name'];

    if (move_uploaded_file($src, $des)) {
        echo "Success";
    } else {
        echo "Error";
    }

}

?>
