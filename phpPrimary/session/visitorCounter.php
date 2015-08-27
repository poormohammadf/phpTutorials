<?php
session_start();


if (empty($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}

$msg = "You have visited this page ". $_SESSION['counter'];
$msg .= " in this session.";
echo ( $msg );