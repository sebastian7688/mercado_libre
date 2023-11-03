<!-- images
<form action="upload.php" method="POST" enctype="multipart/form-data">
<label>
<input type="file" name="image" accept="image/*,video/*">
</label>
<br>
<label>
    tags: <br>
    <input type="radio" name="checkbox" value="alimentos">alimentos<br>
    <input type="radio" name="checkbox" value="inmuebles">inmuebles<br>
    <input type="radio" name="checkbox" value="vehiculos">vehiculos<br>
    <input type="radio" name="checkbox" value="productos">productos<br>
</label>
<input type="text" name="title" placeholder="Nombre del producto">Nombre<br>
<input type="text" name="desc" placeholder="Descripción del producto">descripción<br>
<input type="text" name="precio" placeholder="Precio del producto">precio<br>
<input type="text" name="stock" placeholder="stock">stock<br>
<input type="text" name="estado" placeholder="estado del producto">estado<br>
<input type="checkbox" name="mercado" value="mercado">acepta mercado pago<br>
<br>
    <input type="submit" name="submit" value="Upload file">
</form>-->

<?php if (isset($_GET['step']) && $_GET['step'] == "1") { ?>
    <form method="POST">
        <label>
            Seleccione el tipo de producto: <br>
            <input type="radio" name="checkbox" value="alimentos">alimentos<br>
            <input type="radio" name="checkbox" value="inmuebles">inmuebles<br>
            <input type="radio" name="checkbox" value="vehiculos">vehiculos<br>
            <input type="radio" name="checkbox" value="productos">productos<br>
            <input type="submit" name="next" value="Siguiente">
        </label>
    </form>
    
<?php } ?>
<?php if (isset($_GET['step']) && $_GET['step'] == "2") { ?>
    <form method="POST">
        <label>
            Escriba el nombre del producto: <br>
            <input type="text" name="title" placeholder="Nombre del producto" required>Nombre<br>
            <input type="submit" name="next" value="Siguiente">
        </label>
    </form>
<?php } ?>
<?php
if (isset($_GET['step']) && $_GET['step'] == "3") {
?>
    <form method="POST">
    <input type="text" name="desc" placeholder="Descripción del producto">descripción<br>
    <input type="text" name="precio" placeholder="Precio del producto">precio<br>
    <input type="text" name="estado" placeholder="estado del producto">estado<br>

    <?php if ($_GET['type'] != "inmuebles") { ?>
        <input type="text" name="stock" placeholder="stock">cantidad disp.<br>
    <?php } ?>

    <?php if ($_GET['type'] == "vehiculos") { ?>
        <input type="text" name="color" placeholder="color">color<br>
        <input type="text" name="fuel" placeholder="combustible">tipo de combustible<br>
        <input type="text" name="kilometros" placeholder="kilometros">kilometros<br>
        <input type="text" name="detalles" placeholder="detalles: ej. no robado, pequeña marca en lado derecho, etc.">detalles del producto<br>
    <?php } ?>
    <input type="file" name="image" accept="image/*,video/*"><br>
    <input type="checkbox" name="mercado" value="mercado">acepta mercado pago<br>
    <input type="submit" name="submit" value="Siguiente">
    </form>
<?php } ?>
<?php
if (isset($_GET['step']) && $_GET['step'] == "4") {
?>
    <h4>Tipo de producto: <?php echo $type; ?></h4>
    <h4>Nombre del producto: <?php echo $name; ?></h4>
    <h4>Descripcion del producto: <?php echo $descr; ?></h4>
    <h4>Precio del producto: <?php echo $price; ?></h4>
    <h4>Estado del producto: <?php echo $state; ?></h4>
    <?php if ($_GET['type'] != "inmuebles") { ?>
        <h4>Cantidad disponible: <?php echo $stock; ?></h4>
    <?php } ?>
    <?php if ($_GET['type'] == "vehiculos") { ?>
        <h4>Color: <?php echo $color; ?></h4>
        <h4>Combustible: <?php echo $state; ?></h4>
        <h4>Kilometros: <?php echo $state; ?></h4>
        <h4>Detalles: <?php echo $state; ?></h4>
    <?php } ?>



    <form method="POST">
    <input type="hidden" name="confirmation" value="confirmation">
    <input type="submit" name="submit" value="Subir">
    </form>
<?php } ?>