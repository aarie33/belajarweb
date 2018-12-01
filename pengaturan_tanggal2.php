<html>
<head>
<title>Tanggal dengan strtotime</title>
</head>

<body>
<form>
<strong>Tambah Tanggal</strong><br>
Tanggal sekarang : 
<?php
echo date('j-m-Y');
$tgl=date('j-m-Y');
?><br />
<input type="text" name="plus"/>
<input type="submit"/>
</form>
<?php
$plus=$_REQUEST[plus];
$x=strtotime(+$plus.'day',strtotime($tgl));
$hasil=date('l,j-m-Y',$x);
echo $plus." Hari selanjutnya<br>";
echo $hasil;
?>
</body>
</html>