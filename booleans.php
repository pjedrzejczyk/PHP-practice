<?php

const BR = '<br />';

$boolean = true;

// bool false = int(0, -1) float(0.0, -0.0) string ('', '0') array ([]) null

if ($boolean) { //IDE is detecting hard coded hot path... very cool.
    echo 'true'.BR;
}
else {
    //else
}

echo is_bool($boolean).BR;
var_dump($boolean);

