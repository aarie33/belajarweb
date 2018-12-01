<?php
  header("Content-Type: text/xml");
  echo '<rss version="2.0">
        <channel>
        <title>bengkelprogram.com Articles</title>
        <link>http://www.bengkelprogram.com/</link>
        <description>10 Berita dan Artikel terbaru</description>
        <language>en-us</language>
        <pubDate>'.Date("r").'</pubDate>
        <lastBuildDate>'.Date("r").'</lastBuildDate>
        <generator>bengkelprogram.com RSS Generator</generator>
        <managingEditor>aryo@bengkelprogram.com</managingEditor>
        <webMaster>webmaster@bengkelprogram.com</webMaster>
        ';
		$rc = mysql_query('select *,UNIX_TIMESTAMP(tanggal)
		   AS pubDate from berita order by tanggal desc limit 0,10');
		
		while ($r = mysql_fetch_array($rc))
		{
		  $id = $r['id'];
		  $judul = htmlentities(strip_tags($r['judul']), ENT_QUOTES);
		  $keterangan = htmlentities(strip_tags($r['keterangan']),
						ENT_QUOTES);
		  $pubDate = strftime("%a, %d %b %Y %T %Z",$r['pubDate']);
		  echo "<item>";
		  echo "<title>$judul</title>";
		  echo "<link>berita.php?id=$id</link>";
		  echo "<description>$keterangan</description>";
		  echo "<pubDate>$pubDate</pubDate>";
		  echo "</item>";
		}
		echo "</channel></rss>";
?>