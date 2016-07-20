<?php
require 'functions.php';
function pageController() {
	session_start();
	$data = [];
	if(!isset($_SESSION['loggedInUser'])) {
		header('Location: login.php');
		exit;
	}
	$data['username'] = escape($_SESSION['loggedInUser']);
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