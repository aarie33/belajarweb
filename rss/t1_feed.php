<?php
$con=mysqli_connect('localhost', 'root', '', 'konsultasi_gizi') or die('Could not connect.');

$result=mysqli_query($con, "SELECT*FROM artikel ORDER BY ar_id");

echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>";
echo "<rss version=\"2.0\">";
echo "<channel>";
echo "<title>RSS Feed</title>";
echo "<link>http://nama_domain/</link>&#8221";
echo "<description>RSS Feed Keuangan</description>";
echo "<language>id-id</language>";
echo "<copyright>Nama Domain</copyright>";
echo "<lastBuildDate>".date("D, d M Y H:i:s")." +0700 </lastBuildDate>";
echo "<generator>Nama Domain (webmaster@nama_domain)</generator>";

while ($row = mysqli_fetch_array($result)){
	$idartikel = $row['ar_id'];
	$tanggal = date('D, d M Y',strtotime($row['ar_tgl']));
	$judul = $row['ar_judul'];
	$keterangan = htmlentities(strip_tags($row['ar_isi']),ENT_QUOTES);

	echo "<item>";
	echo "<title>".$judul."</title>";
	echo '<description>'.$keterangan.'</description>';
	echo '<link>http://nama_domain/index.php?pilih=1%26id='.$idartikel.'</link>&#8221';
	echo '<pubDate>'.$tanggal.' +0700 </pubDate>';
	echo '<guid is PermaLink=\'false\'> http://Nama Domain/index.php?pilih=1%26id='.$idartikel.'</guid';
	echo '</item>';
}

echo '</channel>';
echo '</rss>';
?>