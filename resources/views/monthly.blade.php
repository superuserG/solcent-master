@extends('master.default')

@section('content')

  @include('Chart.MonthlyChart')

  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Monthly Chart</h2>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="row">

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Monthly Calls Chart
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="reportCalls" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>

@endsection
