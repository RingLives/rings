<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="reval/img/favicon.png" rel="icon">
  <link href="reval/img/apple-touch-icon.png" rel="apple-touch-icon">
  <title>RingLives (2k18)</title>
  <link rel="stylesheet" type="text/css" href="css/aa.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="reval/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="reval/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="reval/lib/animate/animate.min.css" rel="stylesheet">
  <link href="reval/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="reval/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="reval/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="reval/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="reval/css/style.css" rel="stylesheet">
</head>
<body id="body">
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{ url('/rl') }}" class="scrollto">Ring<span>Lives</span></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ route('login') }}">Sign In</a></li>
          <li><a href="{{ route('register') }}">Sign Up</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  @yield('content')

  <!-- JavaScript Libraries -->
  <script src="reval/lib/jquery/jquery.min.js"></script>
  <script src="reval/lib/jquery/jquery-migrate.min.js"></script>
  <script src="reval/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="reval/lib/easing/easing.min.js"></script>
  <script src="reval/lib/superfish/hoverIntent.js"></script>
  <script src="reval/lib/superfish/superfish.min.js"></script>
  <script src="reval/lib/wow/wow.min.js"></script>
  <script src="reval/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="reval/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="reval/lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="reval/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="reval/js/main.js"></script>

    <!-- <div class="flex-container">
		<span class="box one"></span>
		<span class="box two"></span>
		<span class="box three"></span>
	</div> -->

</body>
</html>




