images
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
<input type="text" name="desc" placeholder="Descripción del producto">descripción<br>
<input type="text" name="precio" placeholder="Precio del producto">precio<br>
<input type="text" name="stock" placeholder="stock">stock<br>
<input type="text" name="estado" placeholder="estado del producto">estado<br>
<input type="checkbox" name="mercado" value="mercado">acepta mercado pago<br>
<br>
    <input type="submit" name="submit" value="Upload file">
</form>
<?php
if($confirm==1){
    echo "El archivo se ha subido correctamente";
}else if($confirm=0){
    echo "Error al subir el archivo. Compruebe la extensión del mismo";
}
?>