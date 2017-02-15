<?php

$ts = time();

var_dump(date('Y.m.d H:i:s',$ts));

$mkts = mktime(5,15,55,5,31,2015,false);
var_dump(date('Y.m.d H:i:s',$mkts));
