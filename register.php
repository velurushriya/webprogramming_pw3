<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./register.css" onload="this.width/=1.3;this.onload=null;">
</head>

<body>
	<form action="register-submit.php" method="post">
		<div class="container">
			<h1>Register to win a change to become Millionaire!!!</h1>

			<section class="img">

			</section>

			<p class="palo">Please fill in this form to create an account.</p>

			<section class="form form-2">
				<label for="email"><b>Username</b></label>
				<input type="text" placeholder="Enter Email" name="username" id="email" required autocomplete="off">
			</section>

			<section class="form">
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password1" id="psw" required autocomplete="off">
			</section>

			<section class="form">
				<label for="psw-repeat"><b>Confirm Password</b></label>
				<input type="password" placeholder="Repeat Password" name="password2" id="psw-repeat" autocomplete="off" required>
			</section>


			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

			<button type="submit" class="registerbtn btnreg">Register</button>
		</div>

		<div class="container signin">
			<p>Already have an account? <a class="registerbtn " href="./login.php">Sign in</a>.</p>
		</div>
	</form>

</body>

</html>