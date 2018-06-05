
@if (Auth::User()->hasRole('admin'))
  <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
              <li class="sidebar-search">
                  <div class="input-group custom-search-form">
                      <input type="text" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                          <button class="btn btn-default" type="button">
                              <i class="fa fa-search"></i>
                          </button>
                      </span>
                  </div>
                  <!-- /input-group -->
              </li>
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
@else
  <div class="navbar-default sidebar" role="navigation">

      <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
              <li class="sidebar-search">
                  <div class="input-group custom-search-form">
                      <input type="text" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                          <button class="btn btn-default" type="button">
                              <i class="fa fa-search"></i>
                          </button>
                      </span>
                  </div>
                  <!-- /input-group -->
              </li>
              <li>
                  <a href="{!! route('home') !!}"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
              </li>
              {{--  Home Menu --}}

              {{-- <li>
                  <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reports <span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="#">Monthly Report</a>
                      </li>
                      <li>
                          <a href="{!! route('annualReport') !!}">Annual Report</a>
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
@endif
