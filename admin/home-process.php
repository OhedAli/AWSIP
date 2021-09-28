<?php include_once "includes/config.php"; ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<?php
if (isset($_REQUEST['ActionPurpose']) && ($_REQUEST['ActionPurpose'] == "SendMessageToSelectedEmail")) {
   $GetAllEmail = $_REQUEST['GetAllEmail'];
   $GetMessage1 = $_REQUEST['GetMessage'];
   //echo "<script type='text/javascript'>alert('text".$GetMessage1."')</script>";
   foreach ($GetAllEmail as $value) {
       $dd = date("d");
       $mm = date("M");
       $yyyy = date("Y");
       $sql = "INSERT INTO emailmsg(toemail,messages,dd,mm,yyyy) VALUES('$value','$GetMessage1','$dd','$mm','$yyyy') ";
       $qry = mysqli_query($conn,$sql);

       $to = $value;
       $subject = "Reply Message";
       $txt = $GetMessage1;
       // $headers = "From: bpramanikassociates@gmail.com";
       // mail($to,$subject,$txt,$headers);
       SendMail($to,$subject,$txt,$headers);

       if ($qry) {
         echo "<script type='text/javascript'>alert('Message sent to Selected Email-Id.!')</script>";
       }else{
        echo "<script type='text/javascript'>alert('Sorry!, Message not sent.!')</script>";
       }

   }
   
}

?>
<?php
	function SendMail($to,$subject,$textmsg){
	$textmsg = str_replace("..", "<br>", $textmsg);
	$message = "<html>";
	$message .= "<head>";
	$message .= "<title>".$subject."</title>";
	$message .= "</head>";
	$message .= "<body style='background-color:lightgrey;padding: 30px;width: 80%;border-radius:10px;'>";
	$message .= "<p>".$textmsg."</p>";
	$message .= "<h3>Don't Reply. It is System Generated Mail.</h3>";
	$message .= "<h4>Thank You<a class='fa fa-smile-o' aria-hidden='true'></a></h4>";
	$message .= "</body>";
	$message .= "</html>";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: <ohedali@gmail.com>". "\r\n";
	mail($to,$subject,$message,$headers);
	}
?>