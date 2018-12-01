<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table cellspacing="1" cellpadding="2">
<tr bgcolor="#999999"><th>No</th><th>NIS</th><th>Nama Siswa</th><th>Action</th></tr>
<?php include "koneksi.php";
$data=mysql_query("select*from siswa order by nis");
$no=1;
while($isi=mysql_fetch_array($data)){ ?>
<tr bgcolor="#CCCCCC">
<td><?php echo $no++;?></td>
<td><?php echo $isi[nis];?></td>
<td><?php echo $isi[nama];?></td>
<td><a href="#">Random</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>