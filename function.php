<?php
function tampilNama($nama){ //prosedur menampilkan nama dari parameter
	echo "Nama : ".$nama."<br>"; //perintah menampilkan nama
}

function tampilUmur($umur){ //prosedur menampilkan umur dari parameter
	echo "Umur : ".$umur."<br>"; //perintah menampilkan umur
}

function tampilJkel($jkel){ //prosedur menampilkan nama dari parameter
	echo "Jenis Kelamin : ".$jkel."<br>"; //perintah menampilkan jenis kelamin
}

function tampilAlamat($alamat){ //prosedur menampilkan alamat dari parameter
	echo "Alamat : ".$alamat."<br>"; //perintah menampilkan alamat
}

function perkalian($a, $b){ //fungsi untuk menghitung perkalian
	return $a*$b; //mengembalikan nilai perkalian variabel a dan b
}
function pembagian($a, $b){ //fungsi untuk menghitung pembagian
	return $a/$b; //mengembalikan nilai pembagian variabel a dengan b
}

//memanggil prosedur dan fungsi
tampilNama("Arie"); 
tampilUmur(20);
tampilJkel("Laki-laki");
tampilAlamat("Jember");
echo perkalian(3, 9)."<br>";
echo pembagian(perkalian(3, 9), 3);
?>