<form>
<fieldset>
<legend><strong>Form Buat Barcode</strong></legend>
Kode Barang : <input type="text" name="bar" />
<input type="submit" value="Buat Barcode"/>
<fieldset>
<center>GR Barcode </center>
<?php
include('bar128.php');
echo "<center>".bar128(stripslashes($_REQUEST['bar'])); 
?>
</fieldset>
</fieldset>
</form>