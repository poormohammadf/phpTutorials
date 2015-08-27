<?php

if ((!isset($_SERVER['PHP_AUTH_USER'])) || (!isset($_SERVER['PHP_AUTH_PW']))) {
    header('WWW-Authenticate: Basic realm="Secured Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authorization Required.';
    exit;

    // test for username/password
} else if ((isset($_SERVER['PHP_AUTH_USER'])) && (isset($_SERVER['PHP_AUTH_PW']))){
    if (($_SERVER['PHP_AUTH_USER'] != "mia") || ($_SERVER['PHP_AUTH_PW'] != "secret")) {

        //Send headers to cause a browser to request

        //username and password from user
        header('WWW-Authenticate: Basic realm="Secured Area"');
        header('HTTP/1.0 401 Unauthorized');
        //Show failure text, which browsers usually

        //show only after several failed attempts
        echo 'Authorization Required.';
        exit;
    } else if (($_SERVER['PHP_AUTH_USER'] == "mia") || ($_SERVER['PHP_AUTH_PW'] == "secret")) {
        echo "<h1>Welcome Friends!</h1>";
    }
}
?>