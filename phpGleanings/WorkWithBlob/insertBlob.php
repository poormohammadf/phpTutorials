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
$title = "ZEND FRAMEWORK TUTORIAL";
$author = "PHP Everyday";
$cover = fopen('7.png','rb');
// query
$sql = "INSERT INTO `books` (title,author,cover) values(?,?,?)";

$q = $conn->prepare($sql);
$q->bindParam(1, $title);
$q->bindParam(2, $author);
$q->bindParam(3, $cover, PDO::PARAM_LOB);

$q->execute();

if($q){
    echo('successful insert');
}

?>
