<?php
session_start();
//open socket

if(!($fp = @fsockopen("tutorial.loc", 80, $errno, $errstr, 10)))

{
print("Couldn't open socket!<br >");

exit;

}
else {
    error_log("4");
    $out = "HEAD /phpSecurity/protectHttp.php HTTP/1.1\r\n";
    $out.= "Host: tutorial.loc\r\n";
    $out.= "Content-Type: application/x-www-form-urlencoded\r\n";
    $out.= "Authorization: Basic ".base64_encode("youyou:secret");
    $out.=  'Content-Length: '.'\r\n';
    $out.= "Connection: Close\r\n\r\n";

    fwrite($fp, $out);
    fflush($fp);

    header('Content-type: text/plain');
    while (!feof($fp)) {
        fpassthru($fp);
    }

    fclose($fp);
}

?>
