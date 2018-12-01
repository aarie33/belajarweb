<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gaji Pegawai</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="jquery-1.8.3.js"></script>
<script>
$(document).ready(function(){
	$("body tr:odd").addClass("ganjil");
	$("body tr:even").addClass("genap");
});
</script>
<style type="text/css">
th{background:#FC3;padding-right:10px;padding-left:10px;}
.ganjil{background-color:#FFF;}
.genap{background-color:#FFC;}
td{padding-right:10px;padding-left:10px;}
table tr td a{text-decoration:none;}
</style>
</head>

<body>
<?php include "index.php";?>
<center>
<div id="judul">Gaji Pegawai</div>
<table cellpadding="0" cellspacing="0">
<tr><th>No</th>
<th>NIP</th>
<th>Nama Pegawai</th>
<th>Ruang</th>
<th>Golongan</th>
<th>Gapok</th>
<th>Status</th>
<th>Tunjangan Keluarga</th>
<th>Jumlah Anak</th>
<th>Tunjangan Anak</th>
<th>Gaji Pegawai</th>
</tr>
<?php
include "koneksi.php";
$peg=mysql_query("select*from pegawai order by nip");
$no=1;
while($isi=mysql_fetch_array($peg)){ 
$data=mysql_query("select golongan.ruang,golongan.golongan,golongan.gaji_pokok,pegawai.status from pegawai inner join golongan on pegawai.kd_ruang=golongan.kd_ruang where nip='$isi[0]'");
$isi_gaji=mysql_fetch_array($data);
if($isi[3]=="Menikah"){
$tun_kel=$isi_gaji[2]*15/100;
}else{$tun_kel=0;}
if($isi[4]>=2){
	$tun_anak=1200000;
}else if($isi[4] > 0 &&$isi[4] < 2){
	$tun_anak=600000;
}else{$tun_anak=0;}
$gaji_pegawai=$isi_gaji[2]+$tun_kel+$tun_anak;
?>
<tr>
<td><?php echo $no++;?></td>
<td><?php echo $isi[0];?></td>
<td><?php echo $isi[1];?></td>
<td><?php echo $isi_gaji[0];?></td>
<td><?php echo $isi_gaji[1];?></td>
<td><?php echo $isi_gaji[2];?></td>
<td><?php echo $isi[3];?></td>
<td><?php echo $tun_kel;?></td>
<td><?php echo $isi[4];?></td>
<td><?php echo $tun_anak;?></td>
<td><?php echo $gaji_pegawai;?></td>
</tr>
<?php } ?>
</table>
</center>
</body>
</html>