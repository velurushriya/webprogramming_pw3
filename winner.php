<!DOCTYPE html>
<html>

<head>
	<?php
	session_start();
	include 'check.php';
	$score = 10;
	$amount = 1000000;
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 1000000;
	$lines = file('user_data.txt');
	$result = '';

	foreach ($lines as $line) {
		$data = explode(',', $line);
		if ($data[0] == $username) {
			$result .= $username . "," . $password . "," . $score . "," . $amount . "\n";
		} else {
			$result .= $line;
		}
	}

	file_put_contents('user_data.txt', $result);

	?>
	<title>WINNER</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>YOU ARE A MILLIONAIRE!!!?</h1>
	<section class="gif5">
		<img class="img-1" src="logo.png"><br />
		<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
		<div>
			<h2 style="color:green">CONGRATULATIONS <?php print $_SESSION["username"] ?>! </h2><br>
			<h2 style="color:gold">YOU WON $1,000,000!</h2>
			<h2 style="color:gold">YOU'RE A MILLIONAIRE!</h2>
			<a href="leaderboard.php">Go to the Leaderboard</a>
		</div>
	</section>
</body>

</html>