<?php
session_start();
error_reporting(0);

$varsession = $_SESSION['nombre'];
if ($varsession == null || $varsession = '') {
	header("location:guestuser.html");
	die();

}

session_destroy();
header("location:index.html");
?>