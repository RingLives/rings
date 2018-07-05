<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>RL-Admin</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/css/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md main-boy">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>RL-Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
             @include('RL-dashboard.partials.menu-user.user-bar')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
             @include('RL-dashboard.partials.sidebar.side-bar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('RL-dashboard.partials.sidebar-footer.sidebar-footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
          @include('RL-dashboard.partials.header.top-navbar') 
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          
          @yield('dashboard')

          
        </div>
        <!-- /page content -->

        <!-- footer content -->
         @include('RL-dashboard.partials.footer.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/css/nprogress/nprogress.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
	
  </body>
</html>
