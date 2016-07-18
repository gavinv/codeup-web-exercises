<?php
	function pageController() 
	{
		if (isset($_GET['count'])){
			$count = $_GET['count'];
		} else {
			$count = 0;
		}
		if (isset($_GET['data'])) {
			$count = 'GAME OVER PING';
		}
		return ['count' => $count];
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