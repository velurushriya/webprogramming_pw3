<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 7;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 100000;
?>

<html>

<head>
	<title>Question 7</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="head">WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br />
	<h2>Correct!</h2>
	<h2><span class="sp">$250000 Question!</span></h2>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
	<table>
		<tr style="height:100px">
			<td colspan=2>Study of earthquakes is known as?</td>
		</tr>
		<tr>
			<td>A. Ecology</td>
			<td>B. Seismology</td>
		</tr>
		<tr>
			<td>C. Numismatics</td>
			<!--Correct-->
			<td>D. None of the above</td>
		</tr>
	</table>
	<form action="question8.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="false">A</option>
				<option value="true">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class="submit">
		</p>
	</form>
</body>


</html>