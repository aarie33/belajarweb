<?php
header('Content-Type: text/xml; charset=utf-8', true); //set document header content type to be XML
$rss = new SimpleXMLElement('<rss xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:atom="http://www.w3.org/2005/Atom"></rss>');
$rss->addAttribute('version', '2.0');
 
$channel = $rss->addChild('channel'); //add channel node
 
$atom = $rss->addChild('atom:atom:link'); //add atom node
$atom->addAttribute('href', 'http://localhost'); //add atom node attribute
$atom->addAttribute('rel', 'self');
$atom->addAttribute('type', 'application/rss+xml');
 
$title = $rss->addChild('title','ahligizi.id'); //title of the feed
$description = $rss->addChild('description','Jasa Pembuatan Wesbite'); //feed description
$link = $rss->addChild('link','http://ahligizi.id'); //feed site
$language = $rss->addChild('language','en-us'); //language
 
//Create RFC822 Date format to comply with RFC822
$date_f = date("D, d M Y H:i:s T", time());
$build_date = gmdate(DATE_RFC2822, strtotime($date_f)); 
$lastBuildDate = $rss->addChild('lastBuildDate',$date_f); //feed last build date
 
$generator = $rss->addChild('generator','PHP Simple XML'); //add generator node


$mysqli = new mysqli('localhost', 'root', '', 'konsultasi_gizi');
 
 
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$results = $mysqli->query("SELECT ar_judul, ar_isi, ar_tgl FROM artikel");
 
if($results){ //we have records 
    while($row = $results->fetch_object()) //loop through each row
    {
        $item = $rss->addChild('item'); //add item node
        $title = $item->addChild('title', $row->title); //add title node under item
        $link = $item->addChild('guid', 'http://s-widodo.com/'. strtolower(str_replace(' ', '-', $row->title)));
        //add link node under item
        $guid = $item->addChild('guid', 'http://s-widodo.com/'. strtolower(str_replace(' ', '-', $row->title))); //add guid node under item
        $guid->addAttribute('isPermaLink', 'false'); //add guid node attribute
 
        $description = $item->addChild('description', '<![CDATA['. htmlentities($row->content) . ']]>'); //add description
 
        $date_rfc = gmdate(DATE_RFC2822, strtotime($row->published));
        $item = $item->addChild('pubDate', $date_rfc); //add pubDate node
    }
}
 
echo $rss->asXML(); //output XML

?>