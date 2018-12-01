<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Data Siswa</title>
<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
<style>
#tbl_aksi td{
	padding-right:10px;
}
.link_clik:hover{
	cursor:pointer;
}
</style>
</head>

<body>
<?php
$db=mysqli_connect("localhost","root","","raport");
$data=mysqli_query($db, "SELECT*FROM siswa");
?>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
        	<th></th>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
    <?php
	$no=0;
	while($isi=mysqli_fetch_array($data)){ $no+=1;?>
        <tr>
        	<td><input type="checkbox" name="<?php echo "checkbox$no";?>" id="<?php echo "checkbox$no";?>" value="<?php echo $isi['no_transaksi'];?>"></td>
            <td><?php echo $no;?></td>
            <td><?php echo $isi['NIS'];?></td>
            <td><?php echo $isi['nm_siswa'];?></td>
            <td><?php echo $isi['tmp_lahir'];?></td>
            <td><?php echo $isi['tgl_lahir'];?></td>
            <td><?php echo $isi['alamat'];?></td>
            <td><?php echo $isi['kelas'];?></td>
        </tr>
	<?php
	} ?>
    </tbody>
</table>
<table border="0" id="tbl_aksi">
    <tr>
        <td><span class="glyphicon glyphicon-ok-sign"></span><a id="pilih_semua" class="link_clik">Pilih pemua</a></td>
        <td><span class="glyphicon glyphicon-remove-sign"></span><a id="batal_pilih" class="link_clik">Batal pilih</a></td>
        <td><i>Lakukan :</i></td><td><span class="glyphicon glyphicon-trash"></span><a href="#" class="tbl_hapus_all" data-toggle="modal" data-target="#modal_hapus_all">Hapus (<span id="jlh_check">0</span>)</a></td></tr>
</table>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
   $('#example').DataTable();
   	$('.tbl_hapus_all').click(function(){
		var no_trans='';
		<?php for($i=1;$i<=$no;$i++){ ?> 
		if(document.getElementById('checkbox<?php echo $i;?>').checked==true){
			no_trans = no_trans + "-" + document.getElementById('checkbox<?php echo $i;?>').value;
		}
		<?php } ?>
		document.getElementById('no_hapus_all').value = no_trans;
	});
	<?php
	for($i=1;$i<=$no;$i++){ ?>
	$('#checkbox<?php echo $i;?>').click(function(){
		var jlh_check=0;
		if(document.getElementById('jlh_check').innerHTML != ""){
			jlh_check=parseInt(document.getElementById('jlh_check').innerHTML);
		}
		if(document.getElementById('checkbox<?php echo $i;?>').checked==true){
			document.getElementById('jlh_check').innerHTML = jlh_check + 1;
		}else{
			document.getElementById('jlh_check').innerHTML = jlh_check - 1;
		}
	});
	<?php	}?>
	$('#pilih_semua').click(function(){
		<?php
		for($i=1;$i<=$no;$i++){ ?>
		document.getElementById('checkbox<?php echo $i;?>').checked=true;
		<?php } ?>
		document.getElementById('jlh_check').innerHTML=<?php echo $no;?>;
	});
	$('#batal_pilih').click(function(){
		<?php
		for($i=1;$i<=$no;$i++){ ?>
		document.getElementById('checkbox<?php echo $i;?>').checked=false;
		<?php } ?>
		document.getElementById('jlh_check').innerHTML=0;
	});

} );
</script>
</body>
</html>