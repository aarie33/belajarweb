<?php
	//pembagian data per halaman 10 baris.
	$halaman = get_Halaman("motor");
	$hal = get_NomorHalaman($_GET['hal']);
	//shorting
	$short = $_GET['short'];
	if($short == ""){
		$short = "ASC";
	}
	$cari = $_REQUEST['txtCari'];
	$sql = "select * from motor ORDER BY `motor`.`KodeMotor` $short LIMIT $hal , 10";
	if ($cari != ""){
		$sql = "select * from motor where Merk like '%$cari%' ORDER BY `motor`.`KodeMotor` ASC";
	}
if($_GET['short'] && $_GET['by'] != ""){
		$sql = "SELECT * FROM motor ORDER BY motor.$_GET[by] $short LIMIT $hal , 10";
}
	switch($short){
		case 'ASC':
		$short = "DESC";
		break;
		case 'DESC':
		$short = "ASC";
		break;
}
	
$query = mysql_query($sql);

  if($_GET['edit']=="true"){
 echo"<div id='jQueryDialog1' title='Edit Motor'>";
 include("kelfin-page/motor_edit.php");
 echo "</div>";
}
?>
<center><h1>Data Motor</h1></center>
<table border='0' width='1100px'>
	<tr class="tr_grid" align="center" height="40">
	<td><a href='index.php?page=view_motor&by=kodeMotor&short=<?php echo $short; ?>'><u>Kode Motor</u></a></td>
    <td><a href='index.php?page=view_motor&by=Merk&short=<?php echo $short; ?>'><u>Merek</u></a></td>
    <td><a href='index.php?page=view_motor&by=Warna&short=<?php echo $short; ?>'><u>Warna</u></a></td>
    <td><a href='index.php?page=view_motor&by=Harga&short=<?php echo $short; ?>'><u>Harga</u></a></td>
	<td>Action</td>
    </tr>
<?php
$i=1;
while($data = mysql_fetch_array($query)){
  echo "<tr bgcolor='#CCCCCC' align='center' height='30'  id='tabel'>
  		<td>$data[KodeMotor]</td>
		<td>$data[Merk]</td>
		<td>$data[Warna]</td>
		<td>Rp. $data[Harga]</td>
		<td><a href='?page=view_motor&edit=true&id=$data[KodeMotor]'>
			[Edit]</a>
			<a href=modData.php?tipe=hapusMotor&id='$data[KodeMotor]' onclick='return confirm(\"Hapus $data[Merk] dengan Kode Motor $data[KodeMotor] ?\")'>[Hapus]</a></td>
</tr>";
$i++;
}
?><tr>
<td bgcolor="#666" colspan="9" class="tr_grid">
<?php
for($i=1; $i <= $halaman; $i++){
	echo "<a href='?page=view_motor&hal=$i'>Page $i |</a> &nbsp;";
}
?>
</td>
</tr>
</table>
