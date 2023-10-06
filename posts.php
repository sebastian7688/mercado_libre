<?php
require_once "includes/config.php";
// if (!isset($_GET['tag'])) {
//     $query = "SELECT id,image FROM posts";
//     $posts = mysqli_query($link, $query);

//     $sql = "SELECT COUNT(*) AS c FROM posts";

//     $query = mysqli_query($link, $sql);

//     if (!$query) {
//         die("Error de consulta: " . mysqli_errno($link));
//     }

//     //paginador?

// } else {


//alimentos
if (isset($_GET['tag'])) {
    if ($_GET['tag'] == "1") {


        // $sql = "SELECT alimentos.fotos,productos.fotos,vehiculos.fotos,inmuebles.fotos FROM alimentos, productos, vehiculos, inmuebles";
        
        // $query = mysqli_query($link, $sql);
        // $all=mysqli_fetch_all($query);
        $sql ="SELECT directorio,fotos,fecha_de_creacion,descripcion,titulo FROM alimentos";
        $query = mysqli_query($link, $sql);
        $alimentos=mysqli_fetch_all($query);
        $sql ="SELECT directorio,fotos,fecha_de_creacion,descripcion,titulo FROM vehiculos";
        $query = mysqli_query($link, $sql);
        $vehiculos=mysqli_fetch_all($query);
        $sql ="SELECT directorio,fotos,fecha_de_creacion,descripcion,titulo FROM productos";
        $query = mysqli_query($link, $sql);
        $productos=mysqli_fetch_all($query);
        $sql ="SELECT directorio,fotos,fecha_de_creacion,descripcion,titulo FROM inmuebles";
        $query = mysqli_query($link, $sql);
        $inmuebles=mysqli_fetch_all($query);
        $all = array_merge($alimentos,$vehiculos,$productos,$inmuebles);
        $all2 = array_merge($alimentos,$vehiculos,$productos,$inmuebles);
        $dates = array_column($all, 'fecha_de_creacion');
        
        asort($all);

        $sql = "SELECT COUNT(*) AS c FROM alimentos";
        $query = mysqli_query($link, $sql);
        $cant_alimentos = mysqli_fetch_assoc($query);
        $sql = "SELECT COUNT(*) AS c FROM vehiculos";
        $query = mysqli_query($link, $sql);
        $cant_vehiculos = mysqli_fetch_assoc($query);
        $sql = "SELECT COUNT(*) AS c FROM productos";
        $query = mysqli_query($link, $sql);
        $cant_productos = mysqli_fetch_assoc($query);
        $sql = "SELECT COUNT(*) AS c FROM inmuebles";
        $query = mysqli_query($link, $sql);
        $cant_inmuebles = mysqli_fetch_assoc($query);

        // $sql ="SELECT
        // (SELECT COUNT(*) FROM alimentos)+
        // (SELECT COUNT(*) from inmuebles)+
        // (SELECT COUNT(*) from productos)+
        // (SELECT COUNT(*) from alimentos) AS c";

        // $sql = "SELECT COUNT(*) p FROM productos
        // UNION ALL
        // SELECT COUNT(*) a FROM alimentos
        // UNION ALL
        // SELECT COUNT(*) v FROM vehiculos
        // UNION ALL
        // SELECT COUNT(*) i FROM inmuebles
        // ";
        $query = mysqli_query($link, $sql);
        //$cant_list = mysqli_fetch_all($query);
        $cant['c']=$cant_alimentos['c']+$cant_inmuebles['c']+$cant_productos['c']+$cant_vehiculos['c'];


        if (isset($_GET['pag'])) {
            $pag = intval($_GET['pag']);
            if ($pag <= ceil(intval($cant["c"]) / 4)) {
                $in = ($pag * 4) - 4;
                $sql = "SELECT * FROM posts ORDER BY fecha_alta DESC LIMIT $in,4";

                $query = mysqli_query($link, $sql);

                if (!$query) {
                    die("Error de consulta: " . mysqli_errno($link));
                }

                $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
            }
        } else {
            $sql = "SELECT * FROM posts ORDER BY fecha_alta DESC LIMIT 0,4";

            $query = mysqli_query($link, $sql);

            if (!$query) {
                die("Error de consulta: " . mysqli_errno($link));
            }

            $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
        }


//         $d = 'img/*/';
// foreach(glob($d.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
    
//     $imag[] =  basename($file);
// }
    }


    else if ($_GET['tag'] == "2") {


        $sql = "SELECT * FROM alimentos
    INNER JOIN tags
    ON alimentos.tag_id = tags.id
    WHERE alimentos.tag_id = '" . $_GET['tag'] . "'";

        $alim = mysqli_query($link, $sql);

        $sql = "SELECT COUNT(*) AS c FROM alimentos";

        $query = mysqli_query($link, $sql);

        if (!$query) {
            die("Error de consulta: " . mysqli_errno($link));
        }

        $cant = mysqli_fetch_assoc($query);
        if (isset($_GET['pag'])) {
            $pag = intval($_GET['pag']);
            if ($pag <= ceil(intval($cant["c"]) / 4)) {
                $in = ($pag * 4) - 4;
                $sql = "SELECT * FROM alimentos ORDER BY fecha_de_creacion DESC LIMIT $in,4";

                $query = mysqli_query($link, $sql);

                if (!$query) {
                    die("Error de consulta: " . mysqli_errno($link));
                }

                $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
            }
        } else {
            $sql = "SELECT * FROM alimentos ORDER BY fecha_de_creacion DESC LIMIT 0,4";

            $query = mysqli_query($link, $sql);

            if (!$query) {
                die("Error de consulta: " . mysqli_errno($link));
            }

            $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
        }
    }


    //inmuebles
    else if ($_GET['tag'] == "3") {
        $sql = "SELECT * FROM inmuebles
    INNER JOIN tags
    ON inmuebles.tag_id = tags.id
    WHERE inmuebles.tag_id = '" . $_GET['tag'] . "'";

        $inmue = mysqli_query($link, $sql);

        $sql = "SELECT COUNT(*) AS c FROM inmuebles";
        $query = mysqli_query($link, $sql);
        if (!$query) {
            die("Error de consulta: " . mysqli_errno($link));
        }

        $cant = mysqli_fetch_assoc($query);
        if (isset($_GET['pag'])) {
            $pag = intval($_GET['pag']);
            if ($pag <= ceil(intval($cant["c"]) / 4)) {
                $in = ($pag * 4) - 4;
                $sql = "SELECT * FROM inmuebles ORDER BY fecha_de_creacion DESC LIMIT $in,4";

                $query = mysqli_query($link, $sql);

                if (!$query) {
                    die("Error de consulta: " . mysqli_errno($link));
                }

                $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
            }
        } else {
            $sql = "SELECT * FROM inmuebles ORDER BY fecha_de_creacion DESC LIMIT 0,4";

            $query = mysqli_query($link, $sql);

            if (!$query) {
                die("Error de consulta: " . mysqli_errno($link));
            }

            $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
        }
        
    }

    //vehiculos
    else if ($_GET['tag'] == '4') {
        $sql = "SELECT * FROM vehiculos
    INNER JOIN tags
    ON vehiculos.tag_id = tags.id
    WHERE vehiculos.fecha_de_eliminacion IS NULL AND
    vehiculos.tag_id = '" . $_GET['tag'] . "'";

        $vehi = mysqli_query($link, $sql);

        $sql = "SELECT COUNT(*) AS c FROM vehiculos";
        $query = mysqli_query($link, $sql);
        if (!$query) {
            die("Error de consulta: " . mysqli_errno($link));
        }

        $cant = mysqli_fetch_assoc($query);
        if (isset($_GET['pag'])) {
            $pag = intval($_GET['pag']);
            if ($pag <= ceil(intval($cant["c"]) / 4)) {
                $in = ($pag * 4) - 4;
                $sql = "SELECT * FROM vehiculos ORDER BY fecha_de_creacion DESC LIMIT $in,4";

                $query = mysqli_query($link, $sql);

                if (!$query) {
                    die("Error de consulta: " . mysqli_errno($link));
                }

                $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
            }
        } else {
            $sql = "SELECT * FROM vehiculos ORDER BY fecha_de_creacion DESC LIMIT 0,4";

            $query = mysqli_query($link, $sql);

            if (!$query) {
                die("Error de consulta: " . mysqli_errno($link));
            }

            $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
        }
    }

    //productos
    else if ($_GET['tag'] == '5') {
        $sql = "SELECT * FROM productos
    INNER JOIN tags
    ON productos.tag_id = tags.id
    WHERE productos.tag_id = '" . $_GET['tag'] . "'";

        $prod = mysqli_query($link, $sql);

        $sql = "SELECT COUNT(*) AS c FROM productos";
        $query = mysqli_query($link, $sql);
        if (!$query) {
            die("Error de consulta: " . mysqli_errno($link));
        }

        $cant = mysqli_fetch_assoc($query);
        if (isset($_GET['pag'])) {
            $pag = intval($_GET['pag']);
            if ($pag <= ceil(intval($cant["c"]) / 4)) {
                $in = ($pag * 4) - 4;
                $sql = "SELECT * FROM productos ORDER BY fecha_de_creacion DESC LIMIT $in,4";

                $query = mysqli_query($link, $sql);

                if (!$query) {
                    die("Error de consulta: " . mysqli_errno($link));
                }

                $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
            }
        } else {
            $sql = "SELECT * FROM productos ORDER BY fecha_de_creacion DESC LIMIT 0,4";

            $query = mysqli_query($link, $sql);

            if (!$query) {
                die("Error de consulta: " . mysqli_errno($link));
            }

            $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
        }
    }
}


$sql = "SELECT id,tag FROM tags";
$query = mysqli_query($link, $sql);
$res['tags'] = mysqli_fetch_all($query);
$cont = 0;
$section = "posts";
$title = "Posts";
require_once "views/layout.php";
