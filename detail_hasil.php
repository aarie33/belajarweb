<link href="style_umum.css" rel="stylesheet" type="text/css" />
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_ekskul");
$isi=mysql_query("select*from siswa where NIS='$_REQUEST[NIS]'");
$x=mysql_fetch_array($isi);
?>

NIS:<?php echo $x[0]; ?><br />
Nama:<?php echo $x[1]; ?><br />
Kelas:<?php echo $x[2]; ?><br />
Alamat:<?php echo $x[3]; ?><br />
Jkel:<?php echo $x[4]; ?>