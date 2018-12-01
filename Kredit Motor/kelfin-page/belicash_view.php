<?php
if($_GET['edit']=="true"){
 echo"<div id='jQueryDialog1' title='Beli Cash Edit'>";
 include("kelfin-page/belicash_edit.php");
 echo "</div>";
}
	$halaman = get_Halaman("belicash");
	$hal = get_NomorHalaman($_GET['hal']);
$sql = ("select a.KodeCash,
							 a.Tanggalcash,
							 b.Nama,
							 c.Merk,
							 a.Harga,
							 a.Bayar,
							 a.Keterangan
						from belicash a
					inner join pelanggan b using(KodeCust)
					inner join motor c using(KodeMotor)
					ORDER BY `a`.`KodeCash` DESC
					LIMIT $hal , 10");
$query = mysql_query($sql);
?>
<center><h1>Data Beli Cash</h1></center>
	<table border='0' width='1100px'>
	<tr class="tr_grid" align="center" height="40">
	<td>No</td>
    <td>Kode Cash</td>
    <td>Tanggal</td>
    <td>Pelanggan</td>
	<td>Merek</td>
	<td>Harga</td>
	<td>Bayar</td>
	<td>Ket</td>
	<td>Action</td>
	</tr>
<?php
$i=((1*$hal)+1);
while($data = mysql_fetch_array($query)){
		$nomor = $i;
  echo "<tr bgcolor='#CCCCCC' align='center' height='30'  id='tabel'>
  		<td>$i</td>
  		<td>$data[KodeCash]</td>
		<td>$data[Tanggalcash]</td>
		<td>$data[Nama]</td>
		<td>$data[Merk]</td>
		<td>Rp. $data[Harga]</td>
		<td>Rp. $data[Bayar]</td>
		<td>$data[Keterangan]</td>
		<td><a href='?page=belicash_view&id=$data[KodeCash]&edit=true'>
			[Edit]</a>
			<a href=modData.php?tipe=hapusBeliCash&id=$data[KodeCash] onclick='return confirm(\"Hapus $data[KodeCash]?\")'>[Hapus]</a></a></td>
</tr>";
$i++;
}
?>
<tr>
<td bgcolor="#666" colspan="9" class="tr_grid">
<?php
for($i=1; $i <= $halaman; $i++){
	echo "<a href='?page=belicash_view&hal=$i'>Page $i |</a> &nbsp;";
}
?>
</td>
</tr>
</table>