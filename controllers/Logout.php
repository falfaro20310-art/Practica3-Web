<?php
session_start();
session_destroy();

header("Location: /practica3/views/login.php");
exit;
?>


