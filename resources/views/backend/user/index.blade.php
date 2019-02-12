@extends('backend.template.layout')
@section('title')
  <title>Manage user</title>
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
      {{Form::open(['route'=>'admin.user.store','class'=>'form-horizontal'])}}
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add User Form</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input name="name" class="form-control" id="inputName" placeholder="Name" type="text" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input name="email" class="form-control" id="inputEmail" placeholder="Email" type="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputRole" class="col-sm-2 control-label">Role</label>
            <div class="col-sm-10">
              <select name="role" class="selectize" id=inputRole required>
                <option value="">--Choose Role--</option>
                <option value="1">User</option>
                <option value="2">Admin</option>
                <option value="3">Super Admin</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input name="password" class="form-control" id="inputPassword" placeholder="Password" type="password">
            </div>
          </div>
          <div class="form-group">
            <label for="nip" class="col-sm-2 control-label">NIP</label>
            <div class="col-sm-10">
              <input name="nip" class="form-control" id="nip" required type="number">
            </div>
          </div>
          <div class="form-group">
            <label for="kanwil" class="col-sm-2 control-label">Kanwil</label>
            <div class="col-sm-10">
              <input name="kanwil" class="form-control" id="kanwil" required>
            </div>
          </div>
          <div class="form-group">
            <label for="kcu" class="col-sm-2 control-label">KCU</label>
            <div class="col-sm-10">
              <input name="kcu" class="form-control" id="kcu" required>
            </div>
          </div>
          <div class="form-group">
            <label for="kcukcp" class="col-sm-2 control-label">KCU/KCP</label>
            <div class="col-sm-10">
              <input name="kcukcp" class="form-control" id="kcukcp" required>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right button-addAuthor">Add User</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  {{Form::close()}}
          <section class="content-header">
            <h1>
              User <small>| User Management</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>

              {{-- <li class="active"><a href="{{route('backend.user.index')}}"><i class="fa fa-user" > </i>User</a></li> --}}
            </ol>
          </section>
          <section class="content container-fluid">
        <table id="tableUser" class="tbl-user">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
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
            $('#tableUser').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('backend.user.list')}}",
                responsive: false,
                columns:
                [
                  { data: 'DT_Row_Index', orderable: false, searchable: false, },
                  { data: 'name', name: 'name' },
                  { data: 'email', name: 'email' },
                  { data: 'role', name:'role'},
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

              function deleteUser(id, name)
              {
                swal(
                {
                  title: 'Reason to suspend user "'+name+'"',
                  input: 'text',
                  showCancelButton: true,
                  confirmButtonText: 'Submit',
                  showLoaderOnConfirm: true,
                  preConfirm: (reasonDelete) =>
                  {
                    return new Promise((resolve) =>
                    {
                      setTimeout(() =>
                      {
                        if (reasonDelete === '')
                        {
                          swal.showValidationError(
                            'Reason must be filled!'
                          )
                        }
                        resolve()
                      }, 2000)
                    })
                  },
                  allowOutsideClick: false
                }).then((result) =>
                {
                  if (result.value)
                  {
                    var token = '{{csrf_token()}}';
                    $.ajax(
                    {
                      url:"{{url('/admin/user')}}/"+id,
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
      @endsection
