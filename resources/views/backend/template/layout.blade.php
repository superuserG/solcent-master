<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  @yield('title')
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('vendor/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('vendor/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('vendor/AdminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('vendor/AdminLTE/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{asset('../node_modules/sweetalert2/dist/sweetalert2.min.css')}}">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <link rel="stylesheet" href="{{asset('vendor/AdminLTE/dist/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet" href="{{asset('../node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/larashow-css.css')}}">
  <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
  <link rel="stylesheet" href="{{asset('css/styleadmin.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <!-- {{-- <span class="logo-lg"><b>Admin</b></span> --}} -->

    <a href="#" class="logo">
      <span class="logo-mini">ASC</span>
      <span class="logo-lg">Admin SolCent</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <!-- <img src="{{asset('vendor/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"> -->
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              {{-- <img src="{{asset('images/users/'.Auth::user()->userpict)}}" class="user-image" alt="User Image"> --}}
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Auth::User()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <!-- {{-- <img src="{{asset('images/users/'.Auth::user()->userpict)}}" class="img-circle" alt="User Image"> --}} -->

                <p>
                  {{Auth::User()->name}} - Admin
                  <small>Member since Oct. 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right col-md-12 btn-admin">
                  {{-- <a href="{{route('admin.address.create')}}" class="btn btn-default btn-flat">Profile</a> --}}
                </div>
                <div class="pull-right col-md-12 btn-admin">
                  <a href="{{url('/')}}" class="btn btn-default btn-flat">Back to Dashboard</a>
                </div>
                <div class="pull-right col-md-12 btn-admin">
                  <a href="#" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                  {!! Form::open(['route' => 'logout','method'=>'post','class'=>'hidden','id'=>'logout-form']) !!}
                    {!! Form::close() !!}
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">

        <div class="pull-left info">
          <p>{{Auth::User()->username}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{request()->route()->getName()==='admin.home'?'active':''}}"><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="{{request()->route()->getName()==='admin.ticket.index'?'active':''}}"><a href="{!! route('admin.ticket.index') !!}"><i class="fa fa-ticket"></i> <span>Ticket</span></a></li>
        {{-- <li><a href="{{route('admin.book.index')}}"><i class="fa fa-book"></i> <span>Book</span></a></li> --}}
        <li class="{{request()->route()->getName()==='admin.call.index'?'active':''}}"><a href="{!! route('admin.call.index') !!}"><i class="fa fa-phone"></i> <span>Call</span></a></li>

        <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>User</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{request()->route()->getName()==='admin.user.index'?'active':''}}"><a href="{{route('admin.user.index')}}">Manage User</a></li>
            <li class="{{request()->route()->getName()==='admin.user.deleted'?'active':''}}"><a href="{{route('admin.user.deleted')}}">Deleted User</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Settings</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            {{-- <li><a href="{{route('admin.contact.index')}}">Contact</a></li>
            <li><a href="{{route('admin.company.index')}}">Company</a></li>
            <li><a href="{{route('admin.genre.index')}}">Genre</a></li> --}}
          </ul>
        </li>
        {{-- <li><a href="{{route('admin.user.index')}}"><i class="fa fa-user"></i> <span>User</span></a></li>
        <li><a href="{{route('admin.borrowlog.index')}}"><i class="fa fa-history"></i> <span>Borrowing History</span></a></li> --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('content')
  <!-- Content Wrapper. Contains page content -->

  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer"> -->
    <!-- To the right -->
    <!-- <div class="pull-right hidden-xs">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <!-- <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved. -->
  <!-- </footer> -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->

</div>
<!-- ./wrapper -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
<!-- REQUIRED JS SCRIPTS -->
<script src="{{asset('../node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

<!-- jQuery 3 -->
<script src="{{asset('vendor/AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('vendor/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('vendor/AdminLTE/dist/js/adminlte.min.js')}}"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

<script src="{{asset('js/datatables.js')}}"></script>
<script src="{{asset('../node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
<script src="{!! asset('http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js') !!}" charset=utf-8></script>



<script>
$('[data-fancybox="gallery"]').fancybox({
// Options will go here
});
</script>
@yield('script')
</body>
</html>
