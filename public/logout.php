<?php
require_once '../Auth.php';
session_start();
function pageController() {
	Auth::logout();
	header('Location: login.php');
	exit;
}
pageController();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout.php</title>
</head>
<body>
	Redirecting...
</body>
</html>