<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="http://74.207.246.202/ssp/example/media/css/jquery.dataTables.css">
    <script src="http://74.207.246.202/ssp/example/media/js/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="http://74.207.246.202/ssp/example/media/js/jquery.dataTables.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
    <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </tfoot>
    </table>

</body>
</html>

<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "serverside.php"
    } );
} );
</script>