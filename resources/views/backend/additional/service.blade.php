@extends('backend.template.layout')
@section('title')
  <title>Home Admin Solcent</title>
@endsection
@section('content')

  <div class="content-wrapper">
        @if(Session::has('message'))
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
      </div>
      {{Form::open(['route'=>'admin.service.store','class'=>'form-horizontal'])}}
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add Service Form</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <label for="inputService" class="col-sm-2 control-label">Service</label>
            <div class="col-sm-10">
              <input name="service" class="form-control" id="inputService" placeholder="Service" type="text" required>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right button-addAuthor">Add Service</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  {{Form::close()}}
          <section class="content-header">
            <h1>
              Service <small>| Service Management</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>

              {{-- <li class="active"><a href="{{route('backend.user.index')}}"><i class="fa fa-user" > </i>User</a></li> --}}
            </ol>
          </section>
          <section class="content container-fluid">
        <table id="tableService" class="tbl-service">
        <thead>
          <tr>
            <th>No.</th>
            <th>Service</th>
            <th>Action</th>
          </tr>
        </thead>
        </table>
          </section>
        </div>
      @endsection
      @section('script')
        <script>
        $(function()
          {
            $('#tableService').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('backend.service.list')}}",
                responsive: false,
                columns:
                [
                  { data: 'DT_Row_Index', orderable: false, searchable: false, },
                  { data: 'service', name: 'service' },
                  { data: 'action', name:'action'}
                ]
            });
          });

          // function deleteUser(id,name)
          //     {
          //       var token = '{{csrf_token()}}';
          //       swal(
          //       {
          //         title: "Are you sure?",
          //         text: "Once deleted, you will not be able to recover this imaginary file!",
          //         icon: "warning",
          //         content: "input",
          //         buttons: true,
          //         dangerMode: true,
          //       })
          //       .then((deletereason) => {
          //         console.log(deletereason);
          //         if(deletereason=="")
          //         {
          //           swal('Reason must be filled!');
          //           return false;
          //         }
          //         else if(deletereason==null)
          //         {
          //           return false;
          //         }
          //         else
          //         {
          //           $.post("{{url('/')}}/admin/user/"+id,
          //           {
          //             '_token':token,
          //             '_method':'DELETE',
          //             'deletereason': deletereason,
          //           },
          //           function(data, status)
          //           {
          //             if(data=="success")
          //             {
          //                 location.reload();
          //             }
          //           });
          //         }
          //       })
          //     }

              function deleteService(id, name)
              {
                swal(
                {
                  title: 'Delete service "'+name+'"?',
                  showCancelButton: true,
                  confirmButtonText: 'Submit',
                  showLoaderOnConfirm: true,
                  allowOutsideClick: false
                }).then(() =>
                {
                  var token = '{{csrf_token()}}';
                  $.ajax(
                  {
                    url:"{{url('/admin/service')}}/"+id,
                    type: 'post',
                    data:
                    {
                      _method:'delete',
                      _token:token
                    },
                    success:function(msg)
                    {
                      if (msg=="success")
                      {
                        location.reload();
                      }
                      else if (msg=="error")
                      {
                        swal("Service memiliki hubungan dengan category")
                      }
                    }
                  });
                })
              }
        </script>
      @endsection
