<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$conn = mysql_connect($dbHost, $dbUser, $dbPass);
if(! $conn )
{
    die('Could not connect: ' . mysql_error());
}
echo "Connected successfully\n";
$sql = 'CREATE TABLE employee( '.
    'emp_id INT NOT NULL AUTO_INCREMENT, '.
    'emp_name VARCHAR(20) NOT NULL, '.
    'emp_address  VARCHAR(20) NOT NULL, '.
    'emp_salary   INT NOT NULL, '.
    'join_date    timestamp(5) NOT NULL, '.
    'primary key ( emp_id ))';

mysql_select_db('test_db');
$retVal = mysql_query( $sql, $conn );
if(! $retVal )
{
    die('Could not create table: ' . mysql_error());
}
echo "Table employee created successfully\n";
mysql_close($conn);
?>