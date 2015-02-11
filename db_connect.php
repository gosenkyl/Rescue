<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'rescue');

try{
$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME .';charset=utf8', DB_USER, DB_PASSWORD);
} catch( Exception $e ) {
trigger_error( "Database connection failed" );
header( "Location: error.php" );
}