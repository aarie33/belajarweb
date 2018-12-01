<?php
$kodeMotor = $_REQUEST['id'];
$queryMotor = mysql_query("select * from motor where KodeMotor = '$kodeMotor'");
$tampilMotor = mysql_fetch_array($queryMotor);
?>
<form name="editMotor" method="post" action="modData.php">
  <center><h1>Edit Motor </h1>
  <table width="397" height="186" border="0" class="editMotor" >
    <tr>
      <td width="103">Kode Motor</td>
      <td width="278"><label for="txtKodeMotor"></label>
      <input name="txtKodeMotor" type="text" id="txtKodeMotor" value="<?php echo $tampilMotor['KodeMotor']; ?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>Merek</td>
      <td><input name="txtMerek" type="text" id="txtMerek" value="<?php echo $tampilMotor['Merk']; ?>"></td>
    </tr>
    <tr>
      <td>Warna</td>
      <td><input name="txtWarna" type="text" id="txtWarna" value="<?php echo $tampilMotor['Warna']; ?>"></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><input name="txtHarga" type="text" id="txtHarga" value="<?php echo $tampilMotor['Harga']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="tipe" type="hidden" id="hiddenField" value="simpanMotor">        <input type="submit" name="btn_simpan" id="button" value="Simpan" class="btn_simpan"></td>
    </tr>
  </table>
  </center>  
</form>

