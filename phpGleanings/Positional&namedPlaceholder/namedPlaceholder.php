<?php
// configuration
$dbtype = "mysql";
$dbhost = "localhost";
$dbname = "test_db";
$dbuser = "root";
$dbpass = "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);


$title = 'PHP%';
$author = 'Bobi%';
// query
$sql = "SELECT * FROM books WHERE title like :title AND author like :author ";
$q = $conn->prepare($sql);
$q->execute(array(  ':author' => $author,
                    ':title' => $title));

// fetch
while($r = $q->fetch()){
    echo('<pre >');
    print_r($r);
    echo('</pre>');
}

?>