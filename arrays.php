<?php

$names = ['John','Jane','Alex']; //double quotes work.
var_dump($names);
echo '<br />';

$names = array('John', 'Jane');
echo '<pre>';
print_r($names);
echo '</pre>';
echo '<br />';

echo $names[0]; //[] index or key

echo '<pre>';
print_r(isset($names[1])); //check if element exists.
echo '</pre>';
