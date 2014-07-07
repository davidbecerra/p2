<!DOCTYPE html>
<html>

<head>

	<title>Project 2: CS S-15</title>
	<?php require "pass-gen.php" ?>
	<link rel="stylesheet" type="text/css" href="stylesheets/index.css">

</head>

<body>

	<h1>xkcd Password Generator</h1>

	<div id="pwd">
		<h3 class="pwd"><?php echo $password; ?></h3>
	</div>

	<form action="index.php" method="GET">
		Number of Words<input type="text" name="nwords" required> (Max 9)<br>
		<input type="submit" value="Generate Password">
	</form>

</body>

</html>