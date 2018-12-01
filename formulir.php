<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulir Ekstrakulikuler</title>
</head>

<body>
<center>
<h1><strong>FORMULIR PENDAFTARAN EKSTRAKULIKULER</strong></h1>
<form>
<table>
<tr>
	<td>
    Nama Lengkap
    </td>
    <td>
    <input type="text" name="nama" />
    </td>
</tr>
<tr>
	<td>
    Jenis Kelamin
    </td>
	<td>
<p>
      <label>
        <input type="radio" name="Jkel" value="Laki-laki" id="Jkel_0" />
        Laki-laki</label>
      <br />
      <label>
        <input type="radio" name="Jkel" value="Perempuan" id="Jkel_1" />
        Perempuan</label>
      <br />
    </p>
    </td>
</tr>
<tr>
	<td>
    Alamat
    </td>
    <td>
    <input type="text" name="alamat" />
    </td>
</tr>
<tr>
	<td>
    Kelas
    </td>
    <td>
    <select name="kelas">
    <option>--Kelas--</option>
    <option>X</option>
    <option>XI</option>
    <option>XII</option>
    </select>
    </td>
</tr>
<tr>
	<td>
    Jurusan
    </td>
    <td>
    <select name="jurusan">
    <option>--Jurusan--</option>
    <option>Rekayasa Perangkat Lunak</option>
    <option>Teknik Sepeda Motor</option>
    <option>Akuntansi</option>
    <option>Perkantoran</option>
    <option>Pemasaran</option>
    </select>
    </td>
</tr>
<tr>
	<td>
    Tanggal Lahir
    </td>
    <td>
    <select name="tanggal">
    <option>--Tanggal--</option>
    <?php for($i=1;$i<=31;$i++)
    echo "<option>$i</option>";
    ?>
    </select>
    -
    <select name="bulan">
    <option>--Bulan--</option>
    <?php for($i=1;$i<=12;$i++)
    echo "<option>$i</option>";
    ?>
    </select>
    -
    <select name="tahun">
    <option>--Tahun--</option>
    <?php for($i=2014;$i>=1945;$i--)
    echo "<option>$i</option>";
    ?>
    </select>
	</td>
<tr>
	<td>
    Eksrakulikuler
    </td>
    <td>
    <input type="checkbox" name="sb" value="Sepak Bola" />Sepak Bola<br />
	<input type="checkbox" name="vo" value="Voli" />Voli<br />
    <input type="checkbox" name="ps" value="Pencak Silat" />Pencak Silat<br />
    <input type="checkbox" name="hd" value="Hadrah" />Hadrah<br />
    <input type="checkbox" name="tm" value="Tenis Meja" />Tenis Meja<br />
    <input type="checkbox" name="vk" value="Vokal" />Vokal<br />
    <input type="checkbox" name="pkb" value="Paskib" />Paskib<br />
    <input type="checkbox" name="pmr" value="PMR" />PMR<br />
    </td>
</tr>
</table>
<input type="submit" value="Tampil" />
<br />

<?php
$ekstra=$_REQUEST["sb"]."<br>".$_REQUEST["vo"]."<br>".$_REQUEST["ps"]."<br>".$_REQUEST["hd"]."<br>".$_REQUEST["tm"]."<br>".$_REQUEST["vk"]."<br>".$_REQUEST["pkb"]."<br>".$_REQUEST["pmr"];

echo "Nama : ".$_REQUEST["nama"]."<br>".
"Jenis Kelamin : ".$_REQUEST["Jkel"]."<br>".
"Alamat : ".$_REQUEST["alamat"]."<br>".
"Kelas : ".$_REQUEST["kelas"]."<br>".
"Jurusan : ".$_REQUEST["jurusan"]."<br>".
"Tanggal Lahir : ".$_REQUEST["tanggal"]."-".$_REQUEST["bulan"]."-".$_REQUEST["tahun"]."<br>".$ekstra;
?>
</form>
</center>
</body>
</html>