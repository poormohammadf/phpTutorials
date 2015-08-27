<?php
if(!file_exists("tmp/test.txt"))
{
    die("File not found");
}
else
{
    $file=fopen("tmp/test.txt","r");
    print "Opend file sucessfully";
}
// Test of the code here.
?>