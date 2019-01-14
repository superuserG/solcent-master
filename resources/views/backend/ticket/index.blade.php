@extends('backend.template.layout')
@section('title')
  <title>Home Admin Solcent</title>
@endsection
@section('content')

  <div class="content-wrapper">
      {{-- @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

      <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
          @endif
        @endforeach
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
      </div> --}}
      <h2 class="text-center">
            Laravel Excel/CSV Import
        </h2>
        
      @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif

    @if ( Session::has('error') )
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('error') }}</strong>
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <div>
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
</div>
@endif

  {{-- {{Form::open(['route'=>'admin.ticket.store','class'=>'form-horizontal'])}}
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Upload Ticket</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Upload Ticket</label>
            <div class="col-sm-4  ">
              <input name="file" class="form-control" id="uploadTicket" type="file" required>
            </div>
            <div class="col-sm-3">
              <button type="submit" class="btn btn-info button-addAuthor">Upload</button>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  {{Form::close()}} --}}

  <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Choose your xls/csv File : <input type="file" name="file" class="form-control">

    <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 3%">
  </form>

    <section class="content-header">
      <h1>
        Ticket <small>| Ticket Management</small>
      </h1>

    </section>

  </div>
@endsection
{{-- @section('script')
        <script>
        $(function()
          {
            $('#tableCall').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('backend.ticket.list')}}",
                responsive: false,
                columns:
                [
                  { data: 'DT_Row_Index', orderable: false, searchable: false, },
                  { data: 'Team', name: 'Team' },
                  { data: 'months', name: 'months' },
                  { data: 'year', name: 'year' },
                  { data: 'presentedCall', name:'presentedCall'},
                  { data: 'handledCall', name:'handledCall'},
                  { data: 'abandonedCall', name:'abandonedCall'},
                  { data: 'action', name:'action'}
                ]
            });
          });

              function deleteCall(id)
              {
                swal(
                {
                  title: 'Are You sure?',
                  showCancelButton: true,
                  confirmButtonText: 'Ok',
                  showLoaderOnConfirm: true,
                  allowOutsideClick: false
                }).then((result) =>
                {
                  if (result.value)
                  {
                    var token = '{{csrf_token()}}';
                    $.ajax(
                    {
                      url:"{{url('/admin/call')}}/"+id,
                      type: 'post',
                      data:
                      {
                        reason: result.value,
                        _method: 'delete',
                        _token :token
                      },
                      success:function(msg)
                      {
                        if (msg=="success")
                        {
                          location.reload();
                        }
                      }
                    });
                  }
                })
              }
        </script>
      @endsection --}}
