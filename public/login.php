<?php
function pageController() {
	session_start();
	$data = [];
	$data['username'] = null;
	$data['username'] = isset($_POST['username']) ? $_POST['username'] : null;
	$data['password'] = isset($_POST['password']) ? $_POST['password'] : null;
	if(($data['username'] !== 'guest' && $data['username'] !== null) && ($data['password'] !== 'password' && $data['password'] !== null)) {
		$data['message'] = 'Invalid credentials';
	} else if ($data['username'] == 'guest' && $data['password'] == 'password') {
		$_SESSION['loggedInUser'] = $data['username'];
		header('Location: authorized.php');
		exit;
	}
	return $data;
}
extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
	<?php if (isset($message)) : ?>
		<div class="alert alert-danger" role="alert"><?= $message ?></div>
	<?php endif; ?>
	<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#loginModal">
		Click here to login
	</button>

	<!-- Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="login">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="login">Login</h4>
				</div>
				<div class="modal-body">
					<form method="POST">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" placeholder="Username" name="username" autofocus>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script>
		$('.modal').on('shown.bs.modal', function() {
  			$(this).find('[autofocus]').focus();
		});
	</script>
</body>
</html>