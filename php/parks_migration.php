<?php
require 'db_connect.php';
$query = 'DROP TABLE IF EXISTS national_parks;';
$dbc->exec($query);
$query = 
'CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	location VARCHAR(100) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres DOUBLE NOT NULL,
	description VARCHAR(1000) NOT NULL,
	PRIMARY KEY (id)
);';
$dbc->exec($query);