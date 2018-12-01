<?php
$KodeCust = $_REQUEST['id'];
$queryPelanggan = mysql_query("select * from pelanggan where KodeCust = '$KodeCust'");
$tampilPelanggan = mysql_fetch_array($queryPelanggan);
//buat kode otomatis
	$query_oto = mysql_query("select max(KodeCust) as maksi from pelanggan");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto['maksi'],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
		$kode = $kode."0";
	   $data['KodeCust'] = "CUS$kode$data_potong";
?>
<form name="EditPelanggan" method="post" action="modData.php">
  <center>
    <h1>Tambah Pelanggan</h1>
   
    <table width="420" height="350" border="0" class="tambahPelanggan">
      <tr>
        <td width="125">Kode Pelanggan : </td>
        <td width="278"><label>
          <input name="KodeCust" type="text" id="KodeCust" value="<?php echo $data['KodeCust']; ?>">
        </label></td>
      </tr>
      <tr>
        <td>Nama : </td>
        <td><input name="Nama" type="text" id="Nama"></td>
      </tr>
      <tr>
        <td>Alamat : </td>
        <td><input name="Alamat" type="text" id="Alamat"></td>
      </tr>
      <tr>
        <td>Telepon : </td>
        <td><input name="Telepon" type="text" id="Telepon"></td>
      </tr>
      <tr>
        <td>HP : </td>
        <td><input name="HP" type="text" id="HP"></td>
      </tr>
      <tr>
        <td>No KTP : </td>
        <td><input name="NoKTP" type="text" id="NoKTP"></td>
      </tr>
      <tr>
        <td>KK : </td>
        <td><input name="KK" type="text" id="KK"></td>
      </tr>
      <tr>
        <td>Slip gaji : </td>
        <td><input name="SlipGaji" type="text" id="SlipGaji"></td>
      </tr>
      <tr>
        <td>Keterangan : </td>
        <td><input name="Keterangan" type="text" id="Keterangan"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>
          <input name="tipe" type="hidden" id="hiddenField" value="tambahPelanggan">
          <input type="submit" name="Submit" value="Simpan" class="btn_simpan">
        </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </center>
  
</form>

