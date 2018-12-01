<?php
mysql_connect("localhost","root","");
mysql_select_db("spp");
for($i=1;$i<=12;$i++){
	if($i==1){ echo "$i. I LOVE YOU satu<br>";mysql_query("INSERT INTO spp VALUES('a','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==2){ echo "$i. I LOVE YOU dua<br>";mysql_query("INSERT INTO spp VALUES('b','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==3){ echo "$i. I LOVE YOU tiga<br>";mysql_query("INSERT INTO spp VALUES('c','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==4){ echo "$i. I LOVE YOU empat<br>";mysql_query("INSERT INTO spp VALUES('d','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==5){ echo "$i. I LOVE YOU lima<br>";mysql_query("INSERT INTO spp VALUES('e','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==6){ echo "$i. I LOVE YOU enam<br>";mysql_query("INSERT INTO spp VALUES('f','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==7){ echo "$i. I LOVE YOU tujuh<br>";mysql_query("INSERT INTO spp VALUES('g','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==8){ echo "$i. I LOVE YOU delapan<br>";mysql_query("INSERT INTO spp VALUES('h','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==9){ echo "$i. I LOVE YOU sembilan<br>";mysql_query("INSERT INTO spp VALUES('i','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==10){ echo "$i. I LOVE YOU sebuluh<br>";mysql_query("INSERT INTO spp VALUES('j','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==11){ echo "$i. I LOVE YOU sebelas<br>";mysql_query("INSERT INTO spp VALUES('k','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
	if($i==12){ echo "$i. I LOVE YOU duabelas<br>";mysql_query("INSERT INTO spp VALUES('l','$_REQUEST[q]','$bulan','$isi[tahun_ajaran]','$tgl','$jam','$bayar','$isi_potongan[jenis_keringanan]','$isi_potongan[potongan]')");}
}
?>