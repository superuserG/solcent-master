@extends('master.default')

@section('content')
@include('Chart.octoberChart')
  <div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">October Page
          <span class="dropdown col-lg-offset-1">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose Month
                </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="{!! route('monthlyReport') !!}">All</a></li>
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

    {{-- Calls Chart --}}
    <div class="row">
      <div class="col-lg-6">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Calls
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body" id="calls">
                <canvas id="callOct" height="400" width="600"></canvas>
              </div>
              <!-- /.panel-body -->
          </div>
      </div>

      {{-- compare Calls Chart --}}
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Compare Calls and Ticket
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body" id="calls">
                  <canvas id="compareCallOct" height="400" width="600"></canvas>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
      </div>

        {{-- top question Chart --}}
        <div class="row">
          <div class="col-lg-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Top Question October
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body" id="calls">
                    <canvas id="topQuestionOct" height="400" width="600"></canvas>
                  </div>
                  <!-- /.panel-body -->
              </div>
          </div>

          {{-- topic Chart --}}
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Top Topic October
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body" id="calls">
                      <canvas id="topicOct" height="400" width="600"></canvas>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
  </div>
@endsection
