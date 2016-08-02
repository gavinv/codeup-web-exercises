<?php
// IP address to connect to
define('DB_HOST', '127.0.0.1');
// The database to connect to
define('DB_NAME', 'parks_db');
// The mySQL user to use
define('DB_USER', 'parks_user');
// Password for MySQL user
define('DB_PASS', 'codeup');

// Get new instance of PDO object
$dbc = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
