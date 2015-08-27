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
$title = 'PHP Pattern';
$author = 'Imanda';
$id = 8;
// query
$sql = "UPDATE `books`
        SET `title`=?, `author`=?
		WHERE `id`=?";
$q = $conn->prepare($sql);
$q->execute(array($title,$author,$id));

if($q){
    echo('successful update');
}

?>
