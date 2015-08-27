<?php
// configuration
$dbtype		= "mysql";
$dbhost 	= "localhost";
$dbname		= "test_db";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass, array(PDO::ATTR_PERSISTENT => true));

echo $conn->getAttribute(PDO::ATTR_DRIVER_NAME);
echo "<br>";
echo $conn->getAttribute(PDO::ATTR_CLIENT_VERSION);
echo "<br>";
echo $conn->getAttribute(PDO::ATTR_SERVER_VERSION);

?>
