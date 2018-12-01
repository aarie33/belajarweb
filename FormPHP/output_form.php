<!DOCTYPE>
<html>
<head>
<title>Output Form PHP</title>
</head>

<body>
<h2>Hasil Output Form</h2>
NIM : <?php echo $_REQUEST['nim']; ?><br>
Nama : <?php echo $_REQUEST['nama']; ?><br>
Golongan : <?php echo $_REQUEST['golongan']; ?><br>
Jenis Kelamin : <?php echo $_REQUEST['jkel']; ?><br>
Hobi : <?php echo $_REQUEST['hobi']; ?><br>
<a href="form.php">Kembali ke Form</a>
</body>
</html>