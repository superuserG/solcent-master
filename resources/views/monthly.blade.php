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
                <li><a class="dropdown-item" href="{!! route('month.January') !!}">January</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February') !!}">February</a></li>
                <li><a class="dropdown-item" href="{!! route('month.March') !!}">March</a></li>
                <li><a class="dropdown-item" href="{!! route('month.April') !!}">April</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May') !!}">May</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June') !!}">June</a></li>
                <li><a class="dropdown-item" href="{!! route('month.July') !!}">July</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August') !!}">August</a></li>
                <li><a class="dropdown-item" href="{!! route('month.September') !!}">September</a></li>
                <li><a class="dropdown-item" href="{!! route('month.October') !!}">October</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November') !!}">November</a></li>
                <li><a class="dropdown-item" href="{!! route('month.December') !!}">December</a></li>
              </div>
            </span>
          </h2>
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
              <canvas id="compareCalls" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Monthly Calls Chart --}}

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
