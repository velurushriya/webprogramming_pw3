<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 8;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 250000;
?>

<html>

<head>
	<title>Question 8</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="head">WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br />
	<h2>Correct!</h2>
	<h2><span class="sp">$500000 Question!</span></h2>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
	<table>
		<tr style="height:100px">
			<td colspan=2>Which of the following UN agencies has its headquarters at Paris?</td>
		</tr>
		<tr>
			<td>A. UNESCO</td>
			<!--Correct-->
			<td>B.  ILO</td>
		</tr>
		<tr>
			<td>C. FAO</td>
			<td>D. IMO</td>
		</tr>
	</table>
	<form action="question9.php" method="post">
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