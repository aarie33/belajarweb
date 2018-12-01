<?php
$con = mysqli_connect('localhost', 'root', '', 'konsultasi_gizi') or die('Could not connect.');

$data = mysqli_query($con, "SELECT*FROM artikel");
header('Content-type: application/xml; charset="ISO-8859-1"', true); ?>

<rss version="2.0">
	<channel>
		<title>Artikel Gizi</title>
		<link>http://localhost/myproject/konsultasigizi</link>
		<description>Artikel</description>
		<docs>http://localhost/myproject/konsultasigizi</docs>

		<?php while($isi = mysqli_fetch_array($data)){ ?>

			<item>
				<title><?php echo $isi['ar_judul'];?></title>
				<link><?php echo 'http://localhost/myproject/konsultasigizi/index.php/artikel/tampildetailartikel/'.$isi['ar_id'];?></link>
				<description><?php echo str_replace(array('<', '>', '&', '{', '}', '*'), array(' '), strip_tags($isi['ar_isi']));?></description>
			</item>
		<?php } ?>
	</channel>
</rss>