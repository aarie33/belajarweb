<?php
//file yang dipanggil HargaMotor.js
//untuk Mengambil harga Motor pada saat Combo Box Motor terpilih
include("kelfin-includes/defines.php");
include("kelfin-includes/connect.php");
$kodeMotor = $_GET['KodeMotor'];
$sql = mysql_query("select Harga from motor where KodeMotor = '$kodeMotor'");
$i = 1;
$harga = mysql_fetch_array($sql);
echo $harga['Harga'];
?>