<?php
function pageController() 
{
	if (isset($_GET['count'])){
		$count = $_GET['count'];
	} else {
		$count = 0;
	}
	return ['count' => $count];
}
extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
	<title>Counter.php</title>
</head>
<body>
	<h1><?= $count; ?></h1>  
	<div>
		<a href="?count=<?=$count+1 ?>">Up</a>
	</div>
	<div>
		<a href="?count=<?= $count-1; ?>">Down</a>
	</div>
</body>
</html>