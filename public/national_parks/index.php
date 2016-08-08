<?php
require __DIR__ . '/../../configuration/database.php';
require __DIR__ . '/../../php/db_connect.php';
require __DIR__ . '/../../Input.php';
require 'parks_model.php';
function pageController($dbc) {
	$data = [];
	$data['parks'] = $dbc->query('SELECT * FROM national_parks')->fetchAll();
	$data['page'] = Input::get('page', 1);
	if(Input::isPost()) {
		var_dump($_POST);
		$name = Input::getString('name');
		$description = Input::getString('description');
		$location = Input::getString('location');
		$dateEstablished = Input::getDate('date_established');
		$areaInAcres = Input::getNumber('area_in_acres');
		
		$insert = 'INSERT INTO national_parks (name, description, location, date_established, area_in_acres) VALUES (:name, :description, :location, :date_established, :area_in_acres)';
		$statement = $dbc->prepare($insert);
		$statement->bindValue(':name', $name, PDO::PARAM_STR);
		$statement->bindValue(':description', $description, PDO::PARAM_STR);
		$statement->bindValue(':area_in_acres', $areaInAcres, PDO::PARAM_STR);
		$statement->bindValue(':location', $location, PDO::PARAM_STR);
		$statement->bindValue(':date_established', $dateEstablished->format('Y-m-d'), PDO::PARAM_STR);
        $statement->execute();
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