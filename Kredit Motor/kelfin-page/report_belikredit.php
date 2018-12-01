	<h1>LAPORAN TRANSAKSI BELI KREDIT</h1>
    <form method="post" action="report_belikredit_view.php">
  	<table width="525" border="0" height="120" class="laporan">
    <tr height="30">
      <td colspan="3" bgcolor="#CCCCCC">
      	&nbsp;&nbsp;&nbsp;<label>
      	  <input name="berdasar" type="radio" value="Semua Data" /><strong>Semua Data</strong>
        </label>
      </td>
      </tr>
    <tr bgcolor="#CCCCCC" height="30">
      <td width="150">
      	&nbsp;&nbsp;&nbsp;<label>
        	<input name="berdasar" type="radio" value="Tanggal" /><strong>Tanggal</strong>
        </label>
      </td>
      <td><input name="dari" type="text" id="dari" value="Dari" size="12" class="textbox" /></td>
      <td><input name="ke" type="text" id="ke" class="textbox" value="Ke" /></td>
      </tr>
    <tr bgcolor="#CCCCCC" height="30">
      <td>
      	&nbsp;&nbsp;&nbsp;
        <label>
      	<input name="berdasar" type="radio" value="Pencarian Kata" /><strong>Pencarian Kata</strong>
        </label>
      </td>
      <td><select name="field" id="field">
        <option>Pilih Field</option>
        <option value="belikredit.KodeKredit">KodeKredit</option>
        <option value="belikredit.TanggalKredit">Tanggal</option>
        <option value="pelanggan.Nama">Pelanggan</option>
        <option value="motor.Merk">Merk</option>
        <option value="motor.Harga">Harga</option>
        <option value="belikredit.Keterangan">Keterangan</option>
      </select></td>
      <td><input name="kata" type="text" id="kata" class="textbox" /></td>
      </tr>
    <tr bgcolor="#CCCCCC" height="30">
      <td colspan="3" align="center">
        <input type="submit" name="Submit" id="btn_tampilkan" value="Tampilkan" />      </td>
      </tr>
  </table>
  	<p>&nbsp;</p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
