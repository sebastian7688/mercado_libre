<?php
if (!isset($section)) {
  header("Location: ../index.php");
}
if(session_status() !== PHP_SESSION_ACTIVE)session_start();?>
<div class="navtop">
  <div class="navitems">
    <div class="navlink navbrand">
      <a href="index.php"><img src="img/org_6.png" width="100" height="90"
       style="float:left; padding: 7px 15px 1px 25px !important;"></a>
    </div>
    <div class="navlink">
      <a href="settings.php"
        style="float: left; display: block; color: #ffffff; text-align: center; padding: 20px 16px 23px 16px; text-decoration: none;"><b>Settings</b></a>
    </div>
    <div class="navlink">
      <a href="posts.php?tag=1&pag=1"
        style="float: left; display: block; color: #ffffff; text-align: center; padding: 20px 16px 23px 16px; text-decoration: none;"><b>Productos</b></a>
    </div>
    <div class="navlink">
      <a href="#"
        style="float: left; display: block; color: #ffffff; text-align: center; padding: 20px 16px 23px 16px; text-decoration: none;"><b>Forum</b></a>
    </div>
    <div class="navlink">
      <a href="index.php"
        style="float: left; display: block; color: #ffffff; text-align: center; padding: 20px 16px 23px 16px; text-decoration: none;"><b>Home</b></a>
    </div>
    <div class="navlink">
    <a 
        style="float: left; display: block; color: #ffffff; text-align: center; padding: 20px 16px 23px 16px; text-decoration: none;" href="profile.php"><b><?php if(isset($_SESSION['usuario'])){echo($_SESSION['usuario']['nombre']);} ?></b></a>
    </div>
  </div>
</div>