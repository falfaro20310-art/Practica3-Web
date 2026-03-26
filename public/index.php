<?php
session_start();

// Si no está logueado, lo mando al login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../views/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservaciones - Espiga Dorada</title>

    <!--  -->
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<header>
    <h1>Panadería Espiga Dorada</h1>

    <nav>
        <!--  -->
        <a href="../controllers/Logout.php">Cerrar sesión</a>
    </nav>
</header>

<main>
    <section>
        <h2>Formulario de Reservación</h2>

        <!--  -->
        <form id="formReserva" action="../controllers/ReservationController.php" method="POST">
            
            <label>Nombre:</label>
            <input type="text" name="name" id="nombre" required>

            <label>Contacto (correo):</label>
            <input type="email" name="contacto" id="contacto" required>

            <label>Fecha de reservación:</label>
            <input type="date" name="reservation_date" id="fecha" required>

            <label>Número de personas:</label>
            <input type="number" name="people" id="personas" required>

            <label>Comentarios:</label>
            <textarea name="comments" id="comentarios"></textarea>

            <button type="submit">Reservar</button>

        </form>

        <div id="mensajes"></div>

    </section>
</main>

<!--  -->
<script src="../assets/script.js"></script>

</body>
</html>

