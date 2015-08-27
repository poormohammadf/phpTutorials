<?php

$channel = array('title' => "What's For Dinner", 'link' => 'http://menu.example.com/', 'description' => 'Choose what to eat tonight.');
print "<xmp>";
print "<channel>\n";
foreach ($channel as $element => $content) {
    print " <$element>";
    print htmlentities($content);
    print "</$element>\n";
}
print "</channel>";
print "</xmp>";

?>