<html>
<head>
    <title>Reading a file using PHP</title>
</head>
<body>

<?php
$filename = "home/user/guest/tmp.txt";
$file =@fopen( $filename, "r" );
if( $file == false )
{
    echo ( "Error in opening file" );
    exit();
}
$fileSize = filesize( $filename );
$fileText = fread( $file, $fileSize );

fclose( $file );

echo ( "File size : $fileSize bytes" );
echo ( "<pre>$fileText</pre>" );
?>

</body>
</html>