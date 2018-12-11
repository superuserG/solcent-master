@extends('master.default')
{{-- @extends('master.lightLayout') --}}
@section('content')
@include('Chart.ReportChart')

  <div class="row">
      <div class="col-lg-3">
        @if (Auth::User()->hasRole('admin'))
          <h2 class="page-header">Dashboard</h2>
        @else
          <h2 class="page-header">Home</h2>
        @endif
      </div>


<div class="timeline-title">
<div class="col-sm-offset-3">
  <div class="row">
    <div class="panel-body">
    <div class="col-lg-3 col-md-7">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
               <i class="fa fa-check-circle fa-3x"></i> <!--size gambar buble chat-->
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                {{$comp}}
              </div>
              <div class="">
                Ivanti
              </div>
            </div>
          </div>
        </div>
        <a href="tables">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>


    <div class="col-lg-3 col-md-7">
      <div class="panel panel-green">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-comments fa-3x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                {{$prog}}
              </div>
              <div class="">
                Cisco
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

    <div class="col-xs-push-1 col-lg-4 col-md-7 padl">
            <div id="calls">
              <canvas id="reportCalls" height="100" width="100"></canvas>
            </div>
    </div>
  </div>
</div>
</div>
</div>
  </div>

<!--CONTENT-->
  <div class="row">
    <div class="col-lg-12">
            <div class="panel-body" id="calls">
              <canvas id="reportQuestion" height="200" width="650"></canvas>
            </div>
          </div>

    <!-- question report -->

    <div class="col-lg-12">
            <div class="panel-body" id="calls">
              <canvas id="reportKanwil" height="150" width="650"></canvas>
            </div>
    </div>
    <!-- Report Kanwil -->

    <div class="col-lg-12">
            <div class="panel-body" id="calls">
              <canvas id="reportCabang" height="150" width="650"></canvas>
            </div>
    </div>
    <!-- Report Cabang -->
  </div>

@endsection
