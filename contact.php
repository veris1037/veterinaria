<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body class="bg-gray-200">
    <?php include_once 'templates/menu.php'; ?>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Contactos</h1>
        <form  action="submit_form.php" method="POST" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md mb-6" id="form">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg" placeholder="Tú Nombre" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg" placeholder="Tú Email" required>
            </div>
            <div class="mb-4">
                <label for="comment" class="block text-gray-700 font-bold mb-2">Comentarios</label>
                <textarea id="comment" name="comment" class="w-full px-3 py-2 border rounded-lg resize-none" placeholder="Tú Comentario" rows="4" required></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php include_once 'templates/footer.php'; ?>
    <script src="src/js/contact.js"></script>
</body>
</html>
