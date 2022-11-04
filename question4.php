<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
    $score = 4;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 5000;
?>

<html>
<head>
	<title>Question 4</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="head">WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2><span class="sp">$10000 Question!</span></h2>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Gulf cooperation council was originally formed by?</td>
		</tr>
		<tr>
			<td>A. Bahrain, Kuwait, Oman, Qatar, Saudi Arabia and United Arab Emirates</td><!--Correct-->
			<td>B. Second World Nations</td>
		</tr>
		<tr>
			<td>C. Third World Nations</td> 
			<td>D. Fourth World Nations</td>
		</tr>
	</table>
	<form action="question5.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="true">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
	</form>
</body>


</html>