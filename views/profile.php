<div align="center">
    <div class="profile-img" style="margin:2rem">
        <img src="img/<?php echo $_SESSION['usuario']['foto_de_perfil']; ?>" alt="" style="height: 20rem;width: 20rem; border-radius: 50%; object-fit: cover; background-color: white;">
    </div>
    <a>Nombre de usuario: <?php echo ($_SESSION['usuario']['nombre']);  ?></a>
    <br>
    <a>Correo: <?php echo ($_SESSION['usuario']['correo_electronico']);  ?></a>
    <br>
    <a>Saldo: <?php echo ($_SESSION['usuario']['saldo_en_cuenta']);  ?></a>
    <br>
    <a>La cuenta fue creada: <?php echo ($_SESSION['usuario']['fecha_de_creacion']);  ?></a>

    <p><a href="#ep" rel="modal:open">Editar perfil</a></p>
    <div id="ep" class="modal">
        <!--Edit nombre-->
        <p><a href="#en" rel="modal:open">Cambiar nombre</a></p>
        <div id="en" class="modal" style="width:15rem">
            <div style="margin: top 0;padding: top 0;border-bottom: 1px solid cadetblue;">
                <h4 style="vertical-align: top;">Editar nombre de usuario</h4>
            </div>
            <br>
            <div>
                <form method="post">
                    <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION['usuario']['nombre'] ?>" required>
                    <br><br>
                    <input type="submit" value="Confirmar" style="float: left;">
                    <button style="float: right;"> <a href="#ep" rel="modal:open" style="text-decoration:none; color:black">Cancelar</a></button>
            </div>
            </form>
        </div>

        <!--Fin edit nombre-->
        <!--Edit contra-->
        <p><a href="#ec" rel="modal:open">Cambiar contraseña</a></p>
        <div id="ec" class="modal" style="width:15rem">
            <div style="margin: top 0;padding: top 0;border-bottom: 1px solid cadetblue;">
                <h4 style="vertical-align: top;">Editar contraseña</h4>
            </div>
            <br>
            <div>
                <form method="post">
                    <input type="password" name="actpass" id="actpass" placeholder="Contraseña actual" required>
                    <br><br>
                    <input type="password" name="newpass" id="newpass" placeholder="Contraseña nueva" required>
                    <br><br>
                    <input type="submit" value="Confirmar" style="float: left;">
                    <button style="float: right;"> <a href="#ep" rel="modal:open" style="text-decoration:none; color:black">Cancelar</a></button>
                </form>
            </div>
        </div>
        <!--Fin edit contra-->
        <a href="#" rel="modal:close">Close</a>
    </div>