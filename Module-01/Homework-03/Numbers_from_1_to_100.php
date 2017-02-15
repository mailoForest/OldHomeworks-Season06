<?php

for ($i = 1; $i <= 100; $i+=10) {
	echo "$i ";
}

function coun($j) {
	if ($j > 100) {
		return;
	}
	 return coun($j + 1);
}

echo coun(1);