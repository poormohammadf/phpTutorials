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
$sql = "SELECT id,title,author,cover FROM `books`";
$q = $conn->prepare($sql);
$q->execute();

$q->bindColumn(1, $id);
$q->bindColumn(2, $title);
$q->bindColumn(3, $author);
$q->bindColumn(4, $cover, PDO::PARAM_LOB);

while($q->fetch())
{
    file_put_contents($id.".png",$cover);
    echo "$title, $author, <img src='".$id.".png'> <br/>";
}

?>
