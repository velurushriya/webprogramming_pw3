<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 9;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 500000;
?>

<html>

<head>
	<title>Question 9</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="head">WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br />
	<h2>Correct!</h2>
	<h2><span class="sp">Final Question: $1000000 Question!</span></h2>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
	<table>
		<tr style="height:100px">
			<td colspan=2>
				Which of the following is nickname of Virat Kohli in World of Cricket??</td>
		</tr>
		<tr>
			<td>A. Run Machine</td>
			<td>B. Catch King</td>
			<!--Correct-->
		</tr>
		<tr>
			<td>C. Hitter Bitter</td>
			<td>D. The hero of Cricket</td>
		</tr>
	</table>
	<form action="winner.php" method="post">
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