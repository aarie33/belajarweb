<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'guru';
 
// Table's primary key
$primaryKey = 'kd_guru';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier - in this case object
// parameter names
$columns = array(
	array(
			'db' => 'kd_guru',
			'dt' => 'kd_guru',
			'formatter' => function( $d, $row ) {
				// Technically a DOM id cannot start with an integer, so we prefix
				// a string. This can also be useful if you have multiple tables
				// to ensure that the id is unique with a different prefix
				return $d;
			}
		),
    array( 'db' => 'nm_guru',  'dt' => 'nm_guru' ),
    array( 'db' => 'tmp_lahir',   'dt' => 'tmp_lahir' ),
    array( 'db' => 'tgl_lahir',     'dt' => 'tgl_lahir' ),
    array(
        'db'        => 'tgl_lahir',
        'dt'        => 'tgl_lahir',
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        }
    ),
    array( 'db' => 'jabatan',     'dt' => 'jabatan' ),
	array( 'db' => 'wali_kelas',     'dt' => 'wali_kelas' )
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'raport',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);