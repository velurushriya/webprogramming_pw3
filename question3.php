<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
	$score = 3;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 2500;
?>

<html>
<head>
	<title>Question 3</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="head">WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2><span class="sp">$5000 Question!</span></h2>
	<button class="log-out button1 button" onclick="document.location='logout.php'">Log Out</button>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Habeas Corpus Act 1679?</td>
		</tr>
		<tr>
			<td>A. States that no one was to be imprisoned without a writ or warrant stating the charge against him</td>
			<td>B. Provided facilities to a prisoner to obtain either speedy trial or release in bail</td><!--Correct-->
		</tr>
		<tr>
			<td>C. Safeguarded the personal liberties of the people against arbitrary imprisonment by the king's orders</td> 
			<td>D. All of the above</td>
		</tr>
	</table>
	<form action="question4.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="false">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="true">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
	</form>
</body>


</html>