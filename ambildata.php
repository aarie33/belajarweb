<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("db_ekskul"); 
$nis = $_GET['q']; 
if($nis){ 
$query = mysql_query("select*from siswa where NIS=$nis"); 
while($d = mysql_fetch_array($query)){ 
echo $d['kelas']; 
echo $d['alamat']; 
echo $d['jkel']; 
} 
} 
?> 