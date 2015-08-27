<html>
<head>
    <title>Delete a Record from MySQL Database</title>
</head>
<body>

<?php
if(isset($_POST['delete']))
{
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $conn = mysql_connect($dbHost, $dbUser, $dbPass);
    if(! $conn )
    {
        die('Could not connect: ' . mysql_error());
    }

    $emp_id = $_POST['emp_id'];

    $sql = "DELETE FROM employee ".
        "WHERE emp_id = $emp_id" ;

    mysql_select_db('test_db');
    $retVal = mysql_query( $sql, $conn );
    if(! $retVal )
    {
        die('Could not delete data: ' . mysql_error());
    }
    echo "Deleted data successfully\n";
    mysql_close($conn);
}
else
{
    ?>
    <form method="post" action="<?php $_PHP_SELF ?>">
        <table width="400" border="0" cellspacing="1" cellpadding="2">
            <tr>
                <td width="100">Employee ID</td>
                <td><input name="emp_id" type="text" id="emp_id"></td>
            </tr>
            <tr>
                <td width="100"> </td>
                <td> </td>
            </tr>
            <tr>
                <td width="100"> </td>
                <td>
                    <input name="delete" type="submit" id="delete" value="Delete">
                </td>
            </tr>
        </table>
    </form>
<?php
}
?>
</body>
</html>