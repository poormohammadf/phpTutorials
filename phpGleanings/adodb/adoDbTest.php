<?php
include('adodb/adodb.inc.php');

$dataBaseType='mysql';
$server='localhost';
$user='root';
$password='';
$dataBase='test_db';

$db=ADONewConnection($dataBaseType);
$db->debug= true;
$db->connect($server,$user,$password,$dataBase);
$rs=$db->execute('select * from `books`');
echo('<pre>');
print_r($rs->GetRows());
echo('</pre>');



