<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('location: pages/login.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Citas</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body class="bg-gray-100">
<?php include_once 'templates/menu.php'; ?>

<div class="container mx-auto h-screen flex items-center justify-center">
    <form action="procesar_formulario.php" method="post" class="max-w-md bg-white p-8 rounded shadow-md w-96" id="form">
        <input
            type="hidden"
            name="id_user"
            class="border-2 border-gray-300 p-2 w-full"
            value="<?php echo $_SESSION["user"]["id"]?>"
            required
        >

        <div class="mb-4">
            <label for="datetime" class="block text-gray-700 font-bold mb-2">Fecha y Hora:</label>
            <input type="datetime-local" name="date" class="border-2 border-gray-300 p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="detail" class="block text-gray-700 font-bold mb-2">Detalle:</label>
            <textarea name="detail" class="border-2 border-gray-300 p-2 w-full" required></textarea>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Agendar Cita</button>
        </div>
    </form>
</div>
<?php include_once 'templates/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="src/js/citas.js"></script>
</body>
</html>
