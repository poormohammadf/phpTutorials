<?php
// configuration
$dbtype		= "mysql";
$dbhost 	= "localhost";
$dbname		= "test_db";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data

// query
$sql = "INSERT INTO `books` (title,author) values(?,?)";

$q = $conn->prepare($sql);
$q->bindValue(1, 'PHP Tutorial');
$q->bindValue(2, 'W3School');

$q->execute();

if($q){
    echo('successful insert');
}

?>