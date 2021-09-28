<?php
	include_once"admin/includes/config.php";
	include_once"admin/includes/functions.php";
	
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$pass1=dataencode(dataencode($_REQUEST['pass1']));
	$ipno=$_REQUEST['ipno'];
	$validity=$_REQUEST['validity'];
	$country=$_REQUEST['country'];
	$protocol=$_REQUEST['protocol'];
	$dd = date("d");
    $mm = date("M");
    $yyyy = date("Y");
	$sql = "INSERT INTO user(name,email,phone,password,ipno,validity,country,protocol,dd,mm,yyyy) VALUES('$name','$email','$phone','$pass1','$ipno','$validity','$country','$protocol','$dd','$mm','$yyyy')";
	$qry = mysqli_query($conn,$sql);
	if ($qry) {
		echo "<script type='text/javascript'>alert('Your IP has been Booked! Thank You. Please LogIn now.');</script>";
	  		 pageredictedto('http://localhost/arju/ip/user-login/index');
	}else{
	  echo "<script type='text/javascript'>alert('something-went-wrong');</script>";
	}

?>