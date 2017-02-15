<?php

$array = [1, 2, 3, 4, 5];
function sum_array($array, $i) {
	if ($i <= 0) {
		return $array[$i];
	}

	return $array[$i] + sum_array($array, --$i);
}

echo sum_array($array, count($array) - 1);