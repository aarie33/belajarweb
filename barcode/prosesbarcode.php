<?php
include('bar128.php');
echo '<div style="border:3px double #ababab; padding:5px;margin:5px auto;width:300px;">';
//$jml = $_POST['jml'];
$bar=$_POST['bar'];
?>
<fieldset>
GR Barcode 
<?php echo bar128(stripslashes($_POST['bar'])); ?>
</fieldset>