@extends('master.default')
@section('content')
@include('Chart.ReportChart')

  <div class="row">
      <div class="col-lg-12">
        @if (Auth::User()->hasRole('admin'))
          <h2 class="page-header">Dashboard</h2>
        @else
          <h2 class="page-header">Home Agent</h2>
        @endif
      </div>
  </div>

<div class="col-sm-offset-3">
  <div class="row">
    <div class="col-lg-4 col-md-7">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
               <i class="fa fa-check-circle fa-5x"></i> <!--size gambar buble chat-->
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                123
              </div>
              <div class="">
                Completed
              </div>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-lg-4 col-md-7">
      <div class="panel panel-green">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-comments fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                45
              </div>
              <div class="">
                In Progress
              </div>
            </div>
          </div>
        </div>
        <a href="#">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<!--CONTENT-->
  <div class="row">
    <div class="col-lg-8">
            <div class="panel-body" id="calls">
              <canvas id="reportQuestion" height="500" width="700"></canvas>
            </div>
    </div>
    <!-- Report Question -->


  <div class="row">
    <div class="col-lg-3">
            <div class="panel-body" id="calls">
              <canvas id="reportCalls" height="500" width="400"></canvas>
            </div>
    </div>
    <!-- Report Ticket -->


    <div class="col-lg-6">
            <div class="panel-body" id="calls">
              <canvas id="reportKanwil" height="500" width="600"></canvas>
            </div>
    </div>
    <!-- Report Kanwil -->

    <div class="col-lg-6">
            <div class="panel-body" id="calls">
              <canvas id="reportCabang" height="500" width="600"></canvas>
            </div>
    </div>
    <!-- Report Cabang -->
  </div>

@endsection
