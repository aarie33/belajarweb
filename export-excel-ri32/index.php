<html>
<head>
<title>Export MySQL to Excel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2 align="center">
CETAK DATA SISWA
</h2>
<?php include "koneksi.php"; ?>
<a href="javascript:;" ><img src="excel-icon.jpeg" width="18" height="18" border="0" onClick="window.open('./excel/export_excel.php','scrollwindow','top=200,left=300,width=800,height=500');"></a>

<table class="datatable">
<tr>
	<th>No</th>
    <th>Nama Siswa</th>
    <th>NIS</th>
    <th>Kelamin</th>
    <th>Alamat</th>
    <th>Telpon</th>
</tr>

<?php
$query=mysql_query("select * from data_siswa order by id_siswa asc");

while($row=mysql_fetch_array($query)){
	?>
    <tr>
    	<td><?php echo $c=$c+1;?></td>
        <td><?php echo $row['nama_siswa'];?></td>
        <td><?php echo $row['nis'];?></td>
        <td><?php echo $row['kelamin'];?></td>
        <td><?php echo $row['alamat'];?></td>
        <td><?php echo $row['telpon'];?></td>
    </tr>
    <?php
}
?>

</table>

</body>
</html>