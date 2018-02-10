<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gyanith | 2018</title>
	<?php include "meta.php" ?>
	<script	src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/flipclock.min.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>
	<section id="dw_wrapper" class="clearfix">
		<div class="row" id="logo-wrap">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    <h1 class="top-h1">NIT Puducherry</h1>
					<!--<img src="images/gynshadow.svg" class="site-logo">-->
					<?php include "logo.php";?>
			</div>
		</div>
		<div class="row" style="height:20%;"></div>
		<div class="row" id="timer-wrap" >
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="clock-container">
				<h1 class="dw_launch_header"  style="margin-bottom:-12px;">Going Live In</h1>
				<center><div class="dw_clock" id="screen-flipclock"></div></center>
			</div>
		</div>
	</section>
	
	<div class="row" id="footer-section">
		<hr class="end-section-hr">
		<div class="col-lg-3 col-md-3 col-sm-3 col-centered">
			<footer>
				<div class="icon-cont">
					<a href="https://goo.gl/KqxJ6u" target="_blank"><i class="fab fa-facebook"></i></a>
					<a href="https://goo.gl/9x7ccG" target="_blank"><i class="fab fa-twitter"></i></a>
					<a href="https://goo.gl/wbJ842" target="_blank"><i class="fab fa-instagram"></i></a>
				</div>
			</footer>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-right-3 col-md-offset-right-3 col-sm-offset-right-3 col-centered"> 
			<section class="end-section">
				<p><a href="#" id="anchor">Made with <i class="fas fa-heart"></i> by <span>Web Team Gyanith</span> | NIT Puducherry</a> </p>
			</section>
		</div>
	</div>
</body>
</html>