<?php

require_once 'readline.php';

$a = readline("Enter the first number: ");
$b = readline("Enter the second number: ");

$sum_ii = 0;
$sum_i = 0;

if ($a > $b) {
	$c = $a;
	$a = $b;
	$b = $c;
}
for ($i = $a; $i <= $b; $i++) {
	$ii = $i**2;
	if ($ii % 3 == 0) {
		$sum_i += $i;
		echo "skip $i";
		if ( $i == $b) {
			break;		
		}
		echo ", ";
	} else if ($i % 3 != 0) {
		echo $ii;
		$sum_ii += $ii;
		if ($sum_ii - $sum_i > 200) {
			break;
		}
		echo ", ";
	}
}

