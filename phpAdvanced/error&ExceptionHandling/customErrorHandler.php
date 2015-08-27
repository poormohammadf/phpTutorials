<?php
error_reporting(E_ERROR);
ini_set('display_errors', 0);

// Handles non-fatal errors
function handleError($errno, $errstr,$error_file,$error_line)
{
    echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
    echo "<br />";
    echo "Terminating PHP Script\n";
    die();
}
//set error handler
set_error_handler("handleError");

// Handles fatal errors

   function fatalShutdown(){
    $isError = false;
    if ($error = error_get_last()){
        switch($error['type']){
            case E_ERROR:
            case E_CORE_ERROR:
            case E_COMPILE_ERROR:
            case E_USER_ERROR:
                $isError = true;
                break;
        }
    }
        if ($isError){
        echo "Script execution halted ({$error['message']})";
    } else {
        echo "Script completed\n";
    }
    }


//set fatal error handler
register_shutdown_function("fatalShutdown");

//trigger error
trigger_error($test);//none fatal error undefined variable
trigger_error(test());//fatal error undefined function

?>