<?php
require_once "includes/config.php";
if(session_status() !== PHP_SESSION_ACTIVE)session_start();
$sql = "SELECT * FROM usuarios";
 if(isset($_POST['nombre'])&&$_POST['nombre']!=$_SESSION['usuario']['nombre']){
    $nombre = $_POST['nombre'];
    $sql = "UPDATE usuarios SET nombre = '".$nombre."' WHERE ID = '".$_SESSION['usuario']['id']."'";
    $query = mysqli_query($link,$sql);
    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    $_SESSION['usuario']['nombre'] = $nombre;
 }


 if(isset($_POST['actpass'])&&isset($_POST['newpass'])&&md5($_POST['actpass'])==$_SESSION['usuario']['contrasenia']){
    $contra = md5($_POST['newpass']);
    $sql = "UPDATE usuarios SET contrasenia = '".$contra."' WHERE ID = '".$_SESSION['usuario']['id']."'";
    $query = mysqli_query($link,$sql);
    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    $_SESSION['usuario']['contrasenia'] = $contra;
 }
$section = "profile";
$title = "Profile";
require_once "views/layout.php";