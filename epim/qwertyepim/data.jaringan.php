<?php require'../pages/config.php'; 
	if(isset($_POST['approve'])) {
		$approve="UPDATE daftar_jaringan SET status='2' WHERE id_daftar='$_POST[approve]'";
		mysql_query($approve);
	}
?>
<div style="height:75px;"></div>
<div class="table-responsive">
	<caption>Data Peserta Jaringan</caption>
	<table class="table table-striped  table-condensed table-hover">
		<thead>
			<tr>
				<th>id daftar</th> 
				<th>Nama</th> 
				<th>Sekolah</th> 
				<th>Telpon</th>
				<th>Bukti Bayar</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>						
		</thead>
		<tbody>
			<?php 
			$select="SELECT * FROM daftar_jaringan order by id_daftar DESC";
			$select_query=mysql_query($select);
			while ($data=mysql_fetch_array($select_query)){
				/*if($data['status']==1){
					$status="Publikasikan";
				}else{
					$status="Draft";
				}*/
				?>
				<?php 
				if($data['status']==0){
					?><tr style="background:#ECD0D0;"><?php
				}else if($data['status']==1){
					?><tr style="background:#FAF3D1;"><?php
				}else if($data['status']==2){
					?><tr style="background:#D7ECCE;"><?php
				}
				?>
					<td><?php echo $data['id_daftar']; ?></td> 
					<td><a target="_blank" href="../img/foto/jaringan/<?php echo $data['foto']; ?>"><?php echo $data['nama']; ?></td> 
					<td><?php echo $data['sekolah']; ?></td> 
					<td><?php echo $data['no_hp']; ?></td>
					<td><a target="_blank" href="../img/foto/jaringan/bukti_bayar/<?php echo $data['bukti_bayar']; ?>">lihat</a></td>
					<td><?php echo $data['status']; ?></td>
					<?php if($data['status']==1){
						?><td><a href="#" id="<?php echo $data['id_daftar']; ?>" class="approve-jaringan"><button class="btn btn-success btn-sm">approve</button></a></td><?php
					}else{
						?><td><a href="#" id="<?php echo $data['id_daftar']; ?>" class="approve-jaringan" disabled><button class="btn btn-success btn-sm" disabled>approve</button></a></td><?php
					}?>
					
					<td></td>
				</tr>
			<?php } ?>				
		</tbody>
	</table>
</div>