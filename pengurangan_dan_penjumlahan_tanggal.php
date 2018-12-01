<?php
//Operasi Pengurangan Dan Penjumlahan Tanggal
$tgl1=date('Y-m-d');
$tgl2=date('Y-m-d', strtotime('-3 days', strtotime($tgl1)));
//$tgl2=date('Y-m-d', strtotime('-3 month', strtotime($tgl1)));
//$tgl2=date('Y-m-d', strtotime('-3 year', strtotime($tgl1)));
echo $tgl2;
?>