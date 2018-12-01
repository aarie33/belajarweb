<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("db_orang");
mysql_query("delete from data_orang where nama='$_SESSION[nm]'");
header('location:update_delete.php');
?>