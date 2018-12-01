<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Server Side Datatable</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
function format ( d ) {
    return 'Full name: '+d.first_name+' '+d.last_name+'<br>'+
        'Salary: '+d.salary+'<br>'+
        'The child row can contain any data you wish, including links, images, inner tables etc.';
}
$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "server_processing.php"
    } );
} );
</script>
</head>

<body>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Kode Guru</th>
                <th>Nama Guru</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Wali Kelas</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Kode Guru</th>
                <th>Nama Guru</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Wali Kelas</th>
            </tr>
        </tfoot>
    </table>
</body>
</html>