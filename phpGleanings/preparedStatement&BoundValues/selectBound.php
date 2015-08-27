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
$sql = "SELECT * FROM `books`";
$q = $conn->prepare($sql);
$q->execute();

$q->bindColumn(1, $id);
$q->bindColumn(2, $title);
$q->bindColumn(3, $author);

while($q->fetch())
{
    echo "$title, $author <br/>";
}

?>
