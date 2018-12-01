<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Autocomplete - Categories</title>
	<link rel="stylesheet" href="../../jquery-ui-1.9.2.custom/development-bundle/themes/base/jquery.ui.all.css">
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/jquery-1.8.3.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.position.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.menu.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.autocomplete.js"></script>
	<link rel="stylesheet" href="../../jquery-ui-1.9.2.custom/development-bundle/demos/demos.css">
	<style>
	.ui-autocomplete-category {
		font-weight: bold;
		padding: .2em .4em;
		margin: .8em 0 .2em;
		line-height: 1.5;
	}
	</style>
	<script>
	$.widget( "custom.catcomplete", $.ui.autocomplete, {
		_renderMenu: function( ul, items ) {
			var that = this,
				currentCategory = "";
			$.each( items, function( index, item ) {
				if ( item.category != currentCategory ) {
					ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
					currentCategory = item.category;
				}
				that._renderItemData( ul, item );
			});
		}
		
	});
	</script>
    <?php mysql_connect("localhost","root",""); mysql_select_db("db_orang"); 
	$data=mysql_query("SELECT*FROM data_orang"); ?>
	<script>
	$(function() {
		var data = [
		<?php while($isi=mysql_fetch_array($data)){ 
			if($isi["jenis_kelamin"]=="L"){?>
				{ label: "<?php echo $isi[nama];?>", category: "<?php echo "Laki-laki";?>" },
			<?php
			}else{ ?>
			{ label: "<?php echo $isi[nama];?>", category: "<?php echo "Perempuan";?>" },
			<?php }
		}?>
			{ label: "", category: "" }
			
		];

		$( "#search" ).catcomplete({
			delay: 0,
			source: data
			
		});
		
		/*$( "#search" ).autocomplete({
			select: function( event, ui ) {
				document.getElementById("tampil").innerHTML=document.getElementById("search").value;
				return false;
			}
		})*/
		$( "#search" ).hover(function(event){
			//document.getElementById("tampil").innerHTML=document.getElementById("search").value;
		});
	});
	function tampil(){
		document.getElementById("tampil").innerHTML=document.getElementById("search").value;
	}
	</script>
</head>
<body>

<label for="search">Search: </label>
<input id="search">
<div id="tampil"></div>
</body>
</html>
