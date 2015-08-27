<?php

$variable = "name";
$literally = 'My $variable will not print!';
print($literally);
print "<br />";
$literally = "My $variable will print!";
print($literally);

$string_1 = "This is a string in double quotes";
$string_2 = 'This is a somewhat longer, singly quoted string';
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters
echo $string_0.'<br >'.$string_1.'<br >'.$string_39.'<br >'.$string_2;
?>