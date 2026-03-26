<?php
$conn = new mysqli("localhost", "root", "", "practica3");

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}

?>
