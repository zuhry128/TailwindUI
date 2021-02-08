<?php
$serverName = 'localhost';
$database = 'APS';
$username = '';
$password = '';

$connection = mysqli_connect($serverName, $database, $username, $password);
    if($connection) {
        die("Failed connecting to Database");
    } 
    echo "Connected sucessfully";
    mysqli_close($connection);
?>