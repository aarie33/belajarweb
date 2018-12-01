<?php
//buat kode otomatis
	$query_oto = mysql_query("select max(KodeMotor) as maksi from motor");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto['maksi'],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
		$kode = $kode."0";
	   $data['KodeMotor'] = "MTR$kode$data_potong";
?><form name="TambahMotor" method="post" action="modData.php">
	<br>
    <br>
    <br>
  <center>
    <h1>Tambah Motor </h1></center>
  <table width="397" height="186" border="0" class="editMotor" >
    <tr>
      <td width="103">Kode Motor</td>
      <td width="278"><label for="txtKodeMotor"></label>
      <input name="txtKodeMotor" type="text" id="txtKodeMotor" value="<?php echo $data['KodeMotor']; ?>"></td>
    </tr>
    <tr>
      <td>Merek</td>
      <td><input name="txtMerek" type="text" id="txtMerek"></td>
    </tr>
    <tr>
      <td>Warna</td>
      <td><input name="txtWarna" type="text" id="txtWarna"></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><input name="txtHarga" type="text" id="txtHarga"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="tipe" type="hidden" id="hiddenField" value="tambahMotor">        <input type="submit" name="btn_simpan" id="button" value="Simpan" class="btn_simpan"></td>
    </tr>
  </table>
</form>

