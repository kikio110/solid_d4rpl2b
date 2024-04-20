<?php

require_once 'mysql.php';
require_once 'mongodb.php';
require_once 'dbmsconnection.php';

$mysql = new MySQL();
$mongoDB = new MongoDB();

$mysqlConnection = new DBMSConnection($mysql);
$mysqlConnection->connectDB();

$mongoDBConnection = new DBMSConnection($mongoDB);
$mongoDBConnection->connectDB();

?>
