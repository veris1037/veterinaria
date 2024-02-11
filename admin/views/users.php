<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URL ?>src/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="font-light text-slate-700">

    <?php include_once 'template/layout-top.php'; ?>

    <div class="w-full h-full bg-white rounded shadow p-2 flex flex-col">

        <div class="w-full grid grid-cols-5 items-center justify-items-center py-2">
            <p>ID</p>
            <p>Nombre</p>
            <p>email</p>
            <p>comentario</p>
            <p>Opciones</p>
        </div>

        <div class="w-full h-full bg-slate-200 rounded shadow-inner p-2 overflow-y-scroll scrollbar-hide" id="container">
            
        </div>

    </div>

    <?php include_once 'template/layout-bot.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
