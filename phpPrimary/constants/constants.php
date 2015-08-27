<?php

define("MINSIZE", 50);

echo MINSIZE.'<br >';
echo constant("MINSIZE").'<br >'; // same thing as the previous line

// Valid constant names
define("ONE",     "first thing");
echo ONE.'<br >';
define("TWO2",    "second thing");
echo    TWO2.'<br >';
define("THREE_3", "third thing");
echo THREE_3.'<br >';
// Invalid constant names
define("2TWO",    "second thing");
define("__THREE__", "third value");


?>