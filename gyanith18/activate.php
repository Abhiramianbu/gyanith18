<!DOCTYPE html>
	

<html lang="en">

	<head>
		<title>Gyanith</title>
		<!--<link href='images/logo.png' rel='icon'>-->
		<meta charset="utf-8"/>
		<meta name='viewport' content='width=device-width,initial-scale=1'>
		<meta name='description' content='Gyanith is an annual technical fest by all the Department,NIT Puducherry '/>
		<meta property="og:title" content="Gyanith 18" />
		<meta property="og:description" content="Annual technical fest by NIT Puducherry" />
	</head>

	
	<body>
		
</html>

<?php
 	session_start();
 	function send_mail($email,$body,$body1){
		require_once('PHPMailer-master/PHPMailerAutoload.php');

		$mail = new PHPMailer;
		$path="images/landlogo.png";
		$mail->isSMTP();                                      // Set mailer to use SMTP
		//$mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
		$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'postmaster@mail.gyanith.org';   // SMTP username
		$mail->Password = 'ea215a2bb46488c538e3904e52ee8f1d';                           // SMTP password
		$mail->SMTPSecure = 'tls';
		$mail->Port =587;    
		$mail->From='gyanith.nitpy@gmail.com';                             // Enable encryption, only 'tls' is accepted

		$mail->FromName = 'Gyanith17';
		$mail->addAddress($email);                 // Add a recipient

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

		$mail->Subject = 'gyanith 17 Registration';
		$mail->Body    = $body;
		$mail->AltBody  =  $body1;
		$mail->addAttachment($path);
		//$mail->SMTPDebug = 2;
		if(!$mail->send()) {
		// echo 'Message could not be sent.';
		//   echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		// echo 'Message has been sent';
		}
	}
	try{
		include("dbcon.php");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		$stmt=$db->prepare('UPDATE user SET Active = 1 WHERE gid = "'. $_GET["id"]. '"');
		$stmt->execute();
		//update timestamp
		$stmt=$db->prepare('UPDATE user SET ActiveTime=now() WHERE gid = "'. $_GET["id"]. '"');
		$stmt->execute();
		$stmt1=$db->prepare('SELECT Name,gid,Emailid FROM user WHERE gid= "'. $_GET["id"]. '"');
		$stmt1->execute();
		$result=$stmt1->fetch();
		$name = $result['Name'];
		$g_id = $result['gid'];
		$email =$result['Emailid'];

		$_SESSION['Active']='true';
		$body="<p>Your account has been activated.Your account details:<br><br>
				Username : ".$name."<br>
				Gid : ".$g_id."<br><br>
				Regards,<br>
	Administrator,<br> 
	Gyanith '17,<br>
	<a href='https://www.gyanith.org'>https://www.gyanith.org</a><br>
	This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Gyanith homesite with this mail id. Please ignore the mail otherwise.</p><br>
	<br><br></p>";
	$body1="<p>Your account has been activated.Your account details:<br><br>
				Username : ".$name."<br>
				Gid : ".$g_id."<br><br>
				Regards,<br>
	Administrator,<br> 
	Gyanith '17,<br>
	<a href='https://www.gyanith.org'>https://www.gyanith.org</a><br>
	This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Gyanith homesite with this mail id. Please ignore the mail otherwise.</p><br>
	<br><br></p>";
	//send_mail($email,$body,$body1);
	}  

	catch(PDOException $e){
		$e->getMessage();
	}
	
	if(isset($_SESSION['active'])){
		unset($_SESSION['active']);}
	?>
