@extends('backend.template.layout')
@section('title')
  <title>Home Admin Solcent</title>
@endsection
@section('content')
  @include('Chart.adminChart.homeAdminChart')

  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class=""></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Call Cisco
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <canvas id="ciscoCalls" height="200" width="600"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
@endsection
