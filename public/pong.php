<?php
require_once '../Input.php';
function pageController() 
{
	$data = [];
	$data['count'] = Input::get("count", 0);
	if (Input::get("data")) {
		$data['count'] = 'GAME OVER PONG';
	}
	return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>PONG...</title>
</head>
<body>
	<h3>PONG</h3>
	<h3>Score: <?= $count ?></h3>
	<a href="/ping.php?count=<?= $count+1 ?>">HIT</a> //
	<a href="/pong.php?data=miss">MISS</a>
</body>
</html>