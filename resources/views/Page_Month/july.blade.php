@extends('master.default')

@section('content')

@include('Chart.julyChart')
  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              July Page
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


    {{-- Monthly Calls Chart --}}
    <div class="row">
      <div class="col-lg-6">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Calls
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body" id="calls">
                <canvas id="callJuly" height="400" width="600"></canvas>
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
                  <canvas id="compareCallJuly" height="400" width="600"></canvas>
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
                      Top Question July
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body" id="calls">
                    <canvas id="topQuestionJul" height="400" width="600"></canvas>
                  </div>
                  <!-- /.panel-body -->
              </div>
          </div>

          {{-- topic Chart --}}
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Top Kanwil
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body" id="calls">
                      <canvas id="topicJul" height="400" width="600"></canvas>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
  </div>
@endsection
