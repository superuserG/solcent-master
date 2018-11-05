<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    {{-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> --}}
    <link href="{{asset('vendor/light-bootstrap-dashboard-master/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    {{-- <link href="assets/css/animate.min.css" rel="stylesheet"/> --}}
    <link href="{{asset('vendor/light-bootstrap-dashboard-master/assets/css/animate.min.css')}}" rel="stylesheet" />


    <!--  Light Bootstrap Table core CSS    -->
    {{-- <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/> --}}
    <link href="{{asset('vendor/light-bootstrap-dashboard-master/assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    {{-- <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" /> --}}
    <link href="{{asset('vendor/light-bootstrap-dashboard-master/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-user">
                            @guest
                                <li><a href="{{ route('login') }}"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
                            @else
                              <li><a href="#"><i class="fa fa-user fa-fw"></i> {{Auth::user()->name}} </a>
                              </li>
                              <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                              </li>
                              @if(Auth::user()->role==2||Auth::user()->role==3)
                                <li><a href="{{url('/admin')}}"><i class="fa fa-address-card fa-fw" aria-hidden="true"></i>Admin Panel</a>
                                </li>
                              @endif
                              <li class="divider"></li>
                              <li><a href="{!! route('logout') !!}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"
                                ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                              </li>
                            @endguest
                          </ul>
                          <!-- /.dropdown-user -->
                      </li>
                    </ul>
                </div>
            </div>
        </nav>


        {{-- <div class="content">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </div> --}}
        <div id="page-wrapper">
          @yield('content')
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    {{-- <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script> --}}
    <script src="{{asset('vendor/light-bootstrap-dashboard-master/assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>

	{{-- <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> --}}
  <script src="{{asset('vendor/light-bootstrap-dashboard-master/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

  {{-- <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> --}}


	<!--  Charts Plugin -->
	{{-- <script src="assets/js/chartist.min.js"></script> --}}
  <script src="{{asset('vendor/light-bootstrap-dashboard-master/assets/js/chartist.min.js')}}" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    {{-- <script src="assets/js/bootstrap-notify.js"></script> --}}
    <script src="{{asset('vendor/light-bootstrap-dashboard-master/assets/js/bootstrap-notify.js')}}" type="text/javascript"></script>


    <!--  Google Maps Plugin    -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	{{-- <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script> --}}
  <script src="{{asset('vendor/light-bootstrap-dashboard-master/assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}" type="text/javascript"></script>


	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	{{-- <script src="assets/js/demo.js"></script> --}}
  <script src="{{asset('vendor/light-bootstrap-dashboard-master/assets/js/demo.js')}}" type="text/javascript"></script>


</html>
