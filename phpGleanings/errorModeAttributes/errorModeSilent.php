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
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$sql = "SELECT * FROM `booksa`";
$q = $conn->query($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));

$r = $q->fetch(PDO::FETCH_ASSOC);

print_r($r);

//result:
//ERROR: 42S02:1146:Table 'test.booksa' doesn't exist
?>
