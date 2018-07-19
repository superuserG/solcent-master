@extends('master.default')

@section('content')
  @include('Chart.kanwilChart.May.chartKanwil2')

  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              May Kanwil 2 Page
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
                <li><a class="dropdown-item" href="{!! route('month.May.kp') !!}">Kantor Pusat</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan1') !!}">Kanwil I</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan2') !!}">Kanwil II</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan3') !!}">Kanwil III</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan4') !!}">Kanwil IV</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan5') !!}">Kanwil V</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan6') !!}">Kanwil VI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan7') !!}">Kanwil VII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan8') !!}">Kanwil VIII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan9') !!}">Kanwil IX</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan10') !!}">Kanwil X</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan11') !!}">Kanwil XI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.May.kan12') !!}">Kanwil XII</a></li>
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
                KCU Kanwil 2
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="kcu2" height="100"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>


    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                KCP Kanwil 2
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="kcp2" height="100" ></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>



@endsection
