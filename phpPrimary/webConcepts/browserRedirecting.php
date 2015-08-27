<?php
if( isset($_POST["location"] ))
{
    $location = $_POST["location"];
    header( "Location:$location" );
    exit();
}
?>
<html>
<body>
<p>Choose a site to visit :</p>
<form action="<?php $_PHP_SELF ?>" method="POST">
    <select name="location">
        <option value="http://w3c.org">
            World Wise Web Consortium
        </option>
        <option value="http://www.google.com">
            Google Search Page
        </option>
    </select>
    <input type="submit" />
</form>
</body>
</html>