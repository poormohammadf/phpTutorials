<?php
if( isset($_REQUEST["name"]) || isset($_REQUEST["age"] ))
{
    //USE BOTH GET AND POST
    echo "Welcome ". $_REQUEST['name']. "<br />";
    echo "You are ". $_REQUEST['age']. " years old.";
    exit();
}
?>
<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">

    Name: <input type="text" name="name" />
    Age: <input type="text" name="age" />

    <input type="submit" />
</form>
</body>
</html>