<?php
require __DIR__ . '/../../configuration/database.php';
require __DIR__ . '/../../php/db_connect.php';
require __DIR__ . '/../../Input.php';
require 'parks_model.php';
function pageController($dbc) {
	$data = [];
	$errors = [];
	$data['parks'] = $dbc->query('SELECT * FROM national_parks')->fetchAll();
	$data['page'] = Input::get('page', 1);
	if(Input::isPost()) {
		try {
			$name = Input::getString('name');
		} catch (Exception $e) {
			$errors['name'] = '<b>Error: </b>' . $e->getMessage();
		}
		try {
			$description = Input::getString('description');
		} catch (Exception $e) {
			$errors['description'] = '<b>Error: </b>' . $e->getMessage();
		}
		try {
			$location = Input::getString('location');
		} catch (Exception $e) {
			$errors['locations'] = '<b>Error: </b>' . $e->getMessage();
		}
		try {
			$dateEstablished = Input::getDate('date_established');
		} catch (Exception $e) {
			$errors['date_established'] = '<b>Error: </b>' . $e->getMessage();
		}
		try {
			$areaInAcres = Input::getNumber('area_in_acres');
		} catch (Exception $e) {
			$errors['area_in_acres'] = '<b>Error: </b>' . $e->getMessage();
		}
		
		$data['errors'] = $errors;

		if(!$errors) {
			$insert = 'INSERT INTO national_parks (name, description, location, date_established, area_in_acres) VALUES (:name, :description, :location, :date_established, :area_in_acres)';
			$statement = $dbc->prepare($insert);
			$statement->bindValue(':name', $name, PDO::PARAM_STR);
			$statement->bindValue(':description', $description, PDO::PARAM_STR);
			$statement->bindValue(':area_in_acres', $areaInAcres, PDO::PARAM_STR);
			$statement->bindValue(':location', $location, PDO::PARAM_STR);
			$statement->bindValue(':date_established', $dateEstablished->format('Y-m-d'), PDO::PARAM_STR);
			$statement->execute();
		}
	}
	return $data;
}
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
	<div class ="container">
		<div class="row">
			<?php include 'partials/body.phtml'; ?>
			<?php include 'partials/parks_form.phtml'; ?>
		</div>
	</div>
	<?php include 'partials/scripts.phtml'; ?>
</body>
</html>