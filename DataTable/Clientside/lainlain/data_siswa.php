<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Data Siswa</title>
<link href="jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="jquery-1.12.3.js"></script>
<script src="jquery.dataTables.min.js"></script>
</head>

<body>
<?php
$db=mysqli_connect("localhost","root","","raport");
$data=mysqli_query($db, "SELECT*FROM siswa");
?>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
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
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "data_siswa.php"
    });
});
</script>
</body>
</html>