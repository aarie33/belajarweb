<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Transaksi Kelfin Eka Motor</title>
<link rel='shortcut icon' href='Kelfin-Images/icon.png' />
<style type="text/css">
#logo {
 width: 300px;
 height: 200px;	
 float:left;
}
#judul {
 margin-left : 205px;
 width:900px;
 height: 200px;	
 text-align:center;
}

</style>
</head>

<body>
<?php
ini_set("display_errors",1);
include("kelfin-includes/defines.php");
include("kelfin-includes/fungsi.php");
include("kelfin-includes/connect.php");
?>
<div id="logo"><img src="Kelfin-Images/logo.png" alt="" width="221" height="172" /></div>
<div id="judul">
<br />
<br />
  <font size="+3">KELFIN EKA MOTOR </font><br />
JL. BASUKI RAHMAD No. 35-37 (0356) 211000<br />
FAX. (0356) 211000 TUBAN - JAWA TIMUR<br />
Email : sales@kelfin-eka.com Website : www.kelfin-eka.com
</div>
<hr size="4" color="#000000" />    
   <center> <h2>LAPORAN BELI KREDIT </h2>
	<h3>
Berdasarkan: <?php echo $_POST['berdasar'] ?></h3>
	<?php
if($_POST['berdasar'] == "Semua Data"){
	//modus delete Semua Data
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
}
else if ($_POST['berdasar'] == "Tanggal"){
	//modus tanggal
	$dari = $_POST['dari'];
	$ke = $_POST['ke'];
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
				 inner join motor using (KodeMotor)
				where (belikredit.TanggalKredit >= '$dari' and
				       belikredit.TanggalKredit <= '$ke')";
	}
	else if($_POST['berdasar'] == "Pencarian Kata"){
	//modus berdasarkan kata
	$field = $_POST['field'];
	$kata = $_POST['kata'];
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
				 inner join motor using (KodeMotor)
				where $field like '%$kata%'";
  	
	}
$query = mysql_query($sql);
?></center>
<center>
<table width="100%" border="0" bgcolor="#000000">
      <tr bgcolor="#FFFFFF"  height="40">
        <th width="5%" scope="col">No</th>
        <th width="11%" scope="col">Kode Kredit</th>
        <th width="12%" scope="col">Tanggal Kredit</th>
        <th width="15%" scope="col"> Nama Pelanggan </th>
        <th width="12%" scope="col">Merk Motor</th>
        <th width="9%" scope="col">Harga</th>
        <th width="10%" scope="col">Uang Muka</th>
        <th width="11%" scope="col">Bunga</th>
        <th width="11%" scope="col">Cicilan</th>
        <th width="11%" scope="col">AngsuranKe</th>
        <th width="11%" scope="col">Telah Bayar</th>
        <th width="11%" scope="col">Sisa</th>
        <th width="11%" scope="col">Keterangan</th>
      </tr>
      <?php
			   $i=1;
			  while ($data = mysql_fetch_array($query)){
			echo "<tr bgcolor=white>
              <td align=center>$i</td>
              <td align=center >$data[KodeKredit]</td>
              <td align=center>$data[TanggalKredit]</td>
              <td align=center>$data[Nama]</td>
              <td align=center>$data[Merk]</td>
			  <td align=center>Rp.$data[Harga]</td>
			  <td align=center>Rp.$data[UangMuka]</td>
			  <td align=center>$data[Bunga]</td>
			  <td align=center>$data[LamaCicilan]</td>
			  <td align=center>$data[AngsuranKe]</td>
			  <td align=center>$data[TelahBayar]</td>
			  <td align=center>$data[Sisa]</td>
			  <td align=center>$data[Keterangan]</td>
            </tr>";
			$i++;
			}
			?>
    </table></center>
    <center>
    	<input type="submit" name="button" id="button" value="Kembali" onclick="back()" />
		<input type="submit" name="button" id="button" value="Print" onclick="print()" />
        <form method="get" action="kelfin-includes/laporan_excel.php">
          <input name="tipeLaporan" type="hidden" id="tipeLaporan" value="beliKredit" />
          <input name="sql" type="hidden" id="sql" value="<?php echo $sql; ?>" />
         <input type="submit" name="button2" id="button2" value="Ekspor ke Ms. Excel" />
        </form>
	</center>
</body>
</html>

