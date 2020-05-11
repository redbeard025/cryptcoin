<?php
session_start();
error_reporting(0);

$varsession = $_SESSION['nombre'];
if ($varsession == null || $varsession = '') {
	echo 'Usted no tiene autorizacion';
	die();

}

session_destroy();
header("location:index-3copy.php")
?>