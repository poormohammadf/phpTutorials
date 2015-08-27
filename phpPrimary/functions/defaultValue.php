<html>
<head>
    <title>PHP Function Setting Default Value</title>
</head>
<body>

<?php
function printMe($param = NULL)
{
    print $param;
}
printMe("This is test");
printMe();
?>

</body>
</html>