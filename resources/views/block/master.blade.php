<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>eBookstore</title>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/price-range.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/animate.css')}}" rel="stylesheet">
	<link href="{{ asset('/css/main.css')}}" rel="stylesheet">
	<link href="{{ asset('/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{url ('js/html5shiv.js')}}"></script>
    <script src="{{url ('js/respond.min.js')}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<!--header-->
	<header id="header">
	<!--header_top-->
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="contactinfo">
							<ul class="nav nav-pills">
                                                            <li><a href="#"><h1><i class="fa fa-book"></i> eBookstore</h1> <i class="fa fa-heart"> </i> Since 2018</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
                                                            <li><a href="mailto:admin@examle.com"><h1><i class="fa fa-envelope"></i> </h1> </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->
		@if (Session::has('user'))
		<!--Head menu-->
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							 <!--<a href="{{url ('/')}}"><h4>Reading starts here!</h4></a>--> 
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{url ('/account')}}"><i class="fa fa-user"></i>Account</a></li>	
								@if (Session::get('user')['isAdmin'])		
								<li><a href="{{url ('/checkorder')}}"><i class="fa fa-user"></i>Check Order</a></li>			
								@endif
								<li><a href="{{url ('/cart')}}"><i class="fa fa-shopping-cart"></i>Cart({{ count($cart) }})</a></li>
								<li><a href="{{url ('/order')}}"><i class="fa fa-crosshairs"></i>Order</a></li>
								<li><a href="{{url ('/account/logout')}}"><i class="fa fa-lock"></i>Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Head menu-->
		@else
		<!--Head menu-->
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url ('/')}}"></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{url ('/cart')}}"><i class="fa fa-shopping-cart"></i>Cart({{ count($cart) }})</a></li>
								<li><a href="{{url ('/account/login')}}"><i class="fa fa-lock"></i>Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Head menu-->
		@endif
		<!--Shop menu-->
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url ('/')}}">Home</a></li>
								<li><a href="{{url ('/new-arrivals')}}">New Arrivals</a></li>
								<li><a href="{{url ('/special-offers')}}">Special Offers</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							{!! Form::open(['url'=>'/search/','method'=>'get']) !!}
								@if (isset($searchTitle))
								{!! Form::text('title',$searchTitle,['placeholder'=>'Quick Search']) !!}
								@else
								{!! Form::text('title',null,['placeholder'=>'Quick Search']) !!}
								@endif
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
			@yield('breadcrumbs')
		</div>
		<!--/Shop menu-->
	</header>
	<!--/header-->

	
	@yield('contents')

	
	<!--/Footer-->
	<footer>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-right">Copyright © 2018 -----. All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	<!--/Footer-->
	

  	<!--bottom-->
    <script src="{{ asset('/js/jquery.js')}}"></script>
	<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{ asset('/js/price-range.js')}}"></script>
    <script src="{{ asset('/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{ asset('/js/main.js')}}"></script>
</body>
</html>
<!--/bottom-->