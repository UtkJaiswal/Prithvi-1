<html>
<head>	
	<title>Prithvi 2018| Register</title>

	<script src="js/jquery-3.1.1.js"></script>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/register.js"></script>

	<link rel="shortcut icon" href="http://www.prithvi-geo.in/prithvi17/images/xprithvi-icon.png.pagespeed.ic.rhggCfOJMM.webp" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
   @import url('https://fonts.googleapis.com/css?family=Cinzel|Raleway:500');


		body{
			font-family: 'Cinzel', serif !important;
		}
		.active{
			font-weight: bold;
		}
		/* RESET */
		.hovering a {
			display: block;
			text-decoration: none;
			margin: 0 0px;
			position:relative;
			transition: all .5s;
		}

		.hovering a:after {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			width: 0;
			content: ' ';
			color: transparent;
			background: white;
			height: 1px;
			text-align: center;
			opacity: 0;
		}

		.hovering a:hover {
			color: white;
			z-index: 1;
		}
		.hovering a:hover:after{
			z-index: -10;
			animation: fill 1s forwards;
			opacity: 1;
		}
		@-webkit-keyframes fill {
			0% {
				width: 0;
				height: 1px;
			}
			100% {
				width: 100%;
				height: 1px;
			}
		}
		body{
			background-color: #2c2e33;
			color: #a4bcc3;
		}
		body::-webkit-scrollbar-track
		{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			background-color: #F5F5F5;
		}

		body::-webkit-scrollbar
		{
			width: 10px;
			background-color: #F5F5F5;
		}

		body::-webkit-scrollbar-thumb
		{
			background-color: #000000;
			border: 2px solid #555555;
		}
		.navbar-light .navbar-nav .nav-link{
			color: white !important;
		}
		.navbar-light{
			background-color: #232428;
		}
		#contact_form * { box-sizing: border-box; }

		/* BASIC CONTACT FORM CSS */

		#contact_form input,
		#contact_form textarea,
		#contact_form select {
			height: 45px;
			line-height: 1.4em;
			background-color: transparent;
			border: 1px solid #212226;
			color:#a4bcc3;
		}
		.radio{
			width: 45% !important;
		}
		.checkbox{
			width:20%;
		}
		select option{
			background-color: #2c2e33;
			color:#727681;
		}
		#contact_form textarea {
			padding: 20px;

		}
		#contact_form select {
			width: 100%;
		}
		#contact_form label {
			display: inline-block;
			height: 45px;
			line-height: 1.4em;
			margin-bottom: 20px;
			position: relative;
			width: 100%;
		}
		#contact_form label input {
			width: 100%;
		}
		#contact_form label span {
			background-color: #2c2e33;
			color: #727681;
			font-size: 14px;
			font-weight: 200;
			position: absolute;
			left: 10px;
			top: 13px;
			padding: 0 8px;
			pointer-events: none;
		}
		#contact_form .populated {
			padding-left: 142px;
		}
		#contact_form input:focus + span,
		#contact_form input:active + span,
		#contact_form textarea:focus + span,
		#contact_form textarea:active + span {
			top: -9px; /* Change this to fit your label text width */
		}
		#contact_form input[type="submit"] {
			clear: both;
			display: block;
			padding: 0;
			width: 30%;
			margin: auto;
			cursor: pointer;
			height: 45px;
			line-height: 1.4em;
			border: 1px solid #212226;
			color:white;
			background-color: #0287d8;
			transition: all 0.5s ease;
		}
		#contact_form input[type="submit"]:hover {
			border: 1px solid #212226;
			background-color: #0275d8;
			box-shadow: 5px 5px 5px #888;
			color:white;
		}
		/* ANIMATION */
		#contact_form label input {
			transition: padding 0.3s ease 0s;
		}
		#contact_form label span {
			transition: top 0.3s ease 0s, color 0.3s ease 0s;
		}
		#contact_form input:focus,
		#contact_form textarea:focus {
			transition: all 0.3s ease;
		}
		.collapse.show{
			height: 100vh;
		}
		@media only screen 
		and (orientation : landscape) {
			.collapse.show{
				height: 90vh;
			}
		}
		@media(max-width: 991px){
			#nav-size{
				font-size: 3.6rem;
			}
			.navbar-brand{
				height: 60px;
			}
			.fixed-top{
				text-align: center;
				overflow: auto;
			}
			#img-size{
				height: 60px;
				width: 160px;
			}
		}
		@media(max-width: 991px){
			#contact_form{
				margin-top: 17% !important;
			}
		}
		#contact_form{
			margin-top: 6%;
		}
		h2{
			margin-top: 2%;
			margin-bottom: 2%;
			text-align: center;
		}
		#button{
			text-align: center;
		}
		.footer {
			padding: 1rem;
			background-color: #232428;
			margin-top: 2em;
		}
		.extra{
			text-align: center;
			color: red;
		}
		#S1{
			font-weight: normal;
			color: #0275d8;
		}
	</style>
	<script type="text/javascript">
		/* ----------------------------------------
- Function
------------------------------------------- */
function creativeinputs() {
	$("#contact_form input, #contact_form textarea").each(function() {
		$(this).addClass('populated');
	});
	$("#contact_form input, #contact_form textarea").focusin(function() {
		$(this).removeClass('populated');

	});

	$("#contact_form input, #contact_form textarea").focusout(function() {
		$(this).addClass('populated');
	});
}


/* ----------------------------------------
- On load
------------------------------------------- */
creativeinputs();

/* ----------------------------------------
- On Document ready
------------------------------------------- */
$(document).ready(function() {
	creativeinputs();
});
</script>
</head>
<body>
	<nav class="navbar fixed-top navbar-toggleable-md navbar-light">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="container">
			<a class="navbar-brand mr-3" href="home.html" ><img src="img/prithvi1.png" height="35px" width="100px" id="img-size"></a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent" >
				<ul class="navbar-nav mr-auto ml-5" id="nav-size">
					<li class="nav-item mr-2 hovering">
						<a class="nav-link" href="home.html">Home</a>
					</li>
					<li class="nav-item mr-2 hovering">
						<a class="nav-link" href="about.html">About Us</a>
					</li>
					<li class="nav-item mr-2 hovering">
						<a class="nav-link" href="event.html">Events</a>
					</li>
					<li class="nav-item mr-2 hovering">
						<a class="nav-link" href="faq.html">FAQ</a>
					</li>
					<li class="nav-item mr-2 hovering">
						<a class="nav-link" href="gallery.html">Gallery</a>
					</li>
					<li class="nav-item mr-2 hovering">
						<a class="nav-link" href="workshop.html">Workshops</a>
					</li>
					<li class="nav-item mr-2 hovering">
						<a class="nav-link" href="seminar.html">Seminars</a>
					</li>
					<li class="nav-item mr-2 hovering">
						<a class="nav-link" href="spons.html">Sponsors</a>
					</li>
					<li class="nav-item mr-2 hovering">
						<a class="nav-link" href="contact.html">Our Team</a>
					</li>
					<li class="nav-item mr-2 active hovering">
						<a class="nav-link" href="#">Register</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="contact_form">
		<h1 style="text-align: center; margin-bottom: 30px;"> Register Yourself</h1>
		<?php
// Connecting to db
		require 'connect.inc.php';
		if(isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['email'])&&isset($_POST['number'])&&isset($_POST['college'])&&isset($_POST['department'])&&isset($_POST['year'])&&isset($_POST['course'])&&isset($_POST['event'])) {
			$first_name=$_POST['first_name'];
			$last_name=$_POST['last_name'];
			$email=$_POST['email'];
			$number=$_POST['number'];
			$gender = $_POST['gender']; 
			$state = $_POST['state']; 
			$college=$_POST['college'];
			$department=$_POST['department'];
			$year=$_POST['year'];
			$course=$_POST['course'];
			$event=$_POST['event'];	
			$query="SELECT `Email` FROM `register` WHERE `Email`='$email'";
			$query_run=mysql_query($query);
			if(mysql_num_rows($query_run)==1){
				?>
				<div class="alert alert-danger alert-dismissable" style="width: 50%; margin-left: 25%;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Error!</strong> This Email is already registered. Please use different email.
				</div>
				<?php
			}else{
				$query="INSERT INTO register(`ID`,`First_Name`,`Last_Name`,`Email`,`Ph. Number`,`Gender`,`State`,`College`,`Department`,`Year`,`Course`) VALUES('','".mysql_real_escape_string($first_name)."','".mysql_real_escape_string($last_name)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($number)."','".mysql_real_escape_string($gender)."','".mysql_real_escape_string($state)."','".mysql_real_escape_string($college)."','".mysql_real_escape_string($department)."','".mysql_real_escape_string($year)."','".mysql_real_escape_string($course)."')";
				if($query_run=mysql_query($query)){
					if(!empty($_POST['event'])) {
						foreach($_POST['event'] as $check) {
							$run="UPDATE `register` SET `$check`='1' WHERE `Email`='".mysql_real_escape_string($email)."'";
							if($some=mysql_query($run)){
							}
							else{
								die(mysql_error());
							}

						} 
					}
					?>
					<div class="alert alert-success alert-dismissable" style="width: 50%; margin-left: 25%;">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> You are registered succesfully. A confirmation mail has been sent to your email.
					</div>
					<?php

				}
				else{
					?>
					<div class="alert alert-danger alert-dismissable" style="width: 50%; margin-left: 25%;">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Error!</strong> Some error while connecting to server please try again.
					</div>
					<?php
				}
			}
		}
		?>

		<div class="container">
			<form method="POST" onsubmit="return validate()">
				<div class="row">
					<div class="col-lg-5">
						<label>
							<input type="text" id="T1" name="first_name">
							<span>First Name:</span>
						</label>
					</div>
					<div class="col-lg-2">
					</div>
					<div class="col-lg-5">
						<label>
							<input type="text" id="T2" name="last_name">
							<span>Last Name:</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						<label>
							<input type="email" id="T3" name="email">
							<span>Email:</span>
						</label>
					</div>
					<div class="col-lg-2">
					</div>
					<div class="col-lg-5">
						<label>
							<input type="number" id="T4" name="number">
							<span>Phone No.</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						<label class="custom-control custom-radio radio">
							<input id="radio1" name="gender" type="radio" class="custom-control-input" value="Male" checked>
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Male</div>
						</label>
						<label class="custom-control custom-radio radio">
							<input id="radio2" name="gender" type="radio" class="custom-control-input" value="Female">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Female</div>
						</label>
					</div>
					<div class="col-lg-2">
					</div>
					<div class="col-lg-5">
						<select class="custom-select required" name="state">
							<option value="" selected>Select Your State</option>
							<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
							<option value="Andhra Pradesh">Andhra Pradesh</option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Chandigarh">Chandigarh</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
							<option value="Daman and Diu">Daman and Diu</option>
							<option value="Delhi">Delhi</option>
							<option value="Goa">Goa</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Haryana">Haryana</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Jammu and Kashmir">Jammu and Kashmir</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Kerala">Kerala</option>
							<option value="Lakshadweep">Lakshadweep</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Manipur">Manipur</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Orissa">Odisha</option>
							<option value="Pondicherry">Pondicherry</option>
							<option value="Punjab">Punjab</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Tripura">Tripura</option>
							<option value="Uttaranchal">Uttaranchal</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="West Bengal">West Bengal</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						<label>
							<input type="text" id="T5" name="college">
							<span>College/Institute:</span>
						</label>
					</div>
					<div class="col-lg-2"></div>
					<div class="col-lg-5">
						<label>
							<input type="text" id="T6" name="department">
							<span>Department:</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						<label>
							<input type="text" id="T7" name="year">
							<span>Year of Study</span>
						</label>
					</div>
					<div class="col-lg-2"></div>
					<div class="col-lg-5">
						<label>
							<input type="text" id="T8" name="course">
							<span>Course(BTech/BSc):</span>
						</label>
					</div>
				</div>
				<h2>Event</h2>
				<div class="extra">
					<span id="S2"></span>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="Explique">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Explique</div>
						</label>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="GeoSpectrum">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">GeoSpectrum</div>
						</label>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="Indiana Geones">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Indiana Geones</div>
						</label>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="Poster Presentation">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Poster Presentation</div>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="Case Study">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Case Study</div>
						</label>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="GeoModelling">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">GeoModelling</div>
						</label>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="GeoClick">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">GeoClick</div>
						</label>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="Minrex">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Minrex</div>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="Gridnite">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Gridnite</div>
						</label>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event" class="custom-control-input" value="Online Quiz">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Online Quiz</div>
						</label>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="Word of Wisdom">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Word of Wisdom</div>
						</label>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" name="event[]" class="custom-control-input" value="Terra Wars">
							<div class="custom-control-indicator"></div>
							<div class="custom-control-description">Terra Wars</div>
						</label>
					</div>
				</div>
				<div id="button">
					<input type="submit" value="Confirm Registration"><br>
					<span id="S1" ></span>
				</div>
			</form>
		</div>
	</div>
	<div class="footer">
		<div style="text-align: center">Follow Us On:<br>
			<a href="https://www.facebook.com/prithvi.iitkgp" ><i class="fa fa-facebook mr-5" style="font-size:25px;"></i></a>
			<a href="https://twitter.com/Prithvi_IIT_kgp"><i class="fa fa-twitter mr-5" style="font-size:25px;"></i></a>
			<a href="http://www.youtube.com/channel/UCF0rHzKhLx4N6OkaqTnJ8pQ?feature=watch"><i class="fa fa-youtube" style="font-size:25px;"></i></a></div>
			Website Credit: <a href="https://www.facebook.com/abhinav.saini.507">Abhinav Saini</a>
		</div>

	</body>
	</html>