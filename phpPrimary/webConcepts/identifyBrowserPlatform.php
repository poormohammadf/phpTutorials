<html>
<body>
<?php

$viewer = getenv( "HTTP_USER_AGENT" );

    $browser = "An unidentified browser";
    if( preg_match( "/Trident(.*)/i", "$viewer" ) )
    {
        $browser = "Internet Explorer";
    }
    else if(  preg_match( "/Netscape(.*)/i", "$viewer" ) )
    {
        $browser = "Netscape";
    }else if(  preg_match("/chrome(.*)/i", "$viewer" ) )
    {
        $browser = "Chrome";
    }else if(  preg_match("/Opera(.*)/i", "$viewer" ) )
    {
        $browser = "Opera";
    }
    else if(  preg_match( "/Firefox(.*)/i", "$viewer" ) )
    {
        $browser = "Mozilla";
    }


    $platform = "An unidentified OS!";
    if( preg_match( "/Windows/i", "$viewer" ) )
    {
        $platform = "Windows!";
    }
    else if ( preg_match( "/Linux/i", "$viewer" ) )
    {
        $platform = "Linux!";
    }else if ( preg_match( "/Unix/i", "$viewer" ) )
    {
        $platform = "Unix!";
    }else if ( preg_match(  "/Mac/i", "$viewer" ) )
    {
        $platform = "Mac!";
    }

echo("You are using $browser on $platform");

?>
</body>
</html>