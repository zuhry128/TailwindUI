<?php

require_once("../src/server/connection.php");

if (isset($_POST['register'])) {

    // filter data yang diinputkan
    $name = $_POST['name'];
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $insert = "INSERT INTO user (nama, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($insert);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if ($saved) header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Login</title>
</head>

<body>
    <header>
        <nav class="top-0 relative w-full flex-wrap z-50  items-center">
            <div class=" container mx-auto py-4 flex flex-row items-center">
                <div class="px-2">
                    <h3 class="font-bold text-purple-500 text-2xl uppercase">DailyNote</h3>
                </div>

                <div class="flex flex-wrap mx-4 py-4 flex-grow items-center justify-between">
                    <div class="flex px-4">
                        <h3 class="rounded-sm font-bold text-white px-4 py-1 hover:text-purple-500 ">Author</h3>
                        <h3 class="rounded-sm font-bold text-white px-4 py-1 hover:text-purple-500 ">About DailyNote</h3>
                    </div>
                    <div class="flex flex-row items-center justify-between ">
                        <span class="text-white hover:text-blue-500">
                            <a class="p-2 " href="#"><i class="far fa-file-alt fa-lg p-2"></i></a>
                        </span>
                        <span class="text-white hover:text-blue-500">
                            <a class="p-2" href="#"><i class="fab fa-github fa-lg p-2"></i></a>
                        </span>

                        <span class="text-white hover:text-blue-500">
                            <a class="p-2" href="#"><i class="fab fa-instagram fa-lg p-2"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <form action="" method="POST" class="flex flex-col justify-between p-4">
        <input id="name" name="name" class="m-2 p-2 rounded-md focus:ring-0 focus:outline-none" type="text" placeholder="name">
        <hr>
        <input id="username" name="username" class="m-2 p-2 rounded-md focus:ring-0 focus:outline-none" type="text" placeholder="Username">
        <hr>
        <input id="email" name="email" class="m-2 p-2 rounded-md focus:ring-0 focus:outline-none" type="text" placeholder="Email">
        <hr>
        <input id="password" name="password" class="m-2 p-2 rounded-md focus:ring-0 focus:outline-none" type="password" placeholder="Password">
        <input type="submit" value="daftar!" id="register" name="register" class="mx-1 mt-8 bg-purple-500 p-2 rounded-md" />
        <hr>
        <a href="index.php" class="text-center mt-2 hover:text-red-400">or login instead</a>
    </form>


</body>
<script src="https://kit.fontawesome.com/79f903a8c5.js" crossorigin="anonymous"></script>

</html>