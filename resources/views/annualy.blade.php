@extends('master.default')
@section('title')
<title>Annual</title>
@endsection
@section('content')

@include('Chart.AnnualyChart')

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Annualy Report</h2>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">

  <div class="col-lg-6">
      <div class="panel panel-default">
          <div class="panel-heading">
              Tickets
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body" id="calls">
            <canvas id="ticketAnnualy" height="400" width="600"></canvas>
          </div>
          <!-- /.panel-body -->
      </div>
    </div>

  <div class="col-lg-6">
      <div class="panel panel-default">
          <div class="panel-heading">
              Calls
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body" id="calls">
            <canvas id="call" height="400" width="600"></canvas>
          </div>
          <!-- /.panel-body -->
      </div>
    </div>

  <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
              Detail Tickets
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <canvas id="detailAnnualy" height="200" width="600"></canvas>
          </div>
          <!-- /.panel-body -->
      </div>
  </div>



   {{-- <div class="col-lg-6">
      <div class="panel panel-default">
          <div class="panel-heading">
              Annualy Cabang Chart
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body" id="calls">
            <canvas id="annualCabang" height="400" width="600"></canvas>
          </div>
          <!-- /.panel-body -->
      </div>
  </div> --}}

</div>

@endsection
