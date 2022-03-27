<?php

declare(strict_types=1); // watch for float to int / int to float conversion does not throw error or warning.

$number = 1;
$numberRef = &$number;

/* Block comment.
   Block
*/
# Also a comment.


print $numberRef; //comment
$number = 2;
print $numberRef;

//variable variables
$foo = 'foo';
$$foo= 'bar';
print $bar;

//Constants *convention all upper case*
const PI = 3.14;
const BR = '<br />';
const NEWLINE = '<br />';
define ("CONSTANT","test"); //defined at runtime ~ depreciated.

echo 'PHP version: '.PHP_VERSION.BR;
echo __LINE__.BR;

echo PI.NEWLINE;
echo "Hello world".BR;
echo "Hello's world".NEWLINE;

$return = print ("Hello world".BR);
echo $return.BR;

#Scaler types.
$responded = true; //get type ~ var_dump();
$points = 10; //int ~ no int8 int16 types ~ no signed/unsigned.
$ratio = 1.4; //float
$message = "Hello"; //string no char type in php?

#array
$names = ["John", "Jane"];
var_dump($names);
echo BR;

$numbers = [1,2,3,4];
var_dump($numbers);
echo BR;

$x = (string) $number;
var_dump($x);





