<?php
session_start();
require_once("../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_SESSION['user_id'])) {
        header("Location: /practica3/views/login.php");
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $date = $_POST['reservation_date'];
    $people = $_POST['people'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO reservations 
    (user_id, name, reservation_date, people, comments)
    VALUES ('$user_id', '$name', '$date', '$people', '$comments')";

    if ($conn->query($sql)) {
        header("Location: /practica3/views/dashboard.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
