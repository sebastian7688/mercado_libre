<?php
require_once "includes/config.php";
session_start();
if (isset($_POST['nombre']) && isset($_POST['contra'])) {
    $nombre = $_POST['nombre'];
    $pass = md5($_POST['contra']);
    $sql = "SELECT * FROM usuarios 
            WHERE nombre = '" . $nombre . "'
            AND contrasenia = '" . $pass . "'";
    $result = mysqli_query($link, $sql);
    
    if (!$result) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['usuario'] = mysqli_fetch_assoc($result);
        header('Location: index.php');
    }
}
$section = "login";
require_once "views/login.php";