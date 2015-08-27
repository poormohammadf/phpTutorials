<?php
include('adodb/adodb.inc.php');

$db = ADONewConnection('mysql');
$db->debug = true;
$db->Connect('localhost', 'root', '', 'test_db');

echo('<pre>');
print_r($db->MetaTables());
echo('</pre>');

?>
