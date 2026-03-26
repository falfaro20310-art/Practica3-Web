<?php
session_start();
require_once("../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];

            header("Location: /practica3/views/dashboard.php");
            exit;

        } else {
            echo "Contraseña incorrecta";
        }

    } else {
        echo "Usuario no existe";
    }
}
?>







