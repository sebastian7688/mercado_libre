<?php
require_once "includes/config.php";
if (!isset($_GET['tag'])) {
    $query = "SELECT id,image FROM posts";
    $posts = mysqli_query($link, $query);

    $sql = "SELECT COUNT(*) AS c FROM posts";

    $query = mysqli_query($link, $sql);

    if (!$query) {
        die("Error de consulta: " . mysqli_errno($link));
    }

    //paginador?
    
} else {
    //alimentos
    if ($_GET['tag'] == '2')
    {
    $sql = "SELECT alimentos.fotos FROM alimentos
    INNER JOIN tags
    ON alimentos.tag_id = tags.id
    WHERE alimentos.tag_id = '" . $_GET['tag'] . "'";

    $alim = mysqli_query($link, $sql);

    $sqli = "SELECT COUNT(*) AS c FROM alimentos
    INNER JOIN tags
    ON alimentos.tag_id = tags.id
    WHERE alimentos.fecha_de_eliminacion IS NULL AND
    alimentos.tag_id = '" . $_GET['tag'] . "'";

    $query = mysqli_query($link, $sqli);

    if (!$query) {
        die("Error de consulta: " . mysqli_errno($link));
    }
    }

    //inmuebles
    if ($_GET['tag'] == '3')
    {
        $sql = "SELECT inmuebles.fotos FROM inmuebles
    INNER JOIN tags
    ON inmuebles.tag_id = tags.id
    WHERE inmuebles.tag_id = '" . $_GET['tag'] . "'";

    $inmue = mysqli_query($link, $sql);

    $sql = "SELECT COUNT(*) AS c FROM inmuebles
    INNER JOIN tags
    ON inmuebles.tag_id = tags.id
    WHERE inmuebles.fecha_de_eliminacion IS NULL AND
    inmuebles.tag_id = '" . $_GET['tag'] . "'";
    }
    
    //vehiculos
    if ($_GET['tag'] == '4')
    {
        $sql = "SELECT * FROM vehiculos
    INNER JOIN tags
    ON vehiculos.tag_id = tags.id
    WHERE vehiculos.fecha_de_eliminacion IS NULL AND
    vehiculos.tag_id = '" . $_GET['tag'] . "'";

    $vehi = mysqli_query($link, $sql);

    $sql = "SELECT COUNT(*) AS c FROM vehiculos
    INNER JOIN tags
    ON vehiculos.tag_id = tags.id
    WHERE vehiculos.fecha_de_eliminacion IS NULL AND
    vehiculos.tag_id = '" . $_GET['tag'] . "'";
    }

    //productos
    if ($_GET['tag'] == '5')
    {
        $sql = "SELECT * FROM productos
    INNER JOIN tags
    ON productos.tag_id = tags.id
    WHERE productos.tag_id = '" . $_GET['tag'] . "'";

    $prod = mysqli_query($link, $sql);

    $sql = "SELECT COUNT(*) AS c FROM productos
    INNER JOIN tags
    ON productos.tag_id = tags.id
    WHERE productos.fecha_de_eliminacion IS NULL AND
    productos.tag_id = '" . $_GET['tag'] . "'";
    }
}

$sql = "SELECT id,tag FROM tags";
$query = mysqli_query($link, $sql);
$res['tags'] = mysqli_fetch_all($query);
$cont = 0;
$section = "posts";
$title = "Posts";
require_once "views/layout.php";