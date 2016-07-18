<?php
	function pageController() 
	{
		if (isset($_GET['count'])){
			$count = $_GET['count'];
		} else {
			$count = 0;
		}
		if (isset($_GET['data'])) {
			$count = 'GAME OVER PONG';
		}
		return ['count' => $count];
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