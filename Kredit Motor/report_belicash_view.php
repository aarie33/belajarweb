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
   <center> <h2>LAPORAN BELI CASH </h2>
	<h3>
Berdasarkan: <?php echo $_POST['berdasar'] ?></h3>
	<?php
if($_POST['berdasar'] == "Semua Data"){
	//modus delete Semua Data
	$sql = "select a.KodeCash,
					 a.TanggalCash,
					 b.Nama,
					 c.Merk,
					 a.Harga,
					 a.Bayar,
					 a.Keterangan
						from belicash a
						inner join pelanggan b using(KodeCust)
						inner join motor c using(KodeMotor)";
}
else if ($_POST['berdasar'] == "Tanggal"){
	//modus tanggal
	$dari = $_POST['dari'];
	$ke = $_POST['ke'];
	$sql = "select a.KodeCash,
					 a.TanggalCash,
					 b.Nama,
					 c.Merk,
					 a.Harga,
					 a.Bayar,
					 a.Keterangan
				from belicash a
				inner join pelanggan b using(KodeCust)
				inner join motor c using(KodeMotor)
				where (a.TanggalCash >= '$dari' and
				       a.TanggalCash <= '$ke')";
	}
	else if($_POST['berdasar'] == "Pencarian Kata"){
	//modus berdasarkan kata
	$field = $_POST['field'];
	$kata = $_POST['kata'];
	$sql = "select a.KodeCash,
				   a.TanggalCash,
				   b.Nama,
				   c.Merk,
				   a.Harga,
				   a.Bayar,
				   a.Keterangan
				from belicash a
				inner join pelanggan b using(KodeCust)
				inner join motor c using(KodeMotor)
				where $field like '%$kata%'";
  	
	}
$query = mysql_query($sql);
?></center>
<center>
<table width="100%" border="0" bgcolor="#000000">
      <tr bgcolor="#FFFFFF"  height="40">
        <th width="5%" scope="col">No</th>
        <th width="11%" scope="col">KodeCash</th>
        <th width="12%" scope="col">TanggalCash</th>
        <th width="15%" scope="col"> Nama Pembeli </th>
        <th width="12%" scope="col">Merk Motor</th>
        <th width="9%" scope="col">Harga</th>
        <th width="10%" scope="col">Bayar</th>
        <th width="11%" scope="col">Keterangan</th>
      </tr>
      <?php
			   $i=1;
			  while ($data = mysql_fetch_array($query)){
			echo "<tr bgcolor=white>
              <td align=center>$i</td>
              <td align=center >$data[KodeCash]</td>
              <td align=center>$data[TanggalCash]</td>
              <td align=center>$data[Nama]</td>
              <td align=center>$data[Merk]</td>
			  <td align=center>Rp.$data[Harga]</td>
			  <td align=center>Rp.$data[Bayar]</td>
			  <td align=center>$data[Keterangan]
			  </td>
            </tr>";
			$i++;
			}
			?>
    </table></center>
    <center>
    	<input type="submit" name="button" id="button" value="Kembali" onclick="back()" />
		<input type="submit" name="button" id="button" value="Print" onclick="print()" />
        <form method="get" action="kelfin-includes/laporan_excel.php">
          <input name="tipeLaporan" type="hidden" id="tipeLaporan" value="belicash" />
          <input name="sql" type="hidden" id="sql" value="<?php echo $sql; ?>" />
         <input type="submit" name="button2" id="button2" value="Ekspor ke Ms. Excel" />
        </form>
	</center>
</body>
</html>

