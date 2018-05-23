@extends('master.default')
@section('content')
@include('Chart.ReportChart')

  <div class="row">
      <div class="col-lg-12">
        @if (Auth::User()->hasRole('admin'))
          <h2 class="page-header">Home Admin</h2>
        @else
          <h2 class="page-header">Home Agent</h2>
        @endif
      </div>

  </div>

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
