<?PHP
        $logout = true;
        $cfgProgDir = 'phpSecurePages/';
        include($cfgProgDir . "secure.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="<?php echo $strLoginInterface . ' ' . $strPoweredBy . ' phpSecurePages'; ?>">
<meta name="keywords" content="phpSecurePages">
<title>Logout</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{font-family:arial;background:#FFFFFF;text-align:center;}
#logout{margin:1em auto;background:#3B8CCA;color:#FFFFFF;border:8px solid #3B8CCA;font-weight:bold;width:500px;text-align:center;position:relative;}

</style>
</head>
<body>

<!-- Place your logo here -->
        <P><IMG SRC="phpSecurePages/images/logo.gif"  ALT="phpSecurePages logo"></P>
<!-- Place your logo here -->




<div id="logout">You have been logged out.</div>

<p><a href="/">Home</a></p>



</body>
</html>
