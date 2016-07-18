<?php
session_start();
function clearSession() {
	session_unset();
	session_regenerate_id(true);
	header('Location: login.php');
	exit;
}
function pageController() {
	clearSession();
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