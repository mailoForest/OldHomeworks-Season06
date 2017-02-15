<?php

require_once 'readline.php';

$n = readline('choose hight of the triangle: ');

if ($n > 1) {
	for ($ij = 0; $ij < $n; $ij++) {
		for ($ii = $n - 1; $ii > $ij; $ii--) {
			echo " ";
		}
		for ($iii = 0; $iii - 1 < $ij; $iii++) {
			echo "*";
		}
		for ($iiii = 0; $iiii < $ij; $iiii++) {
			echo "*";
		}
	echo '', PHP_EOL;
	}
} else {
	echo "enter a number bigger than 1";
}