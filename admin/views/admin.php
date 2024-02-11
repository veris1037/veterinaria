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


            <div class="w-full h-64 rounded bg-vaca bg-center bg-cover"></div>

            <div class="w-full grid grid-cols-4 gap-2 p-4">

                <a href="?view=contact" class="w-full h-44 bg-white rounded shadow-md flex flex-col justify-evenly items-center">
                    <div class="w-20 h-20">
                        <img src="<?php echo URL?>img/icons/notebook.png" alt="" class="w-full h-full object-contain">
                    </div>
                    <p class="text-center">Contactos</p>
                </a>

                <a href="?view=event" class="w-full h-44 bg-white rounded shadow-md flex flex-col justify-evenly items-center">
                    <div class="w-20 h-20">
                        <img src="<?php echo URL?>img/icons/notes.png" alt="" class="w-full h-full object-contain">
                    </div>
                    <p class="text-center">Citas</p>
                </a>

                <a href="?view=users" class="w-full h-44 bg-white rounded shadow-md flex flex-col justify-evenly items-center">
                    <div class="w-20 h-20">
                        <img src="<?php echo URL?>img/icons/check.png" alt="" class="w-full h-full object-contain">
                    </div>
                    <p class="text-center">Usuarios</p>
                </a>

                <div class="w-full h-44 bg-white rounded shadow-md flex flex-col justify-evenly items-center">
                    <div class="w-20 h-20">
                        <img src="<?php echo URL?>img/icons/pen.png" alt="" class="w-full h-full object-contain">
                    </div>
                    <p class="text-center">Productos</p>
                </div>

            </div>

    <?php include_once 'template/layout-bot.php'; ?>
        
</body>
</html>