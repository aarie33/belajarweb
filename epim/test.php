<form method="POST">
	<input type="submit" name="klik" value="klik disini">
</form>
<?php 
	require'pages/config.php';
	if ($_POST['klik']){
		$select = "SELECT * FROM daftar_jaringan WHERE id_daftar IN (SELECT MAX(id_daftar) FROM daftar_jaringan)";
		$execute_select = mysql_query($select);
		$result = mysql_fetch_array($execute_select);
		$urutan = substr($result['id_daftar'],3);
		if($urutan<9){
			$urutan ++; 	$newIdJrg = "JRG0"."$urutan";
		}else if($urutan<99){
			$urutan ++; 	$newIdJrg = "JRG"."$urutan";
		}else{
			exit();
		}
		echo "id baru = ".$newIdJrg;
	}
	
 ?>