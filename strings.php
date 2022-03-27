<?php

$firstname = "John";
$lastname = 'Smith';

echo  "$firstname and $lastname"."<br />";
$FullName = $firstname . ' ' . $lastname."<br />";

echo $FullName;

echo $FullName.'<br />';

for ($x = 0;$x < strlen($FullName); $x++){
    for ($i = 0; $i < $x; $i++){echo '&nbsp';}
        echo $FullName[$x]."<br />";
}

// Heredoc ~ similar to double quoted.
$text = <<<TEXT
Lorem? Hello $firstname
Sample Text
TEXT;

echo nl2br($text);
echo "<br />";


//Nowdoc ~ similar to single quoted string
$text = <<<'TEXT'
Lorem? Hello $firstname
Sample Text
TEXT;

echo nl2br($text);
