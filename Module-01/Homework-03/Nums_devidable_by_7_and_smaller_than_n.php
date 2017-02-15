<?php

require_once 'readline.php';

$n = readline('enter a number: ');

if ($n >=10 && $n <= 200 ) {
	for ($i = $n; $i >= 7; $i--) {
		if ($i % 7 == 0) {
			echo $i;
	
			if ($i == 7) {
				break;
			}
			echo ", ";
		}
	}
}
