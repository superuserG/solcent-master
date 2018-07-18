@extends('master.default')

@section('content')
  @include('Chart.kanwilChart.February.chartKanwil7')

  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              February Kanwil 7 Page
          </h2>
      </div>

      <div class="col-lg-6">
        <h2 class="page-header">
          <div class="class col-sm-3">
            @include('Feature.feature_month')
          </div>

          <div class="class col-sm-3">
            <span class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Choose Wilayah
                  </button>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="{!! route('month.February.kp') !!}">Kantor Pusat</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan1') !!}">Kanwil I</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan2') !!}">Kanwil II</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan3') !!}">Kanwil III</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan4') !!}">Kanwil IV</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan5') !!}">Kanwil V</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan6') !!}">Kanwil VI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan7') !!}">Kanwil VII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan8') !!}">Kanwil VIII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan9') !!}">Kanwil IX</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan10') !!}">Kanwil X</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan11') !!}">Kanwil XI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.February.kan12') !!}">Kanwil XII</a></li>
              </div>
            </span>
          </div>

          <br>
        </h2>
      </div>

    </div>

  </div>

  <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                KCU Kanwil 7
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="kcu7" height="100"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>


    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                KCP Kanwil 7
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="kcp7" height="100" ></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>



@endsection
