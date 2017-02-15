<?php

$s = 110;
$v = 60;
$t = $s/$v;

$StartTime = 14.5;

$TimeAtMinutes = ($StartTime+$t)*60;
$HH = Intval($TimeAtMinutes/60);
$MM = $TimeAtMinutes%60;
$ArrivalTime = $HH . ":" . $MM;
echo $ArrivalTime;
