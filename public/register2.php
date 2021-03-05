<?php

require_once("../src/server/connection.php");

if (isset($_POST['register'])) {

  // filter data yang diinputkan
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  // enkripsi password
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


  // menyiapkan query
  $sql = "INSERT INTO user (nama, username, email, password) 
            VALUES (:name, :username, :email, :password)";
  $stmt = $db->prepare($sql);

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Pesbuk</title>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">

  <form action="" method="POST">

    <input class="form-control" type="text" name="name" placeholder="Nama kamu" />

    <input class="form-control" type="text" name="username" placeholder="Username" />

    <input class="form-control" type="email" name="email" placeholder="Alamat Email" />

    <input class="form-control" type="password" name="password" placeholder="Password" />

    <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

  </form>

</body>

</html>