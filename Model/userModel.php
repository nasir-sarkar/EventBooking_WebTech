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

    // function getUserById($id){

    // }

    // function addUser($user){

    // }

    // function deleteUser($id){

    // }
?>
