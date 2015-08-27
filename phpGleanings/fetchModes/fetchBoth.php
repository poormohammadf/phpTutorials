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
$sql = "SELECT `title` FROM `books` ORDER BY `title`";
$q	 = $conn->query($sql);

//DEFAULT
$q->setFetchMode(PDO::FETCH_BOTH);
$q	 = $conn->query($sql);

// fetch
while($r = $q->fetch()){
    echo('<pre >');
    print_r($r);
    echo('</pre>');
}

// result
//Array ( [title] => PHP AJAX [0] => PHP AJAX )
//Array ( [title] => PHP API [0] => PHP API )
//Array ( [title] => PHP Eclipse [0] => PHP Eclipse )
//Array ( [title] => PHP Prado [0] => PHP Prado )
//Array ( [title] => PHP SEO [0] => PHP SEO )
//Array ( [title] => PHP Web Services [0] => PHP Web Services )
//Array ( [title] => PHP Zend Framework [0] => PHP Zend Framework )
?>

