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
              <canvas id="monthCalls" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Monthly Calls Chart --}}

    {{-- <div class="col-lg-6">
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
    </div> --}}
    {{-- report compare call report dan jumlah ticket --}}

    {{-- <div class="col-lg-6">
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
    </div> --}}
    {{-- top pertanyaan bulan ini --}}

    {{-- <div class="col-lg-6">
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
    </div> --}}
    {{-- report top pertanyaan dari category 2 --}}
  </div>

@endsection
