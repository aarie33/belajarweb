<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Server Side Datatable</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="../../../MyProject/MoneyManager/vendor/bootstrap/css/bootstrap.css" />
<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="../../../MyProject/MoneyManager/vendor/bootstrap/js/bootstrap.js"></script>
<script>
function format ( d ) {
    return 'Full name: <a href=\"#\" class=\"tombol\" data-toggle=\"modal\" data-target=\"#modal\" nama='+d.nm_guru+'> '+d.nm_guru+'</a><br>'+
        'Salary: '+d.tmp_lahir+'<br>'+
        'The child row can contain any data you wish, including links, images, inner tables etc.';
}
 
$(function() {
    var dt = $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "server_processing2.php",
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { "data": "nm_guru" },
            { "data": "tmp_lahir" },
            { "data": "tgl_lahir" },
			{ "data": "jabatan" },
			{ "data": "wali_kelas" }
        ],
        "order": [[1, 'asc']]
    } );
 
    // Array to track the ids of the details displayed rows
    var detailRows = [];
 
    $('#example tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );
} );
</script>
<style>
td.details-control {
    background: url('../resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.details td.details-control {
    background: url('../resources/details_close.png') no-repeat center center;
}
</style>
</head>

<body>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th></th>
                <th>Nama Guru</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Wali Kelas</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
	            <th></th>
                <th>Nama Guru</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Wali Kelas</th>
            </tr>
        </tfoot>
    </table>
    <a href="#" class="tombol" data-toggle="modal" data-target="#modal" nama="aku">tes</a>
<!-- Modal Hapus Data -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="LabelModal">
	<div class="modal-dialog" role="document">
		<form name="form_hapus" method="post" action="sumber_pemasukan_hapus.php">
		<input type="hidden" name="id_hapus" id="id_hapus">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="LabelModalTambah">Hapus Data ?</h4>
				</div>
				<div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">Nama</div>
                        <div class="col-sm-6"><input type="text" name="nama_guru" id="nama_guru" class="form-control" /></div>
                    </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger" id="tbl_edit">Hapus</button>
                </div>
			</div>
		</form>
	</div>
</div>
<script>
$(function(){
	$('.tombol').click(function(){
		$('#nama_guru').val($(this).attr("nama"));
	});
});
</script>
</body>
</html>