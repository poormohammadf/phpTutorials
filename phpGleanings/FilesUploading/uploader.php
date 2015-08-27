<?php
if( @$_FILES['file']['name'] != "" )
{
    move_uploaded_file($_FILES["file"]["tmp_name"] , "var/www/html/".$_FILES["file"]["name"]) or
    die( "Could not copy file!");
}
else
{
    die("No file specified!");
}
?>
<html>
<head>
    <title>Uploading Complete</title>
</head>
<body>
<h2>Uploaded File Info:</h2>
<ul>
    <li>Sent file: <?php echo $_FILES['file']['name'];  ?>
    <li>File size: <?php echo $_FILES['file']['size'];  ?> bytes
    <li>File type: <?php echo $_FILES['file']['type'];  ?>
</ul>
</body>
</html>