<?php
function kelfin_getMenu() {
	include("index.php");
}
function Kelfin_getPage($page){
	if ($page != ""){
		include("kelfin-page/".$page.".php");
	}
	else{
		include("kelfin-page/home.php");
	}
}

function cekSession() {
	session_start();
	$user = $_SESSION['username'];
	if  ($user ==""){
	echo "<script>
		window.location = 'login.html';
		</script>";
	}	
}

function urutkan_data($s,$b){
	
	if($s && $b != ""){
		$sql = "SELECT * FROM motor ORDER BY motor.$b $s";
		$short = $s;
	}
	switch($short){
			case 'ASC':
			$short = "DESC";
			break;
			case 'DESC':
			$short = "ASC";
			break;
	}
}
function get_Halaman($tabel){
	switch ($tabel){
		case 'motor':
		$kolom = "KodeMotor";
		break;
		case 'pelanggan':
		$kolom = "KodeCust";
		break;
		case 'belicash':
		$kolom = "KodeCash";
		break;
		case 'belikredit':
		$kolom = "KodeKredit";
		break;
	}
	$sqlRow = mysql_query("SELECT count($kolom) as row FROM $tabel");
	$jumlahBaris = mysql_fetch_array($sqlRow);
	$jumlah =  $jumlahBaris['row'];
	$halaman = ceil(($jumlah/10));
	return($halaman);
}
function get_NomorHalaman($halaman){
	$hal = ((10*$halaman)-10);
	if($hal == -10){
		$hal = 0;
	}	
	return ($hal);
}
function kelfin_getAjax() {
	echo "
	<script type='text/javascript' src='ajax.js'></script>
	<script type='text/javascript' src='HargaMotor.js'></script>
	<script type='text/javascript' src='kredit_GetNamaCust.js'></script>
	";
}
function kelfin_getJquery(){
	echo "
	  <script type='text/javascript' src='kelfin-jquery/jquery-1.6.4.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.ui.accordion.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.ui.core.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.ui.widget.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.ui.mouse.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.ui.draggable.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.ui.position.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.ui.resizable.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.ui.dialog.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.core.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.blind.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.bounce.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.clip.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.drop.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.explode.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.fold.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.highlight.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.pulsate.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.scale.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.shake.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.effects.slide.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/jquery.ui.datepicker.min.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/kelfin-dialog-conf.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/datepickerSetting.js'></script>
	  <script type='text/javascript' src='kelfin-includes/jam.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/hoverIntent.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/superfish.js'></script>
	  <script type='text/javascript' src='kelfin-jquery/menuSetting.js'></script>
	";	
}
function kelfin_getCSS(){
	echo "
	  <link rel='stylesheet' href='kelfin-stylesheet/jquery.ui.all.css' />
	  <link rel='stylesheet' href='./kelfin-stylesheet/datePicker2.css' />
	  <link rel='stylesheet' href='./kelfin-stylesheet/datePicker.css' />
	  <link rel='stylesheet' href='style.css' />
	  <link rel='stylesheet' href='./kelfin-stylesheet/superfish.css' />
	  <link rel='stylesheet' href='./kelfin-stylesheet/superfish-navbar.css' />
	  <link rel='stylesheet' href='./kelfin-stylesheet/superfish-vertical.css' />
	";
}
?>