<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BIT</title>

    <!--jquery-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .navbar-default .navbar-nav>li>a {
            color:white !important;
        }
    </style>
</head>
@if (Auth::guest())
<body id="app-layout" style="background-color:#f8f8f8">
@else
 <body id="app-layout" style="background-color:#f8f8f8">
@endif
    <nav class="navbar navbar-default navbar-static-top" style="background-color:#2f5989 !important";>
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#FFF">
                    BIT
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/profile') }}">External Degree Center</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <div class="container-fluid" style="background-color:#292c2f; color:#fff;margin-top:15px;padding-top:15px">
        <div class="row">
  			<div class="col-sm-4 text-center">

  				<h3>External Degree<span> center</span></h3>

  				<p class="footer-links">
  					<a href="#">Home</a>
  					·
  					<a href="#">signin</a>
  					·
  					<a href="#">Register</a>
  					·
  					<a href="#">manual</a>
  					·
  					<a href="#">Bit.lk</a>
  					·
  					<a href="#">Contact</a>
  				</p>

  				<p class="footer-company-name">copyright &copy; 2016</p>
  			</div>

  			<div class="col-sm-4 text-center">

  				<div>
  					<i class="fa fa-map-marker"></i>
  					<p><span>NO 17 Swarna road,</span> colombo 06</p>
  				</div>

  				<div>
  					<i class="fa fa-phone"></i>
  					<p>+94-11-4720511</p>
  				</div>

  				<div>
  					<i class="fa fa-envelope"></i>
  					<p><a href="mailto:edc@ucsc.cmb.ac.lk">edc@ucsc.cmb.ac.lk</a></p>
  				</div>

  			</div>

  			<div class="col-sm-4 text-center">

  				<p class="footer-company-about">
  					<span>BIT</span>

  				</p>

  				<div class="footer-icons">

  					<a href="#"><i class="fa fa-facebook"></i></a>
  					<a href="#"><i class="fa fa-twitter"></i></a>
  					<a href="#"><i class="fa fa-linkedin"></i></a>
  					<a href="#"><i class="fa fa-github"></i></a>

  				</div>

  			</div>
      </div>
  		</div>



</body>
</html>
