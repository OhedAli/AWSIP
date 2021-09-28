<?php session_start();
	if (empty($_SESSION['admin_info'])) {
  	echo "<script>window.location.href= 'index';</script>";
 }
	include_once"config.php";
	include_once"constant.php";
	include_once"functions.php";
	include_once"header.php";
?>