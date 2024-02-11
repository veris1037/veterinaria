<?php

include_once '../class/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body class="w-full h-screen bg-[url('../img/farm.jpg')] flex justify-center items-center">
    <div class="w-80 md:w-96 h-[500px] rounded-xl backdrop-blur-md flex flex-col items-center justify-center bg-login">
        <form action="../controls/accounts.php" method="post" id="formRegister" class="w-full p-4 flex flex-col items-center">
            <img src="<?php echo URL ?>img/logo.jpeg" alt="logo_creativeruum" class="w-32 h-26 rounded">
            <h2 class="text-white my-2 text-2xl">Registrate</h2>

            <div class="flex w-full text-white items-center">
                <i class='bx bx-envelope text-2xl mr-1'></i>
                <input type="text" placeholder="Nombre" name="name" class="w-full px-4 py-2 border border-white my-2 bg-[transparent] rounded outline-none">
            </div>

            <div class="flex w-full text-white items-center">
                <i class='bx bx-envelope text-2xl mr-1'></i>
                <input type="text" placeholder="Apellido" name="lastname" class="w-full px-4 py-2 border border-white my-2 bg-[transparent] rounded outline-none">
            </div>

            <div class="flex w-full text-white items-center">
                <i class='bx bx-envelope text-2xl mr-1'></i>
                <input type="email" placeholder="Email" name="email" class="w-full px-4 py-2 border border-white my-2 bg-[transparent] rounded outline-none">
            </div>
            
            <div class="flex w-full text-white items-center">
                <i class='bx bx-envelope text-2xl mr-1'></i>
                <input type="phone" placeholder="Teléfono" name="phone" class="w-full px-4 py-2 border border-white my-2 bg-[transparent] rounded outline-none">
            </div>

            <div class="flex w-full text-white items-center">
                <i class='bx bx-lock text-2xl mr-1'></i>
                <input type="password" placeholder="Contraseña" name="password" class="w-full px-4 py-2 border border-white my-2 bg-[transparent] rounded outline-none">
            </div>
            <input type="hidden" name="action" value="login">

            <input type="submit" value="Ingresar" href="pages/login.php" class="rounded bg-orange-600 text-white py-2 px-4">

            <p class="text-white">¿Ya tienes una cuenta? <a href="login.php" class="text-blue-500">Ingresar</a></p>
        </form>
    </div>
    <script src="<?php echo URL?>src/js/register.js"></script>
</body>
</html>