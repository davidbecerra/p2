<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>

	<title>Project 2: CS S-15</title>
	<?php require "pass-gen.php" ?>
	<link rel="stylesheet" type="text/css" href="stylesheets/index.css">

</head>

<body>

	<h1>xkcd Password Generator</h1>

	<table id="pwd">
		<tr>
			<td><h2><?php echo $password; ?></h2></td>
		</tr>
	</table>

	<form action="index.php" method="GET">
		Number of Words: <input type="text" name="nwords" value="<?php echo $nwords; ?>" required> (Max 9)<br>
		<br>
		<input type="submit" value="Generate Password">
	</form>

</body>

</html>