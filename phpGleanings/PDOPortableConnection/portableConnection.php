<?php
// configuration
$dbtype		= "postgresql";
$dbhost 	= "localhost";
$dbname		= "test_db";
$dbuser		= "postgres";
$dbpass		= "12345";


// switching
switch($dbtype){
    case "mysql":
        $dsn = "mysql:host=$dbhost;dbname=$dbname";
        break;

    case "sqlite":
        $dsn = "sqlite:$dbname";
        break;

    case "postgresql":
        $dsn = "pgsql:dbname=$dbname;host=$dbhost;port=5432;user=$dbuser;password=$dbpass";
        break;
}


// database connection
$conn = new PDO($dsn,$dbuser,$dbpass);

if($conn){
    echo('successful connection');
}

?>