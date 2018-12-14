<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{!! route('home') !!}">Solution Center V0.1</a>
</div>
{{-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
  <span class="sr-only">Toggle navigation</span>
</a> --}}
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">

    <!-- /.dropdown -->

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
            @if(Auth::user()->role=='admin'||Auth::user()->role=='super admin')
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

    <!-- /.dropdown -->

</ul>
<!-- /.navbar-top-links -->
