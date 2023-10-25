<?php
require_once "includes/config.php";
if(session_status() !== PHP_SESSION_ACTIVE)session_start();
$type = "Sin seleccionar";
$name = "Sin definir";
if(isset($_POST['checkbox'])&&(isset($_GET['step'])&&$_GET['step']==1)){
    $type=$_POST['checkbox'];
    //header('Location: upload.php?step=2&type='.$_POST['checkbox'].'');
    header('Location: upload.php?step=2');
}
if(isset($_POST['title'])&&(isset($_GET['step'])&&$_GET['step']==2)){
    $name=$_POST['title'];
    //header('Location: upload.php?step=2&type='.$_POST['checkbox'].'&name='.$_POST['title'].'');
    header('Location: upload.php?step=3');
}
$values1 = $type;
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