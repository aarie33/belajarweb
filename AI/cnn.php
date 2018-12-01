<?php


function main_hitung() {
	// Jumlah Perulangan
$epoch = 1000;
// Data Learning
$datalear = array(
	array(0, 0, 0, 0, 1),
	array(0, 2, 1, 1, 1),
	array(1, 0, 0, 1, 0),
	array(1, 2, 2, 2, 2),
	array(2, 2, 2, 2, 2));
//jumlah data
$jumdata = count($datalear);
// Jumlah input layer
$jumInput=count($datalear[0]);
//mendefinisikan hidden layer 
$jumlayer = 10;
//inisialisasi jumla output layer
$jumoutput = 1;
//inisialisasi weight
// Target Data
$target[] = array(0, 0, 0, 1, 1);
// static double target[]=new double[600];
// Nilai Bias
$bias[] = array(0.1,0.1);
//Mendefinisikan nilai Learning Rate
$miu = 0.1;
$X = array();
$dw = array();
$D = array();

	$error='';
	$w1 = array();
	$w2 = array();
	$r = rand(0,100);
	//membangkitkan bobot(W) secara Random
	for ($k = 0; $k < $jumlayer; $k++) {
		for ($l = 0; $l < $jumInput + 1; $l++) {
			$w1[$k][$l] = -1.0 + (1.0 - (-1.0)) * $r;
		}
	}
	for ($k = 0; $k < $jumoutput; $k++) {
		for ($l = 0; $l < $jumlayer + 1; $l++) {
			$w2[$k][$l] = -1.0 + (1.0 - (-1.0)) * $r;
		}
	}
	$totalsse=0;

	for ($ep=0;$ep<$epoch;$ep++) {
		echo "Perulangan ke-" + ($ep + 1);
		$tot = 0;
		for ($s = 0; $s < $jumdata; $s++) {
			for ($in = 0; $in < $jumInput; $in++) {
				$X[0][$in] = $datalear[$s][$in];
			}
			// print_r($X[0]);
			$X[0][$jumInput]=$bias[0];
			for ($m = 0; $m < $jumlayer; $m++) {
				$sum = 0;
				for ($i = 0; $i < $jumInput; $i++) {
					$sum = $sum+$X[0][$i] * $w1[$m][$i];
				}
				print_r($X[0]);
				$sum = $sum + $X[0][$jumInput] * $w1[$m][$jumInput];
				//sigmoid hidden layer
				$x[1] = array();

				$X[1][$m] = sigmoid($sum);
			}
			$X[1][$jumlayer]=$bias[1];

			for ($a = 0; $a < $jumoutput; $a++) {
				$sum = 0;
				for ($b = 0; $b < $jumlayer; $b++) {
					$sum = $sum + $X[1][$b] * $w2[$a][$b];
					//System.out.println(w2[a][b]);
				}
				$sum = $sum+$X[1][$jumlayer]*$w2[$a][$jumlayer] ;
				//sigmoid output layer
				$x[2] = array();

				$X[2][$a] = sigmoid($sum);
			}
			// $df = new DecimalFormat("#.##");
			$selisih = 0;
			for ($sse = 0; $sse < $jumoutput; $sse++) {
				$selisih = abs($target[$s] - $X[2][$sse]);
				$tot += $selisih;
			}
			//back pro
			for ($k = 0; $k < $jumoutput; $k++) {
				$D[3][$k] = ($X[2][$k] * (1 - $X[2][$k])) * ($target[s] - $X[2][$k]);
				for ($l = 0; $l < $jumlayer; $l++) {
					$D[2][$l] = $X[1][$l] * (1 - $X[1][$l]) * w2[$k][$l] * $D[3][$k];
				}
				for ($t = 0; $t < $jumlayer+1; $t++) {
					$dw[2][$t] = $miu * $X[1][$t] * $D[3][$k];
					$w2[$k][$t] = $w2[$k][$t] + $dw[2][$t];
				}
			}
			for ($k = 0; $k < $jumlayer; $k++) {
				for ($l = 0; $l < $jumInput; $l++) {
					$dw[$k][$l] = $miu * $X[0][$l] * $D[2][$k];
					$w1[$k][$l] = $w1[$k][$l] + $dw[$k][l];
				}
			}
		}
		$error=sqrt($tot)*1000;
		echo $error;
	}
}

function sigmoid($x) {
	$hasil = 0;
	$hasil = (1 / (1 + exp(-1 * $x)));
	return $hasil;
}

main_hitung();