<?php session_start();
	if (empty($_SESSION['user_admin_info'])) {
  	echo "<script>window.location.href= 'index.php';</script>";
 }
	include_once"../admin/includes/config.php";
	include_once"../admin/includes/functions.php";
	include_once"constant.php"; 
	include_once"header.php"; 

?>

