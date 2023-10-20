<table>
    <tr>
        <td style="width:33%">
            <div style="max-width:55rem">
                <img style="height:40rem;width:50rem;object-fit:contain;background-color:white;box-shadow: 5px 10px;border:3px solid lightgray; border-radius:1rem;margin-left:1rem" src="img/<?php if ($_GET['tag'] == 'alimentos') {
                                                                                                                                                                                                    echo "alimentos";
                                                                                                                                                                                                } else if ($_GET['tag'] == 'vehiculos') {
                                                                                                                                                                                                    echo "vehiculos";
                                                                                                                                                                                                } else if ($_GET['tag'] == 'productos') {
                                                                                                                                                                                                    echo "productos";
                                                                                                                                                                                                } else if ($_GET['tag'] == 'inmuebles') {
                                                                                                                                                                                                    echo "inmuebles";
                                                                                                                                                                                                } ?>/<?php echo $prod['fotos']; ?>">
            </div>
        </td>
        <td style="display: inline-block; vertical-align: top;">
            <div style="margin-left:1rem;">
                <a style="font-size:4rem;"><b><u><?php echo $prod['titulo'] ?></u></b></a>
            </div>
            <div style="margin-left:1rem;">
                <a style="font-size:2rem;">Descripción del producto:<br><?php echo $prod['descripcion'] ?></a>
            </div>
        </td>
    </tr>
    <tr>
        <td style="width:33%">
        </td>
        <td>
            
        </td>
    </tr>
</table>