@extends('master.default')

@section('content')

  @include('Chart.MonthlyChart')

  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Monthly Report</h2>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="row">

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Compare Calls and Ticket
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="compareCalls" height="200" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- report compare call report dan jumlah ticket --}}

     <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Monthly Calls
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="callMonths" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Monthly Calls Chart --}}


     <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Monthly Tickets
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="ticketMonths" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Ticket --}}

@endsection
