<?php
	//dialog untuk edit
	if($_GET['edit']=="true"){
 		echo"<div id='jQueryDialog1' title='Edit Pelanggan'>";
 		include("kelfin-page/pelanggan_edit.php");
 		echo "</div>";
	}
	//pembagian data per halaman 10 baris.
	$halaman = get_Halaman("pelanggan");
	$hal = get_NomorHalaman($_GET['hal']);

$query = mysql_query("select * from pelanggan LIMIT $hal , 10");
?>
<center>
	<h1>
    	Data Pelanggan
	</h1>
<table border='0' width='1100px'>
	<tr class="tr_grid" align="center" height="40">
   		<td>Kode Pelanggan </td>
    	<td>Nama</td>
    	<td>Alamat</td>
    	<td>Telepon</td>
		<td>HP</td>
		<td>No KTP</td>
		<td>KK</td>
		<td width="100">Slip gaji</td>
		<td>Action</td>
	</tr>
<?php
$i=1;
while($data = mysql_fetch_array($query)){
  echo "<tr bgcolor='#CCCCCC' align='center' height='30' id='tabel'>
  		<td>$data[KodeCust]</td>
		<td>$data[Nama]</td>
		<td>$data[Alamat]</td>
		<td>$data[Telepon]</td>
		<td>$data[HP]</td>
		<td>$data[NoKTP]</td>
		<td>$data[KK]</td>
		<td>Rp. $data[SlipGaji]</td>
		<td width='90'>
		<a href='?page=view_pelanggan&edit=true&id=$data[KodeCust]'>[Edit]</a>
		<a href=modData.php?tipe=hapusPelanggan&id='$data[KodeCust]' onclick='return confirm(\"Hapus $data[KodeCust] ?\")'>[Hapus]</a></td>
</tr>";
$i++;
}
?>
<tr>
<td bgcolor="#666" colspan="9" class="tr_grid">
<?php
for($i=1; $i <= $halaman; $i++){
	echo "<a href='?page=view_pelanggan&hal=$i'>Page $i |</a> &nbsp;";
}
?>
</td>
</tr>
</table>
