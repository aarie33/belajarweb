<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
    
    require 'ssp.class.php';
    
    // nama table
    $table = 'provinsi';

    // Table's primary key
    $primaryKey = 'id_provinsi';

    // Array of database columns which should be read and sent back to DataTables.
    // The `db` parameter represents the column name in the database, while the `dt`
    // parameter represents the DataTables column identifier. In this case simple
    // indexes

    $columns = array(
        array('db' => 'id_provinsi', 'dt' => 'id_provinsi'),
        array('db' => 'provinsi', 'dt' => 'provinsi')
    );

    // SQL server connection information
    $sql_details = array(
        'user' => 'root',
        'pass' => '',
        'db' => 'harviacode',
        'host' => 'localhost'
    );


    echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
    );
} else {
    echo '<script>window.location="404.html"</script>';
}
?>