<?php

$array = [10,5,8,6,-3,7];

$minNumber = $array[0];

for ($i = 0; $i < count($array); $i++) {
	if ($array[$i] < $minNumber && $array[$i] % 3 == 0) {
		$minNumber = $array[$i];
	}
}

echo "Ќай-малкото число в масива кратно на 3 е $minNumber.";