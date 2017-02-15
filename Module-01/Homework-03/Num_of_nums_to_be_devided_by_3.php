<?php

require_once 'readline.php';

$num_of_nums_devided_by_3 = readline('Enter a number: ');
$starting_number = 3;
$a = $starting_number * $num_of_nums_devided_by_3;

for ($i = $starting_number; $i <= $a ; $i += 3) {
	echo $i;
	if ($i == $a) {
		break;
	}
	echo ", ";
}