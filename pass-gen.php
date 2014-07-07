<?php

$wordbank = [
	'the',
	'cat', 
	'computer', 
	'he', 
	'because', 
	'independently',
	'zoo',
	'alphabet',
	'science',
	'Turing',
	'foo',
	'garlic'
];


$nwords = (int) $_GET['nwords'];

$password = '';
for ($i = 0; $i < $nwords; $i++) {
	$password .= $wordbank[rand(0, count($wordbank) - 1)] . '-';
}

$password = rtrim($password, '-');
