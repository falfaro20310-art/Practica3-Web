<?php
require_once("../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, rol) 
            VALUES ('$username', '$password', 'user')";

    if ($conn->query($sql)) {
        header("Location: /practica3/views/login.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


