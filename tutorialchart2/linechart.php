<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Grafik penjualan smartphone </title>
		<!--1) include file jquery.min.js dan higchart.js-->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/highcharts.js"></script>

		<script type="text/javascript">
		//2)script untuk membuat grafik, perhatikan setiap komentar agar paham
		<?php
		$db2=mysqli_connect("localhost","root","","keuangan") or die("Database gagal!!");
		$data=mysqli_query($db2, "SELECT*FROM masuk");
		?>
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container', //letakan grafik di div id container
				//Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                type: 'line',  
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Penjualan smartphone di toko candraphone',
                x: -20 //center
            },
            subtitle: {
                text: 'candra.web.id',
                x: -20
            },
            xAxis: { //X axis menampilkan data bulan 
                categories: [ <?php while($isi=mysqli_fetch_array($data)){ ?>
				'<?php echo $isi['tgl_masuk'];?>',<?php } ?>'2015-11-11']
            },
            yAxis: {
                title: {  //label yAxis
                    text: 'Total penjualan'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080' //warna dari grafik line
                }]
            },
            tooltip: { 
			//fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
			//akan menampikan data di titik tertentu di grafik saat mouseover
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
			//series adalah data yang akan dibuatkan grafiknya,
		
            series: [
			<?php
			$data_group=mysqli_query($db2, "SELECT*FROM masuk GROUP BY sumber");
			$no=mysqli_num_rows($data_group);
			 ?>
			<?php while($isi_group=mysqli_fetch_array($data_group)){  
					$datag2=mysqli_query($db2, "SELECT*FROM masuk WHERE sumber='$isi_group[sumber]'"); 
			?>
			{  
                name: '<?php echo $isi_group['sumber'];?>',  
				
                data: [<?php while($isig2=mysqli_fetch_array($datag2)){ $no+=1; echo $isig2['jml_uang'].",";} ?>100]
            },
			<?php } ?>
            {  
                name: 'windows phone',  
				
                data: [<?php for($i=0; $i<$no;$i++){ echo $i.","; } ?>100]
            }
            ]
        });
    });
    
});
		</script>
	</head>
	<body>

<!--grafik akan ditampilkan disini -->
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<div id=link>
<a href='linechart.html'>Grafik Garis</a>|
<a href='areachart.html'>Grafik Area</a>|
<a href='barchart.html'>Grafik Batang</a>|
<a href='kolomchart.html'>Grafik Kolom</a>
</div>
	</body>
</html>