<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Solution Center App</title>

    <!-- Fontfaces CSS-->
    <link href="{!! asset('theme2/css/font-face.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme2/vendor/font-awesome-4.7/css/font-awesome.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme2/vendor/font-awesome-5/css/fontawesome-all.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme2/vendor/mdi-font/css/material-design-iconic-font.min.css') !!}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{!! asset('theme2/vendor/bootstrap-4.1/bootstrap.min.css') !!}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{!! asset('theme2/vendor/animsition/animsition.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme2/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme2/vendor/wow/animate.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme2/vendor/css-hamburgers/hamburgers.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme2/vendor/slick/slick.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme2/vendor/select2/select2.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme2/vendor/perfect-scrollbar/perfect-scrollbar.css') !!}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{!! asset('theme2/css/theme.css') !!}" rel="stylesheet" media="all">

  </head>
  <body class="animsition">
    <div class="wrapper">
      <!-- MENU SIDEBAR-->
      @include('testSidebar')

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        @include('testHeader')

        <div class="main-content">
          @yield('content')
        </div>
      </div>
    </div>



    <!-- Jquery JS-->
    <script src="{!! asset('theme2/vendor/jquery-3.2.1.min.js') !!}"></script>
    <!-- Bootstrap JS-->
    <script src="{!! asset('theme2/vendor/bootstrap-4.1/popper.min.js') !!}"></script>
    <script src="{!! asset('theme2/vendor/bootstrap-4.1/bootstrap.min.js') !!}"></script>
    <!-- Vendor JS -->
    <script src="{!! asset('theme2/vendor/slick/slick.min.js') !!}">
    </script>
    <script src="{!! asset('theme2/vendor/wow/wow.min.js') !!}"></script>
    <script src="{!! asset('theme2/vendor/animsition/animsition.min.js') !!}"></script>
    <script src="{!! asset('theme2/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}">
    </script>
    <script src="{!! asset('theme2/vendor/counter-up/jquery.waypoints.min.js') !!}"></script>
    <script src="{!! asset('theme2/vendor/counter-up/jquery.counterup.min.js') !!}">
    </script>
    <script src="{!! asset('theme2/vendor/circle-progress/circle-progress.min.js') !!}"></script>
    <script src="{!! asset('theme2/vendor/perfect-scrollbar/perfect-scrollbar.js') !!}"></script>
    <script src="{!! asset('theme2/vendor/chartjs/Chart.bundle.min.js') !!}"></script>
    <script src="{!! asset('theme2/vendor/select2/select2.min.js') !!}">
    </script>

    <!-- Main JS-->
    <script src="{!! asset('theme2/js/main.js') !!}"></script>
  </body>
</html>
