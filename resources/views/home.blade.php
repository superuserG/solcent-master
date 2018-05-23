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
      <!-- /.col-lg-12 -->
  </div>

  <div class="row">
    <div class="col-lg-8">

            <div class="panel-body" id="calls">
              <canvas id="reportQuestion" height="500" width="700"></canvas>
            </div>

    </div>

  <div class="row">
    <div class="col-lg-3">
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="reportCalls" height="500" width="400"></canvas>
            </div>
            <!-- /.panel-body -->

        <!-- /.panel -->
    </div>


    <div class="col-lg-6">
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="reportKanwil" height="500" width="600"></canvas>
            </div>
        </div><!-- /.panel -->

    <div class="col-lg-6">
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="reportCabang" height="500" width="600"></canvas>
            </div>
        </div><!-- /.panel -->

@endsection
