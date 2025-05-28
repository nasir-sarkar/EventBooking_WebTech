<?php
require_once('../model/userModel.php');
header('Content-Type: application/json');

if (isset($_POST['json'])) {
    $data = json_decode($_POST['json'], true);

    $username = trim($data['username'] ?? '');
    $response = [];

    if ($username === "") {
        $response['message'] = "Please enter username!";
    } else {
        $deleted = deleteUserByUsername($username);
        if ($deleted) {
            $response['message'] = "User deleted successfully.";
        } else {
            $response['message'] = "User not found or could not be deleted.";
        }
    }

    echo json_encode($response);
} else {
    echo json_encode(['message' => 'Invalid request!']);
}
