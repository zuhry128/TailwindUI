<?php
$db_host = "localhost";
$db_name = "tailwind";
$db_user = "root";
$db_password = "";

global $db;

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
} catch (PDOException $error) {
    //tunjukkan error
    die("Connection failed" . $error->getMessage());
}
