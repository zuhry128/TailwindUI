<?php
$ServerName = "localhost";
$DatabaseName = "dailynote";
$UserName = "root";
$ServerPassword = "";

global $connection;

try {
    $connection = new PDO("mysql:host=$ServerName;dbname=$DatabaseName", $UserName, $ServerPassword);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Successfully connected";
} catch (PDOException $error) {
    echo "Connection failed" . $error->getMessage();
}
