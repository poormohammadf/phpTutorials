<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$conn = mysql_connect($dbHost, $dbUser, $dbPass);
if(! $conn )
{
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('test_db');

$sql="ALTER TABLE `employee` ADD `emp_phone` char(10)";

$retVal=mysql_query($sql,$conn);
if(! $retVal )
{
    die('Field emp_phone fails in adding ' . mysql_error());
}
echo "Field emp_phone succeeds in adding\n";

mysql_close($conn);

?>