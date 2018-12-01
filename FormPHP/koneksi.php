<?php
$db=mysqli_connect("localhost","root","","workshop");
if(!($db)){
	echo "<script> alert(\"Tidak bisa terkoneksi dengan database...!, Koneksi akan ditutup..!\");</script>";
	die;
}
?>