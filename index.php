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
			<td><h2 class="pwd"><?php echo $password; ?></h2></td>
		</tr>
	</table>

	<div id="form">
		<form action="index.php" method="GET">
			<div id="nwords">
					Number of Words: 
						<input type="text" name="nwords" class="nwords" value="<?php echo $nwords; ?>" required> 
							(Max 9)<span style="color: red;"> *</span><br>
			</div>
			
			<div id="options">
				<input type="checkbox" name="number"> Include a number <br>
				<input type="checkbox" name="spec_symbol"> Include a special symbol<br>
				<input type="checkbox" name="upper_case"> Uppercase first letter<br>
			</div>
			<input type="submit" value="Generate Password" autofocus><br>
			<span style="color: red; font-size: small;">*required field</span>
		</form>
	</div>

</body>

</html>