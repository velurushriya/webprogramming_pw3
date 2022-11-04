<?php
	
	$answer = $_POST['answer'];
	$check = strcmp($answer,"true");
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$score = $_SESSION["score"];
	$amount = $_SESSION["amount"];

	if($check != 0) {
		//check post
		$lines = file('user_data.txt');
		$result = '';

		foreach($lines as $line) {
			$data = explode(',', $line);
			if($data[0] == $username) {
				$result .= $username . "," . $password . "," . $score . "," . $amount . "\n";
			} else {
				$result .= $line;
			}
		}

		file_put_contents('user_data.txt', $result);
		header("Location: loser.php");
		exit;
	}
?>