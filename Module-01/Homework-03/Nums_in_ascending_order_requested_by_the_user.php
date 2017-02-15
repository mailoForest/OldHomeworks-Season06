<?php

require_once 'readline.php';

$a = readline('Enter the first number: ');
$b = readline('Enter the second number: ');

if ($a > $b) {
	$c = $a;
	$a = $b;
	$b = $c;
} 
for ($i = $a; $i <= $b; $i++) {
		echo $i, PHP_EOL;
}