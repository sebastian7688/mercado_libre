<?php
require_once "includes/config.php";

$sql = "SELECT * FROM usuarios";

$section = "profile";
$title = "Profile";
require_once "views/layout.php";