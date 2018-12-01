<?php session_start();
if($_REQUEST[nama]==""||$_REQUEST[tujuan]==""||$_REQUEST[jenis]==""){
header('location:tiket.php');
}else{
$_SESSION[nama]=$_REQUEST[nama];
$_SESSION[tujuan]=$_REQUEST[tujuan];
$_SESSION[jenis]=$_REQUEST[jenis];
header('location:tampil_tiket.php');
}
?>