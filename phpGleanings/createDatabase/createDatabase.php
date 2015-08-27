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
$sql = 'CREATE Database `test_db`';
$retVal = mysql_query( $sql, $conn );
if(! $retVal )
{
    die('Could not create database: ' . mysql_error());
}
echo "Database test_db created successfully\n";
mysql_close($conn);
?>