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
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
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
                        @if(Auth::guest())
                             <li><a class="" href="{{ url('/login') }}"><i class="" aria-hidden="true"></i>Login</a></li>
                            <li><a class="" href="{{ url('/register') }}"><i class="" aria-hidden="true"></i>Registrarse</a></li>
                        @else
                            <li><a class="" href="#"><i class="" aria-hidden="true"></i>{{ Auth::user()->name }}</a></li>
                             <li><a class="" href="{{ url('/logout') }}"><i class="" aria-hidden="true"></i>Salir</a></li>
                        @endif
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
                                <li><a href="{{ url('/contacto')}}">Contacto</a></li>
                                <div class="clearfix"> </div>
                            </ul>   
                        </div>  
                    </nav>      
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @yield('content')
</body>
</html>