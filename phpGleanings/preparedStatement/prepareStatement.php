<?php
// configuration
$dbtype		= "mysql";
$dbhost 	= "localhost";
$dbname		= "test_db";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$title = 'PHP AJAX';

// query
$sql = "SELECT * FROM `books` WHERE `title` = ?";
$q = $conn->prepare($sql);
$q->execute(array($title));


$q->setFetchMode(PDO::FETCH_BOTH);

// fetch
while($r = $q->fetch()){
    echo('<pre >');
    print_r($r);
    echo('</pre>');
}


?>
