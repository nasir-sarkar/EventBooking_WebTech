<?php
    error_reporting(E_ALL);
    require_once('db.php');

    function login($email, $password){
        $con = getConnection();
        $sql = "select * from users where email='{$email}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $user = mysqli_fetch_assoc($result);
            return $user;
        }else{
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
    
?>
