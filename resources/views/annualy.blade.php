@extends('master.default')

@section('content')

  @include('Chart.ReportChart')

  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Annualy Chart</h2>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="row">

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Annual Calls Chart
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="reportCalls" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- Report-Calls-Pie-chart -->
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Annual Question Chart
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="reportQuestion" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- Report-Question-Bar-chart -->

    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Annual Kanwil Chart
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="reportKanwil" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- Report-Kanwil-Bar-chart -->

    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Annual Cabang Chart
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="reportCabang" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- Report-Cabang-Bar-chart -->

  </div>


@endsection
