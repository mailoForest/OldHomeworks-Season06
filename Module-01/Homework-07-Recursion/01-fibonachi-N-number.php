<?php
require_once 'readline.php';
$N = readline("Въведи номера на числото от редицата на Фибоначи, което искаш да видиш: ");

$array = array_fill(1, $N, 0);
$array[$N] = 1;
$array[$N-1] = 1;

print_r($array);

function fibonachi($array, $N){
	
	if ($N <= 0) {
		return 1;
	}
	
	if (array_key_exists($N-2, $array)) {
		$array[$N-2] = $array[$N] + $array[$N-1];
	}

	return $array;
	return fibonachi($array, $N-1) +1;
}

fibonachi($array, $N);
print_r($array);
