<?php
error_reporting(0);
session_start();
if(!$_SESSION['cpf']) {
	header('Location: index.php');
	exit();
}
?>