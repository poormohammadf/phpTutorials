<?php

include('adodb/adodb.inc.php');
include('adodb/tohtml.inc.php');
$ADODB_CACHE_DIR = '/usr/local/ADOdbcache';

$conn = &ADONewConnection('mysql');
$conn->Connect('localhost','root','','test_db');

$rs = $conn->CacheExecute(15, 'select * from `books`');
# cache 15 secs 

if($rs){
    echo('caching');
}
?>