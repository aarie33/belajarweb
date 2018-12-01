<!DOCTYPE html>
<html>
<head>
<title>Form PHP</title>
</head>

<body>
<h2>Form Biodata</h2>
<form method="post" action="output_form.php">
NIM : <input type="text" name="nim"><br>
Nama : <input type="text" name="nama"><br>
Golongan : <input type="text" name="golongan"><br>
Jenis Kelamin : <input type="radio" name="jkel" value="Laki-laki"> Laki-laki
				<input type="radio" name="jkel" value="Perempuan"> Perempuan <br>
Hobi : <textarea name="hobi"></textarea><br>
<input type="submit" value="Simpan">
</form>
</body>
</html>