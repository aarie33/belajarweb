<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("db_orang");
mysql_query("update data_orang set nama='$_REQUEST[nama]', tempat='$_REQUEST[tempat]', tanggal_lahir='$_REQUEST[tanggal]', jenis_kelamin='$_REQUEST[jkel]', alamat='$_REQUEST[alamat]' where nama='$_SESSION[nm]'");
header('location:update_delete.php');
?>