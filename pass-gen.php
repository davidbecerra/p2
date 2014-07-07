<?php

$dictionary = file('dictionary.txt', FILE_IGNORE_NEW_LINES);

// $wordbank = [
// 	'the',
// 	'cat', 
// 	'computer', 
// 	'he', 
// 	'because', 
// 	'independently',
// 	'zoo',
// 	'alphabet',
// 	'science',
// 	'Turing',
// 	'foo',
// 	'garlic'
// ];


$nwords = (int) $_GET['nwords'];

$password = '';
for ($i = 0; $i < $nwords; $i++) {
	$password .= $dictionary[rand(0, count($dictionary) - 1)] . '-';
}

$password = rtrim($password, '-');
