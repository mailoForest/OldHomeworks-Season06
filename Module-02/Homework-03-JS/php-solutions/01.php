<?php
$array = [1,2,3,4,5,1,2,3,4,2,1,3,"o","i","y","o","i","u","t","r","u","o","i","o","o","o"];
$a = array_fill_keys($array, 0); // втори вариант
foreach ($array as $value) {
	foreach ($a as $key => $val) {
		if ($key == $value) {
			$a[$key]++;
		}
	}
}
print_r($a);
//$a = array_count_values($array); //първи вариант
$maxValue = 0;
$maxKey = 0;
foreach ($a as $key => $value) {
	if ($maxValue < $a[$key]) {
		$maxValue = $value;
		$maxKey = $key;
	}
}
echo "Резултат: \"$maxKey\" - $maxValue пъти.";