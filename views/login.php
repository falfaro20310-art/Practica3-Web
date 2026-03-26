<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<header>
    <h1>Panadería Espiga Dorada</h1>
</header>

<main>

    <h2>Login</h2>

    <form action="/practica3/controllers/LoginController.php" method="POST">
        
        <label>Usuario:</label>
        <input type="text" name="username" placeholder="Usuario" required>

        <label>Contraseña:</label>
        <input type="password" name="password" placeholder="Contraseña" required>

        <button type="submit">Ingresar</button>

    </form>

    <a href="register.php">Registrarse</a>

</main>

</body>
</html>


