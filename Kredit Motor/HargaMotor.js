// JavaScript Document
//Kelfin Eka Putra Wardani

function hargaMotor(){
	var KodeMtr = document.getElementById('KodeMotor');
	var KodeMotor = KodeMtr.value;
    var url = "hargaMotor.php?KodeMotor=" + KodeMotor;
    //ambilData(url, "formHarga");
	ambilData(url, "Harga");
	}