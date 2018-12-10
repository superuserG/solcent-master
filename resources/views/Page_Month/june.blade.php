@extends('master.default')

@section('content')
  @include('Chart.juneChart')

  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              June Page
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
                <li><a class="dropdown-item" href="{!! route('month.June.kp') !!}">Kantor Pusat</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan1') !!}">Kanwil I</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan2') !!}">Kanwil II</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan3') !!}">Kanwil III</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan4') !!}">Kanwil IV</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan5') !!}">Kanwil V</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan6') !!}">Kanwil VI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan7') !!}">Kanwil VII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan8') !!}">Kanwil VIII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan9') !!}">Kanwil IX</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan10') !!}">Kanwil X</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan11') !!}">Kanwil XI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.June.kan12') !!}">Kanwil XII</a></li>
              </div>
            </span>
          </div>

          <br>
        </h2>
      </div>

    </div>

  </div>

  <div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Call
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="callJune" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- call --}}

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Compare Calls and Ticket
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="compareCallJune" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Compare Call June --}}

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Question in June
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="topQuestionJune" height="100" width="300"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Top Pertanyaan --}}

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Sub Question in June
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="topSubQuestionJune" height="100" width="300"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Top Sub Pertanyaan --}}

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Kanwil
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="kanwilJune" height="100" width="300"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Top Kanwil --}}

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top KCU
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="topKcuAll" height="200" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top KCP
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="topKcpAll" height="200" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>

  </div>
@endsection
