@extends('master.default')

@section('content')

  @include('Chart.MonthlyChart')

  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Monthly Report
            <span class="dropdown col-lg-offset-8">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Choose Month
                  </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">January</a></li>
                <li><a class="dropdown-item" href="#">February</a></li>
                <li><a class="dropdown-item" href="#">March</a></li>
                <li><a class="dropdown-item" href="#">April</a></li>
                <li><a class="dropdown-item" href="#">May</a></li>
                <li><a class="dropdown-item" href="#">Juni</a></li>
                <li><a class="dropdown-item" href="#">July</a></li>
                <li><a class="dropdown-item" href="#">August</a></li>
                <li><a class="dropdown-item" href="#">September</a></li>
                <li><a class="dropdown-item" href="#">October</a></li>
                <li><a class="dropdown-item" href="#">November</a></li>
                <li><a class="dropdown-item" href="#">Desember</a></li>
              </div>
            </span>
          </h2>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="row">

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Compare Calls and Ticket
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="compareCalls" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Monthly Calls Chart --}}

     <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Monthly Calls Chart
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="callMonths" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- report compare call report dan jumlah ticket --}}

     <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Monthly FAQ
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="monthQuestion" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- top pertanyaan bulan ini --}}

     <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Monthly Cabang Calls
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="monthCab" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- report top pertanyaan dari category 2 --}}
  </div>

@endsection
