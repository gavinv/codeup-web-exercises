<?php
require __DIR__ . '/../../configuration/database.php';
require __DIR__ . '/../../php/db_connect.php';
require __DIR__ . '/../../Input.php';
require 'parks_model.php';
function pageController($dbc) {
	$data = [];
	$data['parks'] = $dbc->query('SELECT * FROM national_parks')->fetchAll();
	$data['page'] = Input::get('page', 1);
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