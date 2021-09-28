<?php session_start();include_once"includes/config.php";include_once"includes/functions.php";
	$uid = $_GET['uid'];
	$row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user WHERE id = '$uid'"));
	$_SESSION['user_admin_info'] = $row;
	$_SESSION['success'] = "You are LogIn";
	//header("location:../Contact-People");
	pageredictedto("../user-login/home");

?>



