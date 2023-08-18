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
 if (isset($_POST['default1'])) {
    $img = $_POST['default1'];
    $sql = "UPDATE usuarios SET foto_de_perfil = '" . $img . "' WHERE ID = '" . $_SESSION['usuario']['id'] . "'";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    $_SESSION['usuario']['foto_de_perfil'] = $img;
} else if (isset($_POST['default2'])) {
    $img = $_POST['default2'];
    $sql = "UPDATE usuarios SET foto_de_perfil = '" . $img . "' WHERE ID = '" . $_SESSION['usuario']['id'] . "'";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    $_SESSION['usuario']['foto_de_perfil'] = $img;
} else if (isset($_POST['default3'])) {
    $img = $_POST['default3'];
    $sql = "UPDATE usuarios SET foto_de_perfil = '" . $img . "' WHERE ID = '" . $_SESSION['usuario']['id'] . "'";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    $_SESSION['usuario']['foto_de_perfil'] = $img;
} else if (isset($_POST['default4'])) {
    $img = $_POST['default4'];
    $sql = "UPDATE usuarios SET foto_de_perfil = '" . $img . "' WHERE ID = '" . $_SESSION['usuario']['id'] . "'";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    $_SESSION['usuario']['foto_de_perfil'] = $img;
} else if (isset($_POST['default5'])) {
    $img = $_POST['default5'];
    $sql = "UPDATE usuarios SET foto_de_perfil = '" . $img . "' WHERE ID = '" . $_SESSION['usuario']['id'] . "'";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    $_SESSION['usuario']['foto_de_perfil'] = $img;
} else if (isset($_POST['default6'])) {
    $img = $_POST['default6'];
    $sql = "UPDATE usuarios SET foto_de_perfil = '" . $img . "' WHERE ID = '" . $_SESSION['usuario']['id'] . "'";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    $_SESSION['usuario']['foto_de_perfil'] = $img;
} else if (isset($_POST['default-secret'])) {
    $img = $_POST['default-secret'];
    $sql = "UPDATE usuarios SET foto_de_perfil = '" . $img . "' WHERE ID = '" . $_SESSION['usuario']['id'] . "'";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }
    $_SESSION['usuario']['foto_de_perfil'] = $img;
}
$section = "profile";
$title = "Profile";
require_once "views/layout.php";