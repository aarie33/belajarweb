<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gaji Pegawai</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="jquery-1.8.3.js"></script>
<script>
function tempel(){ document.getElementById("cari").focus();}
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

<body onload="tempel()">
<?php include "index.php";?>
<center>
<div id="judul">Data Pegawai</div>
<table cellpadding="0" cellspacing="0">
<tr>
  <td colspan="6"><form>Pencarian data pegawai <input type="text" name="cari" id="cari" /></form></td><th colspan="3"><a href="input_peg.php"><img src="b_newtbl.png" />Input Pegawai</a></th></tr>
<tr><th>No</th>
<th>NIP</th>
<th>Nama Pegawai</th>
<th>Kd Ruang</th>
<th>Status</th>
<th>Jumlah Anak</th>
<th colspan="3">Action</th>
</tr>
<?php
include "koneksi.php";
$data=mysql_query("select*from pegawai order by nip");
$no=1;
while($isi=mysql_fetch_array($data)){ ?>
<tr>
<td><?php echo $no++;?></td>
<td><?php echo $isi[0];?></td>
<td><?php echo $isi[1];?></td>
<td><?php echo $isi[2];?></td>
<td><?php echo $isi[3];?></td>
<td><?php echo $isi[4];?></td>
<td><a href="ses.php?nip=<?php echo $isi[0];?>"><img src="b_edit.png" /></a></td>
<td><a href="#"><img src="b_drop.png" /></a></td>
<td><a href="detail_gaji.php?nip=<?php echo $isi[0];?>"><img src="b_search.png" /></a></td>
</tr>
<?php } ?>
</table>
</center>
</body>
</html>