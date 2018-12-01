<?php
$con = mysqli_connect('localhost', 'root', '', 'konsultasi_gizi') or die('Could not connect.');

$data = mysqli_query($con, "SELECT*FROM artikel");

header('Content-type: application/xml; charset="ISO-8859-1"', true); ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<?php while($isi = mysqli_fetch_array($data)){ ?>

<url>
	<loc><?php echo 'http://localhost/myproject/konsultasigizi/index.php/artikel/tampildetailartikel/'.$isi['ar_id'];?>
	</loc>
	<changefreq>weekly</changefreq>
	<priority>0.7</priority>
</url>
<?php } ?>

</urlset>