<?php

require_once 'readline.php';

$a = readline('a = ');
$b = readline('b = ');
$c = readline('c = ');

if ($a > $b && $b >$c){
	echo "The number $b is between $c and $a.";
} else if ($a > $c && $c >$b) {
	echo "The number $c is between $b and $a.";
} else if ($b > $a && $a >$c) {
	echo "The number $a is between $c and $b.";
}else if ($b > $c && $c >$a) {
	echo "The number $c is between $a and $b.";
} else if ($c > $b && $b >$a) {
	echo "The number $b is between $a and $c.";
} else if ($c > $a && $a >$b) {
	echo "The number $a is between $b and $c.";
} else {
	echo 'There are equal numbers.';
}
