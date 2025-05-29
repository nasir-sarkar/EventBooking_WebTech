<?php
    error_reporting(E_ALL);
    require_once('db.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (isset($data['action']) && $data['action'] === 'signup') {
        $fullname = $data['fullname'];
        $username = $data['username'];
        $email = $data['email'];
        $phone = $data['phone'];
        $password = $data['password'];
        
        if (addUser($fullname, $username, $password, $email, $phone, 'user')) {
            echo 'success';
        } else {
            echo 'Failed to add user';
        }
        exit;
    }
}

    function login($email, $password){
        $con = getConnection();
        $sql = "select * from users where email='{$email}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $user = mysqli_fetch_assoc($result);
            return $user;
        }
        else{
            return false;
        }
    }




    function getAllUsers() {
    $con = getConnection();
    $sql = "SELECT fullname, username, email, usertype FROM users";
    $result = mysqli_query($con, $sql);

    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    return $users;
   }




   function getUsersByRole($role) {
    $con = getConnection();
    $role = mysqli_real_escape_string($con, $role);
    $sql = "SELECT fullname, username, email, usertype FROM users WHERE usertype = '{$role}'";
    $result = mysqli_query($con, $sql);

    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    return $users;
    }




    function addUser($fullname, $username, $password, $email, $phone, $usertype) {
    $con = getConnection();

    $sql = "INSERT INTO users (fullname, username, password, email, phone, usertype) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($stmt, "ssssss", $fullname, $username, $password, $email, $phone, $usertype);

    $status = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return $status;
    }


    


    function deleteUserByUsername($username) {
    $con = getConnection();
    $username = trim($username);

    $sql = "DELETE FROM users WHERE username = ?";
    $stmt = mysqli_prepare($con, $sql);

    if (!$stmt) {
        return false;
    }

    mysqli_stmt_bind_param($stmt, "s", $username);

    $status = mysqli_stmt_execute($stmt);

    if (!$status) {
        mysqli_stmt_close($stmt);
        return false;
    }

    $affectedRows = mysqli_stmt_affected_rows($stmt);
    mysqli_stmt_close($stmt);

   
    if ($affectedRows > 0) {
        return true;
    } else {
        return false;
    }
    }



    function getPasswordByUsername($username) {
    $con = getConnection();
    $sql = "SELECT password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $password);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    return $password;
    }



    function updatePassword($username, $newPassword) {
    $con = getConnection();
    $sql = "UPDATE users SET password = ? WHERE username = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $newPassword, $username);
    $status = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $status;
    }




    function updateUserProfile($username, $fullname, $email, $phone) {
    $con = getConnection();
    $sql = "UPDATE users SET fullname = ?, email = ?, phone = ? WHERE username = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $phone, $username);
    $status = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $status;
   }
 
?>
