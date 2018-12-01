<?php
$KodeCash = $_REQUEST['id'];
$sql = mysql_query("select * from belicash where KodeCash = '$KodeCash'");
$data = mysql_fetch_array($sql);
	if($_GET[id] != "") {
 	$value = "Edit";	//modus edit data lama
 	}
 	else{
 	$value = "Simpan";	//modus input data baru
 	$data[TanggalCash]=date("Y-m-d");
	//buat kode otomatis
	$query_oto = mysql_query("select max(KodeCash)
								as maksi from belicash");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto[maksi],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
		$kode = $kode."0";
	   $data[KodeCash] = "CSH$kode$data_potong";
 	}
?>
<form name="EditPelanggan" method="post" action="modData.php">
  <center>
    <h1>Beli Cash Edit</h1>
   
    <table width="419" border="0" class="editPelanggan">
      <tr>
        <td width="125">Kode Cash : </td>
        <td width="278"><label>
          <input name="KodeCash" type="text" id="KodeCash" value="<?php echo $data[KodeCash]; ?>">
        </label></td>
      </tr>
      <tr>
        <td>Tanggal : </td>
        <td><input name="TanggalCash" type="text" id="TanggalCash" value="<?php echo $data[TanggalCash]; ?>"></td>
      </tr>
      <tr>
        <td>Pelanggan : </td>
        <td><label>
          <select name="KodeCust" id="KodeCust">
		  <option value=""></option>
	<?php
	$query_pelanggan = mysql_query("select KodeCust,
											Nama 
											from pelanggan");
	while ($data2=mysql_fetch_array($query_pelanggan)){
		if($data[KodeCust]==$data2[KodeCust])
	 		echo "<option value=$data2[KodeCust] selected>
	 		$data2[Nama]</option>";
		else 
	 		echo "<option value=$data2[KodeCust]>
	 		$data2[Nama]</option>";
	}
	?>
          </select>
        </label></td>
      </tr>
      <tr>
        <td>Merek Motor </td>
        <td><select name="KodeMotor" id="KodeMotor">
		<option value=""></option>
		  <?php
		  $query_motor = mysql_query("select KodeMotor,
		  								         Merk
										   from motor");
		  while($data3 = mysql_fetch_array($query_motor)){
		  	if($data[KodeMotor]==$data3[KodeMotor]){
				echo "<option value=$data3[KodeMotor] selected>$data3[Merk]</option>";
				}
				else{
					echo"<option value=$data3[KodeMotor]>$data3[Merk]</option>";
				}
		  }
		  ?>
          </select></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input name="Harga" type="text" id="Harga" value="<?php echo $data[Harga]; ?>"></td>
      </tr>
      <tr>
        <td>Bayar</td>
        <td><input name="Bayar" type="text" id="Bayar" value="<?php echo $data[Bayar]; ?>"></td>
      </tr>
      <tr>
        <td>Keterangan : </td>
        <td><input name="Keterangan" type="text" id="Keterangan" value="<?php echo $data[Keterangan]; ?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>
          <input name="tipe" type="hidden" id="hiddenField" value="simpanPelanggan">
		  <input name="btnSimpan" type="submit"  class="btn_simpan" value="<?php echo $value ?>" />
        </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </center>
  
</form>

