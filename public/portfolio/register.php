<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a class="navbar-brand" href="/home.html">Gavin Vaught</a></li>
					<li><a href="/resume.html">Resume <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Portfolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					<li><a href="#">Blog</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search Blog by Keyword">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign In<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<div> Please sign in</div>
							<form class="form-signin">
								<div>
									<div>
										<label for="inputEmail" class="sr-only">Username/Email</label>
										<input type="email" id="inputEmail" class="form-control" placeholder="Username/Email" required>
									</div>
									<div>
										<label for="inputPassword" class="sr-only">Password</label>
										<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="remember-me"> Remember me
										</label>
									</div>
									<div>
										<button class="btn btn-sm btn-primary btn-block" type="submit">Sign in</button>
										<a type="submit" href="/portfolio/register.php">create an account</a>
									</div>
									<div>
										<a type="submit" href="">forgot password</a>
									</div>
								</div>
							</form>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h1> Sign up</h1>
			<form class="form-signin">
				<div>
					<div class="col-sm-6">
						<label for="inputFirstName" class="sr-only">First Name</label>
						<input type="username" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus>
					</div>
					<div class="col-sm-6">
						<label for="inputLastName" class="sr-only">Last Name</label>
						<input type="username" id="inputLastName" class="form-control" placeholder="Last Name" required autofocus>
					</div>
				</div>
				<div class="col-sm-12">
					<label for="inputUsername" class="sr-only">Desired Username</label>
					<input type="username" id="inputUsername" class="form-control" placeholder="Desired Username" required>
				</div>
				<div class= "col-sm-12">
					<label for="inputEmail" class="sr-only">Email</label>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
				</div>
				<div>
					<div class="col-sm-6">
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
					</div>
					<div class="col-sm-6">
						<input type="password" id="inputPassword" class="form-control" placeholder="Re-enter Password" required>
					</div>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="terms"> I agree to the <a href="/portfolio/terms_and_conditions.php">Terms and Conditions</a>
					</label>
				</div>
				<div>
					<button class="btn btn-sm btn-primary btn-block" type="submit">Register</button>
				</div>
			</form>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>