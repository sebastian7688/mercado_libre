<link rel="stylesheet" href="css/login.css">


<head>
    <title>Mercado Libre</title>
    <!---  <link rel="icon" href="img/icon.ico">--->
</head>


<form class="register" method="POST">
    <div class="contenedor">
        <h1 class="m-0 " color="Deepskyblue" style="font-size:50px;"><span class="text-dark">Mercado</span>
            <font color="#24d3eb">Libre</font>
        </h1>
        <h2 class="titulo_2"> Iniciar sesión </h2>
        
        <!--- <div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin:0;'>
                Algo anda mal, ingresa bien los datos.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <br>---->
        <div class="input-contenedor">
            <input autocomplete="username" id="login__username" type="text" name="nombre" class="form__input" placeholder="Nombre de usuario" required>
        </div>

       <!--- <div>
            <label for="login_username">
               <span class="hidden">Username</span>
            </label>
            <input autocomplete="username" id="login__username" type="text" name="nombre" class="form__input" placeholder="Nombre de usuario" required>
        </div>---->
        <div class="input-contenedor">
            <!---  <label for="login__password">
               <span class="hidden">Password</span>
            </label>--->
            <input id="login__password" type="password" name="contra" placeholder="Contraseña"class="form__input" required><!--class="form__input"----->
        </div>
        <div class="checkbox">
            <label style="color:#3D464D;">
                <input type="checkbox" value="true" name="cookies"> Recuerdame
            </label>
        </div><br>
        <div>
            <button href="home.php" type="submit" class="btn-register"> Iniciar Sesion</button><br><br>
            <a href="signup.php" class="btn-secondary" style="background:white; color:#3D464D;"> ¿No tienes una cuenta? </a>
        </div>

    </div>
</form>