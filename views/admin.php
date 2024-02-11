<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>

    <?php include_once 'templates/menu.php'; ?>
    <hr>
    <main class="mt-10 mb-5">
      
        <h1 class="text-center text-4xl">VETFARM_VERIS</h1>
        <h2 class="text-center text-black my-2">Bienvenido Admin <?php echo $_SESSION['user']['name']?></h2>

        <div class="text-center mb-5">
            <img src="img/fondo.jpg" alt="" class="inline-block align-middle rounded">
        </div>

        <section class="max-w-800 mx-auto p-20 bg-white shadow-md">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article class="home_article mb-8 md:mb-0">
                    <img src="img/delivery.png" alt="home_imagen" class="home_img_delivery mx-auto mb-4 w-32 h-32">
                    <h3 class="text-lg font-bold mb-2">Envíos Nacionales</h3>
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Pariatur, tempora voluptas amet optio, consequatur ab
                        aperiam perspiciatis quasi maiores quod vero!
                    </p>
                </article>

                <article class="home_article mb-8 md:mb-0">
                    <img src="img/money.png" alt="home_imagen" class="home_img_money mx-auto mb-4 w-32 h-32">
                    <h3 class="text-lg font-bold mb-2">100% de devolución de dinero</h3>
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Pariatur, tempora voluptas amet optio, consequatur ab
                        aperiam perspiciatis quasi maiores quod vero!
                    </p>
                </article>

                <article class="home_article mb-8 md:mb-0">
                    <img src="img/seguro.png" alt="home_imagen" class="home_img_seguro mx-auto mb-4 w-32 h-32">
                    <h3 class="text-lg font-bold mb-2">Pago seguro</h3>
                    <p class="text-gray-700">
                        Neque porro quisquam est qui dolorem ipsum
                        quia dolor sit amet,
                        consectetur, adipisci velit..
                    </p>
                </article>
            </div>
        </section>

        <section class="nosotros max-w-800 mx-auto p-8">
            <h2 class="text-2xl font-bold mb-4">Misión</h2>
            <p class="text-gray-700 mb-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Totam, sequi optio, quidem eum ad exercitationem quia omnis
                officiis ut eos ipsam fugit laboriosam reprehenderit illum
                voluptates pariatur. Maxime, architecto vitae!
            </p>

            <h2 class="text-2xl font-bold mb-4">Visión</h2>
            <p class="text-gray-700 mb-4">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat totam exercitationem temporibus ratione quaerat ab
                reiciendis delectus, cupiditate quidem optio. Ab doloremque esse
            </p>

            <div class="about-img grid grid-cols-1 md:grid-cols-2 gap-8">
                <img src="img/cerdo.jpg" alt="Imagen 1" class="w-full h-auto mb-4 md:mb-0">
                <img src="img/doctor.jpg" alt="Imagen 2" class="w-full h-auto">
            </div>
        </section>
    </main>

    <?php include_once 'templates/footer.php'; ?>

    <div class="bg-violet-800 w-20 h-20 rounded-full"></div>
</body>
</html>
