<?php 
	require'../pages/config.php';
 ?>
 <div class="row">
			<h3 style="border-bottom:thin solid #EEE;">Manajemen Berita </h3>
			<a  id="0" class="btn btn-danger tambah pull-right" data-toggle="modal" data-target="#dialog-berita">Tambah</a>
		</div>
 <div class="table-responsive">
 	<caption>Daftar Berita</caption>
	<table class="table table-striped  table-condensed table-hover">
		<thead>
			<tr>
				<th>ID</th> 
				<th>Judul</th> 
				<th>Tanggal</th> 
				<th>Status</th>
				<th>Aksi</th>
			</tr>						
		</thead>
		<tbody>
			<?php 
			$select="SELECT * FROM berita order by tanggal DESC";
			$select_query=mysql_query($select);
			while ($data=mysql_fetch_array($select_query)){
				if($data['status']==1){
					$status="Publikasikan";
				}else{
					$status="Draft";
				}
			?>
			<tr>
				<td><?php echo $data['id']; ?></td> 
				<td style="color:#D9534F;"><?php echo $data['judul']; ?></td> 
				<td><?php echo $data['tanggal']; ?></td> 
				<td ><?php echo $status ?></td>
				<td width="100px" >
					<a style="color:#D9534F;" href="#dialog-berita" id="<?php echo $data['id']; ?>" class="ubah" data-toggle="modal">Ubah</a>
					<a style="color:#D9534F;" href="#" id="<?php echo $data['id']; ?>" class="hapus">hapus</a></td>
			</tr>
			<?php } ?>				
		</tbody>
	</table>
</div>