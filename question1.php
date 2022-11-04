<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 1;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 500;
?>

<html>

<head>
	<title>Question 1</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="head">WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br />
	<h2><span class="sp">$1000 Question!</span> </h2>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>

	<table>
		<tr style="height:100px">
			<td colspan=2>Hitler party which came into power in 1933 is known as ?</td>
		</tr>
		<tr>
			<td>A. Labour Party</td>
			<td>B. Nazi Party</td>
		</tr>
		<tr>
			<td>C. Ku-Klux-Klan</td>
			<!--Correct-->
			<td>D. Democratic Party</td>
		</tr>
	</table>
	<form action="question2.php" method="post">
		<p class="txt">Choose your answer:
			<select name="answer">
				<option value="false">A</option>
				<option value="true">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class="submit">

		</p>
	</form>
	<div class="correct">
		<h2>Correct!</h2>
	</div>

</body>


</html>