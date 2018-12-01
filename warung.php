<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Warung</title>
</head>

<body>
<center> <h2><strong>Nota Mbayar Warung</strong></h2><br />


<form>
<table border="0">
<tr>
    <td>
    Makanan 
    </td>
    <td>
    </td>
    <td>
    Minuman
    </td>
</tr>
<tr>
	<td>
  <input type="checkbox" name="pecel" value="5000" /> Pecel<br />
  <input type="checkbox" name="bakso" value="10000" /> Bakso<br />
  <input type="checkbox" name="soto" value="12000" /> Soto<br />
    </td>
    <td>
    5000<br />
    10000<br />
    12000<br />
    </td>
	<td>
  <input type="checkbox" name="kopi" value="2000" /> Kopi<br />
  <input type="checkbox" name="teh" value="1500" /> Teh<br />
  <input type="checkbox" name="es" value="5000" /> Es Campur<br />
    </td>
    <td>
    2000<br />
	1500<br />
	5000<br />
	</td>
</tr>
</table><br />

  <input type="submit" value="Bayar" />
</form>

<?php
	$p=$_REQUEST["pecel"];
	$b=$_REQUEST["bakso"];
	$s=$_REQUEST["soto"];
	$k=$_REQUEST["kopi"];
	$t=$_REQUEST["teh"];
	$e=$_REQUEST["es"];
	$total=$p+$b+$s+$k+$t+$e;
	if($_REQUEST[pecel]==""){ echo "Gak ada pecelnya????";}
	echo "<br />Total Bayar : ".$total;
?>
</center>
</body>
</html>