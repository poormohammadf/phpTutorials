<html>
<head>
    <title>Sending email using PHP</title>
</head>
<body>
<?php
$to = "abc@tahlildadehins@gmail.com";
$subject = "This is subject";
$message = "This is simple text message.";
$header = "From:example@mail.com \r\n".
    'MIME-Version: 1.0' . "\r\n" .
    'Content-type: text/html; charset=utf-8';;
$retval = mail ($to,$subject,$message,$header);
if( $retval == true )
{
echo "Message sent successfully...";
}
else
{
echo "Message could not be sent...";
}
?>
</body>
</html>