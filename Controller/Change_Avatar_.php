<?php

if (isset($_POST['submit'])) {
    if (isset($_FILES['avatar']) && $_FILES['avatar']['name'] != "") {
        echo "Avatar uploaded successfully!";
    } else {
        echo "Please select an image!";
    }
} else {
    echo "Invalid request! Please submit form!";
}

?>