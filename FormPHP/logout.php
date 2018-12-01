<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_COOKIE["username"]);
setcookie("username","", time()-3600);
header('location:login.php');
?>