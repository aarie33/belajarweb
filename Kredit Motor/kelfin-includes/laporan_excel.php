<?php
ini_set("display_errors",0);
//untuk mengekspor ke format Microsoft Word tambahkan parameter ?tipe=1 pada url
//jika parameter dibiarkan kosong secara default akan di ekspor ke format excel
//inisiasi tipe laporan

$tipeLaporan = $_GET['tipeLaporan'];
switch($tipeLaporan){
	case 'belicash':
	$namaLaporan = "Laporan Beli Cash";
	case 'belikredit':
	$namaLaporan = "Laporan Beli Kredit";
	break;
}
//inisiasi query
$sql = $_GET['sql'];
if ($_GET[tipe]==1){
$tipeFile = "msword";
$formatDokumen = "doc";
}
else {
$tipeFile = "vnd.ms-excel";
$formatDokumen = "xls";
}
header("Content-Type: application/$tipeFile");
header("Content-Disposition: attachment; filename=$tipeLaporan.$formatDokumen");
header("Pragma: no-cache");
header("Expires: 0");
//tanggal untuk judul
$tanggalSekarang = date('d-m-Y H:i');
$judulLaporan = "$namaLaporan $tanggalSekarang";
/*    Koneksi database    */
Require("laporan_excel_config.php");

$hasil = @mysql_query($sql,$koneksi)
	or die(mysql_error());
$separator = "\t";

//judul laporan dan tanggal:
echo("$judulLaporan\n");

//nama kolom
for ($i = 0; $i < mysql_num_fields($hasil); $i++) {
echo mysql_field_name($hasil,$i) . "\t";
}
print("\n");
    $i = 0;
    while($row = mysql_fetch_row($hasil))
    {
        $schema_insert = "";
        for($j=0; $j<mysql_num_fields($hasil);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$separator;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$separator;
            else
                $schema_insert .= "".$separator;
        }
        $schema_insert = str_replace($separator."$", "", $schema_insert);
		$schema_insert .= "\t";
        print(trim($schema_insert));
		print "\n";
        $i++;
    }
    return (true);
?>
