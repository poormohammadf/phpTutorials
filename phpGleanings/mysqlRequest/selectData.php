<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$conn = mysql_connect($dbHost, $dbUser, $dbPass);
if(! $conn )
{
    die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';

mysql_select_db('test_db');
$retVal = mysql_query( $sql, $conn );
if(! $retVal )
{
    die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retVal, MYSQL_ASSOC))
{
    echo "EMP ID :{$row['emp_id']}  <br> ".
        "EMP NAME : {$row['emp_name']} <br> ".
        "EMP SALARY : {$row['emp_salary']} <br> ".
        "--------------------------------<br>";
}
mysql_free_result($retVal);
echo "Fetched data successfully\n";
mysql_close($conn);
?>