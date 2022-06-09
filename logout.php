<?php
include_once 'utils/init.php'; 

session_destroy();
$_SESSION["user"] = null;
unset($_SESSION["user"]);
header("Location: http://localhost/login_management/login.php");
die();