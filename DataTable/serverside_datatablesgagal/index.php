<!doctype html>
<html>
    <head>
        <title>Harviacode - Datatables</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/dataTables.bootstrap.css"/>
        <style>
            .dataTables_wrapper .dataTables_processing {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                height: 40px;
                margin-left: -50%;
                margin-top: -25px;
                padding-top: 20px;
                text-align: center;
                font-size: 1.2em;
                color:grey;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Serverside Datatables - Harviacode
                            <div class="btn-group pull-right">
                                <a href="#">Add</a>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="provinsi">
                                    <thead>
                                        <tr>
                                            <th>Id Provinsi</th>
                                            <th>Nama Provinsi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>

        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="datatables/jquery.dataTables.js"></script>
        <script src="datatables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                var t = $('#provinsi').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": 'ajax/provinsi.php',
                    "columns": [
                        {"data": "id_provinsi"},
                        {"data": "provinsi"}
                    ],
                    "order": [[1, 'asc']]
                });
            });
        </script>
    </body>
</html>
