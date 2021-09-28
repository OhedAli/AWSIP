<?php 
	define("DB_SERVER_NAME", "localhost");
	define("DB_USER_NAME", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "ip");
	
	$conn = mysqli_connect(DB_SERVER_NAME,DB_USER_NAME,DB_PASSWORD,DB_NAME);
	if(!$conn){
		echo "not connect";
	}

	
?>