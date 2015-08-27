<?php
// configuration
$dbtype = "mysql";
$dbhost = "localhost";
$dbname = "test_db";
$dbuser = "root";
$dbpass = "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// new data
$title = 'PHP Security';
$author = 'Jack Hijack';

// query
$sql = "INSERT INTO `books` (title,author) VALUES (:title,:author)";
$q = $conn->prepare($sql);
$q->execute(array(  ':author' => $author,
                    ':title' => $title));

if($q){
    echo('successful insert');
}


?>
