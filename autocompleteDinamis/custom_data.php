<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Autocomplete - Custom data and display</title>
	<link rel="stylesheet" href="../../jquery-ui-1.9.2.custom/development-bundle/themes/base/jquery.ui.all.css">
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/jquery-1.8.3.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.position.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.menu.js"></script>
	<script src="../../jquery-ui-1.9.2.custom/development-bundle/ui/jquery.ui.autocomplete.js"></script>
	<link rel="stylesheet" href="../../jquery-ui-1.9.2.custom/development-bundle/demos/demos.css">
	<style>
	#project-label {
		display: block;
		font-weight: bold;
		margin-bottom: 1em;
	}
	#project-icon {
		float: left;
		height: 32px;
		width: 32px;
	}
	#project-description {
		margin: 0;
		padding: 0;
	}
	</style>
    <?php $db=mysqli_connect("localhost","root","","spp2");
	$data=mysqli_query($db,"SELECT*FROM siswa"); ?>
	<script>
	$(function() {
		var projects = [
		<?php while($isi=mysqli_fetch_array($data)){ ?>
			{
				value: "<?php echo $isi['NIS'];?>",
				label: "<?php echo $isi['nm_siswa'];?>",
				desc: "<?php echo $isi['kelas'];?>"
			},
		<?php 
		}?>
			{
				value: "",
				label: "",
				desc: ""
			}
		];

		$( "#project" ).autocomplete({
			minLength: 0,
			source: projects,
			focus: function( event, ui ) {
				$( "#project" ).val( ui.item.label );
				return false;
			},
			select: function( event, ui ) {
				$( "#project" ).val( ui.item.label );
				$( "#project-id" ).val( ui.item.value );
				$( "#project-description" ).html( ui.item.desc );

				return false;
			}
		})
		.data( "autocomplete" )._renderItem = function( ul, item ) {
			return $( "<li>" )
				.data( "item.autocomplete", item )
				.append( "<a>" + item.label + "<br>" + item.desc + "</a>" )
				.appendTo( ul );
		};
	});
	</script>
</head>
<body>

<div id="project-label">Select a project (type "j" for a start):</div>
<input id="project">
<input type="hidden" id="project-id">
<p id="project-description"></p>

<div class="demo-description">
<p>You can use your own custom data formats and displays by simply overriding the default focus and select actions.</p>
<p>Try typing "j" to get a list of projects or just press the down arrow.</p>
</div>
</body>
</html>
