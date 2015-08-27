<html>
<head>
    <title>Passing Argument by Reference</title>
</head>
<body>
<?php
//call by value
function addFive($num)
{
    $num += 5;
}

//call by reference
function addSix(&$num)
{
    $num += 6;
}
$orignum = 10;
addFive( $orignum );
echo "Original Value is $orignum"." --> call by value <br >";
addSix( $orignum );
echo "Original Value is $orignum"." --> call by reference <br >";
?>
</body>
</html>