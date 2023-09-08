
<link rel="stylesheet" href="css/login.css">
<form class="register" method="POST">
    <div class="contenedor">
        <h1 class="m-0 " color="Deepskyblue" style="font-size:50px;"><span class="text-dark">Mercado</span>
            <font color="#24d3eb">Libre</font>
        </h1>
        <h2 class="titulo_2"> Registrate </h2>
        <div class="input-contenedor">
            <input autocomplete="username" id="login__username" type="text" name="nombre" class="form__input" placeholder="Nombre de usuario" required>
        </div>
        <div class="input-contenedor">
            <input autocomplete="username" id="login__username" type="text" name="email" class="form__input" placeholder="Email" required>
        </div>
        <div class="input-contenedor">
            <input id="login__password" type="password" name="contra" placeholder="Contraseña"class="form__input" required>
        </div>
        <div class="checkbox">
            <label style="color:#3D464D;">
                <input type="checkbox" value="true" name="cookies"> Recuerdame
            </label>
        </div><br>
        <div>
            <button href="home.php" type="submit" class="btn-register">Registrarse</button><br><br>
            <a href="signup.php" class="btn-secondary" style="background:white; color:#3D464D;"> ¿No tienes una cuenta? </a>
        </div>

    </div>
</form>

