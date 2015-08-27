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
$conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
$sql = "SELECT * FROM `books`";
$q = $conn->prepare($sql);
$q->execute();

$r = $q->fetch(PDO::FETCH_ASSOC);

// fetch
while($r = $q->fetch()){
    echo('<pre >');
    print_r($r);
    echo('</pre>');
}

//result:
//Array ( [ID] => 1 
//        [TITLE] => PHP AJAX 
//        [AUTHOR] => Andreas 
//        [DESCRIPTION] => This is good book for learning AJAX 
//        [ON_SALE] => 1 
//        [COVER] => )
?>
