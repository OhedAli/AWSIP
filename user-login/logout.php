<?php session_start();
	unset($_SESSION['user_admin_info']);
	header("location: index");
?>