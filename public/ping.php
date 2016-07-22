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
	<title>PING...</title>
</head>
<body>
	<h3>PING</h3>
	<h3>Score: <?= $count ?></h3>
	<a href="/pong.php?count=<?= $count+1 ?>">HIT</a> //
	<a href="/ping.php?data=miss">MISS</a>
</body>
</html>