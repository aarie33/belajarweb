<?
$kd_pembeli = $_REQUEST['id'];
$queryPembeli = mysql_query("select * from pembeli where kode_pembeli = '$kd_pembeli'");
$tampilPembeli = mysql_fetch_array($querPembeli);

//membuat kode otomatis
$query_oto = mysql_query("select max(kode_pembeli) as maksi from pembeli");
$data_oto = mysql_fetch_array($query_oto);
$data_potong = substr($data_oto['maksi'],3,5);
$data_potong++;
$kode="";
for ($i=strlen($data_potong); $i<=4; $i++)
$kode = $kode."0";
$data['kode_pembeli'] = "PEM$kode$data_potong";
?>