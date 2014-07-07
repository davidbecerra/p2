<?php

$error_msg = '';
$password = '';
$nwords = '';

# Run once GET request made
if (!empty($_GET)) {
	# Scrub input 
	$input = trim($_GET['nwords']);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);

	# Ensure input is integer
	if (!is_numeric($input) || ($input > 9 || $input <= 0)) {
		$error_msg = "Not a valid number";
 	}
	else {

		$nwords = (int) $input;
		# Read in dictionary of words
		$dictionary = file('dictionary.txt', FILE_IGNORE_NEW_LINES);

		# Generate random password with $nwords from dictionary
		for ($i = 0; $i < $nwords; $i++) {
			$password .= $dictionary[rand(0, count($dictionary) - 1)] . '-';
		}

		# Remove trailing hyphen
		$password = rtrim($password, '-');
	}
}

?>