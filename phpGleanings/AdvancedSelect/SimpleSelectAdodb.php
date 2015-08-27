<?php

include('adodb/adodb.inc.php'); # load code common to ADOdb

$conn = &ADONewConnection('mysql'); # create a connection
$conn->Connect('localhost','root','','test_db'); # connect to mysql, test_db DSN

$recordSet = &$conn->Execute('select * from `books`');#call by reference

if (!$recordSet) {
    print $conn->ErrorMsg();
} else
    while (!$recordSet->EOF)#Recordset is not empty
    {
        print $recordSet->fields[0] . ' ' . $recordSet->fields[1] . '<br>';
        $recordSet->MoveNext();
    }

$recordSet->Close(); # optional
$conn->Close(); # optional

?>