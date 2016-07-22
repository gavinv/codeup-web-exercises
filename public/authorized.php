<?php
require 'functions.php';
require_once '../Auth.php';
function pageController() {
	session_start();
	$data = [];
	if(!Auth::check()) {
		header('Location: login.php');
		exit;
	}
	$data['username'] = escape($_SESSION['logged_in_user']);
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