<?php
// configuration
$dbtype		= "mysql";
$dbhost 	= "localhost";
$dbname		= "test_db";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// query
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM `booksa`";
$q = $conn->query($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));

$r = $q->fetch(PDO::FETCH_ASSOC);

print_r($r);

//result:
//Fatal error: Uncaught exception 'PDOException' with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'test.booksa' doesn't exist' in
//C:\AppServ5\www\test\pdo\test.php:15 Stack trace: #0 C:\AppServ5\www\test\pdo\test.php(15): PDO->query('SELECT * FROM b...') #1 {main} thrown in
//C:\AppServ5\www\test\pdo\test.php on line 15
