<?php		
			require ('../inc/config.php');
			$query = "select * from umr2013 ";
			$result = mysql_query($query) or die(mysql_error());
			$no = 1;?>
<html>
	<head>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">		body {
				padding-top: 20px;
				padding-bottom: 40px;
				font-size: 0.7em;
			}
</style>
	</head>
	<body>
		<div class='span8  offset2'>
			<h2 style='text-align: center'> UMR 2013</h2>
			<hr>
			<table  class="table  table-condensed table-hover">
				<thead>
					<th><td><b>Propinsi </b></td><td class='pull-right'><b>Upah </b></td></th>
				</thead>
				<tbody>
					<?php
$query="select * from umr2013";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
					?>
					<tr>
						</td><td><?		echo $rows -> no;?></td>
						<td><?		echo $rows -> propinsi;?></td>
						<td ><p class='pull-right'><?	echo format_rupiah($rows -> upah);?></p></td>
					</tr>
					<?
}?>
				</tbody>
			</table>
			<p align='center'>
		<a href="umr2013_cetak.php" cls='btn' onClick="window.print();return false"> <i class='icon-print'></i>Cetak </a>
			</p>
		</div>
	</body>
</html>
