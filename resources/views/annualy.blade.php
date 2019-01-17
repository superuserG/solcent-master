@extends('master.default')
@section('title')
<title>Annual</title>
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
              Annualy Calls Chart
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body" id="calls">
            <canvas id="annualCalls" height="400" width="600"></canvas>
          </div>
          <!-- /.panel-body -->
      </div>
  </div>
  {{-- Monthly Calls Chart --}}

   <div class="col-lg-6">
      <div class="panel panel-default">
          <div class="panel-heading">
              Annualy Kanwil Chart
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body" id="calls">
            <canvas id="annualKanwil" height="400" width="600"></canvas>
          </div>
          <!-- /.panel-body -->
      </div>
  </div>
  {{-- report compare call report dan jumlah ticket --}}

   <div class="col-lg-6">
      <div class="panel panel-default">
          <div class="panel-heading">
              FAQ Chart
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body" id="calls">
            <canvas id="annualQuestion" height="400" width="600"></canvas>
          </div>
          <!-- /.panel-body -->
      </div>
  </div>
  {{-- top pertanyaan bulan ini --}}

   <div class="col-lg-6">
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
  </div>
  {{-- report top pertanyaan dari category 2 --}}
</div>

@endsection
