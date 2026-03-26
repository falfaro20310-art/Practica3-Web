<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<header>
    <h1>Panadería Espiga Dorada</h1>
</header>

<main>

    <h2>Registro</h2>

    <form action="/practica3/controllers/AuthController.php" method="POST">
        
        <label>Usuario:</label>
        <input type="text" name="username" placeholder="Usuario" required>

        <label>Contraseña:</label>
        <input type="password" name="password" placeholder="Contraseña" required>

        <button type="submit">Registrarse</button>

    </form>

    <a href="login.php">Ir a login</a>

</main>

</body>
</html>




