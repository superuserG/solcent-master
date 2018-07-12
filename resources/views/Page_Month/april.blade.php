@extends('master.default')

@section('content')
  @include('Chart.aprilChart')

  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              April Page
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
                <li><a class="dropdown-item" href="#">Kantor Pusat</a></li>
                <li><a class="dropdown-item" href="#">Kanwil I</a></li>
                <li><a class="dropdown-item" href="#">Kanwil II</a></li>
                <li><a class="dropdown-item" href="#">Kanwil III</a></li>
                <li><a class="dropdown-item" href="#">Kanwil IV</a></li>
                <li><a class="dropdown-item" href="#">Kanwil V</a></li>
                <li><a class="dropdown-item" href="#">Kanwil VI</a></li>
                <li><a class="dropdown-item" href="#">Kanwil VII</a></li>
                <li><a class="dropdown-item" href="#">Kanwil VIII</a></li>
                <li><a class="dropdown-item" href="#">Kanwil IX</a></li>
                <li><a class="dropdown-item" href="#">Kanwil X</a></li>
                <li><a class="dropdown-item" href="#">Kanwil XI</a></li>
                <li><a class="dropdown-item" href="{!! route('kanwil.XII') !!}">Kanwil XII</a></li>
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
              <canvas id="callApril" height="400" width="600"></canvas>
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
              <canvas id="compareCallApr" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Compare Call April --}}

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Question in April
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="topQuestionApr" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Top Pertanyaan --}}

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Kanwil
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="topicApr" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Top Topik Pertanyaan --}}
  </div>
@endsection
