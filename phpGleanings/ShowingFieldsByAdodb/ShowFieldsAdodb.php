<?php
include('adodb/adodb.inc.php');

$db = ADONewConnection('mysql');
$db->debug = true;
$db->Connect('localhost', 'root', '', 'test_db');

$arr = $db->MetaColumns('books');

echo "<pre>";
print_r($arr);
echo "</pre>";

?>
