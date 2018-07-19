@extends('master.default')

@section('content')
  @include('Chart.kanwilChart.November.chartKanwil3')

  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              November Kanwil 3 Page
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
                <li><a class="dropdown-item" href="{!! route('month.November.kp') !!}">Kantor Pusat</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan1') !!}">Kanwil I</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan2') !!}">Kanwil II</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan3') !!}">Kanwil III</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan4') !!}">Kanwil IV</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan5') !!}">Kanwil V</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan6') !!}">Kanwil VI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan7') !!}">Kanwil VII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan8') !!}">Kanwil VIII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan9') !!}">Kanwil IX</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan10') !!}">Kanwil X</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan11') !!}">Kanwil XI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.November.kan12') !!}">Kanwil XII</a></li>
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
                KCU Kanwil 3
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="kcu3" height="100"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>


    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                KCP Kanwil 3
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="kcp3" height="100" ></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>



@endsection
