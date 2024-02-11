<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus productos</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body class="bg-gray-200 ">
    <?php include_once 'templates/menu.php'; ?>
    <div class="container mx-auto py-4">
        <h1 class="text-3xl font-bold mb-4">Nuestros Productos</h1>
        
        <div class="grid grid-cols-3 gap-4">
            <?php
          
            $productos = [
                ["nombre" => "Profit", "precio" => "$100.000", "imagen" => "img/producto1.png"],
                ["nombre" => "Producto 2", "precio" => "$200.000", "imagen" => "img/producto2.jpg"],
                ["nombre" => "Producto 3", "precio" => "$300.000", "imagen" => "img/producto3.png"],
                ["nombre" => "Producto 4", "precio" => "$100.000", "imagen" => "img/producto1.png"],
                ["nombre" => "Producto 5", "precio" => "$200.000", "imagen" => "img/producto2.jpg"],
                ["nombre" => "Producto 6", "precio" => "$30.000", "imagen" => "img/producto3.png"]
            ];

            foreach ($productos as $producto) {
                echo '
                <div class="bg-white shadow-md p-4">
                    <img src="' . $producto["imagen"] . '" alt="' . $producto["nombre"] . '" class="w-full h-40 object-cover mb-4">
                    <h2 class="text-lg font-bold mb-2">' . $producto["nombre"] . '</h2>
                    <p class="text-gray-600">' . $producto["precio"] . '</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Comprar</button>
                </div>
                ';
            }
            ?>
        </div>
    </div>
</body>
</html>
