<html>
<body>
<?php
$array = array( 1, 2, 3, 4, 5);
foreach( $array as $value )
{
    if( $value == 3 )continue;
    echo "Value is $value <br />";
}
//This will produce following result

//Value is 1
//Value is 2
//Value is 4
//Value is 5

?>
</body>
</html>