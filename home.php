<?php session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
	header('Location: login.php');
	exit();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<!-- <link href="style.css" type="text/css" rel="stylesheet" /> -->
	<link href="home.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
	<section class="sec-4"></section>
	<!-- <h3>Rich people play the money game to win poor people play the money game to not loose
	</h3> -->
	<img class="logo" src="logo.png"><br />
	<div>
		<h1 class="no-mrgn">Welcome, <?php print $_SESSION["username"] ?>,you can be a millionaire</h1>
		<p> <b>RULES:</b>
		<div class="rules">
			<p class="rule">You will have 10 Questions</p>
			<p class="rule">1.Read each question carefully.</p>
			<p class="rule">2.Each person will answer each question.</p>
			<p class="rule">3.Each person will contribute equally.</p>
			<p class="rule">4.Each person must write their answer on their whiteboard.</p>
			<p class="rule">5.The person with the most money at the end of the game will win a reward.</p>
			<p class="rule">6.Do NOT collaborate with other a person unless you use lifeline.</p>
			<p class="rule">7.You may NOT use your book or notes to answer the questions.</p>
		</div>
		<p class="rule rl-spl">Any wrong answer, you lose the chance to become a millionaire!
		</p>
		</p>
		<div>
			<button class="button button1 btn-2" onclick="document.location='question.php'">Questions</button>
			<button class="button button1 btn-3" onclick="document.location='leaderboard.php'">Leaderboard</button>
		</div>
	</div>

</body>