<?php
session_start();
require_once("../config/database.php");
require_once("../models/Reservation.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$reservation = new Reservation($conn);
$result = $reservation->getByUser($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--  USA RUTA ABSOLUTA -->
    <link rel="stylesheet" href="/practica3/assets/style.css">
</head>
<body>

<header>
    <h1>Panadería Espiga Dorada</h1>
</header>

<main>

    <h2>Dashboard</h2>

    <div class="acciones">
        <a href="/practica3/public/" class="btn">Nueva reserva</a>
        <a href="/practica3/controllers/Logout.php" class="btn logout">Cerrar sesión</a>
    </div>

    <h3>Mis Reservas</h3>

    <table class="tabla">
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Personas</th>
            <th>Comentarios</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['reservation_date']; ?></td>
            <td><?php echo $row['people']; ?></td>
            <td><?php echo $row['comments']; ?></td>
        </tr>
        <?php endwhile; ?>

    </table>

</main>

</body>
</html>






