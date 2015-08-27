<html>
<head>
    <title>Dynamic Function Calls</title>
</head>
<body>
<?php
function sayHello()
{
    echo "Hello<br />";
}
$function_holder = "sayHello";
$function_holder();
?>
</body>
</html>