<?php
function pageController() {
	session_start();
	$data = [];
	$data['username'] = $_SESSION['loggedInUser'];
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
	</ul>
	<a href="logout.php">Log Out</a>
</body>
</html>