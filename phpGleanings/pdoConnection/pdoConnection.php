<?php

$dsn='mysql:dbname=test_db;host=localhost';
$username='root';
$password='';


try{
$conn= new PDO($dsn,$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connected successfully <br >";
}
catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }



$q=$conn->prepare("SELECT * FROM `employee`");
$q->execute()or die("failed");

while($rows=$q->fetch(PDO::FETCH_ASSOC)){
    foreach($rows as $value){
        echo($value);
    }



}


?>