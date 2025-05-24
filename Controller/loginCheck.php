<?php
    error_reporting(E_ALL);
    require_once('../model/userModel.php');
    session_start();

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if($email == "" || $password == ""){
            echo "null email/password!";
        }else{
            $user = login($email, $password);

            if($user){
                $_SESSION['status'] = true;
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['name'] = $user['fullname'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['usertype'] = $user['usertype'];

                setcookie('status', 'true', time()+1800, '/');

                if($user['usertype'] === 'admin'){
                    header('location: ../view/Admin_Panel.php');
                }else if($user['usertype'] === 'user'){
                    header('location: ../view/View_Profile.php');
                }else{
                    echo "invalid usertype!";
                }
            }else{
                echo "invalid user!";
            }
        }
    }else{
        header('location: ../view/login.html');
    }
?>
