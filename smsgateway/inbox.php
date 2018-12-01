<!DOCTYPE html>
<html>
	<head>
		<title>SMS Gateway | Inbox</title>
	</head>
	
	<body>
		<h3>KOTAK MASUK</h3>
		<?php
		/* menampilkan daftar SMS masuk */
		include ("config.php");
		$query = "SELECT ID,ReceivingDateTime,SenderNumber,TextDecoded FROM inbox";
		$result = mysql_query($query);
		$no = 1; // nomor baris
		?>	
		
		<table border=1>
			<tr>
				<th>No.</th>
				<th>Tgl. Masuk</th>
				<th>Pengirim</th>
				<th>Isi</th>
				<th>Action</th>
			</tr>
			
		<?php while ($data = mysql_fetch_assoc($result)) { ?>

			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['ReceivingDateTime'] ?></td>
				<td><?php echo $data['SenderNumber'] ?></td>
				<td><?php echo $data['TextDecoded'] ?></td>
				<td>
					<a href="proses.php?action=delinbox&id=<?php echo $data['ID'] ?>">Hapus</a>
				</td>
			</tr>
			
		<?php $no++; ?>
		<?php } ?>
		</table>
	</body>
</html>