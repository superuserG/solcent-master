@extends('master.default')

@section('content')
  @include('Chart.mayChart')

  <div class="row">
    <div class="row">
      <div class="col-lg-6">
          <h2 class="page-header">
              May Page
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
                Call
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="callMay" height="400" width="600"></canvas>
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
              <canvas id="compareCallMay" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Compare Call May --}}

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Question in May
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="topQuestionMay" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Top Pertanyaan --}}

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Topic In May
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="topicMay" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    {{-- Top Topik Pertanyaan --}}
  </div>
@endsection
