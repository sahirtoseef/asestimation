<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>AS Estimation</title>

	<!-- Favicon -->
	<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon" />
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Animate CSS -->
	<link href="{{asset('assets/vendors/animate/animate.css')}}" rel="stylesheet">
	<!-- Icon CSS-->
	<link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
	<!-- Camera Slider -->
	<link rel="stylesheet" href="{{asset('assets/vendors/camera-slider/camera.css')}}">
	<!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/owl_carousel/owl.carousel.css')}}" media="all">

	<!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" media="all" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}" />
    </head>
    <body>
	<!-- Preloader -->
	<div class="preloader"></div>

	<!-- Top Header_Area -->
	<section class="top_header_area">
	    <div class="container">
		<ul class="nav navbar-nav top_nav">
		    <li><a href="tel:+923084607502"><i class="fa fa-whatsapp"></i>+92-308-4607502</a></li>
		    <li><a href="asestimator786@gmail.com"><i class="fa fa-envelope-o"></i>asestimator786@gmail.com</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right social_nav">
		    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
		    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		</ul>
	    </div>
	</section>
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
	<nav class="navbar navbar-default header_aera" id="main_navbar">
	    <div class="container">
		<!-- searchForm -->
		<div class="searchForm">
		    <form action="#" class="row m0">
			<div class="input-group">
			    <span class="input-group-addon"><i class="fa fa-search"></i></span>
			    <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
			    <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
			</div>
		    </form>
		</div><!-- End searchForm -->
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="col-md-2 p0">
		    <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
                        <a class="navbar-brand" href="{{route( "home" )}}"><img class="header-logo" src="{{asset('assets/images/logo.png')}}" alt=""></a>
		    </div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="col-md-10 p0">
		    <div class="collapse navbar-collapse" id="min_navbar">
			<ul class="nav navbar-nav navbar-right">
			    <li class="dropdown submenu">
				<a href="{{route( 'home' )}}">Home</a>
			    </li>
                            <li class="dropdown submenu">
				<a href="{{route( 'about-us' )}}">About Us</a>
			    </li>
			    <li class="dropdown submenu">
				<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Services</a>
				<ul class="dropdown-menu other_dropdwn">
				    <li><a href="{{route('full-material-takeoff')}}">Full Material Takeoff</a></li>
				    <li><a href="{{route('finishes')}}">Finishes</a></li>
				    <li><a href="{{route('drywall')}}">DryWalls</a></li>
				    <li><a href="{{route('mechanical')}}">Mechanical</a></li>
				    <li><a href="{{route('electrical')}}">ELECTRICAL</a></li>
				    <li><a href="{{route('plumbing')}}">PLUMBING</a></li>
				    <li><a href="{{route('landscaping')}}">LANDSCAPING</a></li>
				    <li><a href="{{route('bridge')}}">BRIDGE</a></li>
				    <li><a href="{{route('pricing')}}">PRICING</a></li>
				</ul>
			    </li>
			    <li>
				<a href="{{route('portfolio')}}">Portfolio</a>
			    </li>
			    <li><a href="{{route('contact-us')}}">Contact</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                            <li><a href="{{route('terms')}}">TERMS</a></li>
			    <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
			</ul>
		    </div><!-- /.navbar-collapse -->
		</div>
	    </div><!-- /.container -->
	</nav>
	<!-- End Header_Area -->
