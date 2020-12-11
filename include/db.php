<?php

// Database Name---> cms; Table name---> category;


// using the method of array and then converting them to constants for better secure of the datas;

// $ARARY['key']='value';
$db['db_host']          = 'localhost';
$db['db_user']          = 'root';
$db['db_password']      = '';
$db['db_database_name'] = 'cms';


foreach ( $db as $key => $value ) {
	define( strtoupper( $key ), $value ); // CONVERTED THE ARRAY NAME TO UPPERCASE AND THEN WE PUT THEM AS CONSTANTS IN THE CONNECTION FUNCTION AS PARAMETER;
}

$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE_NAME );
if ( ! $connection ) {
	echo 'We are not connected';
}
