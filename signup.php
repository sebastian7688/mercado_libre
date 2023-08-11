<?php
require_once "includes/config.php";

if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['contra'])) {
    $pass = md5($_POST['contra']);
    $sql = "INSERT INTO usuarios (id,nombre,contrasenia,saldo_en_cuenta,foto_de_perfil,correo_electronico,fecha_de_creacion,fecha_de_eliminacion) VALUES (null,'". $_POST['nombre']."','". $pass ."',0,'default.jpg','". ($_POST['email'])."',NOW(),null)";
    $query = mysqli_query($link, $sql);

    if (!$query) {
        echo "Fallo consulta: " . mysqli_error($link);
        exit();
    }else{
        header("Location: login.php");
    }
}
$section = "signup";
require_once "views/layout.php";