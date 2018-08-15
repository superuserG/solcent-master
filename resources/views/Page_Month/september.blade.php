@extends('master.default')

@section('content')

@include('Chart.septemberChart')
  <div class="row">
    <div class="col-lg-6">
        <h2 class="page-header">
            September Page
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
              <li><a class="dropdown-item" href="{!! route('month.September.kp') !!}">Kantor Pusat</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan1') !!}">Kanwil I</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan2') !!}">Kanwil II</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan3') !!}">Kanwil III</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan4') !!}">Kanwil IV</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan5') !!}">Kanwil V</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan6') !!}">Kanwil VI</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan7') !!}">Kanwil VII</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan8') !!}">Kanwil VIII</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan9') !!}">Kanwil IX</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan10') !!}">Kanwil X</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan11') !!}">Kanwil XI</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September.kan12') !!}">Kanwil XII</a></li>
            </div>
          </span>
        </div>

        <br>
      </h2>
    </div>

  </div>

  <div class="row">

    {{-- Calls Chart --}}
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Calls
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="callSpt" height="400" width="600"></canvas>
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
              <canvas id="compareCallSpt" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>

    {{-- top question Chart --}}
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Question September
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="topQuestionSpt" height="200" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Sub Question in September
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="topSubQuestionSpt" height="100" width="300"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Top Sub Pertanyaan --}}

    {{-- topic Chart --}}
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Kanwil
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="topicSpt" height="200" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>

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
