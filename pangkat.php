<?php
//for($i=0;$i<=10;$i++){
//$hasil=exp($i*log(2));
//$hasil=pow(2,$i);
//echo $hasil."<br>";}

$nilai=2;
for($i=0;$i<=10;$i++){
	for($x=0;$x<$i;$x++){
		echo $nilai;
		$kali=$i-1;
		if($x<$kali){echo "*";}
		else{echo "=";}
	}
	if($i==0) {$hasil=1;}
	else {$hasil=$nilai*$hasil;}
	echo $hasil."<br>";
}
?>