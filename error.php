<?php
session_start();
session_save_path("session");
$error = $_SESSION["error"];
?>

<!DOCTYPE html>
<html>

<head>
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="errorw.css" type="text/css" rel="stylesheet" />

</head>

<body>
	<h1>ERROR</h1>
	<h2><?php print $error ?></h2>
</body>

</html>