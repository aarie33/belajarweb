<?php session_start(); ?>
<html>
<head>
<title>App Data Orang</title>
<link href="style_umum.css" rel="stylesheet" type="text/css">
</head>

<body>
<form>
<center>
<table>
<tr bgcolor="#CCCC00">
	<td><center><strong>No.</strong></center></td>
    <td><center><strong>Nama</strong></center></td>
    <td><center><strong>Tempat</strong></center></td>
    <td><center><strong>Tanggal Lahir</strong></center></td>
    <td><center><strong>Jenis Kelamin</strong></center></td>
    <td><center><strong>Alamat</strong></center></td>
    <td colspan="3"><center><strong>Action</strong></center></td>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_orang");
$data=mysql_query("select*from data_orang");
$i=1;
while($isi=mysql_fetch_array($data))
{ 
if($i%2==0){
?>
<tr bgcolor="#CCCCCC">
	<td><?php echo $i++; ?></td>
    <td><?php echo $isi[0]; ?></td>
    <td><?php echo $isi[1]; ?></td>
    <td><?php echo $isi[2]; ?></td>
    <td><?php echo $isi[3]; ?></td>
    <td><?php echo $isi[4]; ?></td>
    <td><a href="update_delete_update.php?nm=<?php echo $isi[0]; ?>"><font color="#0033FF"><img src="image/b_edit.png">Update</font></a></td>
    <td><a href="update_delete_delete.php?nm=<?php echo $isi[0]; ?>"><font color="#FF0000"><img src="image/b_drop.png">Delete</font></a></td>
</tr>
<?php }else{ ?>
<tr bgcolor="#999999">
	<td><? echo $i++; ?></td>
    <td><? echo $isi[0]; ?></td>
    <td><? echo $isi[1]; ?></td>
    <td><? echo $isi[2]; ?></td>
    <td><? echo $isi[3]; ?></td>
    <td><? echo $isi[4]; ?></td>
    <td><a href="update_delete_update.php?nm=<?php echo $isi[0]; ?>"><font color="#0033FF"><img src="image/b_edit.png">Update</font></a></td>
    <td><a href="update_delete_delete.php?nm=<?php echo $isi[0]; ?>"><font color="#FF0000"><img src="image/b_drop.png">Delete</font></a></td>
</tr>
<?php } } ?>
<tr>
	<td colspan="6"></td>
    <td colspan="2" bgcolor="#999999"><center></strong><a href="update_insert.php"><font color="#FFFF00"><img src="image/b_usradd.png">Insert</font></a></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>