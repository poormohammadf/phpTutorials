<?php
// configuration
$dbtype		= "mysql";
$dbhost 	= "localhost";
$dbname		= "test_db";
$dbuser		= "root";
$dbpass		= "";

try{
    // database connection
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
}
catch(PDOException $pe)
{
    die("Connection error, because: " .$pe->getMessage());
}


// query
$sql = "SELECT `title` FROM `books` ORDER BY `title`";
$q	 = $conn->query($sql);

if(!$q)
{
    die("Execute query error, because: " .print_r($conn->errorInfo()));
}

$q->setFetchMode(PDO::FETCH_BOTH);

// fetch
while($r = $q->fetch()){
    print_r($r);
}


?>
