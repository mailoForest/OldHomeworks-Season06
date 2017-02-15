<?php

require_once 'readline.php';

$a = readline('May be you wander if your number is prime or not? Dile it to see: ');
$counter = 0;

for ($i = 1; $i <= $a; $i++) {
	$dev = $a / $i;
	if (is_int($dev) && $dev > 1 && $dev < $a) {
		$counter++;
		echo "Not prime. It devides by $i!", PHP_EOL;	
	}
}
if ($counter == 0) {
	echo "The number is prime.";
}
