@extends('master.default')

@section('content')

  @include('Chart.decemberChart')
  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              December Page
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

  </div>

  <div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Calls
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="callDec" height="400" width="600"></canvas>
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
                <canvas id="compareCallDec" height="400" width="600"></canvas>
              </div>
              <!-- /.panel-body -->
          </div>
      </div>

      <div class="col-lg-6">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Top Question December
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body" id="calls">
                <canvas id="topQuestionDec" height="400" width="600"></canvas>
              </div>
              <!-- /.panel-body -->
          </div>
      </div>

      <div class="col-lg-6">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Top Kanwil
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body" id="calls">
                <canvas id="topicDec" height="400" width="600"></canvas>
              </div>
              <!-- /.panel-body -->
          </div>
      </div>
  </div>
@endsection
