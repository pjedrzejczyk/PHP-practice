<?php

$x = null;
var_dump($x);

$x = NULL;
var_dump($x);

echo is_null($x);

if ($x === null){
    //returns true.
}

//undefined variables return null;

unset($x);
var_dump($x);