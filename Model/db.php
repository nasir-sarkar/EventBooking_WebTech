<?php
    error_reporting(E_ALL);
    $host = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "info";

    function getConnection(){
        global $host, $dbuser, $dbpass, $dbname;
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $con;
    }
?>
