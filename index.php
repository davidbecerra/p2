<!DOCTYPE html>
<html>

<head>

	<title>Project 2: CS S-15</title>
	<?php require "pass-gen.php" ?>

</head>

<body>

	<?php echo $password; ?>

	<form action="index.php" method="GET">
		Number of Words<input type="text" name="nwords" required> (Max 9)<br>
		<input type="submit" value="Generate Password">
	</form>

</body>

</html>