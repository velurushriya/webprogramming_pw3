<!DOCTYPE html>

<?php
	include 'check.php';
	$score = 500000;
?>

<html>

<head>
	<title>Question 10</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2>THE FINAL $1,000,000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 >How old was Alan Turing when he died?</td>
		</tr>
		<tr>
			<td>A. 41</td> <!--Correct-->
			<td>B. 52</td> 
		</tr>
		<tr>
			<td>C. 61</td> 
			<td>D. 34</td> 
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
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
	</form>
</body>


</html>