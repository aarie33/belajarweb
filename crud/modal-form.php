<!doctype html>
<html lang="en">
<head>
	<title>jQuery UI Dialog - Modal form</title>
	<link type="text/css" href="themes/base/ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="ui/jquery-1.4.js"></script>
	<script type="text/javascript" src="ui/ui.core.js"></script>
	<script type="text/javascript" src="ui/ui.draggable.js"></script>
	<script type="text/javascript" src="ui/ui.resizable.js"></script>
	<script type="text/javascript" src="ui/ui.dialog.js"></script>
	<script type="text/javascript" src="ui/effects.core.js"></script>
	<script type="text/javascript" src="ui/effects.highlight.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery-ui.min.js"></script>

	
	<link type="text/css" href="themes/base/udemos.css" rel="stylesheet" />
	<style type="text/css">
		body { font-size: 62.5%; }
		label, input { display:block; }
		input.text { margin-bottom:12px; width:95%; padding: .4em; }
		fieldset { padding:0; border:0; margin-top:25px; }
		h1 { font-size: 1.2em; margin: .6em 0; }
		div#users-contain {  width: 350px; margin: 20px 0; }
		div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
		div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
		.ui-button { outline: 0; margin:0; padding: .4em 1em .5em; text-decoration:none;  !important; cursor:pointer; position: relative; text-align: center; }
		.ui-dialog .ui-state-highlight, .ui-dialog .ui-state-error { padding: .3em;  }
		
		
	</style>
	<script type="text/javascript">
	$(function() {
		
		$("#dialog").dialog({
			bgiframe: true,
			autoOpen: false,
			height: 300,
			modal: true,
			buttons: {
				'Create an account': function() {
				
				var input_data = {
					
					id : $('#id').val(),
					nama : $('#nama').val(),
					ajax : 1
						
					};
					
					$('#nama').attr("disabled",true);
									
					$.ajax({
					
					url : 'selamat.php',
					type : 'POST',
					data : input_data,
					success : function(data){
					
					$("#tampilkan").html(data);
					
					$('#id').val(''),
					$('#nama').val('');
					
					$('#nama').attr("disabled",false);
					
					$('#dialog').dialog('close');
				
					    }
				  
				    });
					
									
				},
				Cancel: function() {
					$(this).dialog('close');
				}
			},
			close: function() {
				allFields.val('').removeClass('ui-state-error');
			}
		});
		
		$('#create-user').click(function() {
			$('#dialog').dialog('open');
		})


		.hover(
			function(){ 
				$(this).addClass("ui-state-hover"); 
			},
			function(){ 
				$(this).removeClass("ui-state-hover"); 
			}
		).mousedown(function(){
			$(this).addClass("ui-state-active"); 
		})
		.mouseup(function(){
				$(this).removeClass("ui-state-active");
		});
		
		$('#dialog-confirm').dialog({
			
		autoOpen: false,
		height: 180,
		modal: true,
				
		buttons: {
			"Delete": function(){
			var del_id = {id : $("#del_id").val()};
			$.ajax({
			
			type: "POST",
			url: "hapus.php",
			data: del_id,
			success: function(data){
			$('#tampilkan').html(data);
			$('#dialog-confirm').dialog("close");
			
			}
			});
			},
			Cancel:function(){
			$(this).dialog("close");
			}
			
		
		}
		});
		
		$('.delbutton').live("click",function(){
		var element = $(this);
		var del_id = element.attr("id");
		var info = 'id=' + del_id;
		$('#del_id').val(del_id);
		$("#dialog-confirm").dialog("open");
		return false;
		});

		$(".edit").live("click",function(){
		
		var id = $(this).attr("id");
		var nama = $(this).attr("nama");
		
		$('#id').val(id);
		$('#nama').val(nama);
		
		$("#dialog").dialog("open");
		
		return false;
		
		});
		

		
	});
	
		
	</script>
</head>
<body>
<div class="demo">

<div id="dialog" title="Create new user">
	<p id="validateTips">All form fields are required.</p>

	<form>
	<fieldset id="dialog">
		<label for="id">Id</label>
		<input type="text" name="id" id="id" class="text ui-widget-content ui-corner-all" />
		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama" value="" class="text ui-widget-content ui-corner-all" />
	</fieldset>
	</form>
</div>

</div>


<div id="users-contain" class="ui-widget">

		<h1>Existing Users:</h1>

		

	<table  class="ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header ">
				<th>NIS</th>
				<th>Nama</th>
				<th>Hapus</th>
				<th>Edit</th>
				
			</tr>
		</thead>
		<tbody>
		<?php 	mysql_connect("localhost","root","");
				mysql_select_db("sekolah");
				$sql=mysql_query("select * from siswa");
				while($data=mysql_fetch_array($sql)){
				
		?>
		
		
		
			<tr>
				<td><?php echo "$data[nis]"; ?></td>
				<td><?php echo "$data[nama]"; ?></td>
				<td>
						
				<?php echo "<a href=\"#\" class=\"delbutton\" id=\"$data[nis]\">hapus</a>"; ?>  </td>
				
				<td><?php echo "<a href=\"#\" class=\"edit\" id=\"$data[nis]\" nama=\"$data[nama]\">edit</a>"; ?></td>
			</tr>
			
		<?php } ?>	
		</tbody>
	</table>
	<div id="dialog-confirm" title="delete item ?">
	<input type="hidden" value='' id="del_id" name="del_id">
	Are You Sure ?
	</div>

</div>



<button id="create-user" class="ui-button ui-state-default ui-corner-all">Create new user</button>

</div><!-- End demo -->



<div class="demo-description">

<p>Use a modal dialog to require that the user enter data during a multi-step process.  Embed form markup in the content area, set the <code>modal</code> option to true, and specify primary and secondary user actions with the <code>buttons</code> option.</p>

</div><!-- End demo-description -->

</body>
</html>
