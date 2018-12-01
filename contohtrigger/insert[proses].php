<?php 
include "koneksi.php";
$tgl=date('Y-m-d');
$giat="insert";
mysql_query("insert into siswa values('$_REQUEST[nis]','$_REQUEST[nama]','$_REQUEST[kelas]')");
mysql_query("CREATE trigger tambah AFTER INSERT INTO siswa
FOR each
ROW BEGIN 
INSERT INTO giat
SET tanggal = $tgl,
jam = new.jam,
user = new.nama,
giat = $giat,
nis = new.nis;
END$$");
header('location:data siswa.php');
?>