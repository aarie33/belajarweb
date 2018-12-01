<?php session_start();
if($_REQUEST[user]<>"admin"||$_REQUEST[pass]<>"arie"){
	header('location:login.html');
}else{
$_SESSION[user]=$_REQUEST[user];
header('location:halaman.html');
}
?>