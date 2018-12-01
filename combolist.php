<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tempat Tanggal Lahir</title>
</head>

<body>
<center>
<h2><strong>Tentukan Tempat Tanggal Lahir Anda</strong></h2>
<form>
Nama Anda <input type="text" name="nama" /><br />
<br />

<select name="combo">
<option>---Pilih kota---</option>
<option>Surabaya</option>
<option>Jakarta</option>
<option>Malang</option>
<option>Jember</option>
<option>Lumajang</option>
<option>Probolinggo</option>
<option>Pasuruan</option>
<option>Banyuwangi</option>
<option>Situbondo</option>
<option>Bondowoso</option>
</select>
-
<select name="combo1">
<option>--Tanggal--</option>
<?php for($i=1;$i<=31;$i++)
echo "<option>$i</option>";
?>
</select>
-
<select name="combo2">
<option>--Bulan--</option>
<?php for($i=1;$i<=12;$i++)
echo "<option>$i</option>";
?>
</select>
-
<select name="combo3">
<option>--Tahun--</option>
<?php for($i=2014;$i>=1945;$i--)
echo "<option>$i</option>";
?>
</select>

<br />
<br />
<input type="submit" value="Tampil" />
<br />
<br />

<?php
echo "<h3> <strong>".$_REQUEST["nama"]."<br>"."Lahir di ".$_REQUEST["combo"]."<br> Pada : ".$_REQUEST["combo1"]."-".$_REQUEST["combo2"]."-".$_REQUEST["combo3"];
?>
</form>
</center>
<marquee direction="left" behavior="alternate">
<img src="picture020.jpg" width="10%" />
</marquee>
</body>
</html>