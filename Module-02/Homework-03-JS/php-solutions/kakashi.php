<?php

$array = [1, "a", 7, 8, 9, 4, 6, "b", 4, "a", "a", "a","a","a"];

$arr = [];

foreach ($array as $value){
		$arr[$value] = 0;
}
foreach ($array as $value) {
	foreach ($arr as $key => $val) {
		if ($key == $value) {
			$arr[$key]++;
		}
	}
}
$maxValue = 0;
$maxKey = 0;
foreach ($arr as $key => $value) {
	if ($maxValue < $arr[$key]) {
		$maxValue = $value;
		$maxKey = $key;
	}
}
echo "Резултат: \"$maxKey\" - $maxValue пъти.";