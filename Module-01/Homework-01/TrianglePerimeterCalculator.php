<?php

require_once 'readline.php';

$a = readline('a = ');
$b = readline('b = ');
$c = readline('c = ');

if ($a + $b > $c && $a + $c > $b && $b + $c > $a){
	echo 'Triangle perimeter equals ', $a + $b + $c;
} else {
	echo 'These are not correct side lenght values of a triangle!';
}
