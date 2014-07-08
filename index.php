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

	<?php
		# Echo's checked if the input field was set in GET form. Function for display purposes
		function recall_if_checked($str) {
			if (isset($_GET[$str]))
				echo "checked";
		}
	?>

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
				<input type="checkbox" name="number" <?php recall_if_checked('number');?> > Include a number <br>
				<input type="checkbox" name="spec_symbol" <?php recall_if_checked('spec_symbol');?> > Include a special symbol<br>
				<input type="checkbox" name="upper_case" <?php recall_if_checked('upper_case');?> > Uppercase first letter<br>
			</div>
			<input type="submit" value="Generate Password" autofocus><br>
			<span class="error"><?php echo $error_msg; ?></span>
		</form>
	</div>

	<div id="description">
		<h2 class="description">Site Description</h2>
			<p>
				This webpage is a random password generator. More specifically, the password is a random collection of English words, special characters, and numbers. To use the application, you must first type a number between 1 and 9 in the entry above. This indicates the number of English words you want in your random password. This is all you need to generate a random password! The checkboxes are further options to make your random password even harder to crack. Currently, the number and special character are added at the end of the password.
			</p>
		<h2 class="description">What is an xkcd password?</h2>
			<p>
				We are often mislead into thinking a single word with a random selection of numbers and characters is the most effective password. However, passwords like these can be easy to track. To make matters worse, they are a pain to remember. The webcomic xkcd released one comic that unveiled a new style of password that is difficult to crack and easy to remember. This xkcd-style password is composed a random collection common words stringed together. This web application generates passwords with this style in mind.  
			</p>
	</div>
			<img src="http://imgs.xkcd.com/comics/password_strength.png ">

</body>

</html>