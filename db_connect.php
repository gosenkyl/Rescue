<?php

define('DB_HOST', 'us-cdbr-iron-east-01.cleardb.net');
define('DB_USER', 'be3353bb742bdc');
define('DB_PASSWORD', '238a182b');
define('DB_NAME', 'heroku_ec639e1140a1304');

try{
$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME .';charset=utf8', DB_USER, DB_PASSWORD);
} catch( Exception $e ) {
trigger_error( "Database connection failed" );
header( "Location: error.php" );
}