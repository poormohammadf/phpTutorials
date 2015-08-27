<html>
<body>
<?php
/* First method to create array. */
$numbers = array( 1, 2, 3, 4, 5);
foreach( $numbers as $value )
{
    echo "Value is $value <br />";
}
/* Second method to create array. */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach( $numbers as $value )
{
    echo "Value is $value <br />";
}
//This will produce following result:

//Value is 1
//Value is 2
//Value is 3
//Value is 4
//Value is 5
//Value is one
//Value is two
//Value is three
//Value is four
//Value is five

?>
</body>
</html>