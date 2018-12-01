<!DOCTYPE html>
<html>
	<head>
		<title>SMS Gateway | Sent Items</title>
	</head>
	
	<body>
		<h3>PESAN TERKIRIM</h3>
		<?php
		/* menampilkan daftar SMS terkirim */
		include ("config.php");
		$query = "SELECT ID,SendingDateTime,DestinationNumber,TextDecoded FROM sentitems";
		$result = mysql_query($query);
		$no = 1; // nomor baris
		?>	
		
		<table border=1>
			<tr>
				<th>No.</th>
				<th>Tgl. Terkirim</th>
				<th>Tujuan</th>
				<th>Isi</th>
				<th>Action</th>
			</tr>
			
		<?php while ($data = mysql_fetch_assoc($result)) { ?>

			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['SendingDateTime'] ?></td>
				<td><?php echo $data['DestinationNumber'] ?></td>
				<td><?php echo $data['TextDecoded'] ?></td>
				<td>
					<a href="proses.php?action=delsentitems&id=<?php echo $data['ID'] ?>">Hapus</a>
				</td>
			</tr>
			
		<?php $no++; ?>
		<?php } ?>
		</table>
	</body>
</html>