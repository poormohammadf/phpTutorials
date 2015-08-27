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

$sql="ALTER TABLE `employee` DROP `emp_phone`";

$retVal=mysql_query($sql,$conn);
if(! $retVal )
{
    die('Field emp_phone fails in deleting ' . mysql_error());
}
echo "Field emp_address succeeds in deleting\n";

mysql_close($conn);

?>