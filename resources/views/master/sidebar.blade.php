@if(Auth::user()->role=="user")
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="{!! route('home') !!}"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
            </li>
            {{--  Home Menu --}}
            {{-- <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reports <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!! route('monthlyReport') !!}">Monthly Report</a>
                    </li>
                    <li>
                        <a href="{!! route('annualyReport') !!}">Annual Report</a>
                    </li>

                </ul>

                <!-- /.nav-second-level -->
            </li> --}}
            {{-- Report Menu --}}

            <li>
                <a href="{!! route('table') !!}"><i class="fa fa-table fa-fw"></i> View and Search </a>
            </li>
            {{-- Tables Menu --}}

            <li>
                <a href="{!! route('form') !!}"><i class="fa fa-edit fa-fw"></i> Work Page </a>
            </li>
            {{-- Form Menu --}}


          </ul>
        </div>
        <!-- /.sidebar-collapse -->
  </div>
    <!-- /.navbar-static-side -->

@elseif (Auth::user()->role=="admin")
  <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
              <li>
                  <a href="{!! route('home') !!}"><i class="fa fa-dashboard fa-fw"></i> Home </a>
              </li>
              {{--  Home Menu --}}
              <li>
                  <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reports <span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="{!! route('monthlyReport') !!}">Monthly Report</a>
                      </li>
                      <li>
                          <a href="{!! route('annualyReport') !!}">Annual Report</a>
                      </li>

                  </ul>

                  <!-- /.nav-second-level -->
              </li>
              {{-- Report Menu --}}

              <li>
                  <a href="{!! route('table') !!}"><i class="fa fa-table fa-fw"></i> View and Search </a>
              </li>
              {{-- Tables Menu --}}

              <li>
                  <a href="{!! route('form') !!}"><i class="fa fa-edit fa-fw"></i> Work Page </a>
              </li>
              {{-- Form Menu --}}


            </ul>
          </div>
          <!-- /.sidebar-collapse -->
    </div>
      <!-- /.navbar-static-side -->
@endif
