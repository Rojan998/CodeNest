
<?php session_start(); ?>
<?php

$_SESSION['username'] = null;
$_SESSION['email'] = null;
$_SESSION['password'] = null;
$_SESSION['firstname'] = $null;
$_SESSION['lastname'] = null;;

header("LOCATION: ../../blog/index.php");

?>