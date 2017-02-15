<?php
require_once 'readline.php';

$a = readline("Enter a number: ");

$array = [$a,$a];

for ($i = 0; $i < 8; $i++) {
	$array[] = $array[$i] + $array[$i+1];
}
print_r($array);

if (array_key_exists($a, $array)) {
	$result = $array[$a];
	echo $result;
}