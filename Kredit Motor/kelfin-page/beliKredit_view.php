<?php
	$halaman = get_Halaman("belikredit");
	$hal = get_NomorHalaman($_GET['hal']);
?>
<h1 align="center">Daftar Beli Kredit</h1>
<table width="1100" border="0"  id="tabel">
  <tr align="center" valign="middle" class="tr_grid"  height="40">
  	<td>No</td>
    <td>Kode Kredit</td>
    <td>Tanggal Kredit</td>
    <td>Nama Pelanggan</td>
    <td>Merk</td>
    <td>Harga</td>
    <td>Uang Muka</td>
    <td>Bunga</td>
    <td>Cicilan</td>
    <td>Angsuran ke</td>
    <td>Telah Bayar</td>
    <td>Sisa</td>
    <td>Keterangan</td>
    <td>Action</td>
  </tr>
  <?php
  $sql = "select belikredit.KodeKredit,
  				 belikredit.TanggalKredit,
				 pelanggan.Nama,
				 motor.Merk,
				 belikredit.Harga,
				 belikredit.UangMuka,
				 belikredit.Bunga,
				 belikredit.LamaCicilan,
				 belikredit.AngsuranKe,
				 belikredit.TelahBayar,
				 belikredit.Sisa,
				 Belikredit.Keterangan
				 from belikredit
				 inner join pelanggan using (KodeCust)
				 inner join motor using (KodeMotor)";
  $query = mysql_query($sql);
  $i=1;
  while($data = mysql_fetch_array($query)){
	echo "
  	<tr bgcolor='#CCCCCC' align='center' height='30'>
    <td>$i</td>
	<td>$data[KodeKredit]</td>
    <td>$data[TanggalKredit]</td>
    <td>$data[Nama]</td>
    <td>$data[Merk]</td>
    <td>Rp $data[Harga]</td>
    <td>Rp $data[UangMuka]</td>
    <td>$data[Bunga]%</td>
    <td>$data[LamaCicilan]x</td>
    <td>$data[AngsuranKe]</td>
    <td>Rp $data[TelahBayar]</td>
    <td>Rp $data[Sisa]</td>
    <td>$data[Keterangan]</td>
	<td><a href='#'>[Edit]</a><a href='#'>[Hapus]</a></td>
  </tr>";
  $i++;
  }
  ?>
  <tr>
<td bgcolor="#666" colspan="15" class="tr_grid">
<?php
for($i=1; $i <= $halaman; $i++){
	echo "<a href='?page=belikredit_view&hal=$i'>Page $i |</a> &nbsp;";
}
?>
</td>
</tr>
</table>
