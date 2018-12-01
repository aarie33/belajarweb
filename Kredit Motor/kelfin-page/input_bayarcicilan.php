<?php
$data['TanggalCash']=date("Y-m-d");
//buat kode otomatis
	$query_oto = mysql_query("select max(NomorByr)
								as maksi from bayarcicilan");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto['maksi'],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
		$kode = $kode."0";
	   $data['NomorByr'] = "BYR$kode$data_potong";
?>
<center>
  <h1>
		Input Bayar Cicilan
  </h1>
  <form name="input_bayarCicilan" method="post" action="modData.php">
    <table width="450" height="220" border="0"  class="bayarcicilan">
      <tr>
        <td width="125">Nomor Bayar</td>
        <td width="315"><label for="nomorBayar"></label>
        <input name="nomorBayar" type="text" id="nomorBayar" value="<?php echo $data['NomorByr']; ?>"></td>
      </tr>
      <tr>
        <td>Tanggal Bayar</td>
        <td><label for="tanggalBayar"></label>
        <input name="tanggalBayar" type="text" id="tanggalBayar" value="<?php echo $data['TanggalCash']; ?>"></td>
      </tr>
      <tr>
        <td>Kode Kredit</td>
        <td>
        <select name="kodeKredit" id="kodeKredit" onChange="getNamaCust()">
		  <option value=""></option>
			<?php
				$sqlKodeKredit = mysql_query("select KodeKredit
											 from belikredit");
				while ($kodeKredit=mysql_fetch_array($sqlKodeKredit)){
	 			echo "<option value=$kodeKredit[KodeKredit]>
	 			$kodeKredit[KodeKredit]</option>";
				}
			?>
          </select>
         </td>
      </tr>
      <tr>
        <td>Nama Pelanggan</td>
        <td><input name="namaPelanggan" type="text" disabled id="namaPelanggan" readonly="readonly"></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><label for="jumlah"></label>
        <input type="text" name="jumlah" id="jumlah"></td>
      </tr>
      <tr>
        <td height="43">&nbsp;</td>
        <td><input type="submit" name="btn_masukan" class="btn_masukan" value="Simpan">
        <input name="tipe" type="hidden" id="tipe" value="bayarCicilan"></td>
      </tr>
    </table>
  </form>





</center>