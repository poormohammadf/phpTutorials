<?php

include('adodb/adodb.inc.php');
include('adodb/tohtml.inc.php');

$ADODB_CACHE_DIR = '/usr/local/ADOdbcache';
$conn = &ADONewConnection('mysql');//call by reference
$conn->Connect('localhost','root','','test_db');
$conn->cacheSecs = 3600*24; // cache 24 hours

$rs = $conn->CacheSelectLimit('select * from `books`',10);

if($rs){
    echo('caching');
}

?>