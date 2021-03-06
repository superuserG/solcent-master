@extends('master.default')

@section('content')

@include('Chart.augustChart ')
  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              August Page
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
                <li><a class="dropdown-item" href="{!! route('month.August.kp') !!}">Kantor Pusat</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan1') !!}">Kanwil I</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan2') !!}">Kanwil II</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan3') !!}">Kanwil III</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan4') !!}">Kanwil IV</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan5') !!}">Kanwil V</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan6') !!}">Kanwil VI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan7') !!}">Kanwil VII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan8') !!}">Kanwil VIII</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan9') !!}">Kanwil IX</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan10') !!}">Kanwil X</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan11') !!}">Kanwil XI</a></li>
                <li><a class="dropdown-item" href="{!! route('month.August.kan12') !!}">Kanwil XII</a></li>
              </div>
            </span>
          </div>

          <br>
        </h2>
      </div>

    </div>
  </div>


    {{-- Calls Chart --}}
    <div class="row">
      <div class="col-lg-6">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Calls
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body" id="calls">
                <canvas id="callAug" height="400" width="600"></canvas>
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
                  <canvas id="compareCallAug" height="400" width="600"></canvas>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
      </div>

        {{-- top question Chart --}}
        <div class="row">
          <div class="col-lg-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Top Question August
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body" id="calls">
                    <canvas id="topQuestionAug" height="200" width="600"></canvas>
                  </div>
                  <!-- /.panel-body -->
              </div>
          </div>

          <div class="col-lg-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Top Sub Question in August
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <canvas id="topSubQuestionAug" height="100" width="300"></canvas>
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
                      <canvas id="kanwilAug" height="200" width="600"></canvas>
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
