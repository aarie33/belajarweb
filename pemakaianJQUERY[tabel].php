<html>
<head>
<script src="jquery-2.1.1.min.js"></script>
<script>
$(document).ready(function(){
	$("body tr:odd").addClass("ganjil");
	$("body tr:even").addClass("genap");
});
</script>
<style type="text/css">
th{background-color:#F90;
color:#FFF;}
.ganjil{background-color:#FF9;}
.genap{background-color:#FFC;}
</style>
<title>Pemakaian JQuery di tabel</title>
</head>

<body>
<table width="300" cellpadding="0" cellspacing="0" border="0">
<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
</tr>
<?php for($i=1;$i<=10;$i++){ ?>
<tr>
<td align="center"><?php echo $i; ?></td>
<td align="center"><?php echo "Nama Orang ke ".$i; ?></td>
<td align="center"><?php echo "Alamat Orang ke ".$i; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>