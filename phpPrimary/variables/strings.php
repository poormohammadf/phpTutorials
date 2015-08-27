<?php
$variable = "name";
$literally = 'My $variable will not print!';
print($literally);
print "<br>";
$literally = "My $variable will print!";
print($literally);
?>