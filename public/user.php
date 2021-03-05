<?php
require '../src/server/connection.php';
session_start();
if (!isset($_SESSION['username'])) header("Location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>DailyNoteApp</title>
</head>

<body>
    <section class="container-full flex flex-row">
        <div class="container float-left flex flex-col bg-white h-screen w-56 shadow-2xl">
            <div class="container content-center items-center justify-center text-center p-4">
                <img class="border-red-400 p-2" src="../svg/undraw_happy_2021_h01d.svg" alt="">

                <div class="container p-4">
                    Welcome back, Azzuhry
                </div>
            </div>
            <hr>
            <div class="container flex flex-col flex-grow content-center items-center justify-center text-center p-4">
                <div name="DailyNote" class="container flex items-center flex-grow justify-center">
                    <a href="#"><i class="fas fa-clipboard fa-2x text-red-400"></i></a>
                </div>
                <div name="Archive" class="container flex items-center flex-grow justify-center">
                    <a href="#"><i class="fas fa-archive fa-2x text-red-400"></i></a>
                </div>
                <div name="Logout" class="container flex items-center flex-grow justify-center">
                    <a href="#"><i class="fas fa-sign-out-alt fa-2x text-red-400"></i></a>
                </div>
            </div>
        </div>

        <div class="container flex flex-col max-w-full">

            <div class="container-md flex flex-row mt-16 py-2 px-2 mx-auto">
                <div class="container px-4 py-4">
                    <div class="container flex flex-row justify-between border border-gray-200">
                        <input type="text" placeholder="make new note " class="self-center mx-auto p-2 focus:outline-none"></input>
                        <button type="submit" class="bg-red-400 p-2 w-24 focus:outline-none">make</button>
                    </div>
                    <div class="container p-2 text-center">
                        <h3>Still empty, make new notes</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="https://kit.fontawesome.com/79f903a8c5.js" crossorigin="anonymous"></script>

</html>