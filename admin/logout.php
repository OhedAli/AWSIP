<?php session_start();
	unset($_SESSION['admin_info']);
	header("location: index");
?>