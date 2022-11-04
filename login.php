<?php
session_start();
$show_message=false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	header('Location: home.php');
	exit();
} else {
	if (isset($_SESSION["error"])) {
		$error = $_SESSION["error"];
		$show_message = !empty($error);
	}
}


?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./login.css?php echo time(); ?>" />

</head>

<body>
	<div class="whole">
		<section class="sec-1">
			<h1>Login to your account</h1>
			<h2 class="error"><?php $show_message && print $error ?></h2>
			<img src="./logo.jpg" class="logo" alt="" onload="this.width/=1.3;this.onload=null;">
			<div class="form">
				<form action="login-submit.php" method="post">
					<div class="login">
						<h1>Login</h1>
						<form method="post">
							<input type="text" name="username" placeholder="Username" required="required" />
							<input type="password" name="password" placeholder="Password" required="required" />
							<button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
						</form>
					</div>
				</form>
			</div>
		</section>
		<section class="sec-2">
			<div class="rand">
				<h3>New Here?</h3>
				<p>Sign Up and get a chance to become Millionaire</p>
				<a href="./register.php">Sign Up</a>
			</div>
		</section>
	</div>
</body>

</html>