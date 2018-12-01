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
<div id="judul">Data Golongan</div>
<table cellpadding="0" cellspacing="0">
<tr><th>No</th>
<th>Kode Golongan</th>
<th>Ruang</th>
<th>Golongan</th>
<th>Gaji Pokok</th>
<th colspan="2">Action</th>
</tr>
<?php
include "koneksi.php";
$buku=mysql_query("select*from golongan");
$no=1;
while($isi_buku=mysql_fetch_array($buku)){ ?>
<tr>
<td><?php echo $no++;?></td>
<td><?php echo $isi_buku[0];?></td>
<td><?php echo $isi_buku[1];?></td>
<td><?php echo $isi_buku[2];?></td>
<td><?php echo $isi_buku[3];?></td>
<td><a href="update_buku.php?kd=<?php echo $isi_buku[0];?>"><img src="b_edit.png" />Update</a></td>
<td><a href="#"><img src="b_drop.png" />Delete</a></td>
</tr>
<?php } ?>
</table>
</center>
</body>
</html>