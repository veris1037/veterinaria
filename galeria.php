<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('location: pages/login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="src/output.css">
</head>

<body class="bg-gray-100">

    <?php include_once 'templates/menu.php'; ?>

    <hr>

    <h1 class="text-4xl text-center my-8">Nuestra Galeria</h1>

    <hr>

    <div class="container mx-auto px-4">
        <h2 class=" mb-4  text-2xl ">Caballos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen1"><img src="img/1caballo.jpg" class="w-full" alt=""></a>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen2"><img src="img/2caballo.jpg" class="w-full" alt=""></a>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen3"><img src="img/3caballo.jpg" class="w-full" alt=""></a>
            </div>
        </div>

        <h2 class="text-2xl my-4">Vacas</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen1"><img src="img/vaca1.jpg" class="w-full" alt=""></a>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen2"><img src="img/vaca2.jpg" class="w-full" alt=""></a>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen3"><img src="img/vaca3.jpg" class="w-full" alt=""></a>
            </div>
        </div>

        <h2 class="text-2xl my-4">Cerdos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen1"><img src="img/cerdo1.jpg" class="w-full" alt=""></a>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen2"><img src="img/cerdo2.jpg" class="w-full" alt=""></a>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen3"><img src="img/cerdo3.jpg" class="w-full" alt=""></a>
            </div>
        </div>

        <h2 class="text-2xl my-4">Ovejas</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen1"><img src="img/oveja1.jpg" class="w-full" alt=""></a>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen2"><img src="img/oveja2.jpg" class="w-full" alt=""></a>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="" src="imagen3"><img src="img/oveja3.jpg" class="w-full" alt=""></a>
            </div>
        </div>
    </div>
    <?php include_once 'templates/footer.php'; ?>

</body>
</html>
