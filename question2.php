<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 2;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 1000;
?>

<html>

<head>
	<title>Question 2</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="head">WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br />
	<h2>Correct!</h2>
	<h2><span class="sp">$2500 Question!</span></h2>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
	<table>
		<tr style="height:100px">
			<td colspan=2>Epsom (England) is the place associated with?</td>
		</tr>
		<tr>
			<td>A. Horse racing</td>
			<td>B. Polo</td>
		</tr>
		<tr>
			<td>C. Shooting</td>
			<td>D. Snooker</td>
			<!--Correct-->
		</tr>
	</table>
	<form action="question3.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="true">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class="submit">
		</p>
	</form>
</body>


</html>