<?php


$xml = simplexml_load_file('tmp/test.xml');
print "The $xml->title channel is available at $xml->link. ";
print "The description is \"$xml->description\"";

?>