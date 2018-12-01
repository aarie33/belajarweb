<?php
$KodeCust = $_REQUEST['id'];
$queryPelanggan = mysql_query("select * from pelanggan where KodeCust = '$KodeCust'");
$tampilPelanggan = mysql_fetch_array($queryPelanggan);
?>
<form name="EditPelanggan" method="post" action="modData.php">
  <center>
    <h1>Edit Pelanggan</h1>
   
    <table width="419" border="0" class="editPelanggan">
      <tr>
        <td width="125">Kode Pelanggan : </td>
        <td width="278"><label>
          <input name="txtKodePelanggan" type="text" id="txtKodePelanggan" value="<?php echo $tampilPelanggan[KodeCust]; ?>">
        </label></td>
      </tr>
      <tr>
        <td>Nama : </td>
        <td><input name="txtNama" type="text" id="txtNama" value="<?php echo $tampilPelanggan[Nama]; ?>"></td>
      </tr>
      <tr>
        <td>Alamat : </td>
        <td><input name="txtAlamat" type="text" id="txtAlamat" value="<?php echo $tampilPelanggan[Alamat]; ?>"></td>
      </tr>
      <tr>
        <td>Telepon : </td>
        <td><input name="txtTelepon" type="text" id="txtTelepon" value="<?php echo $tampilPelanggan[Telepon]; ?>"></td>
      </tr>
      <tr>
        <td>HP : </td>
        <td><input name="txtHp" type="text" id="txtHp" value="<?php echo $tampilPelanggan[HP]; ?>"></td>
      </tr>
      <tr>
        <td>No KTP : </td>
        <td><input name="txtNoKtp" type="text" id="txtNoKtp" value="<?php echo $tampilPelanggan[NoKTP]; ?>"></td>
      </tr>
      <tr>
        <td>KK : </td>
        <td><input name="txtKk" type="text" id="txtKk" value="<?php echo $tampilPelanggan[KK]; ?>"></td>
      </tr>
      <tr>
        <td>Slip gaji : </td>
        <td><input name="txtSlipGaji" type="text" id="txtSlipGaji" value="<?php echo $tampilPelanggan[SlipGaji]; ?>"></td>
      </tr>
      <tr>
        <td>Keterangan : </td>
        <td><input name="txtKeterangan" type="text" id="txtKeterangan" value="<?php echo $tampilPelanggan[Keterangan]; ?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>
          <input name="tipe" type="hidden" id="hiddenField" value="simpanPelanggan">
          <input type="submit" name="Submit" value="Simpan" class="btn_simpan">
        </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </center>
  
</form>

