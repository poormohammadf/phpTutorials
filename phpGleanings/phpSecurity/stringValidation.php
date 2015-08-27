<?php

if (!isset($_POST['submit'])) {
    die('Unauthorized Access');
}

$username=$_POST['uname'];
$password=md5($_POST['pass']);


if ((ctype_alnum($username) == false) or  (ctype_alnum($password) == false))
{

    die("invalid character");

}

$conn = mysql_connect('localhost','root','') or

die(mysql_error());

$db = mysql_select_db('test_db');



$sql = "SELECT count(1) as `total` FROM `user`

WHERE `uname`='".$username."'

AND `password`='".$password."'";

echo $sql."<BR>";

$q = mysql_query($sql) or die(mysql_error());

$r = mysql_fetch_array($q);

$total = $r['total'];

mysql_close();

if ($total > 0){

echo "success enter";

}
else{

echo "sorry, wrong pair (username and password)";

}
?>