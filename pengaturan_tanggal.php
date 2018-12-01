<html>
<head>
<title>Pengaturan Tanggal PHP</title>
</head>
<body>
<form>
<strong>Pengaturan Tanggal PHP</strong><br>
<?php
echo date("d-m-Y");
?><br>
<input type="text" name="tgl"/>
<input type="submit"/><br>
<?php
echo "Tanggal Setelahnya :";
for($i=1;$i<=$_REQUEST[tgl];$i++){
	echo "<br>".date("l,d-m-Y",time()+($i*24*60*60)); }
?>
</form>
</body>
</html>