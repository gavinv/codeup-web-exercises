<?php
function pageController() {
	session_start();
	$data = [];
	$data['username'] = $_SESSION['loggedInUser'];
	$data['viewCount'] = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;
	if($_SESSION['loggedInUser'] !== 'guest') {
		header('Location: login.php');
		exit;
	}
	return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized!</title>
</head>
<body>
	authorized
	<ul>
		<li>Logged in user: <?= $username; ?></li>
		<li>View Count: <?= $viewCount; ?></li>
	</ul>
	<a href="logout.php">Log Out</a>
</body>
</html>