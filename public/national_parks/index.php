<?php
require __DIR__ . '/../../configuration/database.php';
require __DIR__ . '/../../php/db_connect.php';
require __DIR__ . '/../../Input.php';
require 'parks_model.php';
function pageController($dbc) {
	$data = [];
	$data['parks'] = $dbc->query('SELECT * FROM national_parks')->fetchAll();
	// print_r($data['parks']->fetchAll());
	return $data;
}
// $pagedParks = 
extract(pageController($dbc));
$pagedParks = pagination($parks);
$pageNumbers = pageNumber($parks);
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'partials/head.phtml'; ?>
</head>
<body>
	<?php include 'partials/body.phtml'; ?>
	<?php include 'partials/scripts.phtml'; ?>
</body>
</html>