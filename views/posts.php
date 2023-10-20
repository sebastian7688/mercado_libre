<Section class="actions">
    <a href="upload.php" style="font-family: verdana, sans-serif, helvetica;">Upload</a><br>
    <!-- <Form method="post">
        <label for="ppp">Posr per page</label>
        <select name="ppp" id="ppp">
            <option value="2">2</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="20">20</option>
        <input type="submit" value="Confirm">
        </select>
    </Form>-->
    <?php

    //echo $ppp;
    // var_dump($all);
    // echo "<br><br>";
    echo ("Resultados: " . $cant['c']);
    // var_dump($cant_alimentos['c']);

    // var_dump($cant_inmuebles['c']);
    // var_dump($cant_productos['c']);<html xmlns="http://www.w3.org/1999/xhtml">



    // var_dump($cant_vehiculos['c'])
    ?>
</Section>
<Section class="tags" style="float: left;">
    <table>
        <?php foreach ($res['tags'] as $tag) { ?>
            <tr>
                <td>
                    <a href="posts.php?pag=1&tag=<?php echo $tag[0]; ?>">  
                    <button type="button"  style=" background: #119dee; margin:2px; height: 35px; width: 180px; border-top-right-radius: 200px 200px;margin-left:10px; margin-right:10px;" > <?php echo $tag[1]; ?></button></a>

                </td>
            </tr>
        <?php } ?>
    </table>
</Section>
<!-- <?php if (!isset($_GET['tag']) || (isset($_GET['tag']) && $_GET['tag'] == "1")) { ?>
    <main>
        <div class="tbody" style="text-align: center;">
            <?php foreach ($posts as $post) { ?>
                <?php
                $sql = "SELECT * FROM posts WHERE fecha_baja IS NULL";
                $query = mysqli_query($link, $sql);
                if (!$query) {
                    echo "";
                } else { ?>
                    <a href="post.php?id=<?php echo $post['id'] ?>"><img src="img/posts/<?php echo $posts[$cont]['image']; ?>" height=200 width=150 style="object-fit: contain;"></a>
                <?php } ?>
            <?php
                $cont = $cont + 1;
            } ?>
        </div>
    </main>
<?php } ?> -->
<?php if (isset($_GET['tag']) && $_GET['tag'] == "1") { ?>
    <main>
        <div class="tbody" style="text-align: center;">
            <table>
                <?php $cont = 0;
                foreach ($all as $one) {
                    if ($cont % 4 == 0 && $cont != 0) echo "<tr>" ?>
                    <td>
                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                            <img src="img/<?php echo $one[0] ?>/<?php echo $one[1] ?>" alt="Man with backpack" class="d-block w-full" height=200 width=150 style="object-fit: contain;">
                            <div class="px-2 py-2">
                                <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                                    <?php echo $one[0] ?>
                                </p>
                                <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                                    <?php echo $one[4] ?>
                                </h1>
                                <p class="mb-1">
                                    <?php echo $one[3] ?> &hellip;
                                </p>
                            </div>
                            <a href="#0" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                                Leer más
                            </a>
                        </div>
                    </td>
                <?php $cont = $cont + 1;
                    if ($cont % 4 == 0 && $cont != 0) echo "</tr>";
                } ?>
            </table>
        </div>
    </main>
<?php }
if (isset($_GET['tag']) && $_GET['tag'] == "2") { ?>
    <main>
        <div class="tbody" style="text-align: center;">
            <table>
                <?php $cont = 0;
                foreach ($alim as $ali) {
                    if ($cont % 4 == 0 && $cont != 0) echo "<tr>" ?>
                    <td>
                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                            <img src="img/<?php echo $ali['directorio'] ?>/<?php echo $ali['fotos'] ?>" alt="Man with backpack" class="d-block w-full" height=200 width=150 style="object-fit: contain;">
                            <div class="px-2 py-2">
                                <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                                    <?php echo $ali['directorio'] ?>
                                </p>
                                <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                                    <?php echo $ali['titulo'] ?>
                                </h1>
                                <p class="mb-1">
                                    <?php echo substr($ali['descripcion'], 0, 100); ?> &hellip;
                                </p>
                            </div>
                            <a href="#0" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                                Leer más
                            </a>
                        </div>
                    </td>
                <?php $cont = $cont + 1;
                    if ($cont % 4 == 0 && $cont != 0) echo "</tr>";
                } ?>
            </table>
        </div>
    </main>
<?php }
if (isset($_GET['tag']) && $_GET['tag'] == "3") { ?>
    <main>
        <div class="tbody" style="text-align: center;">
            <table>
                <?php $cont = 0;
                foreach ($inmue as $inm) {
                    if ($cont % 4 == 0 && $cont != 0) echo "<tr>" ?>
                    <td>
                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                            <img src="img/<?php echo $inm['directorio'] ?>/<?php echo $inm['fotos'] ?>" alt="Man with backpack" class="d-block w-full" height=200 width=150 style="object-fit: contain;">
                            <div class="px-2 py-2">
                                <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                                    <?php echo $inm['directorio'] ?>
                                </p>
                                <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                                    <?php echo $inm['titulo'] ?>
                                </h1>
                                <p class="mb-1">
                                    <?php echo substr($inm['descripcion'], 0, 100); ?> &hellip;
                                </p>
                            </div>
                            <a href="#0" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                                Leer más
                            </a>
                        </div>
                    </td>
                <?php $cont = $cont + 1;
                    if ($cont % 4 == 0 && $cont != 0) echo "</tr>";
                } ?>
            </table>
        </div>
    </main>
<?php }
if (isset($_GET['tag']) && $_GET['tag'] == "4") { ?>
    <main>
        <div class="tbody" style="text-align: center;">
            <table>
                <?php $cont = 0;
                foreach ($vehi as $veh) {
                    if ($cont % 4 == 0 && $cont != 0) echo "<tr>" ?>
                    <td>
                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                            <img src="img/<?php echo $veh['directorio'] ?>/<?php echo $veh['fotos'] ?>" alt="Man with backpack" class="d-block w-full" height=200 width=150 style="object-fit: contain;">
                            <div class="px-2 py-2">
                                <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                                    <?php echo $veh['directorio'] ?>
                                </p>
                                <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                                    <?php echo $veh['titulo'] ?>
                                </h1>
                                <p class="mb-1">
                                    <?php echo substr($veh['descripcion'], 0, 100); ?> &hellip;
                                </p>
                            </div>
                            <a href="#0" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                                Leer más
                            </a>
                        </div>
                    </td>
                <?php $cont = $cont + 1;
                    if ($cont % 4 == 0 && $cont != 0) echo "</tr>";
                } ?>
            </table>
        </div>
    </main>
<?php }
if (isset($_GET['tag']) && $_GET['tag'] == "5") { ?>
    <main>
        <div class="tbody" style="text-align: center;">
            <table>
                <?php $cont = 0;
                foreach ($prod as $pro) {
                    if ($cont % 4 == 0 && $cont != 0) echo "<tr>" ?>
                    <td>
                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                            <img src="img/<?php echo $pro['directorio'] ?>/<?php echo $pro['fotos'] ?>" alt="Man with backpack" class="d-block w-full" height=200 width=150 style="object-fit: contain;">
                            <div class="px-2 py-2">
                                <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                                    <?php echo $pro['directorio'] ?>
                                </p>
                                <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                                    <?php echo $pro['nombre'] ?>
                                </h1>
                                <p class="mb-1">
                                    <?php echo substr($pro['detalles'], 0, 100); ?> &hellip;
                                </p>
                            </div>
                            <a href="#0" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                                Leer más
                            </a>
                        </div>
                    </td>
                <?php $cont = $cont + 1;
                    if ($cont % 4 == 0 && $cont != 0) echo "</tr>";
                } ?>
            </table>
        </div>
    </main>
<?php } ?>