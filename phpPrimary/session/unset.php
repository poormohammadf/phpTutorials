<?php
session_start();
if( isset( $_SESSION['counter'] ) ) {
    unset($_SESSION['counter']);
    echo "session unset";
}
else
    echo "Sorry... Not recognized" . "<br />";
?>