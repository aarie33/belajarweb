// JavaScript Document
function getNamaCust(){
	var kode = document.getElementById('kodeKredit');
	var kodeKredit = kode.value;
    var url = "kredit_GetNamaCust.php?kodeKredit=" + kodeKredit;
	ambilData(url, "namaPelanggan");
	}