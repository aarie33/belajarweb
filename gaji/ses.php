<?php session_start();
$_SESSION[nip]=$_REQUEST[nip];
header('location:upd_peg.php');
?>