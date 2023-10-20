<div align="center">
    <div class="profile-img" style="margin:2rem;">
        <div class="container" style="position:relative; height:23rem;box-shadow: 0px 0px;border:1px solid black">
            <br>
            <a href="#ei" rel="modal:open" style="margin: auto; width: 50%;" id="image"><img src="img/users/<?php echo $_SESSION['usuario']['foto_de_perfil']; ?>" alt="" class="profile" style="height: 20rem;width: 20rem; border-radius: 50%; object-fit: cover; background-color: white;"></a>
            <br>
            <div id="text" style="position:absolute; width: 100%; top:50%"></div>
        </div>

        <div id="ei" class="modal" style="width:29rem;">
            <a href="#secret" rel="modal:open" style="text-decoration: none; color: black; cursor: default;">
                <h3>Default</h3>
            </a>
            <div id="secret" class="modal" style="width:13rem; height:13rem; align-items: center;">
                <div class="Height" style="display: inline-block; width:0px;">
                    <form method="post" style="width:9rem;display: inline-block; user-select:none">
                        <br>
                        <input type="image" src="img/users/default1.png" class="void" style="width: 0px; height:8rem; object-fit: cover; filter:opacity(0);" disabled>
                        <label class="lbl" style="display: block; text-align: center; filter:opacity(0);">Useless</label>
                    </form>
                </div>
                <div style="display: inline-block;">
                    <form method="post" class="option-form" style="width: 8rem; display: inline-block;">
                        <input type="hidden" name="default-secret" value="default-secret.png" class="Height" style="display: inline-block; width:0px;">
                        <input title="Set H-Chan as profile photo" type="image" id="default-secret" class="option-photo" style="margin: 0, 0, 0, 0; width: 8rem; height:8rem; object-fit: cover; transition:  filter 0.2s, margin-bottom 0.2s ease-in-out;" name="default-secret" value="default-secret.png" alt="Login" src="img/users/default-secret.png">
                        <label style="display: block; text-align: center;">H-Chan</label>
                    </form>
                </div>
            </div>

            <div style="border-bottom: 1px solid black;border-top: 1px solid black;">
                <div>
                    <div class="Height" style="display: inline-block; width:0px;">
                        <form method="post" class="option-form" style="width: 8rem; display: inline-block;user-select:none">
                            <br>
                            <input type="image" src="img/users/default1.png" class="void" style="width: 0px; height:8rem; object-fit: cover; filter:opacity(0);" disabled>
                            <label class="lbl" style="display: block; text-align: center; filter:opacity(0);">Useless</label>
                        </form>
                    </div>
                    <div style="display: inline-block;">
                        <form method="post" class="option-form" style="width: 8rem; display: inline-block;">
                            <input type="hidden" name="default1" value="default1.png" class="Height" style="display: inline-block; width:0px;">
                            <input title="Set V-Chan as profile photo" type="image" id="default1" class="option-photo" style="margin: 0, 0, 0, 0; width: 8rem; height:8rem; object-fit: cover; transition:  filter 0.2s, margin-bottom 0.2s ease-in-out;" name="default1" value="default1.png" alt="Login" src="img/users/default1.png">
                            <label style="display: block; text-align: center;">V-chan</label>
                        </form>
                    </div>
                    <div style="display: inline-block;">
                        <form method="post" class="option-form" style="width: 8rem; display: inline-block;">
                            <input type="hidden" name="default2" value="default2.png" class="Height" style="display: inline-block; width:0px;">
                            <input title="Set D-Kun as profile photo" type="image" id="default2" class="option-photo" style="margin: 0, 0, 0, 0; width: 8rem; height:8rem; object-fit: cover; transition:  filter 0.2s, margin-bottom 0.2s ease-in-out;" name="default2" value="default2.png" alt="Login" src="img/users/default2.png">
                            <label style="display: block; text-align: center;">V-kun</label>
                        </form>
                    </div>
                    <div style="display: inline-block;">
                        <form method="post" class="option-form" style="width: 8rem; display: inline-block;">
                            <input type="hidden" name="default3" value="default3.png" class="Height" style="display: inline-block; width:0px;">
                            <input title="Set D-Chan as profile photo" type="image" id="default3" class="option-photo" style="margin: 0, 0, 0, 0; width: 8rem; height:8rem; object-fit: cover; transition:  filter 0.2s, margin-bottom 0.2s ease-in-out;" name="default3" value="default4.png" alt="Login" src="img/users/default3.png">
                            <label style="display: block; text-align: center;">D-chan</label>
                        </form>
                    </div>
                </div>
                <div>
                    <div class="Height" style="display: inline-block; width:0px;">
                        <form method="post" class="option-form" style="width: 8rem; display: inline-block;user-select:none">
                            <br>
                            <input type="image" src="img/users/default1.png" class="void" style="width: 0px; height:8rem; object-fit: cover; filter:opacity(0);" disabled>
                            <label class="lbl" style="display: block; text-align: center; filter:opacity(0);">Useless</label>
                        </form>
                    </div>
                    <div style="display: inline-block;">
                        <form method="post" class="option-form" style="width: 8rem; display: inline-block;">
                            <input type="hidden" name="default4" value="default4.png" class="Height" style="display: inline-block; width:0px;">
                            <input title="Set P-Chan as profile photo" type="image" id="default4" class="option-photo" style="margin: 0, 0, 0, 0; width: 8rem; height:8rem; object-fit: cover; transition:  filter 0.2s, margin-bottom 0.2s ease-in-out;" name="default4" value="default4.png" alt="Login" src="img/users/default4.png">
                            <label style="display: block; text-align: center;">P-chan</label>
                        </form>
                    </div>
                    <div style="display: inline-block;" class="cont">
                        <form method="post" class="option-form" style="width: 8rem; display: inline-block;">
                            <input type="hidden" name="default5" value="default5.png" class="Height" style="display: inline-block; width:0px;">
                            <input title="Set K-Chan as profile photo" type="image" id="default5" class="option-photo" style="margin: 0, 0, 0, 0; width: 8rem; height:8rem; object-fit: cover; transition:  filter 0.2s, margin-bottom 0.2s ease-in-out;" name="default5" value="default5.png" alt="Login" src="img/users/default5.png">
                            <label style="display: block; text-align: center;">K-chan</label>
                        </form>
                    </div>
                    <div style="display: inline-block;">
                        <form method="post" class="option-form" style="width: 8rem; display: inline-block;">
                            <input type="hidden" name="default6" value="default6.png" class="Height" style="display: inline-block; width:0px;">
                            <input title="Set S-Chan as profile photo" type="image" id="default6" class="option-photo" style="margin: 0, 0, 0, 0; width: 8rem; height:8rem; object-fit: cover; transition:  filter 0.2s, margin-bottom 0.2s ease-in-out;" name="default6" value="default6.png" alt="Login" src="img/users/default6.png">
                            <label style="display: block; text-align: center;">S-chan</label>
                        </form>
                    </div>
                </div>
            </div>
            <h3>Custom</h3>
            <div style="height: 30%; width: 100%; border-radius: 1rem; background-color: gray; background-image:url(img/users/upload.png); background-size:contain; background-repeat:no-repeat; background-position:center">
                <form method="post" style="width: 8rem;display: inline-block">
                    <input type="hidden" name="default6" value="default6.png" style="width: 8rem;">
                    <input type="hidden" style="width: 8rem;">
                </form>
                <a href="#uf" rel="modal:open"><img src="img/users/blank.png" alt="" style="height: 3rem;width: 100%; border-radius: 50%; object-fit: cover; "></a>

                <div id="uf" class="modal" style="width:29rem">
                    <!-- <form method="post" style="width: 29rem;display: inline-block">
                        <input type="file" name="upload" id="upload">
                        <input type="submit" value="Upload">
                    </form> -->
                    Work in progress
                </div>
                <form method="post" style="width: 8rem;display: inline-block">
                    <input type="hidden" name="default6" value="default6.png" style="width: 8rem;">
                    <input type="hidden" style="width: 8rem;">
                </form>
            </div>
            <label style="display: block; text-align: center;">Local</label>
        </div>
    </div>
    <div class="container" id="data" style="height:10rem;display: inline-block;box-shadow: 0px 0px;border:1px solid black">
        <div style="position:absolute; width:100%;">
            <div style="width:1rem;height:1rem;float:right;margin-right:2.5rem" class="gear">
                <p><a href="#as" rel="modal:open" style="text-decoration:none; color:lightgray; font-size: 3rem; ;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><b>⚙</b></a></p>
            </div>
            <!-- <br>
            <br>
            <div style="width:1rem;height:1rem;float:right;margin-right:2.5rem" class="hide">
                <p><a href="#as" rel="modal:open" style="text-decoration:none; color:lightgray; font-size: 0.75rem;;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><b>Ajustes</b></a></p>
            </div> -->
        </div>
        <br>
        <a>Nombre de usuario: <b><?php echo ($_SESSION['usuario']['nombre']);  ?></b></a>
        <br>
        <a>Correo: <b><?php echo ($_SESSION['usuario']['correo_electronico']);  ?></b></a>
        <br>
        <a>Saldo: <b>$<?php echo ($_SESSION['usuario']['saldo_en_cuenta']);  ?></b></a>
        <br>
        <a>La cuenta fue creada: <b><?php echo ($_SESSION['usuario']['fecha_de_creacion']);  ?></b></a>
    </div>
    <div id="as" class="modal">
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
                        <!-- <button style="float: right;"> <a href="#ep" rel="modal:open" style="text-decoration:none; color:black">Cancelar</a></button> -->
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
                    </form>
                </div>
            </div>
            <!--Fin edit contra-->
            <p><a href="#as" rel="modal:open">Volver</a></p>
        </div>
        <p><a href="#mon" rel="modal:open">Cargar saldo</a></p>
        <div id="mon" class="modal" style="width:15rem; background-color:darkolivegreen;">
            <div style="margin: top 0;padding: top 0;border-bottom: 1px solid cadetblue;">
                <h4 style="vertical-align: top;color:white">Cargar saldo</h4>
            </div>
            <br>
            <div>
                <form method="post">
                    <center><a style="color:white">$</a><input type="text" class="form__input" name="saldo" id="saldo" placeholder="0" style="width:10.5rem; color:white; background-color:darkolivegreen;" required></center>
                    <br>
                    <center><input type="password" name="card" id="card" placeholder="Tarjeta de crédito/débito" style="width:10.5rem; color:white; background-color:darkolivegreen;" required></center>
                    <br>
                    <center><input type="password" name="actpass" id="pass" placeholder="Contraseña actual" style="width:10.5rem; color:white; background-color:darkolivegreen;" required></center>
                    <br>
                    <input type="submit" value="Confirmar" style="float: left;">
            </div>
            </form>
        </div>
        <a href="#" rel="modal:close">Close</a>
    </div>