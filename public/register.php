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
    <div class="z-0 absolute top-0 w-full h-full bg-gray-900 " style="background-image: url('../assets/register_bg_2.png'); background-size: 100%; background-repeat: no-repeat">

    </div>

    <div class="container mx-auto w-full h-full">
        <div class="relative mx-auto max-w-lg max-h-screen flex flex-col px-4 py-16 bg-white rounded-md">
            <div class="container flex flex-row">
                <div class="container">
                    <form action="login-handler.php" method="POST" class="flex flex-col justify-between p-4">
                        <input id="name" name="name" class="m-2 p-2 rounded-md focus:ring-0 focus:outline-none" type="text" placeholder="Name">
                        <hr>
                        <input id="email" name="email" class="m-2 p-2 rounded-md focus:ring-0 focus:outline-none" type="text" placeholder="email address">
                        <hr>
                        <input id="username" name="username" class="m-2 p-2 rounded-md focus:ring-0 focus:outline-none" type="text" placeholder="Username">
                        <hr>
                        <input id="password" name="password" class="m-2 p-2 rounded-md focus:ring-0 focus:outline-none" type="password" placeholder="Password">
                        <hr>
                    </form>
                </div>
                <div class="container flex">
                    <img style="width: 500px;" src="../svg/undraw_Appreciation_re_p6rl.svg" alt="">
                </div>
            </div>

            <div class="container flex flex-row justify-between">
                <button id="SubmitLogin" name="SubmitLogin" class="mx-1 mt-8 bg-purple-500 p-2 rounded-md w-3/6" type="submit">
                    <h3 class="font-bold text-white">Login</h3>
                </button>

                <button id="SubmitRegister" name="SubmitRegister" class="mx-1 mt-8 bg-purple-500 p-2 rounded-md w-3/6" type="submit">
                    <h3 class="font-bold text-white">register</h3>
                </button>
            </div>
        </div>
    </div>

</body>
<script src="https://kit.fontawesome.com/79f903a8c5.js" crossorigin="anonymous"></script>

</html>