<?php
$koneksi = mysql_connect(hostDb,userDb,passDb) or
	die("<h1>Koneksi ke Database Gagal</h1>");
$db = mysql_select_db(database,$koneksi) or
	die("<h1>Gagal Memilih database</h1>");
?>