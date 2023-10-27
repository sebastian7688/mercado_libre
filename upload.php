<?php
require_once "includes/config.php";
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
$type = "Sin definir";
$name = "Sin definir";
$decr;
$price;
$state;
$stock;
$mercado;
if (isset($_POST['checkbox']) && (isset($_GET['step']) && $_GET['step'] == 1)) {
    $type = $_POST['checkbox'];
    $redirect = 'Location: upload.php?step=2&type=' . $type . '';
    header($redirect);
}
if (isset($_GET['type'])) $type = $_GET['type'];


if (isset($_POST['title']) && $_POST['title'] != "" && (isset($_GET['step']) && $_GET['step'] == 2)) {
    $name = $_POST['title'];
    $redirect = 'Location: upload.php?step=3&type=' . $type . '&name=' . $name . '';
    header($redirect);
}
if (isset($_GET['name'])) $name = $_GET['name'];


if ((isset($_GET['step']) && $_GET['step'] == 3) && (isset($_POST['descripcion']) || isset($_POST['precio']) || isset($_POST['estado']) || isset($_POST['stock']) || isset($_POST['mercado']) || isset($_POST['image']))) {
    $type = $_GET['type'];
    $name = $_GET['name'];
    $descr = $_POST['descripcion'];
    if ($descr == null || $descr == "") {
        $descr = "Sin descripción";
    }
    $price = $_POST['precio'];
    if ($price == null || $price == "" || is_string($price)) {
        $price = 0;
    }
    $state = $_POST['estado'];
    if ($state == null || $state == "") {
        $state = "Sin estado";
    }
    $mercado = 0;
    if (isset($_POST['mercado'])) {
        $mercado = 1;
    }
    if (isset($_GET['type']) && $_GET['type'] != "inmuebles") {
        if ($stock == null || $stock == "" || is_string($stock)) {
            $stock = 1;
        } else {
            $stock = $_POST['stock'];
        }
    }
    if (isset($_GET['type']) && $_GET['type'] == "vehiculos") {
        if (isset($_POST['color']) || isset($_POST['fuel']) || isset($_POST['kilometros']) || isset($_POST['detalles'])) {
            $color = $_POST['color'];
            if ($color == null || $color == "") {
                $color = "Sin especificar";
            }
            $combustible = $_POST['fuel'];
            if ($combustible == null || $combustible == "") {
                $combustible = "Sin especificar";
            }
            $km = $_POST['kilometros'];
            if ($km == null || $km == "") {
                $km = "Sin especificar";
            }
            $detalles = $_POST['detalles'];
            if ($detalles == null || $detalles == "") {
                $detalles = "Sin especificar";
            }
        }
    }
    if (isset($_FILES['image'])) {
        if ($_GET['type'] == "alimentos") {
            $move = move_uploaded_file($_FILES['image']['tmp_name'], "img/alimentos/" . $_FILES['image']['name']);
        } else if ($_GET['type'] == "inmuebles") {
            $move = move_uploaded_file($_FILES['image']['tmp_name'], "img/inmuebles/" . $_FILES['image']['name']);
        } else if ($_GET['type'] == "productos") {
            $move = move_uploaded_file($_FILES['image']['tmp_name'], "img/productos/" . $_FILES['image']['name']);
        } else if ($_GET['type'] == "vehiculos") {
            $move = move_uploaded_file($_FILES['image']['tmp_name'], "img/vehiculos/" . $_FILES['image']['name']);
        }
        $photo = $_FILES['image']['name'];
    } else {
        $photo = "no-photo.png";
    }
    if($_GET['type']=="alimentos"){
        $redirect = 'Location: upload.php?step=4&type=' . $type . '&name=' . $name . '&desc=' . $descr . '&price=' . $price . '&state=' . $state . '&stock=' . $stock . '&mercado=' . $mercado . '&photo=' . $photo . '';
    }
    else if($_GET['type']=="imuebles"){
        $redirect = 'Location: upload.php?step=4&type=' . $type . '&name=' . $name . '&desc=' . $descr . '&price=' . $price . '&state=' . $state. '&mercado=' . $mercado . '&photo=' . $photo . '';
    }
    else if($_GET['type']=="productos"){
        $redirect = 'Location: upload.php?step=4&type=' . $type . '&name=' . $name . '&desc=' . $descr . '&price=' . $price . '&state=' . $state . '&stock=' . $stock . '&mercado=' . $mercado . '&photo=' . $photo . '';
    }
    else if($_GET['type']=="vehiculos"){
        $redirect = 'Location: upload.php?step=4&type=' . $type . '&name=' . $name . '&desc=' . $descr . '&price=' . $price . '&state=' . $state . '&stock=' . $stock .'&color=' . $color .'&fuel=' . $combustible .'&kilometros=' . $km .'&detalles=' . $detalles . '&mercado=' . $mercado . '&photo=' . $photo . '';
    }
    
    header($redirect);
}
if (isset($_GET['desc'])) $descr = $_GET['desc'];
if (isset($_GET['price'])) $price = $_GET['price'];
if (isset($_GET['state'])) $state = $_GET['state'];
if (isset($_GET['stock'])) $stock = $_GET['stock'];
if (isset($_GET['mercado'])) $mercado = $_GET['mercado'];
if (isset($_GET['color'])) $color = $_GET['color'];
if (isset($_GET['fuel'])) $fuel = $_GET['fuel'];
if (isset($_GET['kilometros'])) $kilometros = $_GET['kilometros'];
if (isset($_GET['detalles'])) $detalles = $_GET['detalles'];
if (isset($POST['image'])) $photo = $_FILES['image']['name'];
// $confirm = 0;
// if (isset($_POST['title'])&&isset($_POST['checkbox'])&& $_POST['checkbox']=="alimentos") {
//     if(isset($_FILES['image'])){
//         $move = move_uploaded_file($_FILES['image']['tmp_name'], "img/alimentos/" . $_FILES['image']['name']);
//         $photo=$_FILES['image']['name'];
//         /*
//         if ($move ) {
//             $sql = "INSERT INTO alimentos (id,titulo, precio,descripcion,id_publicador,stock,fecha_de_creacion,fecha_de_eliminacion,acepta_mercadopago,fotos,directorio,tag_id) 
//             VALUES (null,'" . $_FILES['image']['name'] . "','" . $_POST['precio'] . "','" . $_POST['desc'] . "','" . $_SESSION['usuario']['id'] . "','" . $_POST['stock'] . "', NOW(),null,'" . $_POST['estado'] . "','" . $mercado . "')";
//             $query = mysqli_query($link, $sql);
//             if (!$query) {
//                 $confirm = 0;
//             } else {
//                 $confirm = 1;
//             }
//         }
//         */ 
//     }else{
//         $photo="no-photo";
//     }
//     if(isset($_POST['mercado'])){
//         $mercado=1;
//     }else{
//         $mercado=0;
//     }
//     if(isset($_POST['estado'])){
//         $estado=$_POST['estado'];
//     }else{
//         $estado="No establecido";
//     }
//     if(isset($_POST['stock'])){
//         $stock=$_POST['stock'];
//     }else{
//         $stock=1;
//     }
//     if(isset($_POST['desc'])){
//         $desc=$_POST['desc'];
//     }else{
//         $desc="Sin descripcion";
//     }
//     if(isset($_POST['precio'])){
//         $precio=$_POST['precio'];
//     }else{
//         $precio=0;
//     }
//     $sql="INSERT INTO alimentos (id,titulo,precio,descripcion,id_publicador,stock,fecha_de_creacion,fecha_de_eliminacion,estado,acepta_mercadopago,fotos,directorio,tag_id)
//     VALUES (NULL,'".$_POST['title']."','".$precio."','".$desc."','".$_SESSION['usuario']['id']."','".$stock."',NOW(),NULL,'".$estado."','".$mercado."','".$_FILES['image']['name']."','alimentos',2)";
//     $query=mysqli_query($link,$sql);
// if($query){
// header("Location:posts.php?tag=1&pag=1");
// }
// }


$section = "upload";
$title = "Upload";
require_once "views/layout.php";
