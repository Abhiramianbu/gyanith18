<?php

function send_mail($email,$body,$body1){
    require_once('PHPMailer-master/PHPMailerAutoload.php');

    $mail = new PHPMailer;
    //$path="images/landlogo.png";
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
    //$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //$mail->Username = 'postmaster@mail.gyanith.org';   // SMTP username
    $mail->Username = 'vmkaabhirami@gmail.com';   // SMTP username
    //$mail->Password = 'ea215a2bb46488c538e3904e52ee8f1d';                           // SMTP password
    $mail->Password = 'abhirami1997';  
    $mail->SMTPSecure = 'tls';
    $mail->Port =587;    
    //$mail->From='gyanith.nitpy@gmail.com';                             // Enable encryption, only 'tls' is accepted
    $mail->From='vmkaabhirami@gmail.com';                             // Enable encryption, only 'tls' is accepted
    $mail->FromName = 'Gyanith18';
    $mail->addAddress($email);                 // Add a recipient

    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

    $mail->Subject = 'gyanith 17 Registration';
    $mail->Body    = $body;
    $mail->AltBody  =  $body1;
    //$mail->addAttachment($path);
    $mail->SMTPDebug = 3;
    if(!$mail->send()) {
     echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
     echo 'Message has been sent';
    }
}
send_mail("vmkaabhirami1997@gmail.com","body content","body content2");
?>