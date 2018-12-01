<html>
	<head>
		<title>Candralab Coding studio</title>
	</head>
	<body>
		<h2> Daftar Siswa di Dunia</h2>
		<table border="1" width="600px">
			<th><td>NIS</a></td><td>Nama</a></td><td>Kelas</a></td></th>
<?php
//include script koneksi.php
include('koneksi.php');

	//variabel dan kode awal untuk menentukan posisi halaman saat ini
	//dipakai untuk melimit quiery
	$batas=10; //satu halaman menampilkan 30 baris
$halaman=$_GET['halaman'];
$posisi=null;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}else{
	$posisi=($halaman-1)* $batas;
}

//query data menggunakan limit $posisi dan batas
$query="select * from siswa limit $posisi,$batas ";

$result=mysql_query($query) or die(mysql_error());
$no=1;

while($rows=mysql_fetch_object($result)){
?>

			<tr>
				<td><?php echo $no
				?></td>
				<td><?php	echo $rows -> NIS;?></td>
				<td><?php	echo $rows -> nama;?></td>
				<td><?php	echo $rows -> kelas;?></td>
			</tr>
			<?php		$no++;
			}?>
		</table>
		<br>
		<?php		
	//=============PAGING ========================
			$sql_paging = mysql_query("select *  from siswa");
			$jmldata = mysql_num_rows($sql_paging);
			$jumlah_halaman = ceil($jmldata / $batas);

			echo "Halaman :";
			for($i = 1; $i <= $jumlah_halaman; $i++)
				if($i != $halaman) {
					echo "<a href=country.php?halaman=$i>$i</a>|";
				} else {
					echo "<b>$i</b>|";
				}
			mysql_close();?>
		<br>
		Jumlah data :<?php echo $jmldata;?>
	</body>
</html>
