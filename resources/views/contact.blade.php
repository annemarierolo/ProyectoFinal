<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>My Trip a Travel Category Flat Bootstrap responsive Website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- parallax -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //parallax -->
</head>
<body>
	<!-- banner -->
	<div class="banner about-bg">
		<div class="top-banner about-top-banner">
			<div class="container">
				<div class="top-banner-left">
				</div>
				<div class="top-banner-right">
					<ul>
						<li><a class="" href="{{ url('/login') }}"><i class="" aria-hidden="true"></i>Login</a></li>
						<li><a class="" href="{{ url('/register') }}"><i class="" aria-hidden="true"></i>Registrarse</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1>
						<a href="{{ url('/') }}">Tio Ven</a>
					</h1>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="{{ url('/') }}">Inicio</a></li>
								<li><a href="{{ url('/somos') }}">Quienes Somos</a></li>
								<li><a href="{{ url('/paquetes') }}">Paquetes</a></li>
								<li><a href="{{ url('/eventos')}}">Eventos</a></li>
								<li><a href="{{ url('/noticias')}}">Noticias</a></li>
								<li><a class="active" href="{{ url('/contacto')}}">Contacto</a></li>
								<div class="clearfix"> </div>
							</ul>	
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3l-contact-heading">
				<h2>Contactenos</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta efficitur ante quis volutpat.</p>
			</div>
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="contact-form-top">
						<h3>Get in touch</h3>
						<p>Pellentesque eget mi nec est tincidunt accumsan. Proin fermentum dignissim justo, vel euismod justo sodales vel. In non condimentum mauris. Maecenas condimentum interdum lacus, ac varius nisl dignissim ac. Vestibulum euismod est risus, quis convallis nisi tincidunt eget. Sed ultricies congue lacus at fringilla.</p>
					</div>
					<div class="contact-address">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>+1 234 567 8901</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a href="mailto:example@email.com">mail@example.com</a></span></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i></i> <span>Eiusmod Tempor inclore Place,Kingsport 56777.</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Send us a message</h3>
					</div>
					<div class="contact-form-grid">
						<form action="#" method="post">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
							<textarea name="Message" placeholder="Message" required=""></textarea>
							<button class="btn1">Submit</button>
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile-map">
				<h3>Find us here</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d86258.20905457705!2d-82.56985214706441!3d36.53988771087049!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1463030942772" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-12 footer-grid text-center">
					<div class="footer-grid-heading">
						<h4>Navigation</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="{{ url('/somos') }}">Quienes Somos</a></li>
							<li><a href="{{ url('/paquetes') }}">Paquetes</a></li>
							<li><a href="{{ url('/eventos') }}">Eventos</a></li>
							<li><a href="{{ url('/noticias') }}">Noticias</a></li>
							<li><a href="{{ url('/contacto') }}">Contacto</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copyright">
				<p>© 2016 My Trip . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
			</div>
		</div>
	</div>
	<!-- //footer -->
</body>	
</html>