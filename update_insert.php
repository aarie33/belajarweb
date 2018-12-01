<html>
<head>
<title>Insert Data Orang</title>
<link href="style_umum.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" action="insert[proses].php">
<table>
<tr><td>Nama</td>
<td><input type="text" name="nama"/></td></tr>
<tr><td>Tempat Lahir</td>
<td><input type="text" name="tempat"/></td></tr>
<tr><td>Tanggal Lahir</td>
<td><input type="text" name="tanggal" /></td></tr>
<tr><td>Jenis Kelamin</td>
<td><input type="text" name="jkel" /></td></tr>
<tr><td>Alamat</td>
<td><input type="text" name="alamat" /></td></tr>
</table>
<a href="update_delete.php"><input type="submit" value="Back"></a>
<a href="update_insert[proses].php"><input type="submit" value="Insert" /></a>
</form>
</body>
</html>