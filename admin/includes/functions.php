<?php 
	function passencrypt($getpass){
		return md5($getpass);
	}


	function formvalidation($getdata){
		return htmlspecialchars(trim($getdata));
	}
	function pageredictedto($geturl){
		echo "<script type='text/javascript'>window.location.href='".$geturl."';</script>";
	}
	function encodeurl($geturl){
		return str_replace(" ","-",$geturl);
	}
	function decodeurl($geturl){
		return str_replace("-"," ",$geturl);
	}
	function dataencode($geturl){
		return base64_encode($geturl);
	}
	function datadecode($geturl){
		return base64_decode($geturl);
	}

?>

<?php
	function SendMail($to,$subject,$textmsg){
	$textmsg = str_replace("..", "<br>", $textmsg);
	$message = "<html>";
	$message .= "<head>";
	$message .= "<title>".$subject."</title>";
	$message .= "</head>";
	$message .= "<body style='background-color:#FF5733;'>";
	$message .= "<p>".$textmsg."</p>";
	$message .= "<p>Don't reply. it is system generated mail.</p>";
	$message .= "<p>Thank You</p>";
	$message .= "</body>";
	$message .= "</html>";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: <bpramanikassociates@gmail.com>". "\r\n";
	mail($to,$subject,$message,$headers);
	}
?>