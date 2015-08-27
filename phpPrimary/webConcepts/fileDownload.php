<?php

# HTTP Header
header('Content-type: text/plain');
header('Content-disposition: attachment; filename="test.txt"');

# Actual File Content
readfile('cars\test.txt') or die("Unable to open file!");


?>