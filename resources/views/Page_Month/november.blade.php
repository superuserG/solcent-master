@extends('master.default')

@section('content')

@include('Chart.novemberChart')
  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              November Page
          </h2>
      </div>

      <div class="col-lg-6">
        <h2 class="page-header">
          <div class="class col-sm-3">
            @include('Feature.feature_month')
          </div>

          <div class="class col-sm-3">
            @include('Feature.feature_kanwil')
          </div>

          <br>
        </h2>
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
                <canvas id="callNov" height="400" width="600"></canvas>
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
                  <canvas id="compareCallNov" height="400" width="600"></canvas>
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
                      Top Question November
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body" id="calls">
                    <canvas id="topQuestionNov" height="400" width="600"></canvas>
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
                      <canvas id="topicNov" height="400" width="600"></canvas>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
  </div>
@endsection
