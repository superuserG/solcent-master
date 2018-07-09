@extends('master.default')

@section('content')

  @include('Chart.MonthlyChart')

  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Monthly Report
            <span class="col-lg-offset-8">
              @include('Feature.feature_month')
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
            <div class="panel-body">
              <canvas id="compareCalls" height="200" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Compare Calls Chart --}}

     <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Monthly Calls
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
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
            <div class="panel-body">
              <canvas id="ticketMonths" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Ticket --}}


   <div class="col-lg-6">
      <div class="panel panel-default">
          <div class="panel-heading">
              Kanwil
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <canvas id="ticketKanwils" height="400" width="600"></canvas>
          </div>
          <!-- /.panel-body -->
      </div>
  </div>
  {{-- Kanwil --}}

  <div class="col-lg-6">
     <div class="panel panel-default">
         <div class="panel-heading">
             Cabang
         </div>
         <!-- /.panel-heading -->
         <div class="panel-body">
           <canvas id="ticketCabang" height="400" width="600"></canvas>
         </div>
         <!-- /.panel-body -->
     </div>
 </div>
 {{-- Site --}}

@endsection
