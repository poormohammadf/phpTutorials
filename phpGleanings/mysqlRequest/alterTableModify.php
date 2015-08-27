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

$sql="ALTER TABLE `employee` MODIFY `emp_address` char(30)";

$retVal=mysql_query($sql,$conn);
if(! $retVal )
{
    die('Field emp_address fails in modifying ' . mysql_error());
}
echo "Field emp_address succeeds in modifying\n";

mysql_close($conn);

?>