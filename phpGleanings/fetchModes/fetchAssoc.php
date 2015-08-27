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
$q->setFetchMode(PDO::FETCH_ASSOC);

// fetch
while($r = $q->fetch()){
    echo('<pre >');
    print_r($r);
    echo('</pre>');
}

// result
//Array ( [title] => PHP AJAX)
//Array ( [title] => PHP API)
//Array ( [title] => PHP Eclipse)
//Array ( [title] => PHP Prado)
//Array ( [title] => PHP SEO)
//Array ( [title] => PHP Web Services)
//Array ( [title] => PHP Zend Framework)

?>