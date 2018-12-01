<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("db_orang");
mysql_query("insert into data_orang values('$_REQUEST[nama]','$_REQUEST[tempat]','$_REQUEST[tanggal]','$_REQUEST[jkel]','$_REQUEST[alamat]')");
header('location:update_delete.php');
?>