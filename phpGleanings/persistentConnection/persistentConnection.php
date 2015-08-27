<?php
// configuration
$dbtype		= "mysql";
$dbhost 	= "localhost";
$dbname		= "test_db";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass, array(PDO::ATTR_PERSISTENT => true));

// query
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM `books`";
$q = $conn->query($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));

$r = $q->fetch(PDO::FETCH_ASSOC);

print_r($r);

?>
