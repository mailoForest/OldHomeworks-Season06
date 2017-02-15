<?php

function fibonachi($N){
	
	if ($N == 0) {
		return 1;
	}
	if ($N == 1) {
		return 1;
	}
	echo $N, ' ';
	
	
	return fibonachi($N-1) + $N-2;
}

fibonachi(5);

