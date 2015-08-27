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

//LIKE mysql_fetch_row
$q->setFetchMode(PDO::FETCH_NUM);

// fetch
while($r = $q->fetch()){
    echo('<pre >');
    print_r($r);
    echo('</pre>');
}

// result
//Array ( [0] => PHP AJAX )
//Array ( [0] => PHP API )
//Array ( [0] => PHP Eclipse )
//Array ( [0] => PHP Prado )
//Array ( [0] => PHP SEO )
//Array ( [0] => PHP Web Services )
//Array ( [0] => PHP Zend Framework )
