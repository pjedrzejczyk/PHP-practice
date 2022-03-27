<?php

const BR = "<br />";

echo PHP_INT_MAX.BR;
echo PHP_INT_MIN.BR;

$n = 0b0000101;
var_dump($n);
echo BR;

$x = (int) 1.9; //does not round!
var_dump($x);
echo BR;

var_dump(is_int($x));