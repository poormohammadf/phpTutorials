<?php

session_start();

echo("<br /><a href=\"visitorCounter.php?" . htmlspecialchars(SID) . "\">Page2</a><br />\n");

echo("Session-ID: " . session_id() . "<br />");
echo("Session-Content: " . print_r($_SESSION));

?>
