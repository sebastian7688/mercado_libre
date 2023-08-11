<div align="center">
<div class="profile-img" style="margin:2rem">
    <img src="img/<?php echo $_SESSION['usuario']['foto_de_perfil']; ?>" alt="" style="height: 20rem;width: 20rem; border-radius: 50%; object-fit: cover;" >
</div>
<a>Nombre de usuario: <?php echo ($_SESSION['usuario']['nombre']);  ?></a>
<br>
<a>Correo: <?php echo ($_SESSION['usuario']['correo_electronico']);  ?></a>
<br>
<a>Saldo: <?php echo ($_SESSION['usuario']['saldo_en_cuenta']);  ?></a>
<br>
<a>La cuenta fue creada: <?php echo ($_SESSION['usuario']['fecha_de_creacion']);  ?></a>
</div>