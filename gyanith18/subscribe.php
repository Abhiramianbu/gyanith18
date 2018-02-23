<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CountDown</title>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/flipclock.min.js"></script>
	<script src="js/scripts.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="http://fonts.googleapis.com/css?family=Roboto:Roboto:400,500|Montserrat" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/flipclock.css">
 </head>
<body>
	<?php
	    $to      = 'siddharthmajhi5@gmail.com';
	    $subject = 'Subscriber E-mail Address';
	    $message = 'Email :'.$_POST['email']. "\r\n";

	    $headers = 'From: siddharthmajhi5@gmail.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();
	    mail($to, $subject, $message, $headers);
	?>
	<video autoplay muted loop id="myVideo">
	  <source src="" type="video/mp4">
	  Your browser does not support HTML5 video.
	</video>
	<section id="dw_wrapper" class="clearfix">
		<section id="dw_countdown" class="clearfix">
		    <h1 class="top-h1">NIT Puducherry presents</h1>
			<img src="images/new_logo.png" alt="Gyanith Logo" class="countdown-logo">
			<h1 class="dw_launch_header">Coming Soon</h1>
			<div class="dw_clock"></div><br><br>
			<p>Thank you for subscribing! See you at Gyanith'18!</p><br><br>
			<section id="dw_tut_credits">
				<footer>
					<p class="follow-us">Follow us on:</p>
					<div class="icon-cont">
						<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true" ></i></a>
						<a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</footer>
			</section>
			<hr class="end-section-hr">
			<section class="end-section">
				<p>Copyright &copy; 2018 | NIT Puducherry</p>
			</section>
		</section>
	</section>
</body>
</html>