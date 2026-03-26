<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../config/database.php");

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, rol) 
        VALUES ('$username', '$password', 'user')";

if ($conn->query($sql)) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>

