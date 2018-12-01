<h2 id="headings"> UMR 2013 </h2>
<hr>
<p class='pull-right'>
	<a href='export/umr2013_xls.php'
	target='_blank'
	class="btn" ><i class='icon-download-alt'></i> Excel</a>
	<a href='export/umr2013_pdf.php '
	target='_blank'
	class="btn" ><i class='icon-download-alt'></i> PDF</a>
	<a href='export/umr2013_cetak.php'
	target='_blank'
	class="btn" ><i class='icon-print'></i>cetak</a>
</p>
<table  class="table  table-condensed table-hover">
	<thead>
		<th><td><b>Propinsi </b></td><td class='pull-right'><b>Upah </b></td></th>
	</thead>
	<tbody>
		<?php
$query="select * from umr2013";
$result=mysql_query("SELECT*FROM umr2013");
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_array($result)){

		?>
		<tr>
			</td><td><?php		echo $rows[no];?></td>
			<td><?php		echo $rows[propinsi];?></td>
			<td ><p class='pull-right'><?php	echo format_rupiah($rows[upah]);?></td>
		</tr>
		<?php
}?>
	</tbody>
</table>