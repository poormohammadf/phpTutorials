<html>
<body>
<?php
srand( microtime() * 1000000 );
$num = rand( 1, 4 );

switch( $num )
{
    case 1: $image_file = "cars/alfa.jpg";
        break;
    case 2: $image_file = "cars/ferrari.jpg";
        break;
    case 3: $image_file = "cars/jaguar.jpg";
        break;
    case 4: $image_file = "cars/porsche.jpg";
        break;
}
echo "Random Image : <img src= $image_file style='display: block;' alt='substr($image_file,5);'/>";
?>
</body>
</html>