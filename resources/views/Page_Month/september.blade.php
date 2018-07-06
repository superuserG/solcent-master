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
          @include('Feature.feature_kanwil')
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
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Question September
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="topQuestionSpt" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>

    {{-- topic Chart --}}
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Top Topic September
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="calls">
              <canvas id="topicSpt" height="400" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>

  </div>
@endsection
