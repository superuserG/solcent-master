<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">

  <meta name="author" content="">
	<title>test dashboard</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="{!! asset('theme/vendor/bootstrap/css/bootstrap.min.css')!!}">
	<!-- metis menu -->
	<link rel="stylesheet" href="{!! asset('theme/vendor/metisMenu/metisMenu.min.css')!!}">

	<!-- custom css -->
	<link rel="stylesheet" href="{!!asset('theme/dist/css/sb-admin-2.css')!!}">

	<!-- Custom Fonts -->
	<link href="{!! asset('theme/vendor/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">

	<!-- DataTables CSS -->
	<link href="{!! asset('theme/vendor/datatables-plugins/dataTables.bootstrap.css') !!}" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="{!! asset('theme/vendor/datatables-responsive/dataTables.responsive.css') !!}" rel="stylesheet">

	<script src="{!! asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js') !!}"></script>
	<script src="{!! asset('http://code.jquery.com/jquery-latest.min.js') !!}"></script>
	<script src="{!! asset('//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js') !!}" charset=utf-8></script>

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.5.0"></script>

	<script src="{!! asset('theme/vendor/datatables/js/jquery.dataTables.min.js') !!}"></script>
	<script src="{!! asset('theme/vendor/datatables-plugins/dataTables.bootstrap.min.js') !!}"></script>
	<script src="{!! asset('theme/vendor/datatables-responsive/dataTables.responsive.js') !!}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">





</head>
<body>
	<!-- navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

		@include('master.header')
		@include('master.sidebar')

	</nav>

	<div id="page-wrapper">
		@yield('content')
	</div>


	<!-- jQuery -->
  <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="{!! asset('theme/vendor/metisMenu/metisMenu.min.js') !!}"></script>

  <!-- Custom Theme JavaScript -->
  <script src="{!! asset('theme/dist/js/sb-admin-2.js') !!}"></script>

	<!-- DataTables JavaScript -->
  <script src="{!! asset('theme/vendor/datatables/js/jquery.dataTables.min.js') !!}"></script>
  <script src="{!! asset('theme/vendor/datatables-plugins/dataTables.bootstrap.min.js') !!}"></script>
  <script src="{!! asset('theme/vendor/datatables-responsive/dataTables.responsive.js') !!}"></script>

	<script type="{!! asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>


	<script>
  $(document).ready(function() {
      $('#dataTables-example').DataTable({
          responsive: true
      });
  });

	{{-- Ajax edit-modal  --}}
	$(document).on('click','.edit-modal', function(){
		$('.footer_action_button').text("Update Post");
		$('.footer_action_button').addClass('glyphicon-check');
		$('.footer_action_button').removeClass('glyphicon-trash');
		$('.actionBtn').addClass('btn-success');
		$('.actionBtn').removeClass('btn-danger');
		$('.actionBtn').addClass('Edit');
		$('.modal-title').text('Post Edit');
		$('.deleteContent').hide();
		$('.form-horizontal').show();
		$('#fid').val($(this).data('id'));
		$('#question').val($(this).data('question'));
		$('#r').val($(this).data('res'));
		$('#f').val($(this).data('ref'));
		$('#myModal').modal('show');
	});


	$('.modal-footer').on('click','.edit',function(){
		$.ajax({
			type: 'POST',
			url: 'editPost',
			data: {
				'_token' : $('input[name=_token]').val(),
				'id' : $('#fid').val(),
				'question' : $('#question').val(),
				'res' : $('#r').val(),
				'ref' : $('#f').val()
			},
		});
	});


  </script>
</body>
</html>
