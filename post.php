<?php
require_once "includes/config.php";
if(isset($_GET['tag'])&&$_GET['tag']=='alimentos'&&isset($_GET['prodid'])){
    $sql ="SELECT id,titulo,precio,descripcion,id_publicador,stock,fotos,directorio FROM alimentos where id='".$_GET['prodid']."'";
    $query = mysqli_query($link, $sql);
    $prod=mysqli_fetch_assoc($query);
    $sql ="SELECT stock FROM alimentos where id='".$_GET['prodid']."'";
    $query = mysqli_query($link, $sql);
    $prodstock=mysqli_fetch_assoc($query);
}
if(isset($_GET['tag'])&&$_GET['tag']=='vehiculos'&&isset($_GET['prodid'])){
    $sql ="SELECT id,titulo,precio,descripcion,id_publicador,fotos,directorio FROM vehiculos where id='".$_GET['prodid']."'";
    $query = mysqli_query($link, $sql);
    $prod=mysqli_fetch_assoc($query);
}
if(isset($_GET['tag'])&&$_GET['tag']=='productos'&&isset($_GET['prodid'])){
    $sql ="SELECT id,titulo,precio,descripcion,id_publicador,stock,fotos,directorio FROM productos where id='".$_GET['prodid']."'";
    $query = mysqli_query($link, $sql);
    $prod=mysqli_fetch_assoc($query);
}
if(isset($_GET['tag'])&&$_GET['tag']=='inmuebles'&&isset($_GET['prodid'])){
    $sql ="SELECT id,titulo,precio,descripcion,id_publicador,fotos,directorio FROM inmuebles where id='".$_GET['prodid']."'";
    $query = mysqli_query($link, $sql);
    $prod=mysqli_fetch_assoc($query);
}
$section = "post";
$title = "Post";
require_once "views/layout.php";