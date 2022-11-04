<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 5;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 10000;
?>

<html>

<head>
	<title>Question 5</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="head">WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br />
	<h2>Correct!</h2>
	<h2><span class="sp"> $50000 Question!</span></h2>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
	<table>
		<tr style="height:100px">
			<td colspan=2>First China War was fought between?</td>
		</tr>
		<tr>
			<td>A. China and Britain</td>
			<td>B. China and France</td>
		</tr>
		<tr>
			<td>C. China and Egypt</td>
			<!--Correct-->
			<td>D. China and Greek</td>
		</tr>
	</table>
	<form action="question6.php" method="post">
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