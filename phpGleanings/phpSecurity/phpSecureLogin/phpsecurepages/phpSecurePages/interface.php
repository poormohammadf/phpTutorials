<?php
/**************************************************************/
/*         phpSecurePages version 0.44 beta (04/02/15)        */
/*              Copyright 2015 Circlex.com, Inc.              */
/*                                                            */
/*          ALWAYS CHECK FOR THE LATEST RELEASE AT            */
/*              http://www.phpSecurePages.com                 */
/*                                                            */
/*              Free for non-commercial use only.             */
/*               If you are using commercially,               */
/*         or using to secure your clients' web sites,        */
/*   please purchase a license at http://phpsecurepages.com   */
/*                                                            */
/**************************************************************/
/*    This is the login page that is shown when your users    */
/*      try to access protected pages. Change logo to your    */
/*                  logo on line 77 below.                    */
/**************************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="<?php echo $strLoginInterface . ' ' . $strPoweredBy . ' phpSecurePages'; ?>">
<meta name="keywords" content="phpSecurePages">
<title><?php echo $strLoginInterface; ?></title>
<SCRIPT LANGUAGE="JavaScript">
<!--
//  ------ check form ------
function checkData() {
        var f1 = document.forms[0];
        var wm = "<?php echo $strJSHello; ?>\n\r\n";
        var noerror = 1;

        // --- entered_login ---
        var t1 = f1.entered_login;
        if (t1.value == "" || t1.value == " ") {
                wm += "<?php echo $strLogin; ?>\r\n";
                noerror = 0;
        }

        // --- entered_password ---
        var t1 = f1.entered_password;
        if (t1.value == "" || t1.value == " ") {
                wm += "<?php echo $strPassword; ?>\r\n";
                noerror = 0;
        }

        // --- check if errors occurred ---
        if (noerror == 0) {
                alert(wm);
                return false;
        }
        else return true;
}
//-->
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $strLoginInterface; ?></title>
<style>
body{font-family:arial;background:#FFFFFF;text-align:center;}
#error{margin:1em auto;background:#FA4956;color:#FFFFFF;border:8px solid #FA4956;font-weight:bold;width:500px;text-align:center;position:relative;}
#entry{margin:2em auto;background:#fff;border:8px solid #eee;width:500px;text-align:left;position:relative;}
#entry a, #entry a:visited{color:#0283b2;}
#entry a:hover{color:#111;}
#entry h1{text-align:center;background:#3B8CCA;color:#fff;font-size:16px;padding:16px 25px;margin:0 0 1.5em 0;border-bottom:1px solid #007dab;}
#entry p{text-align:center;}
#entry div{margin:.5em 25px;background:#eee;padding:4px;text-align:right;position:relative;}
#entry label{float:left;line-height:30px;padding-left:10px;}
#entry .field{border:1px solid #ccc;width:280px;font-size:12px;line-height:1em;padding:4px;}
#entry div.submit{background:none;margin:1em 25px;text-align:center;}
#entry div.submit label{float:none;display:inline;font-size:11px;}
#entry button{border:0;padding:0 30px;height:30px;line-height:30px;text-align:center;font-size:16px;font-weight:bold;color:#fff;background:#3B8CCA;cursor:pointer;}
</style>
</head>
<body>

<!-- Place your logo here -->
        <P><IMG SRC="phpSecurePages/images/logo.gif"  ALT="phpSecurePages logo"></P>
<!-- Place your logo here -->

<?php
// check for error messages
if ($phpSP_message) {
        echo '<div id="error">'.$phpSP_message.'</div>';
        }
?>

<!-- ------ Have you set up phpSP with no users?  ------ -->
        <?php if ($useDatabase == false AND $useData == true AND $cfgLogin[1] == "") echo '<p style="font-family:arial;font-size:22px;color:red;font-weight:bold;">WEBMASTER: It looks like you have no users or passwords set up! <br>
        <br><span style="font-size:18px;">If you are not using a database, make sure you have configured<br>at least one user in config.php (around line 85).</span></p>'; ?>
<!-- ------ Initial Setup (No Users) check ends here ------ -->


<form id="entry" action="<?php echo $_SERVER['REQUEST_URI'] ?>" METHOD="post" onSubmit="return checkData()">

<?php //if there are $_POST variables -- add them to the form...
   $pname=""; $pvalue="";
   foreach ($_POST as $pname => $pval) {
        if ($pname="entered_login" OR $pname="entered_password") continue;
        echo '<input type=hidden name="'.$pname.'" value="'.$pval.'">'."\n";
        }
?>
    <h1><?php echo $strLoginInterface; ?></h1>
    <div>
            <label for="login_username">Username</label> 
            <input type="text" name="entered_login" class="field required" />
    </div>                        
    <div>
            <label for="login_password">Password</label>
            <input type="password" name="entered_password" class="field required" />
    </div>                        
    <div class="submit">
        <button type="submit">Log in</button>


          
    </form>
    </div>

<!-- ------ Copyright line starts here ------
        (if this software is used for free (not allowed for commercial use)
        this line may NOT be removed or altered in such a way that it becomes
        less (or un-) readable). -->
        <p><?php echo $strPoweredBy; ?> <A HREF="http://www.phpSecurePages.com" TITLE="phpSecurePages <?php echo $strInfo; ?>" TARGET="_blank" CLASS="link">phpSecurePages</A></p>
<!-- ------ Copyright line ends here ------ -->

<SCRIPT LANGUAGE="JavaScript">
<!--
document.forms[0].entered_login.select();
document.forms[0].entered_login.focus();
//-->
</SCRIPT>
</body>
</html>
