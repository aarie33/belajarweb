<?php session_start(); ?>
<html>
<head>
<title>Data suplier</title>
<link href="style_umum.css" rel="stylesheet" type="text/css">
</head>

<body>
<form>
<center>
<table>
<tr bgcolor="#CCCC00">
	<td>kode_customer</td>
    <td>nama_customer</td>
    <td>alamat_customer</td>
    <td>telepon_customer</td>
    <td colspan="3">Action</td>
</tr>
<?
mysql_connect("localhost","root","");
mysql_select_db("persediaan");
$data=mysql_query("select*from pelanggan");
$i=1;
while($isi=mysql_fetch_array($data))
{ ?>
<tr bgcolor="#CCCCCC">
    <td><? echo $isi[0]; ?></td>
    <td><? echo $isi[1]; ?></td>
    <td><? echo $isi[2]; ?></td>
    <td><? echo $isi[3]; ?></td>
    <td><a href="update_delete_update.php?nm=<?php echo $isi[0]; ?>"><font color="#0033FF"><img src="image/b_edit.png">Update</font></a></td>
    <td><a href="update_delete_delete.php?nm=<?php echo $isi[0]; ?>"><font color="#FF0000"><img src="image/b_drop.png">Delete</font></a></td>
</tr>
<?php } ?>
<tr>
	<td colspan="6"></td>
    <td colspan="2" bgcolor="#999999"><center></strong><a href="isi_suplier.php".php".php"><font color="#FFFF00"><img src="image/b_usradd.png">Insert</font></a></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>