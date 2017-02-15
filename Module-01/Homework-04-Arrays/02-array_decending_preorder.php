<?php

$array = [10,5,8,6,-3,7];
$arr = $array;
$lenght = count($array);

for ($i = $lenght - 1; $i >= 0; $i--) {
	$arr[] = $array[$i];
}

print_r($arr);