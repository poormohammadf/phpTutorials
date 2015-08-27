<?php
error_reporting( E_ERROR );
function handleError($errno, $errstr,$error_file,$error_line)
{
    echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
    echo "<br />";
    echo "Terminating PHP Script";
    die();
}
//set error handler
set_error_handler("handleError");

//trigger error
trigger_error("error triggered");
myFunction();

?>