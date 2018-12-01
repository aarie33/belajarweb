<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "test";

ini_set('display_errors',TRUE);

$tanggal=date("d/m/Y");
	
$konek = mysql_connect($server,$user,$password) or die("Koneksi gagal");

mysql_select_db($database, $konek) or die("Database tidak bisa dibuka");
?>
