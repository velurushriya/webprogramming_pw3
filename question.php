<!DOCTYPE html>
<?php
session_start();
$score = 0;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 0;
?>
<html>

<head>
	<title>Question</title>
	<link href="question.css" type="text/css" rel="stylesheet" onload="this.width/=1.3;this.onload=null;" />
</head>

<body>
	<h1 class="head">WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br />
	<h2><span class="sp">$500 Question!</span></h2>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
	<table>
		<tr style="height:100px">
			<td colspan=2>Grand Central Terminal, Park Avenue, New York is the worlds?</td>
		</tr>
		<tr>
			<td>A. Largest railway station</td>
			<!--Correct-->
			<td>B. Highest railway station</td>
		</tr>
		<tr>
			<td>C. Longest railway station</td>
			<td>D. None of the above</td>
		</tr>
	</table>
	<form action="question1.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
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