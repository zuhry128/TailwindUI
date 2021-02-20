<?php
session_start();
if (isset($_SESSION['username'])) header("Location:index.php");
include '../src/server/connection.php';

if (isset($_POST['SubmitLogin'])) {
    $UserName = isset($_POST['username']);
    $PassWord = isset($_POST['password']);
    $LoginQuery = mysqli_query($connection, "SELECT * FROM 'userdata' WHERE username=$username AND password=$password");

    if (mysqli_fetch_array($LoginQuery) > 0) {
        $AccountRow = mysqli_fetch_array($LoginQuery);
        $_SESSION['username'] = $AccountRow['username'];
        $_SESSION['password'] = $AccountRow['password'];
        header("Location:index.php");
    } else {
        header("location:index.php");
    }
}
