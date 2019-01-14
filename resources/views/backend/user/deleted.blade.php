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


        <section class="content-header">
          <h1>
            User
            <small>| Deleted User Management</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>

            {{-- <li class="active"><a href="{{route('admin.book.index')}}"><i class="fa fa-user" > </i>Book</a></li> --}}
          </ol>
        </section>
        <section class="content container-fluid">
      <table id="tableDeletedUser" class="tbl-user">
      <thead>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Delete Reason</th>
          <th>Action</th>
        </tr>
      </thead>
      </table>
        </section>
      </div>
    </div>
      @endsection
      @section('script')
      <script>
      $(function()
          {
            $('#tableDeletedUser').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('admin.user.deletedlist')}}",
                responsive: false,
                columns:
                [
                  { data: 'DT_Row_Index', orderable: false, searchable: false, },
                  { data: 'name', name: 'name' },
                  { data: 'deletereason', name: 'deletereason' },
                  { data: 'action', name:'action'}
                ]
            });
          });


          function restoreUser(id,name)
          {
            var token = '{{csrf_token()}}';
            swal(
            {
              title: "Are you sure?",
              text: "You are going to restore this user",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((deletereason) => {
              console.log(deletereason);
              if(deletereason)
              {
                $.ajax(
                {
                  url:'restoreuser/'+id,
                  type: 'post',
                  data:
                  {
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

              // {
              //   $.post("{{url('/')}}/book/restorebook/"+id,
              //   {
              //     '_token':token,
              //   },
              //   function(data, status)
              //   {
              //     if(data=="success")
              //     {
              //         location.reload();
              //     }
              //   });
              // }
            })
          }
      </script>

@endsection
